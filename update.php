<?php
include("conn.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN PAGE</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
 
 <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
   
   <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     <li class="nav-item active">
       <a class="nav-link" href="insertphp.php">Home <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link disabled" href="display.php">Student info</a>
     </li>
   </ul>
   </form>
 </div>
</nav>
        <h1>Edit Your Information</h1>
        <form action="" method="GET">
            roll no <input type="text" name="rollno" placeholder="Enter your rollno" value="<?php echo $_GET['rn']?>"><br><br>
            name <input type="text" name="name" placeholder="Enter your name" value="<?php echo $_GET['nm']?>"><br><br>
            class <input type="text" name="class" placeholder="Enter your class" value="<?php echo $_GET['cl']?>"><br><br>
            <input type="submit" name="submit" value="update">
        </form>

        <?php
            if($_GET['submit'])
            {
                $rn=$_GET['rollno'];
                $nm=$_GET['name'];
                $cl=$_GET['class'];
                $query = "UPDATE STUDENT SET NAME='$nm' , CLASS='$cl' WHERE ROLLNO='$rn' ";
                $data = mysqli_query($conn,$query);
                if($data)
                {
                    echo "<font color='yellow'></font>data updated <a href='display.php'>check updated data</a>";
                }
                else{
                    echo "not";
                }

            }
            else{
                echo "<br>Data Not Updated...";
            }
       



        ?>


    </body>
</html>
