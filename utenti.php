<?php

$n1=$_POST['nome'];
//$n2=$_GET['cognome'];


echo "<br>VALORE N1---- $n1";

echo "<br> Entrato in file parametr8xxxx"; 


	$get = $n1; // select_name will be replaced with your input filed name
	
	
	
	$selectedOption = "";
	
	$ii=1;
	
	
	$lun_n1=strlen($get);
	
	
		echo "<br>LUNGHEZZA N1 $lun_n1<br>";
		
		
		
		$alfa=0;
		
	for ($ii=0; $ii<=$lun_n1; $ii++)	
		
		{
			
				
/////////////////////////////////////////////////////////////////////				
				
				
				$mystring = $get{$ii};
$findme   = ',';


    echo "<br>VALORE MYSTRING : '$mystring'<br>";

$pos = strpos($mystring, $findme);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
	
	
    
} else {
    echo "<br>The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos<br>";
	
	$alfa++;
	$posizione[$ii]=$pos;
	
	
	
	
	
}
				
				
				
				
				
				
////////////////////////////////////////////////////////////////////////			
			
			
		}
		
		
		
		
		
		

	

echo "<br>Valore massimo $alfa<br>";



?>