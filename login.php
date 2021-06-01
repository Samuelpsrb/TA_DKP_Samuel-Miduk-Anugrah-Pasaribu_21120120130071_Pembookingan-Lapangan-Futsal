<?php
   error_reporting(0);
   //memulai session
   session_start();
   //mengambil isian dari form login
   if(isset($_POST['login'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   //variable pendefenisian kredensial
   $usernamelogin = 'Samuel';
   $passwordlogin = '123';
 
   //pengecekan kredensial login
   if ($username == $usernamelogin && $password == $passwordlogin){
      session_start(); 
      $_SESSION['berhasil']=true;
       header("Location: menu.php");
   }else {
       $salah = "<p style='color:red; text-align:center;'>username dan password salah</p>";
   }
  }
?>
<html>
     <head>
          <title>Login</title>
          <link rel="stylesheet" href="style.css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
     </head>

     <body><div class="login">

          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>

          <h2>Silahkan Login</h2>
        <?php echo $salah; ?>
        <form action="" method="post">
          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="username" placeholder="Username">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
          </div>

          <button type="submit" name="login" class="btn-login">Login</button>
        </form>  
      </div>
     </body>
</html>

        
