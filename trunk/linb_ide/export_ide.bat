set export_path=localjs_ide\
set linb_path=jsLinb3.0\

rd %export_path% /S /Q
mkdir %export_path%

copy visualjs.exe %export_path%
copy visualjs.html %export_path%
copy LocalJS.dll %export_path%
copy localJS.cfg %export_path%

xcopy %linb_path%runtime %export_path%%linb_path%runtime /I /Q /S /EXCLUDE:export_ide.exclude

mkdir %export_path%%linb_path%VisualJS

copy %linb_path%VisualJS\UIBuilder.html %export_path%%linb_path%VisualJS\
xcopy %linb_path%VisualJS\codemirror %export_path%%linb_path%VisualJS\codemirror /I /Q /S /EXCLUDE:export_ide.exclude
xcopy %linb_path%VisualJS\css %export_path%%linb_path%VisualJS\css /I /Q /S /EXCLUDE:export_ide.exclude
xcopy %linb_path%VisualJS\img %export_path%%linb_path%VisualJS\img /I /Q /S /EXCLUDE:export_ide.exclude
xcopy %linb_path%VisualJS\js %export_path%%linb_path%VisualJS\js /I /Q /S /EXCLUDE:export_ide.exclude
xcopy %linb_path%VisualJS\Locale %export_path%%linb_path%VisualJS\Locale /I /Q /S /EXCLUDE:export_ide.exclude
xcopy %linb_path%VisualJS\release %export_path%%linb_path%VisualJS\release /I /Q /S /EXCLUDE:export_ide.exclude
xcopy %linb_path%VisualJS\template %export_path%%linb_path%VisualJS\template /I /Q /S /EXCLUDE:export_ide.exclude

pause