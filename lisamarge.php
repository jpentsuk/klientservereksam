
<?php

header('charset=utf-8');

//

include("uhendus.php");
$kasutaja = "SELECT * FROM kasutajadtabel";
$result = mysql_query($kasutaja) or die(mysql_error());

while($row = mysql_fetch_assoc($result))
{
    $kasutaja .= "<option value='{$row['id']}'.{$row['nimi']}'>{$row['nimi']}</option>";


}

if ($_REQUEST[Saada]=="Saada") {
    echo "Tänan märkme lisamise eest!";

    include("uhendus.php");


    $abi="insert into kasutajatemarkmetetabel (id,kasutaja_id,marge) values 
('$_POST[id]','$_POST[kasutaja_id]','$_POST[marge]')";


    mysql_query($abi);


}
?>

                <form method="POST" action="lisamarge.php">

                    Vali kasutaja:<br/>
                    <select name='nimi_id'><? echo $kasutaja; ?></select>

                    <br>
                    <input type="text" name="marge">Märge<br/>
                    <br>
                    <input type="submit" name="Saada" value="Saada">


                </form>
                <br>


<a href="kuvatervetabel.php">Vaata kõiki kasutajaid ja kõiki märkmeid:</a>
</body>
</html>