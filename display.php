<style>
    td{
        padding: 7px;
    }
</style>
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
    <table>
        <tr>
            <td>Roll No</td>
            <td>Name</td>
            <td>Class</td>
            <td colspan="2">Operation</td>
        </tr>
      

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['rollno']."</td>
                <td>".$result['name']."</td>
                <td>".$result['class']."</td>
                <td><a href='update.php?rn=$result[rollno]&nm=$result[name]&cl=$result[class]'>Edit</a></td>
                <td><a href='delete.php?rn=$result[rollno]'>Delete</a></td>
                
            
            </tr>";          
        }
}

?>
</table>