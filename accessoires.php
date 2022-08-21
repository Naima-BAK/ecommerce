<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}



  include "includes/functions.php";
   $categories = getAllCategories();
   $accessoires = produitAccessoire();

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  <link rel="stylesheet" href="css/styleHome.css" type="text/css">
</head>

<style>
  .navbar{
background-color: pink;
}
#btn-contact-form2 {
    position: relative;
    outline: none;
    border: none;
    background: red;
    cursor: pointer;
    font-weight: 600;
    padding: 20px;
    margin-left: 10px;
    width: 200px;
    color: #ffc107;
}
.logo{
        margin-top: 0;
        margin-bottom: 1%;
        
    }
    .nav-links{
      margin-right: 400px;
    }
</style>
<body>

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
            <h1 style="color: red;margin-top:15px;"><span><?php echo $_SESSION['user_name'] ?></span></h1>
    <?php  if(isset($_SESSION['panier']) && is_array($_SESSION['panier'][3]))   {
          
          print' <a href="Panier.php" style="text-decoration:none;width: 0px;height:20px" ><img src="images/cart.png" style="width: 40px;height: 30px;"><h5 style="color:blue;width:10px;height:10px; margin-left:10px;">('.count($_SESSION['panier'][3]).')</a>';
      
      }else{
          print' <a href="Panier.php" style="text-decoration:none;width: 0px;height:20px"><img src="images/cart.png" style="width: 40px;height: 30px;"></a>(0)';
      }?>
        </nav>
    </div>


<div class="row col-12 mt-4">
<?php 
                foreach($accessoires as $a){
                     print ' 
        <div class="" style="width:280px;margin-left:60px;">
            <img width="200px" height="200px" src="images/'.$a['image'].'" class="card-img-top" alt="..." style="">
            <div class="card-body" >
                 <h5 class="card-title" style="color:#ffc107;font-size:25px;text-align:center;">'.$a['nom'].'</h5>
                  <p class="card-text" style="color:blue;font-size:25px;text-align:center;">'.$a['description'].'</p>
                  
                  <a href="Description_Produit.php?id='.$a['id'].'" class="btn" type="submit" id="btn-contact-form2">Ajouter au panier</a>
           </div>
       </div>
    ';
                 }
               
                       
                   ?>
</div>


</body>
</html>