<?php

@include 'config.php';


if(isset($_POST['submit'])){
   
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM register_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'Cet utilisateur existe déjà!';

   }else{

      if($pass != $cpass){
         $error[] = 'Le mot de passe est incorrect!';
      }else{
         $insert = "INSERT INTO register_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

    

   


};


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/styleRegister.css"> 

    

</head>
<style>
   .error-msg{
      color:red;
   }
   .compte{
    background-color: #ffc107 ;
    font-size: larger;
}
   .box{
    width: 500px;
    height: 580px;
    padding: 30px;
    top: 50%;
    position: absolute;
    left: 30%;
    transform: translate(-50%,-50%);
    background: rgba(0, 0, 0, 0.288);
    text-align: center;
}
#email::placeholder{
    color:white;
}
#password::placeholder{
    color:white;
}
#tele::placeholder{
    color:white;
}
#nom::placeholder{
    color:white;
}
</style>
<body >
    
    <img src="images\x7.png" alt="" >
    <form action="register_form.php" method="post" class="box" >
    <h1>S'inscrire</h1>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <div class="xx"> 
      <input type="text" name="name" required placeholder="Votre Nom" style="color:white">
      <input type="email" name="email" required placeholder="Votre email" style="color:white">
      <input type="password" name="password" required placeholder="Votre mot de passe" style="color:white">
      <input type="password" name="cpassword" required placeholder="Veuillez confirmer votre mot de passe" style="color:white">
      <select name="user_type" style="margin-top: 5px;margin-right: 5px;border:0px;background-color:purple;width:140px;height:30px;text-align:center;color:white;font-size:medium;">
         <option value="user"><b>User</b></option>
         <option value="admin"><b>Admin</b></option>
      </select>
      <input type="submit" name="submit" value="S'inscrire" style="background-color: #ffc107;color:white;border:0px;font-size:20px;"></div>
      <div class="msg">
      <h4 style="color:#ffc107;">Avez-vous un compte? <a href="login_form.php" style="text-decoration: none;color:white;">Connexion</a><br><br><a href="PAGE1.php"><img class="img0" src="Ressources/images/home.png"></a></h4>
      </div>
   </form>
    
</body>
</html>