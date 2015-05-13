<?php

$conn = new mysqli("localhost", "root", "", "mydb");

$result = $conn->query("SELECT * FROM admin");

$outp = ""; //This will save the rows return by Query
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["id"] . '",';
    $outp .= '"user_id":"'   . $rs["user_id"]        . '",';
    $outp .= '"admin_name":"'. $rs["admin_name"]     . '"}'; 
}
$outp ='{"records":['.$outp.']}'; //Creating a Records Object
$conn->close();

echo($outp); //This will be The Response Data
?>