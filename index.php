<?php 

header('content-type:text/plain');


$sessionId   = $_REQUEST["sessionId"];
$serviceCode = $_REQUEST["serviceCode"];
$phoneNumber = $_REQUEST["phoneNumber"];
$text        = $_REQUEST["text"];

if (empty($text)) {

	echo "CON Choose language:\n

	1:English\n
	2:Kiswahili\n
	
";
	
}

if ($text=="*1") {
echo "
1.MyAccount\n
2.inquire\n
3.register



";
	# code.
}


if ($text=="*2") {
	# code...
	echo "
1.Jisajili
2.Uliza
3.Akauti
	";
}

else if ($text=="*1*1") {
echo "Select your Choice:\n

1.fee\n
2.Exam results\n
3.School calender\n
4.Time table

";

	# code...
}



else if ($text=="*2*2") {
echo "Select your Choice:\n

1.Karo\n
2.Matokeo ya Mtihani\n
3.Kalenda ya shule\n
4.Ratiba

";

	# code...
}

























 ?>