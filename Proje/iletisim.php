<?php 

$aktif = 4;

require_once '_ayarlar.php';

require_once '_ust_kisim.php';
require_once '_menu.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bulun</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="site.css">
</head>
<div class="ortakisim"><h1>İletişim</h1>
  <hr> 
  <div class="page-cont"> <p>Bulun sizlerden aldığı geri dönüşleri önemsiyor ve geri dönüşler ile gelişiyor. Aşağıdaki formu veya iletişim araçlarını kullanarak bizimle iletişime geçerek kayıp vatandaşlarımızı bulmada bizlere destek olabilirsiniz.</p> 
        <h4 class="contact-title4">Mail adresimiz:</h4>
        bulun@gmail.com</a>
        <h4 class="contact-title4">Sosyal medyada biz:</h4>
        Twitter: @bulun</a>
        <br> 
        Instagram: @bulun</a>
        <br> 
        Facebook: <a href="#">bulun</a>
        <br>
        <br> 
        <h4 class="contact-title4">Form</h4> <p>Aşağıdaki formu göndererek ilan ve önerilerinizi bizlere iletebilirsiniz.</p> 
        <form method="post"> 
         <input placeholder="Ad soyad" type="text" name="adsoyad" value="" required=""> 
         <input placeholder="E-Mail Adresiniz" type="mail" name="email" value=""> 
         <input placeholder="Telefon numaranız" type="phone" name="telno" value="">
         <textarea placeholder="Mesajınız" name="mesaj" rows="8" required=""></textarea>
         <input type="submit" name="gonder" value="Gönder"> 
        </form> 
    </div> 
  </div>  
</div>

<?php

require_once '_alt_kisim.php';
