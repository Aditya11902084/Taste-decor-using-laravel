<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASTE DECOR </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- header section starts  -->

<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>Taste Decor</a>
    <div id="menu-bar" class="fas fa-bars"></div>
    
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#speciality">speciality</a>
        <a href="#popular">popular</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#order">order</a>
        <li>
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <x-app-layout>
                        
                    </x-app-layout>
    
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                          @endif
                    @endauth
                </div>
            @endif 
        </li>
    </nav>

    

</header>

<!-- header section ends -->
<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Hasty and tasty!</h3>
        <p>It’s not true that money can’t buy happiness. I mean, have you tried buying ice cream? It’s the same thing!</p>
        <a href="#" class="btn">Make Your Choice</a>
    </div>

    <div class="image">
        <img src="image/home-img.png" alt="">
    </div>

</section>

<!-- home section ends -->
<!-- speciality section starts  -->

<section class="speciality" id="speciality">

    <h1 class="heading"> our <span>speciality</span> </h1>

    <div class="box-container">

        <div class="box">
            <img class="image" src="image/s-img-1.jpg" alt="">
            <div class="content">
                <img src="image/s-1.png" alt="">
                <h3>tasty burger</h3>
                <p>the only bad burger is the one you didn't eat.            </p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="image/s-img-2.jpg" alt="">
            <div class="content">
                <img src="image/s-2.png" alt="">
                <h3>tasty pizza</h3>
                <p>"Pizza is not a 'trend' it's a way of life.Do good. Be nice. Order pizza. Repeat."</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="image/s-img-3.jpg" alt="">
            <div class="content">
                <img src="image/s-3.png" alt="">
                <h3>cold ice-cream</h3>
                <p>Life is like an ice cream: Enjoy it before it melts..</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="image/s-img-4.jpg" alt="">
            <div class="content">
                <img src="image/s-4.png" alt="">
                <h3>cold drinks</h3>
                <p>Everything on our dinner table-the meat, cheese, salad, bread, and soft drink-requires carbon dioxide to be there. For those of you who believe that carbon dioxide is a pollutant, we have a special diet: water and salt!</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="image/s-img-5.jpg" alt="">
            <div class="content">
                <img src="image/s-5.png" alt="">
                <h3>tasty sweets</h3>
                <p>Sugar and spice and everything nice</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="image/s-img-6.jpg" alt="">
            <div class="content">
                <img src="image/s-6.png" alt="">
                <h3>healty breakfast</h3>
                <p>“To me, breakfast is my most important meal. It's often the meal you play a game on. I make sure I have oatmeal, milk, and fruit. It's the fuel you use to hopefully do your best...”</p>
            </div>
        </div>

    </div>

</section>

<!-- speciality section ends -->
<!-- popular section starts  -->

<section class="popular" id="popular">

    <h1 class="heading"> most <span>popular</span> foods </h1>

    <div class="box-container">

        <div class="box">
            <span class="price">  ₹300 -  ₹600 </span>
            <img src="image/p-1.jpg" alt="">
            <h3>tasty burger</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹300 - ₹900 </span>
            <img src="image/p-2.jpg" alt="">
            <h3>tasty cakes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹300 - ₹1200 </span>
            <img src="image/p-3.jpg" alt="">
            <h3>tasty sweets</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹300 - ₹700 </span>
            <img src="image/p-4.jpg" alt="">
            <h3>tasty cupcakes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹150 - ₹400 </span>
            <img src="image/p-5.jpg" alt="">
            <h3>cold drinks</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹300 - ₹500 </span>
            <img src="image/p-6.jpg" alt="">
            <h3>cold ice-cream</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>

    </div>

</section>

<!-- popular section ends -->

<!-- steps section starts  -->

<div class="step-container">

    <h1 class="heading">how it <span>works</span></h1>

    <section class="steps">

        <div class="box">
            <img src="image/step-1.jpg" alt="">
            <h3>choose your favorite food</h3>
        </div>
        <div class="box">
            <img src="image/step-2.jpg" alt="">
            <h3>free and fast delivery</h3>
        </div>
        <div class="box">
            <img src="image/step-3.jpg" alt="">
            <h3>easy payments methods</h3>
        </div>
        <div class="box">
            <img src="image/step-4.jpg" alt="">
            <h3>and finally, enjoy your food</h3>
        </div>
    
    </section>

</div>

<!-- steps section ends -->
<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading"> our food <span> gallery </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/g-1.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="image/g-2.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="image/g-3.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="image/g-4.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="image/g-5.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="image/g-6.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="image/g-7.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="image/g-8.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="image/g-9.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/1.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/2.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/3.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/4.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/5.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/6.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/7.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/8.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/9.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/10.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/11.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/8.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/13.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="abc/14.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>

        </div>
        <div class="box">
            <img src="abc/15.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>love it</p>
                <a href="#" class="btn">ordern now</a>
            </div>

        </div>


    </div>

</section>

<!-- gallery section ends -->
<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> our customers <span>reviews</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pro1.jpeg" alt="">
            <h3>GHI</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>food was good. I love the north indian dishes here 👍👍👍👍</p>
        </div>
        <div class="box">
            <img src="image/pro2.jfif" alt="">
            <h3>ABC</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>love the chicken burger.❤❤ </p>
        </div>
        <div class="box">
            <img src="image/pro3.jfif" alt="">
            <h3>DEF</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Taste decor's sweets are the best.........😀😀😀😀😀</p>
        </div>

    </div>

</section>

<!-- review section ends -->
<!-- order section starts  -->

<section class="order" id="order">

    <h1 class="heading"> <span>order</span> now </h1>

    <div class="row">
        
        <div class="image">
            <img src="image/order-img.jpg" alt="">
        </div>

        <form action="">

            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>

            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="food name">
            </div>

            <textarea placeholder="address" name="" id="" cols="30" rows="10"></textarea>

            <input type="submit" value="order now" class="btn">

        </form>

    </div>

</section>

<!-- order section ends -->
<!-- footer section  -->

<section class="footer">

    <div class="share">
        <a href="#" class="btn">facebook</a>
        <a href="#" class="btn">twitter</a>
        <a href="#" class="btn">instagram</a>
        <a href="#" class="btn">pinterest</a>
        <a href="#" class="btn">linkedin</a>
    </div>

    <h1 class="credit"> created by <span> Aditya Kumar  </span></h1>


</section>
<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<!-- loader  -->
<div class="loader-container">
    <img src="image/loader.gif" alt="">
</div>
    <!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>
