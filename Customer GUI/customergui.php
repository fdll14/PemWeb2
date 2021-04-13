<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors","On");
require_once 'class/customer.php';

if (empty($_GET['action'])){
    echo 'Please define your action';
    exit();
}

if($_GET['action']){
    
    switch ($_GET['action']){
        case 'new':
            break;
        
        case 'edit':
            $name = $_GET['id'];
            echo 'Your Press Edit Mode on Customer'.$name.'<br> And We Will Define Code Later';
            break;

        case 'delete':
            $name = $_GET['id'];
            echo 'Your Press Delete Mode on Customer'.$name.'<br> And We Will Define Code Later';
            break;         
        
        default:
            # code ...
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="css/customer.css">
</head>
<body>
    <div align="center">
        <span class="textandlogo"><img src="img/customer.png"></span>
        <span class="textandlogo"><h1>Master Customer</h1></span>
    </div>
    <div class="container">
        <form action="" method="post">
            <div align="center">
                <span class="forspan">Your ID</span>
                <span><input type="text" name="myid"></span>
            </div>
            <div align="center">
                <span class="forspan">Fullname</span>
                <span><input type="text" name="myname"></span>    
            </div>
            <div align="center">
                <span class="forspan">Address</span>
                <span><input type="text" name="myaddr"></span>    
            </div>
            <div align="center">
                <span class="forspan">Phone</span>
                <span><input type="text" name="myphone"></span>    
            </div>            
            <div align="center">
                <span class="forspan" aria-hidden="true">City</span>
                <span><input type="text" name="mycity"></span>    
            </div>            
            <div align="center">
                <input type="submit" class="mybutton" name="savedata" value="Save Data">
                <a class="mynew" href="customergui.php?action=new">New Trans</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php

if (isset($_POST['savedata'])){
    $idcust = $_POST['myid'];
    $namacust = $_POST['myname'];
    $alamatcust = $_POST['myaddr'];
    $telpcust = $_POST['myphone'];
    $kotacust = $_POST['mycity'];
    $saveCustomer = new Customers($idcust,$namacust,$alamatcust,$telpcust,$kotacust);
    $saveCustomer->inputToArray();
}
ShowData();
?>