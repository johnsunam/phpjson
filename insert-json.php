<?php
//Create connection to db
$con=mysqli_connect("localhost","root","","meeting_app");
  if(!$con){
    die("Connection failed: " . mysqli_connect_error());
  }

$url="http://localhost/demo-project/api.php";
$data=file_get_contents($url);
$arr=json_decode($data,true);

foreach($arr as $row){

  if(is_array($row["data"])){
    foreach($row["data"] as $row1){
      $sql="INSERT INTO data (dataid,name,detail) VALUES ('1', '".$row1["name"]."', '".$row1["detail"]."') ";
      $query=mysqli_query($con,$sql);
    }
  }

   $sql="INSERT INTO json (timing,numdata,numdata2,numdata3,numdata4,str1) VALUES ('".$row["time"]."', '".$row["numdata"]."', '".$row["numdata2"]."', '".$row["numdata3"]."',
        '".$row["numdata4"]."', '".$row["str1"]."') ";
   $query=mysqli_query($con,$sql);

}

echo "Data inserted successfully";

?>
