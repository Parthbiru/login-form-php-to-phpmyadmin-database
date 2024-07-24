<?php
include("conn.php");
$query = "INSERT INTO student VALUES ('5','nisha','bba')";
$result = mysqli_query($conn, $query);

if($result){
    echo "Data inserted from student ";
}
else{
    echo "Data not inserted";
}
?>