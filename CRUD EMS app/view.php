<?php

include ('connect.php');

$query=  "SELECT * FROM `ETable`";
$response=mysqli_query($connect,$query);
$data=mysqli_fetch_all($response,MYSQLI_ASSOC);

echo json_encode($data);


?>
