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
$sql = "SELECT * FROM news";
$query = mysqli_query($conn,$sql);
#### array

$json_return = array();
$json_return["data"]=array();
 while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
array_push($json_return["data"],array(
 "news_number" => $row["news_number"],
 "news_header" => $row["news_header"],
 "news_description" => $row["news_description"],
 "news_img" => "http://www.lmtznetwork.info/backend-snru/".$row["news_img"]
)
 );
 }
 $reverse["data"] = array_reverse($json_return["data"]);
 echo json_encode($reverse);
?>