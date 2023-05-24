<!doctype html>
<html class="no-js" lang="zxx">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Тортики & Котики</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/themify-icons.css">
<link rel="stylesheet" href="css/slicknav.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<header>
<div class="header-area ">
<div id="sticky-header" class="main-header-area">
<div class="container-fluid p-0">
<div class="row align-items-center no-gutters">
<div class="col-xl-5 col-lg-5">

<!--Меню-->
<div class="main-menu  d-none d-lg-block">
<nav>
<ul id="navigation">
<li><a class="active" href="index.html">Главная</a></li>
<li><a href="#">Меню</a></li>
<li><a href="#">О нас</a></li>
<li><a href="#">Блог<i class="ti-angle-down"></i></a>
<ul class="submenu">
<li><a href="#">Котики</a></li>
<li><a href="#">Тортики</a></li>
</ul></li></ul></nav></div></div>
     
<!--Лого-->
<div class="col-xl-2 col-lg-2">
<div class="logo-img">
<a href="index.html"><img src="img/logo.png" style = "height: 70px;"></a>
</div></div>
    
<!--Соц сети-->
<div class="col-xl-5 col-lg-5 d-none d-lg-block">
<div class="book_room">
<div class="socail_links">
<ul>
<li><a href="#"><i class="fa fa-instagram"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
</ul></div>
   
<!--Номер телефона-->
<div class="book_btn d-none d-xl-block">
<a class="#" href="#" style="color:white;">+10 367 453 7382</a>
</div></div></div>
<div class="col-12"><div class="mobile_menu d-block d-lg-none"></div>
</div></div></div></div></div></header>

<!--Слайдер 1 фото-->
<div class="slider_area">
<div class="slider_active owl-carousel">
<div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-xl-9 col-md-9 col-md-12">
<div class="slider_text text-center">
<h3 style="font-size: 50px;">Неужели Котик<br>съел твой</h3><h4>тортик?</h4>
</div></div></div></div></div>

<!--Слайдер 2 фото-->
<div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-xl-9 col-md-9 col-md-12">
<div class="slider_text text-center">
<h3 style="font-size: 50px;">Неужели Котик<br>съел твой</h3><h4>тортик?</h4>
</div></div></div></div></div></div></div>

<!--Меню заголовок-->
<div class="best_burgers_area">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section_title text-center mb-80">
<span>Что может скушать котик?</span>
<h3>Только все самое вкусное</h3>
</div></div></div></div>

<!--Меню -->
<div class="todoApi">
<script>
let API = document.querySelector('.todoApi'); 

fetch('data.json')  
.then(response => response.json()) 
.then(api => {

for (let i = 0; i < 9; i++) {
let item = document.createElement('span'); 
item.innerHTML += 
'<a class="lake" id="'+ api[i].id +'"  alt="'+ api[i].named + ' | '
+ api[i].price + '"><img src="' +
api[i].img + '" /></a><button onclick="getButton(event)" class="button_recipe" value="'+ api[i].recipe +'" <p>?</p></button>';

API.appendChild(item) 
}});


function getButton(el){
alert('Рецепт: ' + el.target.value);
}



</script>


</div></div>
   


<!--Фото котика 1-->
<div class="Burger_President_area">
<div class="Burger_President_here">
<div class="single_Burger_President">
<div class="room_thumb">
<img src="img/cat/1.png" style="height: 650px;">
<div class="room_heading d-flex justify-content-between align-items-center">
<div class="room_heading_inner">
<h3>Довольный котик</h3>
<p>Ему купили наш очень вкусный тортик</p>
</div></div></div></div>
      
<!--Фото котика 2-->
<div class="single_Burger_President">
<div class="room_thumb">
<img src="img/cat/2.png" style="height: 650px;">
<div class="room_heading d-flex justify-content-between align-items-center">
<div class="room_heading_inner">
<h3>Недовольный котик</h3>
<p>Ему купили не наш вкусный тортик...</p>
</div></div></div></div></div></div>

<!--Это читает самый милый котик:3-->
   
<!--Подвал-->
<!--Блок 1-->
<footer class="footer">
<div class="footer_top">
<div class="container">
<div class="row">
<div class="col-xl-4 col-md-6 col-lg-4">
<div class="footer_widget text-center ">
<h3 class="footer_title pos_margin">New York</h3>
<p>5th flora, 700/D kings road, <br> 
green lane New York-1782 <br>
<a href="#">info@burger.com</a></p>
<a class="number" href="#" style="color:rgb(238, 102, 177);">+10 378 483 6782</a>
</div></div>
    
<!--Блок 2-->
<div class="col-xl-4 col-md-6 col-lg-4">
<div class="footer_widget text-center ">
<h3 class="footer_title pos_margin">California</h3>
<p>5th flora, 700/D kings road, <br> 
green lane New York-1782 <br>
<a href="#">info@burger.com</a></p>
<a class="number" href="#" style="color:rgb(238, 102, 177);">+10 378 483 6782</a>
</div></div>
  
<!--Блок 3-->
<div class="col-xl-4 col-md-12 col-lg-4">
<div class="footer_widget">
<h3 class="footer_title">Stay Connected</h3>
<form action="#" class="newsletter_form">
<input type="text" placeholder="Enter your mail">
<button type="submit" style="background-color:rgb(238, 102, 177);">Sign Up</button>
</form>
<p class="newsletter_text">Stay connect with us to get exclusive offer!</p>
</div></div></div>
    
<!--Соц сети-->
<div class="row justify-content-center">
<div class="col-lg-4">
<div class="socail_links text-center">
<ul>
<li><a href="#" style="background-color:rgb(238, 102, 177); color:white; border-color:white;">
<i class="ti-instagram"></i></a></li>
                                        
<li><a href="#" style="background-color:rgb(238, 102, 177); color:white; border-color:white;">
<i class="ti-twitter-alt"></i></a></li>
                                        
<li><a href="#" style="background-color:rgb(238, 102, 177); color:white; border-color:white;">
<i class="ti-facebook"></i></a></li>

<li><a href="#" style="background-color:rgb(238, 102, 177); color:white; border-color:white;">
<i class="fa fa-google-plus"></i></a></li>
</ul></div></div></div></div></div></footer>

<!--Скрипты -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
</body>
</html>