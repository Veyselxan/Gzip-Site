Where to find .htaccess file in WordPress?

The file should be located be in the root folder of your WordPress installation. .htaccess file name starts with a dot (.) at the beginning, which specifies that it is a hidden file. Remember to turn on "show hidden file feature" when you are trying to access your .htaccess file using FTP client or cPanel of your hosting.

Why You can not find .htaccess file?

It may occure that your WordPress site has not generated a .htaccess file yet. It is generated when you set up permalinks on Settings >> Permalinks settings. Simply click on “Save Changes” button to force WordPress to generate a .htaccess file in your site’s root directory.

If at this step you got a problem with file genereting, at first check permissions of the directory, must be writable.

Optionally if .htaccess file does not exists, you can create it and upload.
It's worth to mention that not all servers support using .htaccess file (for example free servers) and the service may be blocked - take it into account when something goes wrong while creating the file.


Optimization code for .htaccess file 

Compression

Compression simply reduces the size of document. Is most effective for HTML files, JavaScripts, CSS stylesheets and XML files. Generally compression reduces 60% to 80% size of data. This way you may reduce server response time and bandwidth - volume of data which must be sent by server to client browser.

The best way to enable compression is using mod_gzip or mod_deflate for Apache software (or equivalent for other web server). Both modules basically do the same thing, compress data, but mod_deflate is better supported and documented, also easier to configure. If mod_deflate doesn’t work correctly on your website or web server for some reason of course you can use mod_gzip. Both compressions methods can be enabled by adding a simple code in WordPress .htaccess file:
