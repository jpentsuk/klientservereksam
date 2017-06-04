<?php

include("uhendus.php");

$abi6="INSERT INTO kasutajadtabel (nimi) VALUES 
('$_POST[nimi]')";
mysql_query($abi6);

echo "Kasutaja loodud";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kasutaja loodud</title>
</head>
<body>
<a href="lisamarge.php">Lisa enda kasutajale kommentaar</a>
</body>
</html>


