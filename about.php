<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/about.css">
	
	<title>About</title>
</head>
<style>
    .header{
    height: 110px;
    width: 100%;
    padding: 0 8%;
    background: #080008;
    position: relative;
}
/* video{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    object-fit: cover;
    object-position: center;
} */
.text{
    /* justify-content: center; */
    /* display: flex; */
    /* align-items: center; */
    height: 500px;
    width: 1300px;
    z-index: 1;
    text-align: center;
    position: relative;
    margin-top: 150px;
}
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
nav{
    position: absolute;
    width: 100%;
    top:0;
    left:0;
    display: flex;

}
body{
    overflow: hidden;
}
/* .back-video{
    position:absolute;
    top:0;
    left:0;
    z-index: -1;

} */
</style>

<body background="images/aboutp.png">
    <!-- <video  type="video/mp4" src="" autoplay loop muted plays-inline class="back-video">
    </video>  -->
    
	<div class="header" style="position: relative;">
    

<nav>
            <img src="Ressources/images/logo.png" class="logo" alt="logo" style="margin-top: 10px;">
            <ul class="nav-links">
                <li class="a"> <a href="user_page.php">Nos produits</a></li>
                <li class="a"> <a href="about.php">About</a></li>
                <li class="a"> <a href="Contact.php">Contact</a></li>
                <li class="a"> <a href="login_form.php">Login</a></li>
                <li class="a"> <a href="register_form.php">S'inscrire</a></li>
            </ul>
        </nav>
    </div>
    
    

    
<div style="position: relative;" class="text">
<!-- <img src="images/aboutpic.png" alt=""> -->
        <h2 style="color:white;font-size:30px;">A propos de nous</h2><br>
        <h3 style="color:black;font-size:20px;">Nous sommes un ensemble de personnes qui vendent des produits enligne de différentes catégories: </h3><br>
        <h2 style="color:white;font-size:30px;"><pre>Produits de beauté </h2><br>
        <h2 style="color:brown;font-size:30px;"><pre>    Chaussures</h2><br>
        <h2 style="color:black;font-size:30px;"><pre>        Vetements </h2><br>
        <h2 style="color:white;font-size:30px;"><pre>            Accessoires </h2><br>
        <h2 style="color:brown;font-size:30px;"><pre>                                                    Nous sommes à votre disposition !</h2>
    </div>



</body>
</html>