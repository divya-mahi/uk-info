<?php
$con=mysqli_connect("localhost","root","","dbcrud");
$name=$_GET['name'];
$query="SELECT * FROM emp WHERE name='$name'";
$sql=mysqli_query($con,$query);
if($row=mysqli_fetch_array($sql)){

  $name=$row[0];
  $gmail=$row[1];
  $password=$row[2];
  $city=$row[3];
  $gender=$row[4];
  $language=$row[5];
  $mobile=$row[6];
 }
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form method="post" action="upd.php">
  <div class="container">
  <div class="container">
    <h1>REGISTER FORM</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>username</b></label>
    <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
  
      
    <label for="gmail"><b>gmail</b></label>
    <input type="text" class="form-control" name="gmail" value="<?php echo $gmail;?>">

    <label for="password"><b> Password</b></label>
    <input type="text"  class="form-control" name="password"  value="<?php echo $password;?>">

    <label for="city"><b>city</b></label>
    <input type="text"  class="form-control" name="city" value="<?php echo $city;?>"><br> 
         

        
    <label ><b>Gender</b></label><br>
    <input type="radio" name="gender" value="male">
    <label>Male</label><br>
    <input type="radio" name="gender" value="female">
    <label>Female</label><br><br>

    <label for="city"><b>Language</b></label><br>
    <input type="checkbox" class="form-control" name="language[]" value="<?php echo $username;?>">
    <label>Tamil</label><br>
    <input type="checkbox" class="form-control" name="language[]" value="<?php echo $username;?>">
    <label>English</label><br>
    <input type="checkbox" class="form-control" name="language[]" value="<?php echo $username;?>">
    <label>Hindi</label><br><br>

    <label><b>Mobile</b></label>
    <input type="int" class="form-control" name="mobile"><br>
    <hr>

    <button type="submit" name="submit">Register</button>
</form>

  </div>
</form>
</body>
</html>























