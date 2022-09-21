<?php 
// DB credentials.
define('DB_HOST','us-cdbr-east-06.cleardb.net');
define('DB_USER','b23163f85aee3f');
define('DB_PASS','f71b7fdd');
define('DB_NAME','heroku_5751087e28fe897');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
