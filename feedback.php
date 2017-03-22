<html>
<head>
  <title>Feedback</title>
</head>
<body>

<?php
require 'connection.php';
require 'navigation.php';

if (isset($_POST['email'])){
  $name = $_POST['name'] ;
  $email = $_POST['email'] ;
  $comment = $_POST['message'] ;
  // echo "$name your email is $email and your feedback: </br> $comment";
  $sql = "INSERT INTO feedback (name, email, comment) VALUES ('$name', '$email', '$comment')";
  if (!mysql_query($sql,$connection)){
  die('Error: ' . mysql_error());
  }
  echo "Feedback successfully submitted.";
  header('location:contactus.html?msg=Feedback successfully submitted.');
}


else{
  echo "<center>
      <form method='post' action='feedback.php'>
        <label for='name'>Name:</label>
        <input name='name' type='text' /> <br/> 
        <label for='email'> Email:</label>
        <input name='email' type='text' /> <br/>
        <label for='message'>Message:</label>
        <textarea name='message' rows='15' cols='40'></textarea><br/>
        <input type='submit' />
      </form>
    </center>";
}

require 'footer.php';
?>
</body>
</html>