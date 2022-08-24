<?php
include ("../Model/model.php");

session_start();



if(isset($_POST["submit"]))

{
    
     $mydb= new DB();
     $conobj=$mydb->opencon();
     $results=$mydb->logincheck($conobj, "admin", $_POST['uname'], $_POST['password']);
     if($results->num_rows>0)
     {
          $_SESSION["uname"]=$_POST["uname"];
          $_SESSION["password"]=$_POST["password"];
          header("location: ../View/adminprofile.php");
     }
    
    
     /*foreach($mydata as  $key => $udata)
     {
     
                    
               if($udata->uname==$_POST["uname"] && $udata->password==$_POST["password"])
               {

                    $_SESSION["uname"]=$_POST["uname"];
                    $_SESSION["password"]=$_POST["password"];
                    header("location: ../View/profile.php");
               }     
     }*/
     

     echo "<h1>Your username or password is incorrect !<h1>";
          
}

?>