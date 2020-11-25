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
1.MyAccount\n
2.inquire\n
3.register";
	}
	
	if($exploded_text[1]==2)
	{
		echo "CON Ungependa nini?\n
1.Jisajili
2.Uliza
3.Akauti";
	}
   



}



else if($counts==3){

	if($exploded_text[1]==1 && $exploded_text[2]==1)
	{
		echo "CON Enter Your Phone Number";
	
	}

	   if($exploded_text[1]==1 && $exploded_text[2]==2)
	{
		echo "CON Enter Query";
	
	}
	 if($exploded_text[1]==1 && $exploded_text[2]==3)
	{
		echo "CON Enter Password";
	
	}

	if($exploded_text[1]==2 && $exploded_text[2]==1)
	{
		echo "CON Weka numbari yako ya simu ";
	
	}

	   if($exploded_text[1]==2 && $exploded_text[2]==2)
	{
		echo "CON Andika Swali \n
		 ";
	
	}

   if($exploded_text[1]==2 && $exploded_text[2]==2)
	{
		echo "CON weka Nenosiri(nywila) \n
		 ";
	
	}

}


else if($counts==4){

	
	if($exploded_text[3])
	{
		echo "$exploded_text[3]";
	}



}












function mainmenu(){

	echo "CON Welcome to Riccatti College\n
	Select language\n
	1:English\n
	2:Kiswahili";
}


// $db=mysqli_connect("localhost", );


 ?>