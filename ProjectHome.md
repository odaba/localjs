### Deployed from Cloud, Run on Desktop, Developed with HTML + CSS + JavaScript ###
# [LocalJS, Build Cloud Desktop Application With Web Pages](http://localjs.org/) #

---


Two Simple Steps turn your HTML pages into a Cloud Desktop Application:

  * Download [LocalJS Runtime](http://sourceforge.net/projects/localjs/files/), which is Free and less than 1 MB after decompression.
  * Find LocalJSBootstrap.html in decompressed files, add JavaScript code below:

> localJS.trust("mysite.com");<br />
> location.replace("http://mysite.com/");

> Don't have a web site? Local HTML page works fine!

> // It's not required to call trust if your\_folder is a sub folder of the folder where LocalJSBootstrap.exe is<br />
> localJS.trust("your\_folder");<br />
> location.replace("your\_folder/root\_page.html");

Find more at http://localjs.org/