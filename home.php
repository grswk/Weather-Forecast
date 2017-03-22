<html>
<head>
  <title>Home</title>
</head>
<body>

<?php
//header
require 'navigation.php';

if ($_SESSION['id']=="") {
	header("location:index.php");
}
//left bar with username and location
echo "<br/>";
echo "Welcome " .$_SESSION['name']; 
//centre with detail of weather locations

//left side with navgation of weather and addlocation and dellocation


//footer
require 'footer.php';
?>

</body>
</html>
