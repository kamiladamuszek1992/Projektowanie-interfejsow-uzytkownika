<h2>Strona G��wna</h2>
<?PHP
echo "To jest m�j pierwszy skrypt w PHP";
echo "<br>";
$liczba1 = 5;
$liczba2 = 15;
$suma = $liczba1 + $liczba2;
echo "<b>Suma podanych liczb wynosi: </b> ";
echo $suma;
echo "<br>";

$a=10;
$b=20;
$c=35;
echo "Liczba a: ";
echo $a;
echo "<br>";
echo "Liczba b: ";
echo $b;
echo "<br>";
echo "Liczba c: ";
echo $c;
echo "<br>";
echo "Suma liczb: ";
echo $a+$b+$c;
echo "<br>";
echo "Iloczyn liczb: ";
echo $a*$b*$c;
echo "<br>";
echo "�rednia liczb: ";
echo ($a+$b+$c)/3;
echo "<br>";
echo "<br>";
$menu =
array( 0 => 'O mnie',
1 => 'Pokaz student�w',
2 => 'Dodaj studenta',
3 => 'Edytuj studenta',
4 => 'Usun studenta',
5 => 'Szukaj',
6 => 'Szukaj AJAX');

$ile=count($menu);
for ($i=0; $i<$ile;$i++)
	{
	echo $menu[$i].'<br/>';
	}
?>

