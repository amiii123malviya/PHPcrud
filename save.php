<?php
$rollno=$_POST["rno"];
$name=$_POST["nm"];
$city=$_POST["ct"];
$fees=$_POST["fs"];

$con=new mysqli("localhost", "root" ,"", "student");

$qry = "insert into student(rollno, name, city , fees) values('$rollno','$name','$city','$fees')";

$con->query($qry);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>data saved</h1>
</body>
</html>