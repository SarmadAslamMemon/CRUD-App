<?php


include('connect.php');


$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$cnic=$_POST['cnic'];
$department=$_POST['department'];
$salary=$_POST['salary'];

echo "$id";


$query="UPDATE `ETable` SET


`name`='$name',
`email`='$email',
`phone`='$phone',
`gender`='$gender',
`cnic`='$cnic',
`department`='$department',
`salary`='$salary'

WHERE `id`='$id' ";

$res=mysqli_query($connect,$query);
header('Location:index.php');




?>