<?php
try 
{
	$pdo = new PDO('mysql:host=localhost;dbname=login', 'root', '');
}
catch (PDOException $e) 
{
    echo 'Error: ' . $e->getMessage();
    exit();
}
?>