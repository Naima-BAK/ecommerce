<?php


@include 'config.php';
include "includes/functions.php";
session_start();

$total=0;
if(isset($_SESSION['panier']))
{
$total = $_SESSION['panier'][1] ;
}

$commandes = array();
if(isset($_SESSION['panier']))
{
  if(count($_SESSION['panier'][3]) > 0)
  {
    $commandes = $_SESSION['panier'][3];
  }
}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylePaiement.css">
    <link rel="stylesheet" href="css/styleHome.css">

</head>
<body>
    
<style>
   .header .logo{
           margin-left: 40%;
    }
    .ccc{
        width: 1355px;
        height: 500px;
        margin-left: 0;
    }
    #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show { /* le msg qui s'affiche lorqu'on clique sur button payer */
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
h3 {
  font-size: 16px;
	color: #ffc107;
  letter-spacing: 1px;
	text-align: left;
  line-height: 2;
}
body,
html {
  height: 100%;
  font-family: 'Quicksand', sans-serif;
  font-weight: 400;
  overflow: hidden;
}
h2 {
  font-size: 30px;
	color: #ffc107;
	text-align: center;
  line-height: 2.8;
}
#btn-contact-form2 {
      position: relative;
      outline: none;
      border: none;
      background:#ffc107;
      cursor: pointer;
      font-weight: 600;
      /* padding: 10px; */
      /* margin-left: 10px; */
      width: 100px;
      margin-top:10px;
      margin-bottom:10px;
      color: blue;
      font-size: 20px;
      height:25px;
  }
</style>





    <div class="header">
        <nav>
            <img src="Ressources/images/logo.png" class="logo" alt="logo" style="margin-top: 10px;margin-left:0px;">
           
        </nav>
    </div>
<img class="ccc" src="Ressources/images/img.jpeg" alt="" style="width:1540px;height:700px;">


    <div class='checkout'>
       
        <div class='order' >
            <h2>Vos commandes </h2>
                         <!-- le scrollbar : overflow-->
            <ul class='order-list' style="overflow: auto;"> 
              <li style="overflow: auto;height:200px;"> <?php foreach($commandes as $index =>$commande){
    
    print '<br><h1 style="font-size:20px;text-align:center;">Nom: '.$commande[5].'<h2 style="font-size:20px;color:hotpink;text-align:center;">Quantité: '.$commande[0].'</h2>';}?></h3></li>
            </ul>
            <br><br>
            <h3 class='total'>Total:</h3><h1><?php  echo  $total.' DHS';?></h1>
            <a href="user_page.php"><button id="btn-contact-form2">Retourner</button></a>
        </div>

        <h2>Paiement</h2>
        <div id='payment' class='payment'>
            <div class='card'>
                <div class='card-content'>
                    <svg id='logo-visa' enable-background="new 0 0 50 70" height="70px" version="1.1" viewBox="0 0 50 50" width="70px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><polygon clip-rule="evenodd" fill="#f4f5f9" fill-rule="evenodd" points="17.197,32.598 19.711,17.592 23.733,17.592     21.214,32.598   "/><path clip-rule="evenodd" d="M35.768,17.967c-0.797-0.287-2.053-0.621-3.596-0.621    c-3.977,0-6.752,2.029-6.776,4.945c-0.023,2.154,1.987,3.358,3.507,4.08c1.568,0.738,2.096,1.201,2.076,1.861    c0,1.018-1.238,1.471-2.395,1.471c-1.604,0-2.455-0.232-3.773-0.787l-0.53-0.248l-0.547,3.348    c0.929,0.441,2.659,0.789,4.462,0.811c4.217,0,6.943-2.012,6.979-5.135c0.025-1.692-1.053-2.999-3.369-4.071    c-1.393-0.685-2.246-1.134-2.246-1.844c0-0.645,0.723-1.306,2.295-1.306c1.314-0.024,2.268,0.271,3.002,0.58l0.365,0.167    L35.768,17.967z" fill="#f4f5f9" fill-rule="evenodd"/><path clip-rule="evenodd" d="M46.055,17.616h-3.102c-0.955,0-1.688,0.272-2.117,1.24    l-5.941,13.767h4.201c0,0,0.688-1.869,0.852-2.262c0.469,0,4.547,0,5.133,0c0.123,0.518,0.49,2.262,0.49,2.262h3.711    L46.055,17.616 M41.1,27.277c0.328-0.842,1.609-4.175,1.609-4.175c-0.041,0.043,0.328-0.871,0.529-1.43l0.256,1.281    c0,0,0.773,3.582,0.938,4.324H41.1z" fill="#f4f5f9" fill-rule="evenodd"/><path clip-rule="evenodd" d="M13.843,17.616L9.905,27.842l-0.404-2.076    c-0.948-2.467-2.836-4.634-5.53-6.163l3.564,12.995h4.243l6.312-14.982H13.843z" fill="#f4f5f9" fill-rule="evenodd"/><path clip-rule="evenodd" d="M7.232,17.174H0.755l-0.037,0.333    c5.014,1.242,8.358,4.237,9.742,7.841l-1.42-6.884C8.798,17.507,8.105,17.223,7.232,17.174L7.232,17.174z" fill="#f4f5f9" fill-rule="evenodd"/></g></g></svg>
                    <h5>Card Number</h5>
                    <h6 id='label-cardnumber'>0000 0000 0000 0000</h6>
                    <h5>Expiration<span>CVC</span></h5>
                    <h6 id='label-cardexpiration'>00 / 0000<span>000</span></h6>
                </div>
                <div class='wave'></div>
           </div>
           <div class='card-form'>
                <p class='field'>
                    <input type='text' id='cardnumber' name='cardnumber' placeholder='1234 5678 9123 4567' pattern='\d*' title='Card Number' />
                </p>

                <p class='field space'>
                    <input type='text' id='cardexpiration' name='cardexpiration' placeholder="MM / YYYY" pattern="\d*" title='Card Expiration Date' />
                </p>

                <p class='field'>
                    <input type='text' id='cardcvc' name='cardcvc' placeholder="123" pattern="\d*" title='CVC Code' />
                </p> 
                <a href="actions/validerPanier.php"><button onclick="myFunction()" class='button-cta'>Payer</button></a>
                 <form  ><div id="snackbar">Payement effectué...</div>
                          <script>
                             function myFunction() {
                              var x = document.getElementById("snackbar");
                               x.className = "show";
                               setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
                                                   }
                          </script>   
                         
                 </form>      
            </div>
       </div>
       
  
 

</body>

</html>