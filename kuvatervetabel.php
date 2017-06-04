<?php


include ("uhendus.php");
$nimi ="SELECT nimi FROM kasutajadtabel";
$markmed="SELECT marge FROM kasutajatemarkmetetabel";
$result = mysql_query($nimi) or die(mysql_error());
$result1 = mysql_query($markmed) or die(mysql_error());

echo "<table><tr><td>Nimi:</td><td>Kommentaarid</td></tr>";



while($row = mysql_fetch_assoc($result) && $row1 = mysql_fetch_assoc($result1))
{
    echo "<tr>";
    echo "<td>" . $row['nimi'] . "</td>";
    echo "<td>" . $row1['marge'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

