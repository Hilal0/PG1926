<html>
<head>
 <title> Asal Sayı Bulma Sonuç Ekranı</title>
 <link rel="stylesheet" href="asal.css">
</head>
 
<body id = "body">
<?php
$sayi = $_POST['sayi'];
$asal = 0; $x = 2;
do
{
  if($sayi == 2){
    $sonuc="Asal Sayıdır";
  }
	elseif ($sayi % $x == 0)
	{
		$asal = 1;
	}
	$x++;
}
while($sayi > $x);
 
if ($asal == 1)
{
	$sonuc="Asal Sayı Değildir";
}
else
{
	$sonuc="Asal Sayıdır";
}
?>
 
<table id ="table">
  <tr>
    <td>Girilen Sayı:</td>
    <td><?php echo $sayi; ?></td>
  </tr>
  <tr>
    <td>Sonuç:</td>
    <td><?php echo $sonuc; ?></td>
  </tr>
</table>

<A HREF="javascript:javascript:history.go(-1)">Geri dön</A>
 
</body>
</html>