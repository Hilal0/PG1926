<html>
<head>
 <title>Mükemmel Sayı Bulma Sonuç Ekranı</title>
 <link rel="stylesheet" href="mukemmel.css">
</head>

<body id = "body">
<?php
$sayi = $_POST['sayi'];
$toplama = 0;
for($x = 1; $x < $sayi; $x++){
  if($sayi % $x == 0) 
  {
    $toplama += $x; 
  }
}
if($toplama == $sayi) {
  $sonuc = "Mükemmel Sayı";
}
else{
  $sonuc = "Mükemmel Sayı Değildir";
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