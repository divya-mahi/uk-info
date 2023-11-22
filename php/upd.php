<?php
$con=mysqli_connect("localhost","root","","dbcrud");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $gmail=$_POST['gmail'];
    $password=$_POST['password'];
    $city=$_POST['city'];
    $gender=$_POST["gender"];
    $language=$_POST['language'];
    $abc=implode(",",$language);
    $mobile=$_POST['mobile'];
    $sql="UPDATE `emp` SET `name`='[value-1]',`gmail`='[value-2]',`password`='[value-3]',`city`='[value-4]',`gender`='[value-5]',
    `language`='[value-6]',`mobile`='[value-7]' WHERE 'name'='$name'";
    if($res=mysqli_query($con,$sql))
    {
       echo"update";
    }
    else
    {
      echo"error";
    }
}



?>