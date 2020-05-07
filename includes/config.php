<?php
ob_start();
session_start();

date_default_timezone_set("Asia/Kolkata");

try{
    $con = new PDO("mysql:dbname=gymerp;host=localhost","root","");  
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);   //error mode
}
catch(PDOException $e){  //PDO phpdataobject
    exit("Connection failed"  .  $e->getMessage());
}
?>