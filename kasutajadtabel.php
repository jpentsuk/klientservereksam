<?php
include("uhendus.php");

$abi2="CREATE TABLE kasutajadtabel

(
id			integer not null auto_increment, 
nimi 		varchar(50) null,  


		  
	
 
key voti(id) 
)";
mysql_query($abi2) or die(mysql_error());

?>