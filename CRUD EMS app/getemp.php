<?php

include ('connect.php');



$id=$_GET['id'];
$query=  "SELECT * FROM `ETable`  Where `id`='$id'";
$response=mysqli_query($connect,$query);
$data=mysqli_fetch_all($response,MYSQLI_ASSOC);

echo json_encode($data);


?>



