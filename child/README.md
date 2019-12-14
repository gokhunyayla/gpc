#PHPReady Site

PHPReady is an end user ready multipurpose website structure that is created via php, html5, css3, javascript, jquery, ajax, bootstrap web development systems.

There is a db and config folder in the repo those you shouldn't upload to your server. The files have the structure of your website.

To run phpsimple you should have apache and mysql are installed on your pc. 

How to Install?

0. create a .htaccess file by using htaccess.demo file. You don't need to change anything in this file just change it's name into .htaccess
1. Create a database in phpmyadmin with utf8_general_ci structure
2. Import _business_site.sql file into your database that is created in step 1.
3. Move all files into your htdocs or www folders. (One of the folders should be installed after you have apache on your computer.)
4. Change database name in variable.php file inside control folder.
5. Change your database server username and password in again variable.php under control folder if you have set previously for the database you create. If don't then leave it as it is. ( default username is root and default password area should be empty.)
6. Go to localhost via your browser.
7. Modify all links with your needs by using the file under config folder.
