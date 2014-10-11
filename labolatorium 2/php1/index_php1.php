<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=iso-8859-2" />
  <meta name="Description" content=" [wstaw tu opis strony] " />
  <meta name="Keywords" content=" [wstaw tu slowa kluczowe] " />
  <meta name="Author" content=" [dane autora] " />
  <meta name="Generator" content="kED2" />

  <title> [tytuł strony] </title>

 <link href="piu/piu.css" rel="stylesheet" type="text/css">
</head>
<body>
<table class="glowna" width="960" align="center">
  <tr>
    <td colspan="2" class="naglowek"></td>
  </tr>
  <tr>
    <td width="180" height="400" valign="top">
		<table cellspacing="0"  width="200">
    <tr>
      <td class="menu_t"><a class="menu_l" href="">O mnie</a></td>
    </tr>
    <tr>
      <td class="menu_t"><a class="menu_l" href="">Pokaż studentów</a></td>
    </tr>
    <tr>
      <td class="menu_t"><a class="menu_l" href="">Dodaj studenta</a></td>
    </tr>
    <tr>
      <td class="menu_t"><a class="menu_l" href="">Edytuj studenta</a></td>
    </tr>
    <tr>
      <td class="menu_t"><a class="menu_l" href="">Usuń studenta</a></td>
    </tr>
    <tr>
      <td class="menu_t"><a class="menu_l" href="">Szukaj</a></td>
    </tr>
    <tr>
      <td class="menu_t"><a class="menu_l" href="">Szukaj AJAX</a></td>
    </tr>

  </table>
		</td>
		<td valign="top" class="tresc">
		
<?PHP
echo "To jest mój pierwszy skrypt w PHP";
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
echo "rednia liczb: ";
echo ($a+$b+$c)/3;
echo "<br>";
echo "<br>";
$menu =
array( 0 => 'O mnie',
1 => 'Pokaz studentów',
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


		</td>
  </tr>
  <tr>
    <td colspan="2" height="50">stopka</td>
  </tr>

</table>
</body>
</html>
