<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json", true);
   
    echo json_encode($data);
?>