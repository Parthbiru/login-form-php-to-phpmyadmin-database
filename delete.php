<?php
include("conn.php");
$rollno=$_GET['rn'];
$query = "DELETE FROM STUDENT WHERE ROLLNO='$rollno'";
$result = mysqli_query($conn,$query);
if($result)
{
    echo "<script type='text/javascript'>alert('Record Deleted Successfully')</script>";
    echo "<script type='text/javascript'>window.location='display.php'</script>";
    }


?>