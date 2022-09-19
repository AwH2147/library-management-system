<?php 
// DB credentials.
define('DB_HOST','us-cdbr-east-06.cleardb.net');
define('DB_USER','b0c9eefa76cf40');
define('DB_PASS','9f36c759');
define('DB_NAME','heroku_fc791cf7afe1e29');
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
