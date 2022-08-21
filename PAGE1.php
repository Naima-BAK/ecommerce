

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleHome.css" type="text/css">
    <title>Eco_Queen</title>
</head>
<body>


<div class="header" >
        <nav >
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


    <ul class="slideshow">
        <li>
          <h3>Ecommerce_Queen <br> Nos produits</h3>
          
          <span>Slide One</span> </li>
        <li> <span>Slide Two</span> </li>
        <li> <span>Slide Three</span> </li>
        <li> <span>Slide Four</span> </li>
        <li> <span>Slide Four</span> </li>
        <li> <span>Slide Four</span> </li>
        <li> <span>Slide Four</span> </li>
        <li> <span>Slide Four</span> </li>
        <li> <span>Slide Four</span> </li>
        <li> <span>Slide Four</span> </li>
        <li> <span>Slide Four</span> </li>
        <li> <span>Slide Four</span> </li>
        <li> <span>Slide Four</span> </li>
        <li> <span>Slide Four</span> </li>
        <li> <span>Slide Four</span> </li>
      </ul>

</body>

<footer class="foot" style="padding-top: 30px;">
   <div class="mere">
     <div class="div1">
       <center><h5>Site web  E-commerce Queen </h5>
   <h5>Imane & Naima</h5></center></div>
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


  <style> html { min-height: 600px!important; }

body { height: 600px !important; 
background-color: black; }
.foot .mere .div1 h5{
color: #fff;
}

.slideshow li h3{
  margin-bottom: 300px !important;
  color: purple !important;
}

.foot{
  margin-top: 620px !important;
  height: 20px !important;
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
}
.foot .mere .div1{
  margin-left: 100px;
  text-align: center;
}
        .header{
    height: 80px !important;}
    .logo{
        margin-top: 0;
        margin-bottom: 1%;
        height: 70px !important;
    }

.slideshow {
  list-style: none;
  z-index: 1;
  
}

.slideshow li span {
  margin-top: 110px !important;
  width: 100%;
  height: 600px !important;
  position: absolute;
  top: 0px;
  left: 0px;
  color: transparent;
  background-size: cover;
  background-position: 50% 50%;
  background-repeat: none;
  opacity: 0;
  z-index: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-animation: imageAnimation 24s linear infinite 0s;
  -moz-animation: imageAnimation 24s linear infinite 0s;
  animation: imageAnimation 24s linear infinite 0s;
}

.slideshow li h3 {
  position: absolute;
  text-align: center;
  z-index: 2;
  bottom: 150px;
  left: 0;
  right: 0;
  opacity: 0;
  font-size: 2em;
  font-family: 'roboto', sans-serif;
  text-transform: uppercase;
  color: #fff;
  -webkit-animation: titleAnimation 24s linear 1 0s;
  -moz-animation: titleAnimation 24s linear 1 0s;
  animation: titleAnimation 24s linear 1 0s;
}
@media only screen and (min-width: 768px) {

.slideshow li h3 {
  bottom: 30px;
  font-size: 2em;
}
}
@media only screen and (min-width: 1024px) {

.slideshow li h3 { font-size: 2em; }
}

.slideshow li:nth-child(1) span { background-image: url('images/e.jpg'); }

.slideshow li:nth-child(2) span {
  background-image: url('images/b.jpg');
  -webkit-animation-delay: 6s;
  -moz-animation-delay: 6s;
  animation-delay: 6s;
}

.slideshow li:nth-child(3) span {
  background-image: url('images/r3.jpg');
  -webkit-animation-delay: 12s;
  -moz-animation-delay: 12s;
  animation-delay: 12s;
}

.slideshow li:nth-child(4) span {
  background-image: url('images/d.jpg');
  -webkit-animation-delay: 18s;
  -moz-animation-delay: 18s;
  animation-delay: 18s;
}
.slideshow li:nth-child(5) span {
  background-image: url('images/t (4).jpg');
  -webkit-animation-delay: 24s;
  -moz-animation-delay: 24s;
  animation-delay: 24s;
}
.slideshow li:nth-child(6) span {
  background-image: url('images/r14.jpg');
  -webkit-animation-delay: 30s;
  -moz-animation-delay: 30s;
  animation-delay: 30s;
}
.slideshow li:nth-child(7) span {
  background-image: url('images/r1.jpg');
  -webkit-animation-delay: 34s;
  -moz-animation-delay: 34s;
  animation-delay: 34s;
}

.slideshow li:nth-child(8) span {
  background-image: url('images/r20.jpg');
  -webkit-animation-delay: 40s;
  -moz-animation-delay: 40s;
  animation-delay:40s;
}
.slideshow li:nth-child(9) span {
  background-image: url('images/r16.jpg');
  -webkit-animation-delay: 44s;
  -moz-animation-delay: 44s;
  animation-delay:44s;
}
 @-webkit-keyframes 
imageAnimation {  0% {
 opacity: 0;
 -webkit-animation-timing-function: ease-in;
}
 12.5% {
 opacity: 1;
 -webkit-animation-timing-function: ease-out;
}
 25% {
 opacity: 1;
}
 37.5% {
 opacity: 0;
}
 100% {
 opacity: 0;
}
}
@-moz-keyframes 
imageAnimation {  0% {
 opacity: 0;
 -moz-animation-timing-function: ease-in;
}
 12.5% {
 opacity: 1;
 -moz-animation-timing-function: ease-out;
}
 25% {
 opacity: 1;
}
 37.5% {
 opacity: 0;
}
 100% {
 opacity: 0;
}
}
@keyframes 
imageAnimation {  0% {
 opacity: 0;
 -webkit-animation-timing-function: ease-in;
 -moz-animation-timing-function: ease-in;
 animation-timing-function: ease-in;
}
 12.5% {
 opacity: 1;
 -webkit-animation-timing-function: ease-out;
 -moz-animation-timing-function: ease-out;
 animation-timing-function: ease-out;
}
 25% {
 opacity: 1;
}
 37.5% {
 opacity: 0;
}
 100% {
 opacity: 0;
}
}
@-webkit-keyframes 
titleAnimation {  0% {
 opacity: 0;
}
 12.5% {
 opacity: 1;
}
 25% {
 opacity: 1;
}
 37.5% {
 opacity: 0;
}
 100% {
 opacity: 0;
}
}
@-moz-keyframes 
titleAnimation {  0% {
 opacity: 0;
}
 12.5% {
 opacity: 1;
}
 25% {
 opacity: 1;
}
 37.5% {
 opacity: 0;
}
 100% {
 opacity: 0;
}
}
@keyframes 
titleAnimation {  0% {
 opacity: 0;
}
 12.5% {
 opacity: 1;
}
 25% {
 opacity: 1;
}
 37.5% {
 opacity: 0;
}
 100% {
 opacity: 0;
}
}

.no-cssanimations .slideshow li span { opacity: 1; }
</style>
</html>