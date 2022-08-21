<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/StyleE_Commerce.CSS"> 
  <link rel="stylesheet" href="css/styleHome.css" type="text/css">

    <title>Contact</title>
    
</head>
<div class="header">
        <nav>
            <img src="Ressources/images/logo.png" class="logo" alt="logo">
            <ul class="nav-links">
                <li class="a"> <a href="user_page.php">Nos produits</a></li>
                <li class="a"> <a href="about.php">About</a></li>
                <li class="a"> <a href="Contact.php">Contact</a></li>
                <li class="a"> <a href="login_form.php">Login</a></li>
                <li class="a"> <a href="register_form.php">S'inscrire</a></li>
            </ul>
        </nav>
    </div>
<?php
  
    @include "includes/functions.php";
    
    
    if(isset($_POST['btn-ajouter'])){
      ajoutContact();
  }
 
?>
<style>
  .alert-success{
    background-color: hotpink;
    height:40px !important;
    width: 400px !important;
    text-align: center;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-right: 900px;
  }
  body{
    overflow: hidden;
  }
  .header{
    height: 80px !important;}
    .logo{
        margin-top: 0;
        margin-bottom: 1%;
        height: 70px !important;
    }
    
  /* .foot{
  margin-top: 620px !important;
  height: 20px !important;
  margin-bottom: 50px !important;
} */
.foot .tab{
   text-align: center;
}
.foot .mere{
  display: flex;
}
.foot .mere .div2{
  margin-left: 800px;
  text-align: center;
}
.foot .mere .div1{
  margin-left: 100px;
  text-align: center;
  color: white;
}
</style>
<body >
  
	<!-- section contact -->
  
    <section id="contact"style="width:1550px;height:664px;">
       <?php
         if (isset($_GET['ajouter']) && $_GET['ajouter'] == "ok"){
             print '<div class="alert alert-success" style="margin-top:30px;">
             Message envoyé avec succès
             </div>';}
             if (isset($_GET['error']) && $_GET['error'] == "ok"){
              print '<div class="alert alert-success" style="margin-top:30px;">
              Il faut remplir les champs !
              </div>';
         }
       ?>
      <fieldset style="text-align:center;padding-bottom: 40px;margin-top:70px;margin-bottom: 50px;background-color: transparent;"><legend><h1>Contactez-nous</h1></legend><br><br>
        <div class="contact">
            <div class="contact-information">
              <fieldset style="text-align: center;padding-bottom: 20px;background-color: transparent"><legend><h1>Plus d'informations sur nous</h1></legend><br><br><br>
               <!-- <h4>Addresse: <span></span></h4> -->
               <h4>Téléphone: <span>+ 0123 4444 78</span></h4><br><br><br><br>
               <h4>Email: <span>Queen@Commerce.com</span></h4><br><br><br><br>
               <h4>Notre site: <span>Queen.com</span></h4>
            </div>
              </fielset>
            <form action="contact.php" class="contact-form" method="POST">
                <input type="text" id="your-name" placeholder="Votre nom" name="nom">
                <input type="email" id="email" placeholder="Votre Email" name="email">
                <textarea type="text" id="message" placeholder="Votre Message" rows="10" name="message"></textarea>
                <button type="submit" id="btn-contact-form" name="btn-ajouter" value="ajouter"><span>Envoyer Message</span></button>
            </form>
        </fielset>
               <!-- <font color="purple"></font> -->
        </div></section>

        <div >
          <footer class="foot" style="background-color: black;">
   <div class="mere">
     <div class="div1">
       <center><h4>Site web  E-commerce Queen </h4>
   <h4>Imane & Naima</h4></center></div>
     <div class="div2"><center>
    <table class="tab">
        <tr> 
            <td><img src="images/inst.png" height="40" width="40" style="margin-right: 10px;"></td>
            <td><img src="images/fb.png" height="40" width="40" style="margin-right: 10px;"></td>
            <td><img src="images/twitter.png" height="40" width="40" style="margin-right: 10px;"></td>
            <td><img src="images/gmail.png" height="40" width="40" style="margin-right: 10px;"></td>
            <td><img src="images/phone.png" height="40" width="40"></td>
        </tr>
    </table>
  </center> </div>
   </div>
</footer>    
 </div>
</body>

</html>