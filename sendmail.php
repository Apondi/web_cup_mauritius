<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php

$msg = $_POST["message"];

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("cnjeri15@alustudent.com","My subject",$msg);
?>

</body>
</html>
