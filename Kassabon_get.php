
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kassabon</title>
</head>
<body>
<?php
echo "Datum: " . date("d-m-Y") . "<br />";
echo $_POST["Name1"];
echo ": €" . $_POST["Price1"] . "<br />";
echo $_POST["Name2"];
echo ": €" . $_POST["Price2"] . "<br />";
echo $_POST["Name3"];
echo ": €" . $_POST["Price3"] . "<br />";
if(isset($_POST['Verzenden']))
{
    $vat = 1.21;
    $x=$_POST['Price1'];
    $y=$_POST['Price2'];
    $z=$_POST['Price3'];

    $sumEx=$x+$y+$z;
    echo "Totaalprijs ex BTW: €$sumEx <br />";
    $sumIn=$x+$y+$z*$vat;
    echo "Totaalprijs inc BTW: €$sumIn";
}
?>

</body>
</html>