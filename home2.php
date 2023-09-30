<?php      
    include('connection.php');  
    $user = $_POST['user'];  
    $pass = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($user);  
        $password = stripcslashes($pass);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<p><center> Login successful </center></p>";  
        }  
        else{  
            echo "<h3><center> Login failed. Invalid username or password</center></h3>";  
        } 
        
        $sql = "INSERT INTO myusers (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";
        $result = mysqli_query($con, $sql); 



?> 
<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>محمد صلاح الفيزياء للثانوية العامة</title>
<!--[if lt IE 9]>
<script src="https://abdelmaaboud.com/frontend/js/html5shiv.min.js"></script>
<script src="https://abdelmaaboud.com/frontend/js/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="images/topiconn.png" />
<link href="https://abdelmaaboud.com/frontend/css/rtl/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://abdelmaaboud.com/frontend/css/rtl/global.css">
<link rel="stylesheet" href="https://abdelmaaboud.com/frontend/css/rtl/style.css">
<link rel="stylesheet" href="https://abdelmaaboud.com/frontend/css/rtl/kindergarten.css">
<link rel="stylesheet" href="https://abdelmaaboud.com/frontend/css/font-awesome.min.css">
<link rel="stylesheet" href="https://abdelmaaboud.com/frontend/css/linearicons-free.css">
<link rel="stylesheet" href="https://abdelmaaboud.com/frontend/css/animate.css">
<link rel="stylesheet" href="https://abdelmaaboud.com/frontend/vendor/flexslider/flexslider.css">
<link rel="stylesheet" href="https://abdelmaaboud.com/frontend/vendor/owlcarousel/owl.carousel.css">
<link rel="stylesheet" href="https://abdelmaaboud.com/frontend/vendor/fancybox/css/fancybox.css">
<style>
    .invalid-feedback {
        display: block;
        width: 100%;
        margin-top: .25rem;
        font-size: .875em;
        color: #dc3545;
    }
    .is-invalid{
        border-color: #dc3545;
        padding-right: calc(1.5em + .75rem);
        background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e);
        background-repeat: no-repeat;
        background-position: right calc(.375em + .1875rem) center;
        background-size: calc(.75em + .375rem) calc(.75em + .375rem);
    }
</style>
<link rel="stylesheet" href="https://abdelmaaboud.com/frontend/css/question-style.css">
<link rel="stylesheet" href="https://abdelmaaboud.com/frontend/css/navbar.css">
<style>
    @font-face {
        font-family: "Cairo", sans-serif;
        src: url(/frontend/fonts/Cairo-Black-900.ttf);
        font-weight: 800;
    }
    @font-face {
        font-family: "Cairo", sans-serif;
        src: url(/frontend/fonts/Cairo-Bold-700.ttf);
        font-weight:
        70;
    }
    @font-face {
        font-family: "Cairo", sans-serif;
        src: url(/frontend/fonts/Cairo-SemiBold-600.ttf);
        font-weight: 600;
    }
    @font-face {
        font-family: "DroidSerif", sans-serif;
        src: url(/frontend/fonts/Cairo-Regular-400.ttf);
        font-weight: 500;
    }
    @font-face {
        font-family: "DroidSerif", sans-serif;
        src: url(/frontend/fonts/Cairo-Light-300.ttf);
        font-weight: 400;
    }
</style>
<style>
    @media (max-width:992px){
        
        .lecture-group{
            flex-direction:column;
        }   
    }
    
</style>
</head>
<body>

<header class="site-header home-one" id="masthead" style="position: sticky;
    top: 0px;
    z-index: 300000;
    background-color: white;">
<div class="container">
<div class="row">
<div class="site-branding col-xs-12 col-sm-3"> <a href="https://abdelmaaboud.com"><img alt="educationpress" class="brand" src="images/homeuser.png" /></a> </div>
<nav class="main-navigation navbar navbar-default" id="site-navigation">
<div class="navbar-header" style="
    align-items: center;
    display: flex;
    justify-content: flex-end;
    width: 100%;">

<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="collapse navbar-collapse navbar-ex1-collapse">
<ul class="nav navbar-nav">

<li class="active"><a href="https://abdelmaaboud.com">الرئيسية</a></li>
<li class><a href="https://abdelmaaboud.com/lectures">المحاضرات</a></li>
<li class><a href="https://abdelmaaboud.com/exams">امتحانات</a></li>
<li class><a href="https://abdelmaaboud.com/lecture-questions">أسئلة/أجوبة</a></li>

<li class="dropdown profile-drop-down-1">
<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="https://abdelmaaboud.com#">
حسابي <span class="caret"></span></a>
<ul class=" dropdown-menu" role="menu">
<li><a href="https://abdelmaaboud.com/profile">
<div class="con-img-drop-down ">
<img src="images/account.png">
</div>
تفاصيل الحساب</a></li>
<li><a href="https://abdelmaaboud.com/profile/orders">
<div class="con-img-drop-down ">
<img src="/frontend/images/price-list.png">
</div>
الطلبات</a></li>
<li>
<a href="https://abdelmaaboud.com/books/books/my-orders">
<div class="con-img-drop-down ">
<img src="/frontend/images/price-list.png">
</div>
طلبات الكتب
</a>
</li>
<li><a href="https://abdelmaaboud.com/profile/orders">
<div class="con-img-drop-down ">
<img src="/frontend/images/gift.png">
</div>
0 جنية مصري</a></li>
<li>
<form id="logout-form" action="https://abdelmaaboud.com/logout" method="POST" class="hidden">
<input type="hidden" name="_token" value="9vbF6qpPLatSAooE3cBDSZhr0n5kbQOPDvwsSF2V">
</form>
<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
<div class="con-img-drop-down ">
<img src="/frontend/images/switch.png">
</div>
خروج</a></li>
</ul>
</li>
<li class="li-for-lang">
<button onclick="location.href='https://abdelmaaboud.com/change-lang/en'">
English
</button>
</li>
</ul>
</div>
</nav>
</div>
</div>
</header>
<div id="flex" class="flexslider kindergarten" style="margin: 0px;">
<ul class="slides">
<li style="background:url(images/banner.jpg) no-repeat center;
            background-size: contain;">
<div class="container">
<div class="row">
</div>
</div>
</li>
<li style="background:url(images/success.jpg) no-repeat center;
            background-size: contain;">
<div class="container">
<div class="row">
</div>
</div>
</li>
</ul>
</div>
<div class="page-spacer clearfix">
<div id="primary">
<div class="container">
<div class="row">
<div class="main-con-to-courses-block">
<div class="con-course-block-tabs">
<div class="con-courses-card-style-2">
<div class="col-12 con-content">
<div class="row lecture-group" style="justify-content: center;display: flex;">

<div class="col-12 col-sm-4">
<div class="card-style-2">
<div class="main-con-to-img-style-2">
<img src="images/school.jpg">
<div class="con-card-style-2-content" style="text-align:center;">
<a class="lecture-card-style-2-name" href="secschool.php" style="font-size:30px;">
الثانوية العامة
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="card-style-2">
<div class="main-con-to-img-style-2">
<img src="images/college.jpg">
<div class="con-card-style-2-content" style="text-align:center;">
<a class="lecture-card-style-2-name" href="colleges.php" style="font-size:30px;">
 كليات
</a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<section class="about-with-slide">
<div class="container">
<div class="row">
<div class="col-xs-12 aboutus">
<div class="row">
<div class="col-xs-12 col-sm-8">
<h3>
محمد صلاح
</h3>
<p>مدرس مادة الفيزياء</p>
<p>الموقع الرسمى للأستاذ محمد صلاح. استاذ الفيزياء للصف الثالث من المرحلة الثانوية</p>
</div>
<div class="col-xs-12 col-sm-4">
<div class="flexslider about-slide">
<ul class="slides">
<li style="min-height:0px"><a href="https://abdelmaaboud.com#"><img src="images/mfacenew.png" alt /></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<img src="images/fimage.jpg" width="3000">
<footer class="site-footer" id="colophon">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4"><img src="images/homeuser.png"  alt /></div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-4 footer-widget">
<aside class="widget widget_text">
<div class="textwidget">
الموقع الرسمى للأستاذ محمد صلاح. استاذ الفيزياء للصف الثالث من المرحلة الثانوية
</div>
</aside>
<aside class="widget socialmedia-widget">
<ul class="social">
<li><a target="_blank" href="facebook.com"><i></i><img src="images/facebook.png"></a></li>
<li><a target="_blank" href="youtube.com"><i></i><img src="images/youtube.png"></a></li>
</ul>
</aside>
</div>
<div class="col-xs-12 col-sm-4 footer-widget">
<aside class="widget widget_nav_menu">
<ul class="menu">
<li><a href="https://abdelmaaboud.com">الرئيسية</a></li>
<li><a href="https://abdelmaaboud.com/lectures">المحاضرات</a></li>
<li><a href="https://abdelmaaboud.com/exams">امتحانات</a></li>
<li><a href="https://abdelmaaboud.com/profile/orders">الطلبات</a></li>
<li><a href="https://abdelmaaboud.com/lecture-questions">أسئلة/أجوبة</a></li>
<li><a href="https://abdelmaaboud.com/profile">حسابي</a></li>
</ul>
</aside>
</div>
<div class="col-xs-12 col-sm-4 footer-widget">
<aside class="widget newsletter-widget">
<h3>اشترك الان</h3>
<p>اشترك الان ليصلك كل جديد لدينا</p>
<form id="newsletter">
<input type="email" name="email" class="form-control" placeholder="Email" />
<button type="submit" value class="btn btn-orange btn-medium"><i class="lnr lnr-arrow-right"></i></button>
</form>
</aside>
</div>
</div>
</div>

</footer>
<script src="https://abdelmaaboud.com/frontend/js/jquery.min.js"></script>
<script src="https://abdelmaaboud.com/frontend/js/bootstrap.min.js"></script>
<script src="https://abdelmaaboud.com/frontend/vendor/flexslider/jquery.flexslider-min.js"></script>
<script src="https://abdelmaaboud.com/frontend/vendor/owlcarousel/owl.carousel.js"></script>
<script>
    jQuery.noConflict();
    jQuery( document ).ready(function( $ ) {

        var owl = $("#owl-classes");

        owl.owlCarousel({

            items : 3, //10 items above 1000px browser width
            itemsDesktop : [1000,3], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
            itemsTablet: [640,2],
            itemsMobile : [480,1], // itemsMobile disabled - inherit from itemsTablet option
            navigation: false,
            pagination: true,
            autoPlay:true
        });

        var owl = $("#owl-teachers");

        owl.owlCarousel({

            items : 2, //10 items above 1000px browser width
            itemsDesktop : [1000,2], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
            itemsTablet: [600,1],
            itemsMobile : [480,1], // itemsMobile disabled - inherit from itemsTablet option
            navigation: false,
            pagination: true,
            autoPlay:true
        });

    });
</script>
<script src="https://abdelmaaboud.com/frontend/js/theme.js"></script>
<script type="text/javascript" src="https://abdelmaaboud.com/frontend/vendor/fancybox/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="https://abdelmaaboud.com/frontend/vendor/fancybox/js/custom.fancybox.js"></script>
<script>
    jQuery.noConflict();
    jQuery('.fancybox').fancybox();
</script>
<script src="https://abdelmaaboud.com/frontend/js/wow.min.js"></script>
<script> new WOW().init(); </script>
<script>
    jQuery('.img').on('dblclick', function(){
    
        var url = jQuery(this).attr('src');
        console.log(url);
        window.open(url, '_blank').focus();
    });
 
</script>
<script type="text/javascript" src="https://abdelmaaboud.com/frontend/js/navbar.js"></script>
</body>
</html>
