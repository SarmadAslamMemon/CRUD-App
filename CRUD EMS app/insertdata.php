<?php

include  ('connect.php');

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$cnic=$_POST['cnic'];
$department=$_POST['department'];
$salary=$_POST['salary'];


$query="INSERT INTO `ETable` VALUE (NULL,'$name','$email','$phone','$gender','$cnic','$department','$salary')";
$res=mysqli_query($connect,$query);
header('Location:index.php');