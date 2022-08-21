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

$categories = getAllCategories();
$chaussures = produitChaussure();

if (!empty($_POST)){
 $produits = searchProduit($_POST['search']);
}else{
 $produits = getAllProducts();
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Panier.css"> 
  <link rel="stylesheet" href="css/styleHome.css" type="text/css">
  
  
  
</head>
<style>
  .navbar{
background-color: pink;
}
/* body{
  overflow: hidden;
} */
/* .header{
    height: 80px !important;} */
    .logo{
        margin-top: 0;
        margin-bottom: 1%;
    }
    .nav-links{
      margin-right: 400px;
    }
    .navbar{
background-color: pink;
}
    #btn-contact-form2 {
      position: relative;
      outline: none;
      border: none;
      background:#ffc107;
      cursor: pointer;
      font-weight: 600;
      padding: 10px;
      margin-left: 30px;
      width: 200px;
      margin-top:10px;
      margin-bottom:10px;
      color: blue;
      font-size: 20px;
  }

  #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      background-color:#ffc107;
      color: blue;
    }
    /* body{
      overflow: hidden;
    } */
</style>

<body color="black">


<div class="header" >
        <nav >
            <img src="Ressources/images/logo.png" class="logo" alt="logo" style="margin-top:10px;">
            <ul class="nav-links">
            <?php 
                      foreach($categories as $categorie){
         print ' <li class="a">
            <a href="'.$categorie['url'].'">'.$categorie['nomCat'].'</a>
          </li>'; }?>
            </ul>
            <h1 style="color: red;margin-top:15px;font-size:40px;"><span><?php echo $_SESSION['user_name'] ?></span></h1>
    <?php  if(isset($_SESSION['panier']) && is_array($_SESSION['panier'][3]))   {
          
          print' <a href="Panier.php" style="text-decoration:none;width: 0px;height:20px"><img src="images/cart.png"  style="width: 40px;height: 30px;"><h5 style="color:blue;width:10px;height:10px; margin-left:20px;font-size:23px;margin-bottom:5px;">('.count($_SESSION['panier'][3]).')</a></h5>';
      
      }else{
          print' <a href="Panier.php" style="text-decoration:none;width: 0px;height:20px"><img src="images/cart.png" style="width: 40px;height: 30px;"></a>(0)';
      }?>
        </nav>
    </div>

    <br><br><br><br><div style="margin:auto;width:1500px;">
    <h1 style="color:blue"><pre>        Votre panier</h1><br><br>
    <hr color="red">
    <!-- <button type="submit" id="btn-contact-form"><span>Vider le panier</span></button> -->
   
    
    
    <table id="customers" style="margin-top:80px;margin-bottom:50px;width:1450px;margin-left:20px;text-align:center;">
      <tr >
        <th style="text-align: center;">Id</th>
        <th style="text-align: center;">Produit</th>
        <th style="text-align: center;">Quantité</th>
        <th style="text-align: center;">Total</th>
        <th style="text-align: center;">Actions</th>
      </tr>


      <?php
      foreach($commandes as $index =>$commande){
    
      print '<tr>
        <td>'.($index+1).'</td>
        <td>'.$commande[5].' </td>
        <td>'.$commande[0].' articles</td>
        <td>'.$commande[1].' DHS</td>
        <td><a href="actions/supprimerPanier.php?id='.$index.'"><img src="images/5598.jpg" alt="" style="width:42px;height:42px;"> </a></td>
      </tr>';

       } ?>

      <tr>
        <td colspan="2" ><pre> Total:  <?php  echo  $total.' DHS';?></pre> </td>
       
        <td colspan="3"><a href="paiement.php"> <button type="submit" id="btn-contact-form2" ><span>Valider le panier</span></button></a></td>
  
      </tr>
    </table>
      </div>
                  
  
</body>
</html>