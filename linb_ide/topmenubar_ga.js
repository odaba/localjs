YAHOO.util.Event.onDOMReady(function()
{
	//	Instantiate a MenuBar, passing in the id of the HTML element
	//	representing the MenuBar.
    var oMenuBar = new YAHOO.widget.MenuBar("topmenubar", {autosubmenudisplay: true,  hidedelay: 250, lazyload: true });
    // Render the MenuBar instance
    oMenuBar.render();

	var ua = YAHOO.env.ua,
		oAnim;  // Animation instance


	/*
		 "beforeshow" event handler for each submenu of the MenuBar
		 instance, used to setup certain style properties before
		 the menu is animated.
	*/

	function onSubmenuBeforeShow(p_sType, p_sArgs) {

		var oBody,
			oElement,
			oShadow,
			oUL;


		if (this.parent) {

			oElement = this.element;

			/*
				 Get a reference to the Menu's shadow element and
				 set its "height" property to "0px" to syncronize
				 it with the height of the Menu instance.
			*/

			oShadow = oElement.lastChild;
			oShadow.style.height = "0px";


			/*
				Stop the Animation instance if it is currently
				animating a Menu.
			*/

			if (oAnim && oAnim.isAnimated()) {

				oAnim.stop();
				oAnim = null;

			}


			/*
				Set the body element's "overflow" property to
				"hidden" to clip the display of its negatively
				positioned <ul> element.
			*/

			oBody = this.body;


			//  Check if the menu is a submenu of a submenu.

			if (this.parent &&
				!(this.parent instanceof YAHOO.widget.MenuBarItem)) {


				/*
					There is a bug in gecko-based browsers where
					an element whose "position" property is set to
					"absolute" and "overflow" property is set to
					"hidden" will not render at the correct width when
					its offsetParent's "position" property is also
					set to "absolute."  It is possible to work around
					this bug by specifying a value for the width
					property in addition to overflow.
				*/

				if (ua.gecko) {

					oBody.style.width = oBody.clientWidth + "px";

				}


				/*
					Set a width on the submenu to prevent its
					width from growing when the animation
					is complete.
				*/

				if (ua.ie == 7) {

					oElement.style.width = oElement.clientWidth + "px";

				}

			}


			oBody.style.overflow = "hidden";


			/*
				Set the <ul> element's "marginTop" property
				to a negative value so that the Menu's height
				collapses.
			*/

			oUL = oBody.getElementsByTagName("ul")[0];

			oUL.style.marginTop = ("-" + oUL.offsetHeight + "px");

		}

	}


	/*
		"tween" event handler for the Anim instance, used to
		syncronize the size and position of the Menu instance's
		shadow and iframe shim (if it exists) with its
		changing height.
	*/

	function onTween(p_sType, p_aArgs, p_oShadow) {

		if (this.cfg.getProperty("iframe")) {

			this.syncIframe();

		}

		if (p_oShadow) {

			p_oShadow.style.height = this.element.offsetHeight + "px";

		}

	}


	/*
		"complete" event handler for the Anim instance, used to
		remove style properties that were animated so that the
		Menu instance can be displayed at its final height.
	*/

	function onAnimationComplete(p_sType, p_aArgs, p_oShadow) {

		var oBody = this.body,
			oUL = oBody.getElementsByTagName("ul")[0];

		if (p_oShadow) {

			p_oShadow.style.height = this.element.offsetHeight + "px";

		}


		oUL.style.marginTop = "";
		oBody.style.overflow = "";


		//  Check if the menu is a submenu of a submenu.

		if (this.parent &&
			!(this.parent instanceof YAHOO.widget.MenuBarItem)) {


			// Clear widths set by the "beforeshow" event handler

			if (ua.gecko) {

				oBody.style.width = "";

			}

			if (ua.ie == 7) {

				this.element.style.width = "";

			}

		}

	}


	/*
		 "show" event handler for each submenu of the MenuBar
		 instance - used to kick off the animation of the
		 <ul> element.
	*/

	function onSubmenuShow(p_sType, p_sArgs) {

		var oElement,
			oShadow,
			oUL;

		if (this.parent) {

			oElement = this.element;
			oShadow = oElement.lastChild;
			oUL = this.body.getElementsByTagName("ul")[0];


			/*
				 Animate the <ul> element's "marginTop" style
				 property to a value of 0.
			*/

			oAnim = new YAHOO.util.Anim(oUL,
				{ marginTop: { to: 0 } },
				.5, YAHOO.util.Easing.easeOut);


			oAnim.onStart.subscribe(function () {

				oShadow.style.height = "100%";

			});


			oAnim.animate();


			/*
				Subscribe to the Anim instance's "tween" event for
				IE to syncronize the size and position of a
				submenu's shadow and iframe shim (if it exists)
				with its changing height.
			*/

			if (YAHOO.env.ua.ie) {

				oShadow.style.height = oElement.offsetHeight + "px";


				/*
					Subscribe to the Anim instance's "tween"
					event, passing a reference Menu's shadow
					element and making the scope of the event
					listener the Menu instance.
				*/

				oAnim.onTween.subscribe(onTween, oShadow, this);

			}


			/*
				Subscribe to the Anim instance's "complete" event,
				passing a reference Menu's shadow element and making
				the scope of the event listener the Menu instance.
			*/

			oAnim.onComplete.subscribe(onAnimationComplete, oShadow, this);

		}

	}


	/*
		 Subscribe to the "beforeShow" and "show" events for
		 each submenu of the MenuBar instance.
	*/

	oMenuBar.subscribe("beforeShow", onSubmenuBeforeShow);
	oMenuBar.subscribe("show", onSubmenuShow);
});

YAHOO.util.Event.onDOMReady(function()
{
	var evt = YAHOO.util.Event,
		id_a_feedback = "afeedback",
		form_feedback = document.feedbackForm,
		elname = form_feedback.name,
		elemail = form_feedback.email,
		elbody = form_feedback.body,
		dlg_feedback = new YAHOO.widget.Dialog('feedback', {width:'29em', visible:false, context:[id_a_feedback, 'tr', 'tr', ["beforeShow", "windowResize"], [-80, 50]],
															effect:{effect:YAHOO.widget.ContainerEffect.SLIDE, duration:0.25}}),
		panel_sendok = new YAHOO.widget.Panel("feedbackok", {fixedcenter:true, visible:false, effect:{effect:YAHOO.widget.ContainerEffect.FADE, duration:0.25}}),
		panel_sendko = new YAHOO.widget.Panel("feedbackko", {fixedcenter:true, visible:false, effect:{effect:YAHOO.widget.ContainerEffect.FADE, duration:0.25}});

	dlg_feedback.showEvent.subscribe(function()
	{
		elname.focus();
	});
	evt.on([elname, elemail, elbody], "focus", function(e)
	{
		this.select();
	});

	dlg_feedback.beforeSubmitEvent.subscribe(function()
	{
		var emailPattern = /^.*[^.]@[^.]+\..+$/,
			trim = YAHOO.lang.trim;

		elname.value = trim(elname.value);
		elemail.value = trim(elemail.value);
		elbody.value = trim(elbody.value);

		if (!emailPattern.test(elemail.value))
		{
			alert('zh' == site_lang ? "请输入有效的电子邮件地址以便我们能联系到您。" : "Please fill a valid email address so we can get back to you.");
			elemail.focus();
			return false;
		}

		if (elbody.value.length <= 0)
		{
			alert('zh' == site_lang ? "请填写正文内容。" : "Please fill in the description.");
			elbody.focus();
			return false;
		}

		return true;
	});

	dlg_feedback.callback = {success: function()
	{
		panel_sendok.show();
	}, failure : function()
	{
		panel_sendko.show();
	}};

	evt.on([id_a_feedback, 'acontact'], "click", function()
	{
		dlg_feedback.show();
	});
	evt.on("acancel_feedback", "click", function()
	{
		dlg_feedback.cancel();
	});

	panel_sendok.render();
	panel_sendko.render();
	dlg_feedback.render();
});

// try to fix the download button in IE
if (YAHOO.env.ua.ie > 0)
{
	YAHOO.util.Event.onDOMReady(function()
	{
		var divs = document.getElementsByTagName('div'),
			i, j, spans, span_left, span_right, span_class_name, diff,
			download_spans = [];

		for (i = 0; i < divs.length; ++i)
		{
			if ("download" == divs[i].className)
			{
				spans = divs[i].getElementsByTagName('span');
				span_left = span_right = 0;
				for (j = 0; j < spans.length; ++j)
				{
					span_class_name = spans[j].className;
					if ('download link' == span_class_name)
						span_left = spans[j];
					else if ('download_end link' == span_class_name)
						span_right = spans[j];
				}

				if (span_left && span_right)
					download_spans.push([span_left, span_right]);
			}
		}

		if (download_spans.length > 0)
		{
			var checkSpan = function()
			{
				for (i = 0; i < download_spans.length; ++i)
				{
					span_left = download_spans[i][0];
					span_right = download_spans[i][1];
					diff = span_right.offsetTop - span_left.offsetTop;
					if (0 != diff)
						span_left.style.top = diff;
				}
			};

			YAHOO.util.Event.on(window, "resize", function()
			{
				for (i = 0; i < download_spans.length; ++i)
				{
					download_spans[i][0].style.top = 0;
				}

				setTimeout(checkSpan, 100);
			});

			setTimeout(checkSpan, 100);
		}
	});
}

// code for google analytics
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18928254-1']);
  _gaq.push(['_trackPageview']);

 (function()
 {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
