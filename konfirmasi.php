<?php
    session_start();
    if (!$_SESSION['berhasil']){
        header("Location: login.php");
        die();
    }
?>
<?php   
    $np = $_POST['np'];
    $nt = $_POST['nt'];
    $no = $_POST['no'];
    if ($np == "" || $nt == "" || $no == ""){
        header("Location: booking.php");
        die();
    }
?>
<html>
    <head>
        <title>booking</title>

    <head>
    <body>
        <h1><p style="text-align:center">KONFIRMASI PEMBAYARAN</p></h1>
        <form action="hasil.php" method="post">
      <table>
      <tr>
        <td>Nama Pemesan</td> 
           <td>: 
             <?php echo $np=$_POST['np'];?></td> 
      </tr>
      <tr>
        <td>Nama Team</td> 
           <td>: <?php echo $nt=$_POST['nt']; ?></td> 
      </tr>
      <tr>
        <td>No. Telepon</td>
           <td>: <?php echo $no=$_POST['no']; ?></td>
      </tr>
      <tr>
        <td>Kode Booking</td>
           <td>: <?php echo $kb=$_POST['kb']; ?></td>
      </tr>
      <tr>
        <td>Tanggal Main</td>
          <td>: <?php echo $tgl=$_POST['tgl']; ?>
          <?php echo $bln=$_POST['bln']; ?>
          <?php echo $thn=$_POST['thn']; ?></td>
      </tr>
      <tr>
        <td>Waktu Bermain</td>
          <td>: pukul <?php echo $wb=$_POST['wb']; ?></td>
      </tr>
      <tr>
        <td>Lama Bermain</td>
          <td>: <?php echo $lb=$_POST['lb']; ?> jam</td>
      </tr>
      </table>
         </form>      
    </body>
</html>

<html>
  <head>
    <style>
      table, th, td {
      border: 1px solid black;
      }
    </style>
  </head>
  <body>

   <table style="width:100%">
    <tr>
      <th>Tanggal Pemesanan</th>
      <th>Tanggal Main</th> 
      <th>DP</th>
    </tr>
    <tr>
      <td><?php
      $mydate=getdate(date("U"));
      echo "$mydate[weekday], $mydate[month] $mydate[mday] $mydate[year]";
      ?></td>
      <td><?php echo $tgl=$_POST['tgl']; ?>
          <?php echo $bln=$_POST['bln']; ?>
          <?php echo $thn=$_POST['thn']; ?></td>
      <td><?php 
      $x =100000;
      $DP = $lb*$x;
      echo $DP;?></td>
    </tr>
   </table>
   </br></br>

  </body>  
</html>


<html>
 <head>
   <style type="text/css">
    body{background:#efefef;font-family:arial;}
    #wrapshopcart{width:70%;margin:3em auto;padding:30px;background:#fff;box-shadow:0 0 15px #ddd;}
    h1{margin:0;padding:0;font-size:2.5em;font-weight:bold;}
    p{font-size:1em;margin:0;}
    table{margin:2em 0 0 0; border:1px solid #eee;width:100%; border-collapse: separate;border-spacing:0;}
    table th{background:#fafafa; border:none; padding:20px ; font-weight:normal;text-align:left;}
    table td{background:#fff; border:none; padding:12px  20px; font-weight:normal;text-align:left; border-top:1px solid #eee;}
    table tr.total td{font-size:1.5em;}
    .btnsubmit{display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:2em 0;}
    form{margin:2em 0 0 0;}
    label{display:inline-block;width:auto;}
    input[type=text]{border:1px solid #bbb;padding:10px;width:30em;}
    textarea{border:1px solid #bbb;padding:10px;width:30em;height:5em;vertical-align:text-top;margin:0.3em 0 0 0;}
    .submitbtn{font-size:1.5em;display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:0.5em 0 0 8em;};
   </style>
 </head>
 
 <body>
  <div id="wrapshopcart">
   <h1>Struk Pembayaran</h1>
   <h2>Vamos Futsal</h2>
   <p>Silahkan save halaman ini ... </p>
   
   <h3>Berikut adalah data lengkap Anda : </h3>
   <label>Nama Pemesan: <?php echo $np=$_POST['np'];?> </label><br />
   <label>Nama Team : <?php echo $nt=$_POST['nt'];?> </label><br />
   <label>No Telp : <?php echo $no=$_POST['no'];?></label><br />
   
   <h3>Pesanan : </h3>
   <table>
      <tr><th width="30%"><h4>Tanggal Booking</h4></th><th width="20%"><h4>Kode Booking<h4></th><th width="30%"><h4>Tanggal Main<h4><th width="30%"><h4>Waktu Main<h4></th><th width="70%"><h3>Lama Main<h3></th><th width="20%"><h3>DP</h3></th></tr>

   <?php
        error_reporting(0);
        if (isset($_POST)){
          $_SESSION['data'][] = $_POST; ?>
          <tr>
          <?php foreach ($_SESSION['data'] as $data) : ?>

    <td><?php
    $mydate=getdate(date("U"));
    echo "$mydate[weekday], $mydate[month] $mydate[mday] $mydate[year]";
    ?></td>
    <td><?php echo $data['kb']; ?></td>
    <td><?php echo $data['tgl']; ?>
          <?php echo $data['bln']; ?>
          <?php echo $data['thn']; ?></td>
    <td>pukul <?php echo $data['wb']; ?></td>
    <td><?php echo $data['lb']; ?> jam</td>
    <td><?php 
      $x =100000;
      $DP = $data['lb']*$x;
      echo $DP;?></td>
    
    <?php 
    error_reporting(0);
    $total += $DP; ?>    

  </tr>
  <?php endforeach; ?>
   <?php } ?>
      
     <tr class="total"><td></td><td></td><td>Total</td><td><td></td></td><td><?php echo $total;?></td></tr>
   </table>  
   </tr>

   
  <tr>
    <p>Terima kasih telah membooking di Vamos Futsal!</p>
    <h3>Silahkan Lakukan Pembayaran ke:</h3>
    <p>Bank Jago</p>
    <p>Atas Nama: Vamos Futsal</p>
    <p>No. Rek: 101112131415</p>
  </tr>
   
   
  </div>
       <p style="text-align:center"><a href="booking.php">TAMBAH BOOKINGAN</a></p></br>
       <p style="text-align:center"><a href="menu.php">MENU</a></p></br>
       <p style="text-align:center"><a href="actionlogout.php">Logout</a></p>
  <a href=""></a><br /><br />
 </body>
</html>



