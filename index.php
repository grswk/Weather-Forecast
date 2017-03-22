
<?php
header('location:main.html');
require 'navigation.php';
?>

<style type="text/css">
	/*#bodyMain.revealed {
  display: block;
}*/
#bodyMain {
  display: block;
  width: 100%;
  text-align: center;
  margin-top: 100px;
  font-size: 44px;
  color: #AAA;
  height: 500px;
  line-height: 200px;
}
* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
</style>

<!-- <button id='button' onClick='fetchWeather();'>Get</button> -->
<div id='bodyMain' class='revealed'>Please Click on Get button...</div>

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#999; display: none;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;border-top-width:1px;border-bottom-width:1px;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;border-top-width:1px;border-bottom-width:1px;}
.tg .tg-vn4c{background-color:#D2E4FC}
.tg .tg-9vto{font-family:Verdana, Geneva, sans-serif !important;}
</style>
<table class="tg" id="table">
  <tr>
    <th class="tg-031e"></th>
    <th class="tg-031e">Today</th>
    <th class="tg-031e">Tomorrow</th>
    <th class="tg-031e">Day3</th>
    <th class="tg-031e">Day4</th>
    <th class="tg-031e">Day5</th>
    <th class="tg-031e">Day6</th>
    <th class="tg-031e">Day7</th>
    <th class="tg-031e">Day8</th>
  </tr>
  <tr>
    <td class="tg-031e">Summary</td>
    <td class="tg-031e"><span id='sum-day1'></span></td>
    <td class="tg-031e"><span id='sum-day2'></span></td>
    <td class="tg-031e"><span id='sum-day3'></span></td>
    <td class="tg-031e"><span id='sum-day4'></span></td>
    <td class="tg-031e"><span id='sum-day5'></span></td>
    <td class="tg-031e"><span id='sum-day6'></span></td>
    <td class="tg-031e"><span id='sum-day7'></span></td>
    <td class="tg-031e"><span id='sum-day8'></span></td>
  </tr>
  <tr>
    <td class="tg-031e">Min Temprature</td>
    <td class="tg-031e"><span id='tempMin-day1'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMin-day2'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMin-day3'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMin-day4'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMin-day5'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMin-day6'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMin-day7'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMin-day8'></span>&#8451</td>
  </tr>
  <tr>
    <td class="tg-031e">Max Temprature</td>
    <td class="tg-031e"><span id='tempMax-day1'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMax-day2'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMax-day3'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMax-day4'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMax-day5'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMax-day6'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMax-day7'></span>&#8451</td>
    <td class="tg-031e"><span id='tempMax-day8'></span>&#8451</td>
  </tr>
  <tr>
    <td class="tg-031e">Humidity</td>
    <td class="tg-031e"><span id='humi-day1'></span></td>
    <td class="tg-031e"><span id='humi-day2'></span></td>
    <td class="tg-031e"><span id='humi-day3'></span></td>
    <td class="tg-031e"><span id='humi-day4'></span></td>
    <td class="tg-031e"><span id='humi-day5'></span></td>
    <td class="tg-031e"><span id='humi-day6'></span></td>
    <td class="tg-031e"><span id='humi-day7'></span></td>
    <td class="tg-031e"><span id='humi-day8'></span></td>
  </tr>
  <tr>
    <td class="tg-031e">Wind Speed</td>
    <td class="tg-031e"><span id='ws-day1'></span></td>
    <td class="tg-031e"><span id='ws-day2'></span></td>
    <td class="tg-031e"><span id='ws-day3'></span></td>
    <td class="tg-031e"><span id='ws-day4'></span></td>
    <td class="tg-031e"><span id='ws-day5'></span></td>
    <td class="tg-031e"><span id='ws-day6'></span></td>
    <td class="tg-031e"><span id='ws-day7'></span></td>
    <td class="tg-031e"><span id='ws-day8'></span></td>
  </tr>
  <tr>
    <td class="tg-031e">Pressure</td>
    <td class="tg-031e"><span id='press-day1'></span>Hectopascals</td>
    <td class="tg-031e"><span id='press-day2'></span>Hectopascals</td>
    <td class="tg-031e"><span id='press-day3'></span>Hectopascals</td>
    <td class="tg-031e"><span id='press-day4'></span>Hectopascals</td>
    <td class="tg-031e"><span id='press-day5'></span>Hectopascals</td>
    <td class="tg-031e"><span id='press-day6'></span>Hectopascals</td>
    <td class="tg-031e"><span id='press-day7'></span>Hectopascals</td>
    <td class="tg-031e"><span id='press-day8'></span>Hectopascals</td>
  </tr>
</table>

<script>
	function fetchWeather(){
		//alert("Clicked");
		$("#bodyMain").html("Loading...");
	    var apiKey = 'ef83a8bd6e9af7fa4d7da0bbdd20fe9f';
	    var url = 'https://api.forecast.io/forecast/';
	    var lati = 30.9100;
	    var longi = 75.8500;
	    var jsonStr;
	    $.getJSON(url + apiKey + "/" + lati + "," + longi + "?units=si&callback=?", function(jsonStr) {
	      //console.log(jsonStr);

	      //current weather
	      $('#sum-current').html(jsonStr.currently.summary);
	      $('#temp-current').html(jsonStr.currently.temperature);
	      $('#ws-current').html(jsonStr.currently.windSpeed);
	      $('#press-current').html(jsonStr.currently.pressure);
	      //alert(jsonStr.daily.data[]0].summary);
	      //day1
	      var j = 1;
	      for (var i = 0; i <= 8; i++) {
	      	//alert(i);
	      	j = i + 1;
		      $('#sum-day' + j ).html(jsonStr.daily.data[i].summary);
		      $('#tempMin-day' + j).html(jsonStr.daily.data[i].temperatureMin);
		      $('#tempMax-day' + j).html(jsonStr.daily.data[i].temperatureMax);
		      $('#humi-day' + j).html(jsonStr.daily.data[i].humidity);
		      $('#ws-day' + j).html(jsonStr.daily.data[i].windSpeed);
		      $('#press-day' + j).html(jsonStr.daily.data[i].pressure);
	      };
	    });
	    document.getElementById('bodyMain').style.display='none';
	    document.getElementById('table').style.display='block';

	}
</script>



<?php
require 'footer.php';
// if ($_SESSION['id']=="") {
// 	//when not logined
// 	$
// }

// switch(@$_REQUEST["id"])
// {
//  case 'home':
//  include("home.php");
//  break;
 
//  case 'login':
//  include("login.php");
//  break;
 
//  case 'logout':
//  include("logout.php");
//  break;
 
//  case 'feedback':
//  include("feedback.php");
//  break;

//  case 'about':
//  	include 'about.php';
//  	break;

 // default:
 // include("home.php");
 // break;
// }
?>
