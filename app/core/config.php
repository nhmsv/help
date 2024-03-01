<?php 


/****
* app info
*/
define('APP_NAME', 'Help');
define('APP_DESC', 'Helper');

/****
* database config
*/
if($_SERVER['SERVER_NAME'] == 'localhost')
{
	//database config for local server
	define('DBHOST', 'localhost');
	define('DBNAME', 'help_db');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', 'mysql');

	//root path e.g localhost/
	define('ROOT', 'http://localhost/help/public');
}else
{
	//database config for live server
	define('DBHOST', 'localhost');
	define('DBNAME', 'help_db');
	define('DBUSER', 'root');
	define('DBPASS', 'root');
	define('DBDRIVER', 'mysql');

	//root path e.g https://www.yourwebsite.com
	define('ROOT', 'http://10.64.239.121/help/public');
}

