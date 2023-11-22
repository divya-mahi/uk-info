<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>username</th>
                    <th>gmail</th>
                    <th>password</th>
                    <th>city</th>
                    <th>gender</th>
                    <th>language</th>
                    <th>mobile</th>
               </tr>
</thead>

<?php
$con=mysqli_connect("localhost","root","","dbcrud");
$query="select * from emp";
$sql=mysqli_query($con,$query);
while($row=mysqli_fetch_array($sql))
{
    $name=$row[0];
    $gmail=$row[1];
    $password=$row[2];
    $city=$row[3];
    $gender=$row[4];
    $language=$row[5];
    $mobile=$row[6];
    ?>
    
    <tr>
        <td><?php echo $name;?></td>
        <td><?php echo $gmail;?></td>
        <td><?php echo $password;?></td>
        <td><?php echo $city;?></td>
        <td><?php echo $gender;?></td>
        <td><?php echo $language;?></td>
        <td><?php echo $mobile;?></td>

    <td><a href='update.php?name=<?php echo $name;?>'class="btn btn-success">update</a></td>
    <td><a href='delete.php?name=<?php echo $name;?>'class="btn btn-danger">delete</a></td>>

</tr>
<?php
}
?>
</table>
  </div>  
</body>
</html>