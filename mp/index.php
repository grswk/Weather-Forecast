<?php
include("login.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Secret Diary</title>
!
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
!
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></
script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/
respond.min.js"></script>
<![endif]-->
<style>
.navbar-brand {
font-size:1.8em;
}
#topContainer {
background-image:url("1.jpg");
height:570px;
width:100%;
background-size:cover;
}
#topRow {
margin-top:80px;
text-align:center;
}
#topRow h1 {
font-size:300%;
}
#emailSignup {
margin-top:50px;
}
.bold {
font-weight:bold;
}
.marginTop {
margin-top:30px;
}
.center {
text-align:center;
}
.title {
margin-top:100px;
font-size:300%;
}
#footer {
background-color:#B0D1FB;
padding-top:70px;
width:100%;
}
.marginBottom {
margin-bottom:30px;
}
.appstoreImage {
width:250px;
}
</style>
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
<div class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header ">
<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
 <span class="icon-bar"></span> 
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
</button>
<a class="navbar-brand">Secret Diary</a>
</div>
<div class="collapse navbar-collapse">
<form class="navbar-form navbar-right" method="post">
  <div class="form-group">
    <input type="email" name="loginemail" placeholder="Email" value="<?php echo addslashes($_POST['loginemail']); ?>">
  </div>
  <div class="form-group">
    <input type="password" name="loginpassword" placeholder="password" value="<?php echo addslashes($_POST['loginpassword']); ?>">
  </div>
  <input type="submit" name="submit" class="btn btn-success" value="Login">
</form>

</div>
</div>
</div>

<div class="container contentContainer" id="topContainer">
<div class="row">
<div class="col-md-6 col-md-offset-3" id="topRow">
<h1 class="marginTop">Secret Diary</h1>
<p class="lead">Your Own private Diary</p> 
<?php
if ($error) {
  echo '<div class="alert alert-danger">'.addslashes($error). '</div>';
  
}

if ($message) {
  echo '<div class="alert alert-success">'.addslashes($message). '</div>';
  
}
?>
<p class="bold marginTop">Interested? Sign Up Below!</p>
<form class="marginTop" method="post">
     <div class="form-group">
       <label for="email">Email Address</label>
       <input type="email" name="email" class="form-control" placeholder="Your Email Address" value="<?php echo addslashes($_POST['email']); ?>">
     </div>

     <div class="form-group">
       <label for="password">Password</label>
       <input type="password" name="password" class="form-control" placeholder=" Password" value="<?php echo addslashes($_POST['password']); ?>">
     </div>
     <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop">
  


</form>

</div>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as
needed -->
<script src="js/bootstrap.min.js"></script>
<script>
$(".contentContainer").css("min-height",$(window).height());
$("textarea").css("height",$(window).height()-110);
$("textarea").keyup(function() {
$.post("updatediary.php", {diary:$("textarea").val()} );
});
</script>

</body>
</html>
