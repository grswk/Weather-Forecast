<?php
session_start();
require 'connection.php';
if ($_SESSION['id']=="") {
	header("location:Registration.html");
}

echo "Hello" .$_SESSION['name'] ."  ";

if (isset($_REQUEST['rid'])) {
	if (!isset($_GET['rid'])){
	    $emsg = 'No ID was given...';
	    //header("location:delete.php?msg=$emsg");
	}

	$sql = "DELETE FROM prefs WHERE id = $_GET['rid'] AND uid = $_SESSION['id']";
	// $sql = "SELECT * FROM user";
	$result=mysql_query($sql, $connection);
	if (!mysql_query($sql,$connection)){
	  die('Error: ' . mysql_error());
	}

	
	$size=mysql_num_rows($result);
	echo "<br/>"$size;
	
echo "new size  <br/>";
	while($row=mysql_fetch_array($result)){
		echo ' name: ' .$row['name'];
		echo " \temail: " . $row['email'];
		echo "<br>";
	}

	// if ($result->affected_rows > 0){
	//     echo "The ID was deleted with success.";
	// }
	// else{
	//     echo "Couldn't delete the ID.";
	// }
} else{
   echo "<center>";
   echo $_GET['msg'];
  echo"<form method='get' action='delete.php'>
        <label for='rid'>rid:</label>
        <input name='rid' type='text' /> <br/> 
        <input name='btn' type='submit' />
      </form>
    </center>";
}
?>