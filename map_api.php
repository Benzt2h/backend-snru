<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-type: application/json", true);

####### Mysqli Connect ########
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "snru";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$conn->set_charset("utf8");
$sql = "SELECT * FROM map";
$query = mysqli_query($conn,$sql);
#### array

$map_arr=array();
$map_arr["data"]=array();
 while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
 $json_return=array(
 "map_number" => $row["map_number"],
 "map_name" => $row["map_name"],
 "map_description" => $row["map_description"],
 "map_img" => "http://192.168.43.33/backend-snru/".$row["map_img"],
 "map_latitude" => $row["map_latitude"],
 "map_logitude" => $row["map_logitude"]
 );
array_push($map_arr["data"],$json_return);
 }
 
 echo json_encode($map_arr);
?>