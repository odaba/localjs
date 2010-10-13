// This file shows how to uses ADO to access database, also how to use YUI datatable to implement data edit and sort
// note the calendar popuped by YUI datatable is localized
(function()
{
	window.attachEvent("onload", function()
	{
		var doc = document,
			evt = YAHOO.util.Event,
			createObject = localJS.COM.createObject,

			localjs_ui = LOCALJS.UI,
			localjs_file = LOCALJS.FILE,
			localization = LOCALJS.LOCALIZATION,
			localization_get = localization.get,

			msgBox = localjs_ui.msgBox,

			btnADO = new YAHOO.widget.Button('btnADO'),
			btnOpenExcel = new YAHOO.widget.Button('btnOpenExcel');

		// generate the path to excel sample file
		var excel_file = localjs_file.buildPath(localjs_file.getParentFolder(localjs_file.urlToPath(doc.URL)), "sample data.xls");

		var openDBConn = function()
		{
			var cn = createObject("ADODB.Connection");

			cn.Provider = "Microsoft.Jet.OLEDB.4.0";
			cn.ConnectionString = "Data Source=" + excel_file + ";Extended Properties=Excel 8.0;"
			cn.Open();

			return cn;
		};

		// define data source
		var fnSafeClose = function(oAdo)
		{
			if (oAdo)
			{
				try
				{
					oAdo.Close();
				}
				catch (e)
				{
					// do nothing
				}
			}
		};

		var fnDataSource = function(para)
		{
			var cn, rs, records = [];
			try
			{
				var adOpenKeyset = 1,
					adLockOptimistic = 3,
					adCmdText = 1,
					str_query = "SELECT * FROM [employee data$]";

				if (para)
				{
					para.match(/\bsort=([^&=]+)/i);
					var sort_by = RegExp.$1;
					para.match(/\bdir=([^&=]+)/i);
					var dir = RegExp.$1;
					str_query += " order by " + sort_by + " " + dir;
				}

				cn = openDBConn(),
				rs = createObject("ADODB.Recordset"),

				rs.Open(str_query, cn, adOpenKeyset, adLockOptimistic, adCmdText);
				rs.MoveFirst();
				while (!rs.EOF)
				{
					var fields = rs.Fields;
					records.push({"name" : fields.Item("Name").Value,
								  "age" : fields.Item("Age").Value,
								  "gender" : fields.Item("Gender").Value,
								  "start_day" : new Date(fields.Item("Start_Day").Value),
								  "id" : fields.Item("ID").Value});
					rs.MoveNext();
				}
			}
			catch (e)
			{
				alert(e.name + "\n" + e.description);
			}

			fnSafeClose(rs);
			fnSafeClose(cn);
			return {items: records};
		};

		var fnUpdateData = function(id, column, value)
		{
			var cn, rs, updated = false;
			try
			{
				var adOpenKeyset = 1,
					adLockOptimistic = 3,
					adCmdText = 1,
					str_query = "SELECT * FROM [employee data$] where id = " + id;

				cn = openDBConn();
				rs = createObject("ADODB.Recordset");

				rs.Open(str_query, cn, adOpenKeyset, adLockOptimistic, adCmdText);
				rs.MoveFirst();
				if (!rs.EOF)
				{
					rs.Update(column, value);
					updated = true;
				}
			}
			catch (e)
			{
				alert(e.name + "\n" + e.description);
			}

			fnSafeClose(rs);
			fnSafeClose(cn);
			return updated;
		};

		var fnUpdateDataFromEditor = function(editor, value)
		{
			return fnUpdateData(editor.getRecord().getData('id'), editor.getColumn().key, value) ? value : undefined;
		};

		var dataTable, dataSource = new YAHOO.util.FunctionDataSource(fnDataSource);

		dataSource.responseType = YAHOO.util.DataSource.TYPE_JSON;
		dataSource.responseSchema = { resultsList : "items" };

		// this function refill the table
		var fnFillTable = function()
		{
			var dataSourceCallback =
			{
				success: dataTable.onDataReturnInitializeTable,
				scope: dataTable
			};
			dataSource.sendRequest(null, dataSourceCallback);
		};

		// customized cell formatters
		var ageFormatter = function(elCell, oRecord, oColumn, oData)
		{
			elCell.innerHTML = oRecord.getData(oColumn.key) + localization_get("years_old");
		};

		var genderFormatter = function(elCell, oRecord, oColumn, oData)
		{
			elCell.innerHTML = oRecord.getData(oColumn.key) ? localization_get("Male") : localization_get("Female");
		};

		var dateFormatter = function(elCell, oRecord, oColumn, oData)
		{
			var dt = oRecord.getData(oColumn.key);
			elCell.innerHTML = localization_get('formatDate')(dt);
		}

		// validate cell value after user edit
		var validateName = function (inputValue, currentValue, editorInstance)
		{
			inputValue = YAHOO.lang.trim(inputValue);

			// nothing changes
			if (inputValue == currentValue)
			{
				editorInstance.cancel();
				return undefined;
			}

			if (0 == inputValue.length)
			{
				alert(localization_get("Name should not be empty."));
				return undefined;
			}

			return fnUpdateDataFromEditor(editorInstance, inputValue);
		};

		var validateAge = function (inputValue, currentValue, editorInstance)
		{
			inputValue = YAHOO.lang.trim(inputValue);

			// nothing changes
			if (inputValue == currentValue)
			{
				editorInstance.cancel();
				return undefined;
			}

			if (inputValue.search(/[^\d]/) >= 0 || 1 * inputValue <= 0)
			{
				alert(localization_get("Please fill with valid non-negative integer."));
				return undefined;
			}

			return fnUpdateDataFromEditor(editorInstance, 1 * inputValue);
		};

		var validateGender = function (inputValue, currentValue, editorInstance)
		{
			inputValue = YAHOO.lang.trim(inputValue);
			if (localization_get('Male') == inputValue)
				inputValue = 1;
			else if (localization_get('Female') == inputValue)
				inputValue = 0;
			else
				return undefined;

			// nothing changes
			if (inputValue == currentValue)
			{
				editorInstance.cancel();
				return undefined;
			}

			return fnUpdateDataFromEditor(editorInstance, inputValue);
		};

		var validateDate = function (inputValue, currentValue, editorInstance)
		{
			// nothing changes
			var new_dt = new Date(inputValue)
			if (0 == new_dt - new Date(currentValue))
			{
				editorInstance.cancel();
				return undefined;
			}

			var new_month = new_dt.getMonth() + 1;
			return fnUpdateDataFromEditor(editorInstance, new_month + "/" + new_dt.getDate() + "/" + new_dt.getFullYear()) ? inputValue : undefined;
		}

		// define table columns
		var cfg_DateCellEditor = {validator:validateDate}, calendar_cfg;
		if ('en' != localization.getLang())
		{
			var months = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
				weekdays = ["日", "一", "二", "三", "四", "五", "六"];

			calendar_cfg = {show_week_header:true,
							"MY_LABEL_YEAR_SUFFIX":"年", "MY_LABEL_MONTH_SUFFIX":"月",
							"MONTHS_SHORT":months, "MONTHS_LONG":months,
							"WEEKDAYS_1CHAR":weekdays, "WEEKDAYS_SHORT":weekdays, "WEEKDAYS_MEDIUM":weekdays, "WEEKDAYS_LONG":weekdays,
							"MY_LABEL_YEAR_POSITION":1, "MY_LABEL_MONTH_POSITION":2,
							navigator:{strings: {month:localization_get("Please choose month"), year:localization_get("Please input year"), submit:localization_get("Goto"), cancel:localization_get("Cancel"), invalidYear:localization_get("Please input valid year")}}};

			cfg_DateCellEditor['LABEL_SAVE'] = localization_get("Save");
			cfg_DateCellEditor['LABEL_CANCEL'] = localization_get("Cancel");
		}
		else
		{
			calendar_cfg = {show_week_header:true, navigator:true};
		}
		cfg_DateCellEditor['calendarOptions'] = calendar_cfg;

		var columnDef = [{key: "id", label: "ID", resizeable: true, sortable:true},
						 {key: "name", label: localization_get("Name"), resizeable: true, sortable:true,
							editor: new YAHOO.widget.TextboxCellEditor({validator:validateName, LABEL_SAVE:localization_get("Save"), LABEL_CANCEL:localization_get("Cancel")})},
						 {key: "age", label: localization_get("Age"), resizeable: true, formatter: ageFormatter, sortable:true,
							editor: new YAHOO.widget.TextboxCellEditor({validator:validateAge, LABEL_SAVE:localization_get("Save"), LABEL_CANCEL:localization_get("Cancel")})},
						 {key: "gender", label: localization_get("Gender"), resizeable: true, sortable:true, formatter: genderFormatter,
							editor: new YAHOO.widget.RadioCellEditor({radioOptions: [localization_get('Male'),localization_get('Female')], validator:validateGender, disableBtns:true})},
						 {key: "start_day", label: localization_get("Start Day"), resizeable: true, sortable:true, formatter: dateFormatter,
							editor: new YAHOO.widget.DateCellEditor(cfg_DateCellEditor)}];

		// hook event
		btnADO.on('click', function()
		{
			try
			{
				if (dataTable)
				{
					fnFillTable();
				}
				else
				{
					msgBox(localization_get("Open_with_ADO_1st") + excel_file + localization_get("Open_with_ADO_2nd"));
					dataTable = new YAHOO.widget.ScrollingDataTable(doc.getElementById("dataTable"), columnDef, dataSource, {width:"740px", height:"280px", dynamicData:true});
					var highlightEditableCell = function(oArgs)
					{
						var elCell = oArgs.target;
						if (YAHOO.util.Dom.hasClass(elCell, "yui-dt-editable"))
						{
							this.highlightCell(elCell);
						}
					};

					var onEditorShow = function(oArgs)
					{
						var editor = oArgs.editor,
							oRecord = editor.getRecord(),
							oColumn = editor.getColumn();

						if (oColumn)
						{
							if ('start_day' == oColumn.key)
							{
								var calendar = editor.calendar,
									dt = oRecord.getData(oColumn.key);
								calendar.select(dt);
								calendar.cfg.setProperty("pagedate", dt);
								calendar.render();
							}
							else if ('gender' == oColumn.key)
							{
								var value = oRecord.getData(oColumn.key),
									radios = editor.radios;

								for (var i = 0; i < radios.length; ++i)
								{
									radios[i].checked = i != value;
								}
							}
						}
					};

					dataTable.subscribe("cellMouseoverEvent", highlightEditableCell);
					dataTable.subscribe("cellMouseoutEvent", dataTable.onEventUnhighlightCell);
					dataTable.subscribe("cellClickEvent", dataTable.onEventShowCellEditor); // Enable inline cell editing
					dataTable.subscribe("editorShowEvent", onEditorShow);

					btnOpenExcel.setStyle("visibility", "visible");
					btnOpenExcel.set('label', localization_get("Open_with_Excel_1st") + excel_file + localization_get("Open_with_Excel_2nd"));
					btnOpenExcel.set('disabled', false);
					btnOpenExcel.focus();

					btnOpenExcel.on('click', function()
					{
						localjs_file.exec(excel_file);
						msgBox(localization_get("excel_changes"));
					});

					msgBox(localization_get("table_reminder"));
				}
			}
			catch (e)
			{
				alert(e.name + "\n" + e.description);
			}
		});

		btnADO.set('disabled', false);
		btnADO.focus();
	});
})();
