<?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM register_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      $_SESSION['id'] = $row['id'];
      $_SESSION['etat'] = $row['etat'];
      $_SESSION['user-email'] = $row['email'];

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['email'] = $row['email'];
         header('location:admin/admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
        
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="css/styleLogin.css"> 


</head>
<body >
   
 <form action="" method="post" class="box">
    <h1>Connectez-vous</h1> 
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="Connexion" class="form-btn" style="background-color: #ffc107;color:white;border:0px;font-size:20px;width:120px;">
      <h4 style="color:#ffc107;">Vous n'avez pas de compte ?  <a href="register_form.php" style="text-decoration: none;color:white;">S'inscrire</a>
      <br><br><a href="PAGE1.php"><img class="img0" src="Ressources/images/home.png"></a></h4>
   </form>
    <img src="Ressources\images\img.jpeg" alt="">
</body>
</html>