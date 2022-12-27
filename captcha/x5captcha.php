<?php
include("../res/x5engine.php");
$nameList = array("jhe","5mx","6rz","v4g","vy6","dpc","54u","gxx","vph","3u5");
$charList = array("Y","G","R","6","H","2","S","7","A","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
