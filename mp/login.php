<?php
   session_start();
   if ($_GET["logout"]==1 AND $_SESSION['id']) {

    session_destroy();
    $message="you have been logged out";
   }
   include("connection.php");
    $error="";

   if ($_POST["submit"]=="Sign Up"){
              if(!$_POST["email"]) $error.= "<br>please enter your email";
              else if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) $error.= "<br>please enter a valid email address";

             if (!$_POST["password"]) $error.="<br>please enter your password";
             else{
             	if (strlen($_POST["password"])<8)  $error.= "<br>please enter atleast 8 character in password ";


             }

         if ($error) $error = "<br>there was error in your  signup detail ".$error;
         
      else{
               $query="SELECT * FROM users WHERE email= '".mysqli_real_escape_string($link,$_POST['email'])."'";
             $result = mysqli_query($link,$query);
             echo $results= mysqli_num_rows($result);
            if($results) $error= "email address is already register";
             else{ 
              $emaill = $_POST['email'];
             $pass = $_POST['password'];
              $Q="INSERT INTO users(email,password) VALUES('$emaill', '$pass')";
             
             mysqli_query($link,$Q);
             echo "you have been signed up";
             $_SESSION['id']=mysqli_insert_id($link);
             header("Location:mainpage.php");
             }

       }


   }
   if ($_POST['submit']=="Login") {
         
        $emaill = $_POST['loginemail'];
         $pass=$_POST['loginpassword'];
         //$Query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link,$_POST['loginemail'])."'AND password='"$pass"'";
         $Query="SELECT * FROM users WHERE email='$emaill' AND password='$pass'";
         $result=mysqli_query($link,$Query);
         $row=mysqli_fetch_array($result);
         if($row) {
          $_SESSION['id']=$row['id'];
             header("Location:mainpage.php");
         }
         else {
          $error= "we could not find user with email and password. Please try again";
         }
   }
?>
