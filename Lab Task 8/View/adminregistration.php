<?php
include ("../View/Header.php");
include "../Control/adminregistrationcheck.php";
?>

<html>
    <head>
    <script>       
function validate1() {
  let x = document.forms["login"]["firstname"].value;
  if (x == "") {
    alert("First name must be filled out");
    return false;
  }
}


function validate2() {
  let y = document.forms["login"]["lastname"].value;
  if (y == "") {
    alert("Last name must be filled out");
    return false;
  }
}


function validate3() {
  let a = document.forms["login"]["username"].value;
  if (a == "") {
    alert("Username must be filled out");
    return false;
  }
}


function validate4() {
  let b = document.forms["login"]["role"].value;
  if (b == "") {
    alert("Role must be filled out");
    return false;
  }
}
function validate5() {
  let c = document.forms["login"]["phonenumber"].value;
  if (c == "") {
    alert("Phone number must be filled out");
    return false;
  }
}
function validate6() {
  let d = document.forms["login"]["email"].value;
  if (d == "") {
    alert("Email must be filled out");
    return false;
  }
}
function validate7() {
  let e = document.forms["login"]["password"].value;
  if (e == "") {
    alert("Password must be filled out");
    return false;
  }
}

function validate8() {
  let d = document.forms["login"]["confirmpassword"].value;
  if (d == "") {
    alert("Confirmed password must be filled out");
    return false;
  }
}

function validate9() {
  let d = document.forms["login"]["id"].value;
  if (d == "") {
    alert("ID must be filled out");
    return false;
  }
}

</script>



</head>
<center>
<body>
<fieldset>
    <h1> Sign Up as Admin </h1> <hr>
    
<form action="" method="post" enctype="multipart/form-data">
    
<table>
<tr>
<td> First Name : </td>
<td> <input type="text" name="fname"> </td>
<td> <?php echo $a ?> </td>
</tr>
<tr>
<td> Last Name : </td>
<td> <input type="text" name="lname"> </td>
<td> <?php echo $b ?> </td>
</tr>
<tr>
<td> Username : </td>
<td> <input type="text" name="uname" placeholder="Minimum 5 characters"> </td>
<td> <?php echo $c ?> </td>
</tr>
<tr>
    <td> Select Role : </td>
    <td> <input type= "radio" name="role" value="Admin"> Admin 
    <input type= "radio" name="role" value="Moderator"> Moderator <br>
    <input type= "radio" name="role" value="Analyst"> Analyst
    <input type= "radio" name="role" value="Editor"> Editor </td>
    <td> <?php echo $errrole ?> </td>
</tr>
<tr>
<td> Phone Number : </td>
<td> <input type ="text" name= "phone"> </td>
<td> <?php echo $d ?> </td>
</tr>


<tr>
<td> Email : </td>
<td> <input type = "text" name= "email"> </td>
<td> <?php echo $e ?> </td>

<tr>
<td> Password : </td>
<td> <input type = "password" name= "password"  placeholder="More than 7 characters"> </td>
<td> <?php echo $f ?> </td>
</tr>

<tr>
<td> Confirm Password : </td>
<td> <input type = "password" name= "confirmpassword" placeholder="More than 7 characters"> </td>
<td> <?php echo $f ?> </td>
</tr>

<tr>
<td> Please Submit Your Provided Id </td>
<td> <input type="file" name="myfile"> </td>
<td> <?php echo $g ?> </td>
</tr>

<tr>
<td> <input type="submit" value="Submit" name="submit">
<input type="reset" value="Reset"> </td>
</tr>
<tr>
<td> Already Have an account? <a href= "../View/adminlogin.php"> Sign in </a></td> </tr>
</table>
</fieldset>
</body>
</center>
</html>

<?php
include ("../View/Footer.php");
?>
