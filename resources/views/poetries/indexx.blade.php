{{-- @extends('layouts.app') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animated</title>
    <link rel="stylesheet" href="css/stylee.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- swiper css --}}
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


</head>
<body>

    <header class="header">
        <a href="#" class="logo">Poem <span>Project</span></a>
        <nav class="navbar">
            <a href="#home" style="--i:4;" class="active">Home</a>
            <a href="#about" style="--i:5;" >About</a>
            <a href="#poem" style="--i:6;" >Poem</a>
            <a href="gallery" style="--i:7;" >Gallery</a>
            {{-- <a  href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
            <a  href="{{ route('register') }}"class="btn btn-warning">Sign-up</a> --}}
           
        </nav>
            <div class='bx bx-moon' id="darkMode-icon"></div>
            <div class='bx bx-menu' id="menu-icon"></div>

    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h3><span>Poemy</span></h3>
            <h1>Where every <span>words</span> is a Project</h1>
            <p>We're home & adventure all at once</p>

            <a href="gallery" class="btn">Explore</a>
        </div>

        <div class="genre-container">
            <div class="genre-box">
                <div class="genre" style="--i:0;">
                    <i class='bx bx-color'></i>
                    <h3>Words Project</h3>
                </div>
                <div class="genre" style="--i:1;">
                    <i class='bx bxl-mongodb'></i>
                    <h3>Say Moon</h3>
                </div>
                <div class="genre" style="--i:2;">
                    <i class='bx bx-leaf' ></i>
                    <h3>Stargazing</h3>
                </div>
                <div class="genre" style="--i:3;">
                    <i class='bx bx-party' ></i>
                    <h3>Trembling</h3>
                </div>

                <div class="circle"></div>
            </div>

            <div class="overlay"></div>
        </div>
        <div class="home-img">
            <img src="images/pup.png" alt="" >
        </div>
    </section>
    <!--about section designi-->

    <section class="about" id="about">
        <div class="about-img">
            <img src="images/hew.png" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">Poem <span>Project</span></h2>
            <h3>Enchanting Experience</h3>
            <p>Create Your own poet and embrace it to the world</p>
            <a href="gallery" class="btn">Gallery</a>
        </div>
      </section>

       <!--poem section designi-->
      
    <section class="poem" id="poem">  
      <div class="poem-container">
        <h2 class="heading">Most Likely <span>Poem</span></h2>
        <div class="poem-wrapper">
            <div class="poem-box mySwiper" >
                <div class="poem-content swiper-wrapper">
                    <div class="poem-slide swiper-slide">
                        <img src="images/pfour.jpeg" alt="">
                        <h3>Insomniac</h3>
                        <p>There are some nights when
                            sleep plays coy,
                            aloof and disdainful.
                            And all the wiles
                            that I employ to win
                            its service to my side
                            are useless as wounded pride,
                            and much more painful.</p>


                    </div>

                    <div class="poem-slide swiper-slide">
                        <img src="images/pon.jpeg" alt="">
                        <h3>Suicide's Note</h3>
                        <p>The calm,
                            Cool face of the river
                            Asked me for a kiss.</p>
                    </div>

                    <div class="poem-slide swiper-slide">
                        <img src="images/pthree.jpeg" alt="">
                        <h3>The Dream Keeper</h3>
                        <p>Bring me all of your dreams,
                            You dreamer,
                            Bring me all your
                            Heart melodies
                            That I may wrap them
                            In a blue cloud-cloth
                            Away from the too-rough fingers
                            Of the world.</p>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
      </div>
    </section>

     <!--about section designi-->
    
     







    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>