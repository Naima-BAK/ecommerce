<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}




  include "includes/functions.php";
   $categories = getAllCategories();
   
   if(isset($_GET['id']) ){

      $produit = getProduitById($_GET['id']);
   }

   //Description produit :

  if(isset($_POST['btn-ajouter'])){
     
    ajoutCommentaire();
    
 }$comments = getAllCommentaires();
   

?>
 



    <!DOCTYPE html>
    <html>
      <head>
          <link rel="stylesheet" href="css/styleDescription.css">
        <link rel="stylesheet" href="css/styleHome.css" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
        <!-- CSS -->
      
        <meta name="robots" content="noindex,follow" />
    
      <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=E-s5WjhNEn9FP4AxSKwi3hBKtrI1awWxbuaorCLmUcJcawkUlDjcIHfPfAG4fe6v0epa6GNroJERJPWDX2cMiA" charset="UTF-8"></script></head>
  
      <body>
       

 
    
 

        <main class="container" style="margin-left:40px;">
    
          <!-- Left Column / Headphones Image -->
          <div class="left-column">
         
         
            <!-- <img data-image="blue" src="Ressources/images/k2.png" alt=""> -->
             <img data-image="" class="active" src="images/<?php echo $produit['image']; ?>" alt="" style="margin-top:50px;margin-right:20px;"> 
          </div>
    
    
          <!-- Right Column -->
          <div class="right-column" style="margin-left:80px;height:200px;">
    
            <!-- Product Description -->
            <h1 style="color:#ffc107;font-size:40px;"><?php echo $_SESSION['user_name'] ?></h1>
            <?php if(isset($_SESSION['etat']) && $_SESSION['etat'] == 0){  
             
             print '  <h1 style="color:red;"> Compte invalide </h1> ';}
          
          ?>
            <div class="product-description" >
              
              <h1 style="color:red"><?php echo $produit['nom']; ?></h1>
              <h3 style="color:hotpink"><?php echo $produit['classe']; ?></h3><br>
              <p style="color:blue;font-size:20px;"><?php echo $produit['description']; ?></p>
            
            </div><br>
            <!-- Product Configuration -->
            <!-- <div class="product-configuration"></div> -->
    
              <!-- Product Color -->
            
              <!-- Cable Configuration -->
              <div class="cable-config" style="color:blue">
              
    <p style="color:blue;font-size:20px;text-decoration:underline;">Taille:</p>
                <div class="cable-choose">
                  <button style="width:60px;height:40px;font-size:20px;text-align:center;color:blue;padding-bottom:40px;background-color:#ffc107;"><?php echo $produit['taille'];?></button>
                  
                </div>
    
                
              </div>
            
    
            <!-- Product Pricing -->
            <div class="product-price" style="width:200px;height:100px;margin-top:50px;">
            <p style="color:blue;font-size:30px;width:100px;margin-left:50px;text-align:center;"><?php echo $produit['prix']." DHS"; ?></p>
              
            <form action="actions/commander.php" method="POST" style="margin-left:100px;width:300px;height:100px;">
              <input type="hidden" value="<?php  echo $produit['id'] ?>" name="produit_id" id="produit_id">
                  
                <!-- <select name="quantite" id="">
                       <?php    
                         $i =$produit['quantite'];
                 
                       ?>
                 </select> -->
                 <input type="number" name="quantite" value="1" min="1" max="<?php echo $i ?>" style="margin-left: 50px;width:200px;background-color:#ffc107;text-align:center;color:blue;font-size:20px;border:0px;">
               <a href="Panier.php"> <button type="submit" id="btn-contact-form2" <?php if(isset($_SESSION['etat']) && $_SESSION['etat'] == 0 || !isset($_SESSION['etat'])){ echo "disabled";} ?>>Ajouter au panier</button></a> 

              
            </form>
            </div>
            
            </div>
           

         

        </main>
        <br><br>
        <hr>
        <br>
        <form method="POST" action="">
                  <input type="hidden" name="idp" value="<?php echo $produit['id']; ?>">
        <h2 style="margin-left: 170px;color:blue;text-decoration:underline;">Les Commentaires:</h2><br><br><br>
        <?php   
        foreach($comments as $c){
            print ' <p style="margin-left:50px;">
            <h3 style="color:red;margin-left:650px;">'.$c['name'].'</h3><h4 style="color:green;margin-left:620px;">
            '.$c['comment'].'</h4></p>';}
         ?><br><br>
        <div class="commentaires">
          <div>
              <textarea name="commentaire" class="comment" id="" cols="30" rows="10" placeholder="  --- Ajouter un commentaire ---" style="margin-left:70px;color:red;padding-left:20px;padding-top:10px;"></textarea>
       </div>
          <br>
          <div><button name="btn-ajouter" id="btn-contact-form2" style="margin-left:460px;">Ajouter</button></div>
        </div>
        </form>
        <!-- <br>
        <br>
        <br>
        <br><hr>
        <br>
        <h2>Produits similaires :</h2> -->
        <!-- <div class="div-2"> 
            
        <div class="row col-12 mt-4"> -->
<?php 
    //             foreach($classe as $c){
    //                  print ' <div class="col-3">
    //     <div class="card" style="width: 18rem;">
    //         <img width="300px" height="300px" src="images/'.$c['image'].'" class="card-img-top" alt="...">
    //         <div class="card-body">
    //              <h5 class="card-title">'.$c['nom'].'</h5>
    //               <p class="card-text">'.$c['description'].'</p>
    //               <a href="Description_Produit.php?id='.$c['id'].'"  class="btn btn-primary">Ajouter au panier</a>
    //        </div>
    //    </div>
    // </div>';
    //              }
               
                       
    //                ?>

<!--    
</div>      

            </div>        -->
<style>
    #btn-contact-form2 {
      position: relative;
      outline: none;
      border: none;
      background:#ffc107;
      cursor: pointer;
      font-weight: 600;
      padding: 10px;
      margin-left: 50px;
      width: 200px;
      margin-top:10px;
      /* margin-bottom:10px; */
      color: blue;
      font-size: 20px;
  }
    .div-2 {
    	
        width: 80%;
        height: 610px; 
    }
    .category{
        color: hotpink;
        font-size: 30px;
        text-align: center;
    }
   
    .divdiv{
        display: flex;
    }
    .p1{
        padding: 10px;
        margin: 20px;
        margin-left: 50px;
        background-color: white;
    }
    .produits{
        display: flex;
    }
    .tailles{
        padding: 10px;
    }
    .tailles input{
        width: 20px;
        height: 20px;
       margin: 20px;
    }
    .typeVetements{
        padding: 10px;
    } 
    
    .typeVetements input{
        width: 20px;
        height: 20px;
    }
    .typeVetements .types{
        padding: 20px;
        color: white;
    }
    .bot{
        display: flex;
    }
    .p1 button{
       
        width: 110px;
        height: 40px;
        /* margin: 10px; */
        color: white;
        background-color: red;
        border: 0;
    } 
    .p1 .bot2{
        margin-left: 30px;
    }
    .foot .mere .div1 h5{
color: #fff;
}

.foot{
  margin-top: 150px !important;
  height: 100px !important;
}
.foot .tab{
   text-align: center;
}
.foot .mere{
  display: flex;
}
.foot .mere .div2{
  margin-left: 800px !important;
  text-align: center;
}
.foot .mere .div1{
  margin-left: 100px !important;
  text-align: center;
  
}
</style>
    
        <!-- Scripts -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
        <script src="script.js" charset="utf-8"></script>
      </body>
      <script>
          $(document).ready(function() {

                  $('.color-choose input').on('click', function() {
                  var headphonesColor = $(this).attr('data-image');

                  $('.active').removeClass('active');
                  $('.left-column img[data-image = ' + headphonesColor + ']').addClass('active');
                  $(this).addClass('active');
});

});
      </script> -->
        <?php
          //  include "includes/footer.php";
         ?>


      </body>
      
      <footer class="foot" >
   <div class="mere" style="padding-top:10px;height:100px;background-color:black;margin-top:30px;">
     <div class="div1" style="width:200px;">
       <center><h5>Site web  E-commerce Queen </h5>
   <h5 style="color:#ffc107">Imane & Naima</h5></center></div>
     <div class="div2" style="margin-top:30px;width:100px;"><center>
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
    </html>
