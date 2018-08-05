<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-type: application/json", true);

####### Mysqli Connect ########
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "snru";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$sql = "SELECT * FROM news";
$query = mysqli_query($conn,$sql);
#### array
$json_return = array();
 while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
 array_push($json_return,
 array(
 "news_number" => $row["news_number"],
 "news_header" => $row["news_header"],
 "news_description" => $row["news_description"],
 "news_img" => "http://www.lmtznetwork.info/backend-snru/".$row["news_img"]
 )
 );
 }
 $json_re = array_reverse($json_return);
 echo json_encode($json_re);
?>