<link href="css/bootstrap.min.css" rel="stylesheet">
<div class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header ">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			 <span class="icon-bar"></span> 
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			</button>
		<a href="main.html" class="navbar-brand">Weather Predictor</a>
		</div>
		<div class="collapse navbar-collapse">
			<form class="navbar-form navbar" method="post">
			  <div class="form-group">
			    <input type="text" name="search" class="input-lg" id="inputlg" placeholder="Eg. London, Delhi, Paris" value="">
			  </div>
			  <!-- <input type="submit" name="submit" class="btn btn-lg btn-success" value="Search" onclick="getWeather()"> -->
			  <button onclick="fetchWeather();">Search</button>
			  <?php
session_start();

// echo "<a href='home.php'>Home</a>";
// echo "<input type='text' id='search'>";
// echo "<button type='button' class='btn btn-lg btn-success'>Search</button>";

// <button id='button' onClick='getWeather();'>Get</button>

if ($_SESSION['id']=="") {
	 echo "<a href='Registration.html'>Login/Register</a>";
}else{
	 echo "<a href='logout.php'>Logout</a>";
}
?>
			</form>

		</div>
	</div>
</div>
