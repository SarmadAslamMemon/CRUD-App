<?php

include ('connect.php');

$id=$_GET['id'];
$query=  "DELETE  FROM `ETable`  WHERE `id`= '$id'";
mysqli_query($connect,$query);
header('Location:index.php');


?>



