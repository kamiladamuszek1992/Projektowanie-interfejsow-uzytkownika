<h2>To jest formularz obsługujšcy formularz <tt>form1.php</tt></h2
>
<p>Podałe następujšce dane:</p>
<?PHP
echo "<b>Liczba1:</b> ".$_POST["liczba1"]."<br>";
echo "<b>Liczba2:</b> ".$_POST["liczba2"]."<br>";
$suma = $_POST["liczba1"] + $_POST["liczba2"];
echo "<b>Suma podanych liczb wynosi: </b>";
echo $suma;
?>
