<?php
$con=mysqli_connect("localhost","root","","dbcrud");
$name=$_GET['name'];  
$query=mysqli_query($con,"delete from emp where name='$name'"); 
if($query)
 {
    echo "<script>alert('delete');window.location.href='fetch.php';</script>";
 }
   else
   {
 echo "not connect";
}
 ?>