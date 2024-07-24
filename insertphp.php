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
        <h1>My First PHP Page</h1>
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
