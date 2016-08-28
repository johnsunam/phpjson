<?php
header('Content-Type: application/json');
$arr=[array("time"=>"Feb 3","data"=>array(array("name"=>"Bishal", "detail"=>"Hello"),array("name"=>"Ram", "detail"=>"Hyy")), "numdata"=>"demo", "numdata2"=>"demo", "numdata3"=>"demo", "numdata4"=>"demo", "str1"=>"demo")];
echo json_encode($arr);

?>
