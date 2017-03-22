
<?php
session_start();
?>

<html>
<body>

<?php
// if (!$_SESSION['id']=="") {
// 	header("location:home.php");
// }else{
// 	header("location:index.php");
//}
require 'connection.php';
require 'navigation.php';
// $wmsg="Wrong Username Or Password";
$emsg="Your email or password is incorrect.";
if(isset($_POST["emailSignIn"])){
	$emsg = "Please fill the required fields";
	$email=$_POST["emailSignIn"];
	$pass=$_POST["password"];
	$sql="SELECT * FROM user WHERE email='" .$email. "' AND password='".$pass."' LIMIT 1";
	$result=mysql_query($sql, $connection); //or die('Error: ' . mysql_error());
	echo $result . "this is result";
	if (!mysql_query($sql,$connection)){
	  die('Error: ' . mysql_error());
	}
	$size=mysql_num_rows($result);
	echo $size;
	if($size==0){
		header("location:Registration.html?msg=$emsg");
	}else{	
		while($row=mysql_fetch_array($result)){
			$name = $row['name'];
			$id = $row['id'];
			$_SESSION['name'] = $name;
			$_SESSION['id'] = $id;
			header("location:home.php");
		}
	}
}

if(isset($_POST["emailSignUp"])){
	 $name = $_POST['nameSignUp'];
 	 $email = $_POST["emailSignUp"];
	 $pass = $_POST["passwordSignUp"];
	 $passConfirm = $_POST["passwordSignUpConfirm"];
	 // $p=base64_encode($pass);
	 
	 // $role="user";
	$emsg="Your email or password is incorrect.";
	if ($pass == $passConfirm) {
	 	$sql="INSERT INTO user VALUES ('', '$name' , '$email', '$pass')";
	 	$result=mysql_query($sql, $connection);

	 	$sql="SELECT * FROM user WHERE email='" .$email. "' AND password='".$pass."' LIMIT 1";
		$result=mysql_query($sql, $connection); //or die('Error: ' . mysql_error());
		echo $result . "this is result";
		if (!mysql_query($sql,$connection)){
		  die('Error: ' . mysql_error());
		}
		$size=mysql_num_rows($result);
		echo $size;
		if($size==0){
			header("location:Registration.html?msg=$emsg");
		}else{	
			while($row=mysql_fetch_array($result)){
				$name = $row['name'];
				$id = $row['id'];
				$_SESSION['name'] = $name;
				$_SESSION['id'] = $id;
				header("location:home.php");
			}
		}
	 }
}


// else{
//   echo "<center>";
   echo $_GET['msg'];
//   echo"<form method='post' action='login.php'>
//         <label for='email'>Email:</label>
//         <input name='email' type='text' /> <br/> 
//         <label for='pass'> Password:</label>
//         <input name='pass' type='password' /> <br/>
//         <input name='btn' type='submit' />
//       </form>
//     </center>";
// }

require 'footer.php';
?>

</body>
</html>