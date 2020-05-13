<?php
include('db.php');
/*

Simple sleep timer implemented in php to interface with Tautulli.
(c) 2020 Keker LLC

*/
$userKey = $_GET["key"];
$key = "";

if($userKey == $key){
    $minuteValue = $_GET["min"];
    $user = $_GET["user"];

    $minuteValue = mysqli_real_escape_string($db, $minuteValue);
    $user = mysqli_real_escape_string($db, $user);

    $stmt = "INSERT INTO users (user, minuteValue) VALUES ('$user', '$minuteValue')";
    $query = mysqli_query($db, "$stmt");
} else {
    echo "invalid content";
}

if(!$query){
    echo "error";
} else {
    echo "Success";
}

?>
