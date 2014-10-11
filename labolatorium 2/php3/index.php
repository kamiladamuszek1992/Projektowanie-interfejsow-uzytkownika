<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="Description" content=" [wstaw tu opis strony] " />
  <meta name="Keywords" content=" [wstaw tu slowa kluczowe] " />
  <meta name="Author" content=" [dane autora] " />
  <meta name="Generator" content="kED2" />

  <title> [tytuł strony] </title>

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
      <td class="menu_t"><a class="menu_l" href="index.php?id=1">Strona Główna</a></td>
    </tr>
    <tr>
      <td class="menu_t"><a class="menu_l" href="index.php?id=2">Pokaż studentów</a></td>
    </tr>
    <tr>
      <td class="menu_t"><a class="menu_l" href="index.php?id=3">Dodaj studenta</a></td>
    </tr>
    <tr>
      <td class="menu_t"><a class="menu_l" href="index.php?id=4">Edytuj studenta</a></td>
    </tr>
    <tr>
      <td class="menu_t"><a class="menu_l" href="index.php?id=5">Usuń studenta</a></td>
    </tr>
    <tr>
      <td class="menu_t"><a class="menu_l" href="index.php?id=6">Szukaj</a></td>
    </tr>
    <tr>
      <td class="menu_t"><a class="menu_l" href="index.php?id=7">Szukaj AJAX</a></td>
    </tr>
    <tr>
      <td class="menu_t"><a class="menu_l" href="index.php?id=100">FORM1</a></td>
   </tr>

  </table>
		</td>
		<td valign="top" class="tresc">
		<?PHP
if(!isset($_GET["id"])) include("main.php");
if($_GET["id"]==1) include("main.php");
if($_GET["id"]==2) include("show.php");
if($_GET["id"]==3) include("add.php");
if($_GET["id"]==4) include("edit.php");
if($_GET["id"]==5) include("delete.php");
if($_GET["id"]==6) include("search.php");
if($_GET["id"]==7) include("searchajax.php");
if($_GET["id"]==100) include("form1.php");
if($_GET["id"]==101) include("form1action.php");
?>
		</td>
  </tr>
  <tr>
    <td colspan="2" height="50">stopka</td>
  </tr>

</table>
</body>
</html>
