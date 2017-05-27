<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
/*
 
// this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 // but I strongly suggest you to use PDO or MySQLi.
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '');
 define('DBNAME', 'androidlandticket');
 
 ##$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 #$##dbcon = mysql_select_db(DBNAME);
 
echo $link "Before link";

 $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

echo $link "Hi there";

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }

 echo "Connection Successful";
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }

 echo "DB Connected";
*/

 echo "You";
?>

</body>
</html>