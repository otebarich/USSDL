<?php 

header('Content-type: text/plain');


$sessionId   = $_REQUEST["sessionId"];
$serviceCode = $_REQUEST["serviceCode"];
$phoneNumber = $_REQUEST["phoneNumber"];
$text        = $_REQUEST["text"];


if(empty($text)){

echo "CON Select Language:\n
1:English\n
2:Kiswahili";

}

if($text=="*1"){

echo "CON What do you want?\n
1:To get fee balance\n
2:Exam results";
}

if($text=="*2"){

	echo "CON Nini unachopenda\n
	1:Salio la Karo\n
	2:Maki";

}




 ?>