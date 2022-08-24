<nav>
<?php
if (isset($_SESSION['uname'])) {
    echo '<span>Logged in as '.$_SESSION['uname'] .'</span> | ';
    echo '<span>Logout</span>';
    } else {
    echo '
  <a href="/LAB TASK/Lab Task 6/">Home</a> |
  <a href="/LAB TASK/Lab Task 6/login.php">Login</a> |
  <a href="/LAB TASK/Lab Task 6/registration.php">Registration</a>
</nav>';
}

