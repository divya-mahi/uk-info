<?php
$con=mysqli_connect("localhost","root","","dbcrud");


if(isset($_POST['submit']))

{
    $username=$_POST['name'];
    $gmail=$_POST['gmail'];
    $password=$_POST['password'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $language=$_POST['language'];
    $abc=implode(",",$language);
    $mobile=$_POST['mobile'];
    $query="insert into emp values('$username','$gmail','$password','$city','$gender','$abc','$mobile')";
    if($res=mysqli_query($con,$query))

    {
      echo"connected successfully";
    }
 
 
 else
 {

echo "incorrect";
 }

}
?>








