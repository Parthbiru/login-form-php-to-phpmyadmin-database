<?php
include("conn.php");
error_reporting(0);

//  WHERE class='bca' <<-- this is code for querys
$query = "SELECT * FROM student";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

// echo $total;
if($total != 0)
{
    ?>

    <table>
        <tr>
            <td>Roll No</td>
            <td>Name</td>
            <td>Class</td>
          
        </tr>
      

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['rollno']."</td>
                <td>".$result['name']."</td>
                <td>".$result['class']."</td>
                <td><a href='#'>Edit</a></td>
                <td><a>Delete</a></td>
                
            
            </tr>";          
        }
}

?>
</table>