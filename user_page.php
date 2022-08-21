<?php

@include 'config.php';

session_start();

 if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
 }


include "includes/functions.php";
$categories = getAllCategories();

if (!empty($_POST)){
 $produits = searchProduit($_POST['search']);
}else{
 $produits = getAllProducts();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<meta name="generator" content="Hugo 0.88.1">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">


<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=6Q9trRzSA8dKLQVuNghxUdJ4lUPwOTxjgssS_q86WupbqWa6YN9bAxTqz6zfZBhtYUqU6nF0f5-zdOPwNknKpSznyZ4n12s9oNv8ucCeGvA" charset="UTF-8"></script>
 <link rel="stylesheet" href="css/style.css">



<style>

.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


    /* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-top: 3rem;
  padding-bottom: 3rem;
  color: #5a5a5a;
  height: 700px !important;
  background-color: black;
}
.navbar{
background-color: pink;
}

/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}
.card-img-top{
  height: 620px !important;
}
/* Declare heights because of positioning of img element */
.carousel-item {
  height: 620px !important;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
/* rtl:end:ignore */


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  /* rtl:remove */
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}

.container h1,p,img{
  margin-bottom: 30px !important;
}

.foot .tab{
   text-align: center;
}
.foot .mere{
  display: flex;
}
.foot .mere .div2{
  margin-left: 800px;
  text-align: center;
  margin-bottom: 300px !important;
}
.foot .mere .div1{
  margin-bottom: 300px;
  margin-left: 100px;
  text-align: center;
}

#btn-contact-form {
    position: relative;
    outline: none;
    border: none;
    background: #ffc107;
    cursor: pointer;
    font-weight: 600;
    padding: 20px;
    color: purple;
}
#btn-contact-form2 {
    position: relative;
    outline: none;
    border: none;
    background: red;
    cursor: pointer;
    font-weight: 600;
    padding: 20px;
    margin-left: 30px;
    width: 150px;
    color: #ffc107;
}
.imguser{
  height: 90px;
  width: 90px;
}
body{
  overflow: hidden;
}


</style>
<body>
   

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="user_page.php"><img  width="140px" src="Ressources/images/logo.png" class="logo" alt="logo" style="margin-top: 10px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <?php 
                      foreach($categories as $categorie)
                      {
         print ' <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="'.$categorie['url'].'">'.$categorie['nomCat'].'</a>
          </li>'; 
        }
           
          ?>
         
        </ul>
       
      </div>
     <img class="imguser" src="images/utilisateur.PNG" alt="xx">
      <h1 style="color:#ffc107;font-size:medium;"><span><?php echo $_SESSION['user_name'] ?></span></h1>
      <a href="logout.php" class="btn" type="submit" id="btn-contact-form2">Logout</a>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-inner">
    <div class="carousel-item active" >
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="blue"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
         <center> <img  width="140px" src="Ressources/images/logo.png" class="logo" alt="logo">
            <h2 style="color:yellow">Nos produits </h2>
            <p style="color:yellow">Bienvenues </p>
            
          </div>
        </div>
      </div>
    <?php 
                foreach($produits as $produit){
    print '
    
      
      <div class="carousel-item">
      <img src="images/'.$produit['image'].'" class="card-img-top" alt="...">
        <div class="container">
          <div class="carousel-caption">
          <h1 style="color:purple">'.$produit['nom'].'</h1>
          <p style="color:purple">'.$produit['classe'].'</p>
            <p><a class="ddd" href="Description_Produit.php?id='.$produit['id'].'" ><button type="submit" id="btn-contact-form" >Description</button></a></p>
          </div>
        </div>
      </div>';
                } ?>

      
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden" >Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden" >Next</span>
    </button>
  </div>
</main>


<div class="foot" style="margin-bottom:10px;">
     <footer class="foot">
     <div class="mere">
       <div class="div1"style="color:white;">
         <center><h6 >Site web  E-commerce Queen </h6>
     <h6>Imane & Naima</h6></center></div>
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
    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>