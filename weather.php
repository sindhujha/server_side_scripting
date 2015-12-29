<html>
<head><title>Weather Report</title></head>
<body>
<script>
function validatefields()
{
	var street = document.forms["myform"]["address"].value;
	var city = document.forms["myform"]["city"].value;
	var state = document.forms["myform"]["State"].value;
	if (street == null || street == "") 
	{
        alert("Please enter value for Street Address");
		return false;
	}
	if (city == null || city == "") 
	{
        alert("Please enter value for City");
		return false;
	}
	if (state == "Select your state...") 
	{
        alert("Please enter value for State");
		return false;
	}
return true;
}

function reset_form()
{
	document.forms["myform"]["address"].value="";
	document.forms["myform"]["city"].value="";
	document.forms["myform"]["State"].value="Select your state...";
	document.getElementById("fahrenheit").checked = true;
	document.getElementById("output").innerHTML="";
}

</script>
		<h2 align="center">Forecast Search</h2>
		<div style="width:480px; height:180px;border:3px solid black;padding:10px 0px 0px 10px;margin: 0px auto">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method=post name="myform" onsubmit="return validatefields()">
        <b>Street Address:*<b> <input style="margin:0 0 5px 0;position: relative; left: 5px" name="address" size="30" value="<?php if (isset($_POST['address'])){echo $_POST['address'];}?>"><br>
        <b>City:*<b> <input style="margin:0 0 5px 0;position: relative; left: 75px" name="city" size="30" value="<?php if (isset($_POST['city'])){echo $_POST['city'];}?>"><br>
	State:* <select style="margin:0 0 5px 0;position: relative; left: 70px" name="State">
	<option value="Select your state...">Select your state...</option>
  	<option value="AL" <?php if(isset($_POST['State']) && ($_POST['State']) == 'AL') echo 'selected'?>>Alabama</option>
	<option value="AK" <?php if(isset($_POST['State']) && ($_POST['State']) == 'AK') echo 'selected'?>>Alaska</option>
	<option value="AZ" <?php if(isset($_POST['State']) && ($_POST['State']) == 'AZ') echo 'selected'?>>Arizona</option>
	<option value="AR" <?php if(isset($_POST['State']) && ($_POST['State']) == 'AR') echo 'selected'?>>Arkansas</option>
	<option value="CA" <?php if(isset($_POST['State']) && ($_POST['State']) == 'CA') echo 'selected'?>>California</option>
	<option value="CO" <?php if(isset($_POST['State']) && ($_POST['State']) == 'CO') echo 'selected'?>>Colorado</option>
	<option value="CT" <?php if(isset($_POST['State']) && ($_POST['State']) == 'CT') echo 'selected'?>>Connecticut</option>
	<option value="DE" <?php if(isset($_POST['State']) && ($_POST['State']) == 'DE') echo 'selected'?>>Delaware</option>
	<option value="DC" <?php if(isset($_POST['State']) && ($_POST['State']) == 'DC') echo 'selected'?>>District Of Columbia</option>
	<option value="FL" <?php if(isset($_POST['State']) && ($_POST['State']) == 'FL') echo 'selected'?>>Florida</option>
	<option value="GA" <?php if(isset($_POST['State']) && ($_POST['State']) == 'GA') echo 'selected'?>>Georgia</option>
	<option value="HI" <?php if(isset($_POST['State']) && ($_POST['State']) == 'HI') echo 'selected'?>>Hawaii</option>
	<option value="ID" <?php if(isset($_POST['State']) && ($_POST['State']) == 'ID') echo 'selected'?>>Idaho</option>
	<option value="IL" <?php if(isset($_POST['State']) && ($_POST['State']) == 'IL') echo 'selected'?>>Illinois</option>
	<option value="IN" <?php if(isset($_POST['State']) && ($_POST['State']) == 'IN') echo 'selected'?>>Indiana</option>
	<option value="IA" <?php if(isset($_POST['State']) && ($_POST['State']) == 'IA') echo 'selected'?>>Iowa</option>
	<option value="KS" <?php if(isset($_POST['State']) && ($_POST['State']) == 'KS') echo 'selected'?>>Kansas</option>
	<option value="KY" <?php if(isset($_POST['State']) && ($_POST['State']) == 'KY') echo 'selected'?>>Kentucky</option>
	<option value="LA" <?php if(isset($_POST['State']) && ($_POST['State']) == 'LA') echo 'selected'?>>Louisiana</option>
	<option value="ME" <?php if(isset($_POST['State']) && ($_POST['State']) == 'ME') echo 'selected'?>>Maine</option>
	<option value="MD" <?php if(isset($_POST['State']) && ($_POST['State']) == 'MD') echo 'selected'?>>Maryland</option>
	<option value="MA" <?php if(isset($_POST['State']) && ($_POST['State']) == 'MA') echo 'selected'?>>Massachusetts</option>
	<option value="MI" <?php if(isset($_POST['State']) && ($_POST['State']) == 'MI') echo 'selected'?>>Michigan</option>
	<option value="MN" <?php if(isset($_POST['State']) && ($_POST['State']) == 'MN') echo 'selected'?>>Minnesota</option>
	<option value="MS" <?php if(isset($_POST['State']) && ($_POST['State']) == 'MS') echo 'selected'?>>Mississippi</option>
	<option value="MO" <?php if(isset($_POST['State']) && ($_POST['State']) == 'MO') echo 'selected'?>>Missouri</option>
	<option value="MT" <?php if(isset($_POST['State']) && ($_POST['State']) == 'MT') echo 'selected'?>>Montana</option>
	<option value="NE" <?php if(isset($_POST['State']) && ($_POST['State']) == 'NE') echo 'selected'?>>Nebraska</option>
	<option value="NV" <?php if(isset($_POST['State']) && ($_POST['State']) == 'NV') echo 'selected'?>>Nevada</option>
	<option value="NH" <?php if(isset($_POST['State']) && ($_POST['State']) == 'NH') echo 'selected'?>>New Hampshire</option>
	<option value="NJ" <?php if(isset($_POST['State']) && ($_POST['State']) == 'NJ') echo 'selected'?>>New Jersey</option>
	<option value="NM" <?php if(isset($_POST['State']) && ($_POST['State']) == 'NM') echo 'selected'?>>New Mexico</option>
	<option value="NY" <?php if(isset($_POST['State']) && ($_POST['State']) == 'NY') echo 'selected'?>>New York</option>
	<option value="NC" <?php if(isset($_POST['State']) && ($_POST['State']) == 'NC') echo 'selected'?>>North Carolina</option>
	<option value="ND" <?php if(isset($_POST['State']) && ($_POST['State']) == 'ND') echo 'selected'?>>North Dakota</option>
	<option value="OH" <?php if(isset($_POST['State']) && ($_POST['State']) == 'OH') echo 'selected'?>>Ohio</option>
	<option value="OK" <?php if(isset($_POST['State']) && ($_POST['State']) == 'OK') echo 'selected'?>>Oklahoma</option>
	<option value="OR" <?php if(isset($_POST['State']) && ($_POST['State']) == 'OR') echo 'selected'?>>Oregon</option>
	<option value="PA" <?php if(isset($_POST['State']) && ($_POST['State']) == 'PA') echo 'selected'?>>Pennsylvania</option>
	<option value="RI" <?php if(isset($_POST['State']) && ($_POST['State']) == 'RI') echo 'selected'?>>Rhode Island</option>
	<option value="SC" <?php if(isset($_POST['State']) && ($_POST['State']) == 'SC') echo 'selected'?>>South Carolina</option>
	<option value="SD" <?php if(isset($_POST['State']) && ($_POST['State']) == 'SD') echo 'selected'?>>South Dakota</option>
	<option value="TN" <?php if(isset($_POST['State']) && ($_POST['State']) == 'TN') echo 'selected'?>>Tennessee</option>
	<option value="TX" <?php if(isset($_POST['State']) && ($_POST['State']) == 'TX') echo 'selected'?>>Texas</option>
	<option value="UT" <?php if(isset($_POST['State']) && ($_POST['State']) == 'UT') echo 'selected'?>>Utah</option>
	<option value="VT" <?php if(isset($_POST['State']) && ($_POST['State']) == 'VT') echo 'selected'?>>Vermont</option>
	<option value="VA" <?php if(isset($_POST['State']) && ($_POST['State']) == 'VA') echo 'selected'?>>Virginia</option>
	<option value="WA" <?php if(isset($_POST['State']) && ($_POST['State']) == 'WA') echo 'selected'?>>Washington</option>
	<option value="WV" <?php if(isset($_POST['State']) && ($_POST['State']) == 'WV') echo 'selected'?>>West Virginia</option>
	<option value="WI" <?php if(isset($_POST['State']) && ($_POST['State']) == 'WI') echo 'selected'?>>Wisconsin</option>
	<option value="WY" <?php if(isset($_POST['State']) && ($_POST['State']) == 'WY') echo 'selected'?>>Wyoming</option>
		</select><br>
	Degree:* <label style="position: relative; left: 50px"><input  type="radio" name="degree" id="fahrenheit" value="Fahrenheit" checked="checked">Fahrenheit
		<input type="radio" name="degree" id="celsius" value="Celsius" <?php if(isset($_POST['degree']) && ($_POST['degree']) == 'Celsius') echo 'checked'?>>Celsius</label><br>
		<div style="position: relative; left: 120px">
		<input style="margin:5px 0 0 0" type="submit" name="submit"  value="Search">
         <button  style="margin:5px 0 0 0" type="button" onclick="reset_form()">Clear</button><br> 
		 </div>
		 <span><i>*- Mandatory fields.</i></span><br>
		 <div style="text-align:center"><a href="http://forecast.io/">Powered by Forecast.io</a></div>
		 </form></div><br>
<div id="output">
<?php if(isset($_POST['submit'])): 
		if($_POST["degree"]=="Fahrenheit")
		{
			$unit = "us";
			$sym = "F";
			$wsunit = "mph";
			$visunit = "mi";
		}
		else if ($_POST["degree"]=="Celsius")
		{
			$unit = "si";
			$sym = "C";
			$wsunit = "mps";
			$visunit = "km";
		}
		$urlstr = urlencode("https://maps.googleapis.com/maps/api/geocode/xml?address=".$_POST["address"].",".$_POST["city"].",".$_POST["State"]."&key=AIzaSyDXofHUvtxNr2UCmUUWRKSQ68p5zBN6tgQ"); 
		$post_data = array('address' => $_POST["address"].",".$_POST["city"].",".$_POST["State"], 'key' => 'AIzaSyDXofHUvtxNr2UCmUUWRKSQ68p5zBN6tgQ');
		$xmlstring=simplexml_load_file($urlstr) or die("Error: Cannot create object");
		//print_r($xmlstring);
		$latitude=$xmlstring->result->geometry->location->lat; 
		$longitude=$xmlstring->result->geometry->location->lng;
		
		$forecasturl="https://api.forecast.io/forecast/"."a06f959d2b72534de5818c3248e25606/".$latitude.",".$longitude."?"."units=".$unit."&exclude=flags";
		$jsonresponse = file_get_contents($forecasturl);
		$json_arr = json_decode($jsonresponse, true);
		//echo '<pre>' . print_r($json_arr, true) . '</pre>';
		$summary = $json_arr['currently']['summary'];
		$timezone = $json_arr['timezone'];
		$temperature = (round($json_arr['currently']['temperature'])).'&deg;'." ".$sym;
		$icon = $json_arr['currently']['icon'];
		switch ($icon) 
		{
			case "clear-day":
			$img="http://cs-server.usc.edu:45678/hw/hw6/images/clear.png";
			break;
			
			case "clear-night":
			$img="http://cs-server.usc.edu:45678/hw/hw6/images/clear_night.png";
			break;
			
			case "rain":
			$img="http://cs-server.usc.edu:45678/hw/hw6/images/rain.png";
			break;
			
			case "snow":
			$img="http://cs-server.usc.edu:45678/hw/hw6/images/snow.png";
			break;
			
			case "sleet":
			$img="http://cs-server.usc.edu:45678/hw/hw6/images/sleet.png";
			break;
			
			case "wind":
			$img="http://cs-server.usc.edu:45678/hw/hw6/images/wind.png";
			break;
			
			case "fog":
			$img="http://cs-server.usc.edu:45678/hw/hw6/images/fog.png";
			break;
			
			case "cloudy":
			$img="http://cs-server.usc.edu:45678/hw/hw6/images/cloudy.png";
			break;
			
			case "partly-cloudy-day":
			$img="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_day.png";
			break;
			
			case "partly-cloudy-night":
			$img="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_night.png";
			break;
 
}
		if($unit == "si")
		{
			$precipitation_intensity = ($json_arr['currently']['precipIntensity'])/25.4;
		}
		else
		{
			$precipitation_intensity = $json_arr['currently']['precipIntensity'];
		}
		
		switch (true) 
		{
			case ($precipitation_intensity >= 0 && $precipitation_intensity < 0.002):
			$precipitation="None";
			break;
			
			case ($precipitation_intensity >= 0.002 && $precipitation_intensity < 0.017):
			$precipitation="Very Light";
			break;
			
			case ($precipitation_intensity >= 0.017 && $precipitation_intensity < 0.1):
			$precipitation="Light";
			break;
			
			case ($precipitation_intensity >= 0.1 && $precipitation_intensity < 0.4):
			$precipitation="Moderate";
			break;
			
			case ($precipitation_intensity >= 0.4):
			$precipitation="Heavy";
			break;
			
		}
		$rain_chance = (($json_arr['currently']['precipProbability'])*100)."%";
 		$wind_speed = (round($json_arr['currently']['windSpeed']))." ".$wsunit;
		$dew_point = (round($json_arr['currently']['dewPoint'])).'&deg;'." ".$sym;
		$humidity = (($json_arr['currently']['humidity'])*100)."%";
		$visibility = (round($json_arr['currently']['visibility']))." ".$visunit;
		date_default_timezone_set($timezone);
		$sunrise = date("h:i A",$json_arr['daily']['data'][0]['sunriseTime']);
		$sunset = date("h:i A",$json_arr['daily']['data'][0]['sunsetTime']);
		$html = "<div style=\"width:590px; height:450px;border:3px solid black;margin: 0px auto\">";
		$html .= "<table align=\"center\" rules=\"value\" style=\"width:50%\"><tr><th><h1>".$summary."<br>".$temperature."</h1>";
		$html .= "<img src=".$img." alt=".$icon." title=".$icon.">";
		$html .= "</th></tr>";
		$html .= "<tr>";
		$html .= "<td style=\" text-align:left\">Precipitation: </td><td style=\" text-align:left\">".$precipitation."</td></tr>";
		$html .= "<tr><td style=\" text-align:left\">Chance of Rain: </td><td style=\" text-align:left\">".$rain_chance."</td></tr>";
		$html .= "<tr><td style=\" text-align:left\">Wind Speed: </td><td style=\" text-align:left\">".$wind_speed."</td></tr>";
		$html .= "<tr><td style=\" text-align:left\">Dew Point: </td><td style=\" text-align:left\">".$dew_point."</td></tr>";
		$html .= "<tr><td style=\" text-align:left\">Humidity: </td><td style=\" text-align:left\">".$humidity."</td></tr>";
		$html .= "<tr><td style=\" text-align:left\">Visibility: </td><td style=\" text-align:left\">".$visibility."</td></tr>";
		$html .= "<tr><td style=\" text-align:left\">Sunrise: </td><td style=\" text-align:left\">".$sunrise."</td></tr>";
		$html .= "<tr><td style=\" text-align:left\">Sunset: </td><td style=\" text-align:left\">".$sunset."</td></tr>";
		$html .= "</table></div>";
		echo $html;
	?>
		 <?php endif; ?>
</div>
</body>
</html>
