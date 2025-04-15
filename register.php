<?php

$server = "localhost"
$username = "root";
$password = "";
$db = "ift302";

$con = mysql_connect(hostnames:$server,username: $username,password: $password,database: $database);

if(isset($POST['save']))

$spro = $_POST['sprogram'];
$sname = $_POST['sname'];
$sreg = $_POST['sregstration'];
$slevel = $_POST['slevel'];

$query= mysql_query($con, "INSERT INTO users (sprogram,sname,sregistration,slevel");

if(!$query){
    echo"Error had occur";
}else{
    echo"Record inserted successfully";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewpoint" content="width=device-width, initial-s">
    <tittle>Document</tittle>

<link rel="stylesheet" href="css/bootstrap.min.css">
<style>

    .header{

        width: 100%;
        height: 20%;
        background-color: black;
        color:white;
        align-content:center;
        padding-left:100px;
        padding-top:30px;
        padding-bottom:30px;
    }
</style>
</head>
<body>

<div clss="header"> REGISTRATION PAGE</div>
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="col-lg-6">
<form action="#" class="group" method="POST">
    
<label for=""> student name</label><input class="form-control" type="text" requeired name="sname">
<label for=""> student program</label><input class="form-control" type="text" requeired name="sprogram">
<label for=""> student RegNo</label><input class="form-control" type="text" requeired name="sreg">
<label for=""> student level</label><input class="form-control" type="text" requeired name="slevel" 
<input type="submit" class="btn-btn-primary" value="save" name="save">
</form>
</div>
</div>
</div>
</div>
</body>
</html>