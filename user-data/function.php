<?php
$con = mysqli_connect("localhost", "root","", "user-biography");

function query($query){
    global $con;
    $result = mysqli_query($con,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
    $rows[]=$row;
}
return $rows;
}
?>