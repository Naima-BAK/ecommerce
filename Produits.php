<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}



  include "includes/functions.php";
   $categories = getAllCategories();
   $vetements = produitVetement();

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
    
</head>

<style>
  .navbar{
background-color: pink;
}
</style>
<body>


<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img  width="140px" src="Ressources/images/logo.png" class="logo" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <?php 
                      foreach($categories as $categorie){
         print ' <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="'.$categorie['url'].'">'.$categorie['nomCat'].'</a>
          </li>'; }?>
         
        </ul>



        <?php  if(isset($_SESSION['panier']) && is_array($_SESSION['panier'][3]))   {
          
          print' <a href="panier.php"><button>Panier('.count($_SESSION['panier'][3]).')</button></a>';
      
      }else{
          print' <a href="panier.php"><button>Panier(0)</button></a>';
      }
        
        
        
        ?>




        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
      <h1 style="color: red;"><span><?php echo $_SESSION['user_name'] ?></span></h1>
    </div>
  </nav>
</header>
            <form class="d-flex" action="listVetement.php" method="POST">
               <input class="form-control me-2" type="search" placeholder="chercher" aria-label="Search" name="search">
               <button class="btn btn-outline-success" type="submit">chercher</button>
      </form>
  </div>
</nav>
<div class="row col-12 mt-4">
<?php 
                foreach($produits as $p){
                     print ' <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img width="300px" height="300px" src="images/'.$p['image'].'" class="card-img-top" alt="...">
            <div class="card-body">
                 <h5 class="card-title">'.$p['nom'].'</h5>
                  <p class="card-text">'.$p['description'].'</p>
                  <a href="Description_Produit.php?id='.$p['id'].'"  class="btn btn-primary">Ajouter au panier</a>
           </div>
       </div>
    </div>';
                 }
               
                       
                   ?>

   
</div>


</body>
</html>