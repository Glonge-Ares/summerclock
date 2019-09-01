<?php
ini_set('date.timezone', 'Europe/Moscow');
if (date("z") >= 151){
$days = (365 - date("z")) + 151;
}else{$days = 151 - date("z");}
$summer_passed = ((((365 - $days) * 24+date("H"))*60+date("i"))*60+date("s"))/31556926*100;
$summer_left = 100 - $summer_passed;

if (date("n") >= 5 && date("n") <= 12){
$month_left = ((12 - date("n"))+5);
}
else
{
$month_left = 5-date("n");
}

if (date("n") >= 6 && date("n") <= 12){$summer_year = date("Y")+1;}else{$summer_year = date("Y");}

$days_left = date("t") - date("j");
$hour_left = (24-(date("H")))-1;
$min_left = 60 - date("i");
$sec_left = 60 - date("s");
if (date("m") == 5){$month_left = 0;}

$gradient_color;

if(date("H") > 18 || date("H") < 6) //Night Mode
{
    $gradient_color = "background: linear-gradient(131deg, #000000,  #250166 );";
}
else
{
    $gradient_color = "background: linear-gradient(131deg, #4af5ef, #e750f7);";
}

/*
	<table width="70%">
	<tr><td>
	<div id="passed"><center><?php echo round($summer_passed,3);?>%</center></div>
	<div id="left"><center><?php echo round($summer_left,3);?>%</center></div></td></tr>
	</table>

*/




?>


<html>
	<head>
		<title>SummerClock</title>
	</head>

	<style>

	
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OX-hpOqc.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OVuhpOqc.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OXuhpOqc.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OUehpOqc.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OXehpOqc.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OXOhpOqc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OUuhp.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

	
	body {
	height: 100%;
	overflow: hidden;
	color: #fff;
	background: linear-gradient(-45deg, #78dae6, #f07d92, #23A6D5, #23D5AB);
	<?php echo $gradient_color; ?>

	background-size: 400% 400%;
	-webkit-animation: Gradient 15s ease infinite;
	-moz-animation: Gradient 15s ease infinite;
	animation: Gradient 15s ease infinite;
	
	    
	}

 @-webkit-keyframes Gradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes Gradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes Gradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}


	#information{
	height: 55%;
	width:100%;
	position: absolute;
	top:25%;
	left:0%;

	font-size: 200%;
	font-size: 35px;
	line-height: 0.65;
	-moz-border-radius: 20px;
	border-radius: 20px;
	text-indent: -20%
	
	}
	
	#left
	{
	height: 8%;
	width: <?php echo $summer_left; ?>%;
	background: #FA8072;
	float:left
	}	


	
	#passed
	{
	height: 8%;
	width: <?php echo $summer_passed; ?>%;
	background: #20B2AA;
	float:left;
	
	
	}
	
    h1
    {
    font-family: 'Open Sans';
	font-weight: 300;
    }

	</style>

		
	
	<body>

	<center>
	<p><img src="./logo.png" alt="SummerClock" height="160px" width="620px"></p>
	<div id="information">
	<p><h1>Total: <?php echo $days; ?> days</h1></p>
	<p><h1>Months: <?php echo $month_left; ?></h1></p>
	<p><h1>Days: <?php echo $days_left; ?></h1></p>
	<p><h1>Hours: <?php echo $hour_left; ?></h1></p>
	<p><h1>Minutes: <?php echo $min_left; ?></h1></p>
	<p><h1>Seconds: <?php echo $sec_left; ?></h1></p>
	
	

	
	</div>
	</center>


		
	<audio autoplay="" loop="" id="bg-music"><source src="./audio/warpath.mp3"></audio>
	
	
	</body>
</html>
