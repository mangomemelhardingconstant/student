<?php


 /*$conn=mysqli_connect('localhost','root','','student1') or die (mysql_error());*/
/* $conn= new PDO("mysql:host=localhost; dbname=student1",'root','');*/

 try{
 	$conn= new PDO("mysql:host=localhost; dbname=student1",'root','');
 }catch(PDOException $e){
 	die("Erreur de connexion à la base de donnée: " . $e->getMessage());
 }
 



 ?>
