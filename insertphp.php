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
        <h1>Wellcome To International school</h1>
        <form action="" method="GET">
            roll no <input type="text" name="rollno" placeholder="Enter your rollno" value=""><br><br>
            name <input type="text" name="name" placeholder="Enter your name" value=""><br><br>
            class <input type="text" name="class" placeholder="Enter your class" value=""><br><br>
            <input type="submit" name="submit" value="submit">
        </form>

        <?php
            if($_GET['submit'])
            {
                $name = $_GET['name'];
                $rollno = $_GET['rollno'];
                $class = $_GET['class'];
                
                if($rollno!="" && $name!="" && $class!="")
                {
                    
                    $query = "INSERT INTO student VALUES ('$rollno','$name','$class')";
                    $result = mysqli_query($conn, $query);
        
                    if($result){
                        echo $name. "'s Data inserted from student ";
                    }
                    else{
                        echo "Data not inserted";
                    }
                }
                else{
                    echo "please fill all the fields";
                }
            }
       



        ?>


    </body>
</html>
