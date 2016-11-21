<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = $_POST['email'];
      $mypassword = $_POST['password'];

      $sql = "SELECT email FROM Empleado WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      if (!$result) { // add this check.
        die('Invalid query: ' . mysql_error());
      }
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;

         header("location: empleados.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
