<?php
include("uhendus.php");

$abi2="create table kasutajatemarkmetetabel

(
id			integer not null auto_increment, 
kasutaja_id  	integer null,  
marge    varchar(50) null,  

key voti(id) 
)";
mysql_query($abi2) or die(mysql_error());

?>