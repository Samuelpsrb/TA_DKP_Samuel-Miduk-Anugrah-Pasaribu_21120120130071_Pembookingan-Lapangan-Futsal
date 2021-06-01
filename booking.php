<?php
    session_start();
    if (!$_SESSION['berhasil']){
        header("Location: login.php");
        die();
    }
?>

<html>
     <head>
          <title>Menu</title>
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <style>
             body
             {
                 background-image: url(image9.jpg);
                 background-repeat: no-repeat;
                 background-size: cover;
             }
           </style>
     </head>
     

     <body>
          <div class="w3-card-4 w3-orange w3-hover-shadow w3-padding-50-center" style="margin-left:auto; margin-right:auto; width:600px" >
          <h1><p style="text-align:center">Pengisian Data</p></h1>
          <p>Silahkan isi data pembookingan dengan benar!</p>
          </br></br>
          <?php
            if (isset($_POST['np']) || isset($_POST['nt']) || isset($_POST['no'])){
             if($_POST['np'] == "" || $_POST['nt'] == "" || $_POST['no']){
                echo "<h4 style='color:red'>Nama Pemesan Belum diisi</h4>";
                }
            }
            ?>
          <form action="konfirmasi.php" method="post">
                <label for="kb">Kode Booking :</label></td>
                <select name="kb" id="kb">
                <option value='VF1'>--VF1--</option>
                <option value='VF2'>--VF2--</option>
                </select>
                </br></br>

                <label for="tgl">Tanggal Main :</label></td>
                <select name="tgl">
                <?php
                 for($a=1; $a<=31; $a+=1){
                     echo"<option value=$a> $a </option>";
                 }
                 ?>
                 </select>

                 <select name="bln">
                 <?php
                 $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                 $jlh_bln=count($bulan);
                 for($c=0; $c<$jlh_bln; $c+=1){
                     echo "<option value=$bulan[$c]> $bulan[$c] </option>";
                 }
                 ?>
                 </select>

                 <select name="thn">
                 <?php
                 $now=date('Y');
                 for ($a=$now; $a<=2025; $a++){
                     echo "<option value='$a'>$a</option>";
                 }
                 echo "</select>";
                 ?>
                 </br></br>
                 
                 <label for="np">Nama Pemesan :</label>
                 <input name="np">
                 </br></br>
                 <label for="nt">Nama Team :</label>
                 <input name="nt">
                 </br></br>
                 <label name="no">No. Telepon :</label>
                 <input name="no">
                 </br></br>

                 <label for="wb">Waktu Bermain : pukul</label>
                 <select name="wb">
                 <?php
                 for ($c=1; $c<=24; $c++){
                      echo "<option value=$c>$c</option>";
                 }
                 ?>
                 </select>
                 </br></br>

                 <label for="lb">Lama Bermain :</label>
                 <select name="lb">
                 <?php
                 for ($b=1; $b<=12; $b++){
                      echo "<option value=$b>$b</option>";
                 }
                 ?>
                 </select> jam
                 </br></br>
                 
                 <p style="text-align:center"><input type="submit" value="Bayar"></p>
                 <p style="text-align:center"><a href="menu.php">Kembali</a></p>
                 <p style="text-align:center"><a href="actionlogout.php">Logout</a></p>
          </form>
           </div>
     </body>
</html>
