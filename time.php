<?php 
$currentTime = new DateTime("now", new DateTimeZone("America/New_York"));
$targetTime = new DateTime("December 25, 2015 8:00:00", new DateTimeZone("America/New_York"));
 
$arr = array("currentTime"=>$currentTime->format("U"),"targetTime"=>$targetTime->format("U"));

 echo json_encode($arr);
 ?>