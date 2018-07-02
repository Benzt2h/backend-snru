<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-type: application/json", true);

####### Mysqli Connect ########
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "snru";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$sql = "SELECT * FROM map";
$query = mysqli_query($conn,$sql);
#### array
$json_return = array();
 while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
 array_push($json_return,
 array(
 "map_number" => $row["map_number"],
 "map_name" => $row["map_name"],
 "map_description" => $row["map_description"],
 "map_img" => $row["map_img"],
 "map_latitude" => $row["map_latitude"],
 "map_logitude" => $row["map_logitude"]
 )
 );
 }
 echo json_encode($json_return);
?>