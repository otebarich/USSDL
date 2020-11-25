<?php 

header('Content-type: text/plain');


$sessionId   = $_REQUEST["sessionId"];
$serviceCode = $_REQUEST["serviceCode"];
$phoneNumber = $_REQUEST["phoneNumber"];
$text        = $_REQUEST["text"];


$exploded_text=explode("*", $text);


$counts=count($exploded_text);


// echo "$counts";




if($counts==1)
{
	mainmenu();
}

else if($counts==2)
{

	if($exploded_text[1]==1)
	{
		echo "CON What are you interested at?\n
	Select language\n
	1:Fee Balance\n
	2:Exam Results";
	}
	
	if($exploded_text[1]==2)
	{
		echo "CON Ungependa nini?\n
	Select language\n
	1:Salio la karo\n
	2:Jawabu za mitihani";
	}


	if($exploded_text[1]==3)
	{
		echo "CON Enter Your Name?\n

	";
	}
   



}



else if($counts==3){

	if($exploded_text[1]==1 && $exploded_text[2]==1)
	{
		echo "CON Enter Admission Number to get Fee balance";
	
	}

	   if($exploded_text[1]==1 && $exploded_text[2]==2)
	{
		echo "CON Enter Admission Number to get the Exam results ";
	
	}

	if($exploded_text[1]==2 && $exploded_text[2]==1)
	{
		echo "CON Weka  Admission Number upate salio la karo";
	
	}

	   if($exploded_text[1]==2 && $exploded_text[2]==2)
	{
		echo "CON weka Admission Number upate maki \n
		 ";
	
	}

	if($exploded_text[1]==3 && $exploded_text[2])
	{
		echo "CON Enter your admission number";
	
	}
}


else if($counts==4){

	
	if($exploded_text[1]==3 && $exploded_text[2] && $exploded_text[3])
	{
		// echo "$exploded_text[3]";

		// echo "$exploded_text[2]";

		$db=mysqli_connect("localhost","root","","ussd");

		$qr=mysqli_query($db,"INSERT INTO records(Name,Ad_no) VALUES ('$exploded_text[2]','$exploded_text[3]')");

		if ($qr) {
			echo "Registration succeful";
			# code...
		}


	}



	if($exploded_text[1]==1 && $exploded_text[2]==1)
	{
		// echo "$exploded_text[3]";

		// echo "$exploded_text[2]";

		$db=mysqli_connect("localhost","root","","ussd");




$q="SELECT * FROM records WHERE Ad_no='$exploded_text[3]'";


	
$row=mysqli_query($db,$q);
if ($row) {

while($array=mysqli_fetch_array($row))
{

echo "

 Hello $array[1] your fee balance is $array[3]Ksh 


";

}
// else if(!$row){echo "gswga";}

}

	}


if($exploded_text[1]==1 && $exploded_text[2]==2)
	{
		// echo "$exploded_text[3]";

		// echo "$exploded_text[2]";

		$db=mysqli_connect("localhost","root","","ussd");




$q="SELECT * FROM records WHERE Ad_no='$exploded_text[3]'";


	
$row=mysqli_query($db,$q);
if ($row) {

while($array=mysqli_fetch_array($row))
{

echo "

 Hello $array[1] your scored: $array[4]


";

}
// else if(!$row){echo "gswga";}

}







	}











}












function mainmenu(){

	echo "CON Welcome to Riccatti College\n
	Select language\n
	1:English\n
	2:Kiswahili\n
	3:Register";
}


// $db=mysqli_connect("localhost", )


 ?>