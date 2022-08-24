<?php
include ("../View/Header.php");
include ("../Control/adminlogincheck.php");

setcookie("user_detect","visited", time()+86400*30,"/");

if(isset($_COOKIE["user_detect"]))

{
    echo "You have visited me before";
  }
  else{
    echo "You are visiting me for the first time";
  }

?>

<html>
    <head>
<script>

function validateForm() {

  let x = document.forms["login"]["username"].value;

  if (x == "") {

    alert("Username must be filled out");

    return false;

  }

}



function validateForm1() {

  let y = document.forms["login"]["password"].value;

  if (y == "") {

    alert("Password must be filled out");

    return false;

  }

}




</script>
</head>
<center>
<body>
<fieldset>
    <h1> Login as Admin </h1> <hr>
    
<form action="" method="post" enctype="multipart/form-data">
    
<table>
<tr>
<td> Username : </td>
<td> <input type = "text" name= "uname" ><br> </td> 
</tr>
<tr>
<td> Password : </td>
<td> <input type = "password" name= "password" > <br> </td> 
</tr>
<tr>
<td> <input type="submit" value="Login" name="submit"> 
<input type="reset" value="Reset"> <br>
<a href= "adminforgot.php"> Forgot password? </a> <br> </td> </tr> 
<tr> <td> <a href="../View/adminregistration.php"> Create a new account as Admin </a> </td> </tr>
<tr> <td> <br> <br> <br> <br> </td> </tr>
</table>
</fieldset>
</body>
</center>
</html>

<?php
include ("../View/Footer.php");
?>
