<?php 

$aktif = 2;

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
  <script src="dokuman.js"></script>
</head>
  <body>
  <button class="tablink" onclick="openPage('Ocak', this, '#ccff66')">Ocak</button>
  <button class="tablink" onclick="openPage('Subat', this, '#6699ff')" id="defaultOpen">Şubat</button>
  <button class="tablink" onclick="openPage('Mart', this, '#ffccff')">Mart</button>
  <button class="tablink" onclick="openPage('Nisan', this, '#FF9900')">Nisan</button>
  <button class="tablink" onclick="openPage('Mayis', this, '#00cc66')">Mayıs</button>
  <button class="tablink" onclick="openPage('Haziran', this, '#9999ff')" >Haziran</button>
  <button class="tablink" onclick="openPage('Temmuz', this, '#E3c1f5')">Temmuz</button>
  <button class="tablink" onclick="openPage('Agustos', this, '#00ffcc')">Ağustos</button>
  <button class="tablink" onclick="openPage('Eylul', this, '#ffff66')">Eylül</button>
  <button class="tablink" onclick="openPage('Ekim', this, '#ffcc66')" >Ekim</button>
  <button class="tablink" onclick="openPage('Kasim', this, '#ff66ff')">Kasım</button>
  <button class="tablink" onclick="openPage('Aralik', this, '#66ff66')">Aralık</button>

  <div id="Ocak" class="tabcontent">
    <h3>Ocak</h3>
    <p>Ocak Ayında Kaybolan Vatandaşlarımız</p>
    <div class="kayip">
      <div class="container">
		    <div class="ilan1" style="width: 300px;height: 450px;">
                <a id="1" href="kayiplar/kayip1b.png"><img id="resim" src="./kayiplar/kayip1s.png" /></a>
                <br>
                <b>Adı Soyadı:</b> 
                 Miraç Çiçek
                <br>
                <b>Yaşı:</b>
                 4
                <br>
                <b>Son görüldüğü yer:</b>
                 Ağrı
                <br>
                <b>Kaybolduğu tarih:</b>
                 31/01/2021
                <br>
                <b>Özel durumu/Hastalığı:</b>  
                 Yok
                <br>
                <b>Kaynak:</b>
                Ailesi tarafından bildirildi  
                <br>
        </div>
			  <div class="ilan2" style="width: 300px;height: 450px;">
                <a id="2" href="kayiplar/kayip2b.png"><img id="resim" src="./kayiplar/kayip2s.png" /></a>
                <br>
                <b>Adı Soyadı:</b> 
                 Fatma Uykun
                <br>
                <b>Yaşı:</b>
                 61
                <br>
                <b>Son görüldüğü yer:</b>
                 Ankara
                <br>
                <b>Kaybolduğu tarih:</b>
                 16/01/2021
                <br>
                <b>Özel durumu/Hastalığı:</b>  
                 -
                <br>
                <b>Kaynak:</b> 
                Ailesi tarafından bildirildi
                <br>
        </div>
        <div class="ilan3" style="width: 300px;height: 450px;">
                <a id="sayi" href="kayiplar/kayip3b.png"><img id="resim" src="./kayiplar/kayip3s.png" /></a>
                <br>
                <b>Adı Soyadı:</b> 
                 Süleyman Eken
                <br>
                <b>Yaşı:</b>
                 54
                <br>
                <b>Son görüldüğü yer:</b>
                 Amasya
                <br>
                <b>Kaybolduğu tarih:</b>
                 09/01/2021
                <br>
                <b>Özel durumu/Hastalığı:</b>  
                 Yok
                <br>
                <b>Kaynak:</b> 
                Ailesi tarafından bildirildi
                <br>
        </div>
      </div>
    </div>
  </div>
      <div id="Subat" class="tabcontent">
        <h3>Şubat</h3>
        <p>Şubat Ayında Kaybolan Vatandaşlarımız</p> 
          <div class="kayip">
            <div class="container">
              <div class="ilan4" style="width: 300px;height: 450px;">
              <a id="sayi" href="kayiplar/kayip4b.png"><img id="resim" src="./kayiplar/kayip4s.png" /></a>
                <br>
                <b>Adı Soyadı:</b> 
                 Mehmet Yarsız
                <br>
                <b>Yaşı:</b>
                 -
                <br>
                <b>Son görüldüğü yer:</b>
                 Bilecik
                <br>
                <b>Tarih: </b>
                 01/02/2021
                <br>
                <b>Özel durumu/Hastalığı:</b>  
                 -
                <br>
                <b>Kaynak:</b>  
                <a target=_blank href='https://yarin11.com/bilecik/kayip-vatandas-araniyor-h11305.html'>
                <u>https://yarin11.com/bilecik/kayip-vatandas-araniyor-h11305.html</u>
                </a>
                <br>
              </div>
            </div>   
          </div>
		  </div>

        <div id="Mart" class="tabcontent">
             <h3>Mart</h3>
             <p>Mart Ayında Kaybolan Vatandaşlarımız</p>
        </div>

        <div id="Nisan" class="tabcontent">
             <h3>Nisan</h3>
             <p>Nisan Ayında Kaybolan Vatandaşlarımız</p>
        </div>

        <div id="Mayis" class="tabcontent">
             <h3>Mayıs</h3>
             <p>Mayıs Ayında Kaybolan Vatandaşlarımız</p>
        </div>

        <div id="Haziran" class="tabcontent">
             <h3>Haziran</h3>
             <p>Haziran Ayında Kaybolan Vatandaşlarımız</p> 
        </div>

        <div id="Agustos" class="tabcontent">
             <h3>Ağustos</h3>
             <p>Ağustos Ayında Kaybolan Vatandaşlarımız</p>
        </div>

        <div id="Eylul" class="tabcontent">
            <h3>Eylül</h3>
            <p>Eylül Ayında Kaybolan Vatandaşlarımız</p>
        </div>

        <div id="Ekim" class="tabcontent">
            <h3>Ekim</h3>
            <p>Ekim Ayında Kaybolan Vatandaşlarımız</p>
        </div>

        <div id="Kasim" class="tabcontent">
            <h3>Kasım</h3>
            <p>Kasım Ayında Kaybolan Vatandaşlarımız</p>
        </div>

        <div id="Aralik" class="tabcontent">
             <h3>Aralık</h3>
             <p>Aralık Ayında Kaybolan Vatandaşlarımız</p>
          </div>

          <script src="fonksiyon.js"></script>


  </body>
</html>
<?php

require_once '_alt_kisim.php';