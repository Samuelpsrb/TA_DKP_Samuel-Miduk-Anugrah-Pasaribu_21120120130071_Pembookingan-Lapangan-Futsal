<?php
    session_start();
    if (!$_SESSION['berhasil']){
        header("Location: login.php");
        die();
    }
?>

<html>
<title>MENU</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="booking.php" class="w3-bar-item w3-button">Booking</a>
  <a href="riwayat.php" class="w3-bar-item w3-button">Riwayat Booking</a>
  <a href="actionlogout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>Selamat datang!!
  <div class="w3-container">
    <h1>Vamos Futsal</h1>
  </div>
</div>

<img src="image2.jpg" alt="image" class="w3-image" >

 <h2> Fasilitas </h2>

<div class="w3-row-padding w3-theme">

<div class="w3-third w3-section">
<div class="w3-card-4">
<img src="image3.jpg" style="width:100%">
<div class="w3-container w3-white">
<h4>Lapangan</h4>
<p>Lapangan yang kami sediakan selalu dalam keadaan bersih.
Setiap sisi lapangan terdapat jaring agar penonton dapat menikmati
pertandingan dengan aman dan nyaman.</p>
</div>
</div>
<img src="image6.jpg" alt="image" style="width:100%">
</div>

<div class="w3-third w3-section">
<div class="w3-card-4">
<img src="image4.jpg" style="width:100%">
<div class="w3-container w3-white">
<h4>Penerangan</h4>
<p>Penerangan tidak kalah pentingnya dalam suatu pertandingan.
Disini kami menyediakan penerangan yang memadai untuk terselenggaranya pertandingan baik siang maupun malam hari.</p>
</div>
</div>
<img src="image6.jpg" alt="image" style="width:100%">
</div>


<div class="w3-third w3-section">
<div class="w3-card-4">
<img src="image5.jpg" style="width:100%">
<div class="w3-container w3-white">
<h4>Parkir</h4>
<p>Lahan parkir yang luas sehingga dapat menampung banyak kendaraan para pengunjung.</p> 
</div>
</div>
<img src="image6.jpg" alt="image" style="width:100%">

<br><br><br>
</div>
</div>
</div>

 <h3>Info Kontak</h3>
 <p>No. Telepon : +62 812 3456 7890</p>
 <p>Email       : Vamosfutsal@gmail.com</p>
 </br>

 <h3>Alamat</h3>
 <p>Jl. Perintis Kemerdekaan No. 10, Kota Medan, Sumatera Utara</p>

<img src="image7.jpg" alt="image" style="width:100%">

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>
