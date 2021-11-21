<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revo Shop</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/product.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}">
<!--     <script type="text/javascript">
        $(document).ready(function(){
            swal("Here's a message!", "It's pretty, isn't it?");
        });
    </script> -->
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="{{URL::to('/home')}}" class="logo"> <i class="fab fa-cotton-bureau"></i>
 Revo Shop </a>

    <nav class="navbar">
        <a href="{{URL::to('/home')}}">home</a>
        <a href="{{URL::to('/shop')}}">shop</a>
        <a href="{{URL::to('/cart')}}">cart</a>
        <a href="{{URL::to('/blog')}}">blog</a>
        <a href="{{URL::to('/contact')}}">contact</a>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
        <div id="login-btn" class="fas fa-user"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="change-item">
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="{{asset('public/frontend/image/product4.jfif')}}" alt="">
            <div class="content">
                <h3>organic food</h3>
                <span class="quantity">1</span>
                <span class="multiply"><a href="">x</a></span>
                <span class="price">$18.99</span>
            </div>
        </div>
        </div>
        <h3 class="total"> total : <span>56.97</span> </h3>
        <a href="{{URL::to('/cart')}}" class="btn">checkout cart</a>
    </div>

    <form action="" class="login-form">
        <h3>LOGIN</h3>
        <input type="email" placeholder="Enter your email" class="box">
        <input type="password" placeholder="Enter your password" class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="login now" class="btn">
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="#">create one</a></p>
    </form>

</header>
<!-- header section ends -->
@yield('content')















<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.html"> <i class="fas fa-arrow-right"></i> home</a>
            <a href="shop.html"> <i class="fas fa-arrow-right"></i> shop</a>
            <a href="about.html"> <i class="fas fa-arrow-right"></i> about</a>
            <a href="review.html"> <i class="fas fa-arrow-right"></i> review</a>
            <a href="blog.html"> <i class="fas fa-arrow-right"></i> blog</a>
            <a href="contact.html"> <i class="fas fa-arrow-right"></i> contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> my order </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my favorite </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my wishlist </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my account </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> terms or use </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

        <div class="box">
            <img src="{{asset('public/frontend/image/payment.png')}}" class="payment" alt="">
        </div>

    </div>

</section>

<section class="credit">created by Group 12 | all rights reserved!</section>

<!-- footer section ends -->












<script src="{{asset('public/frontend/js/sweetalert.js')}}"></script>
<script src="{{asset('public/frontend/js/script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- custom css file link  -->
</body>
</html>

<script>
    function AddCart(product_id){
        $.ajax({
            url: 'add-cart/' + product_id,
            type: 'GET',
        }).done(function(response){
            console.log(response);
            $(".total").empty();
            $(".total").html(response);
        });
    }
</script>