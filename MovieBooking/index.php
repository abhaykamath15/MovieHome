<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <title>CineHome</title>
</head>
<body>
    <section class="top-bar">
        <div class="'left-content">
            <div id="logo"><img src="assets/images/logo.png" alt="" height="100rem"></div>
            <h1 class="title">CineHome</h1>
            <ul class="navigation">
                <li class="Horror button"><a href="index.php"><h2>Home</h2></a></li>
                <li class="Crime button"><a href="Movies.php"><h2>Movies</h2></a></li>
                <li class="Drama button"><a href="Languages.php"><h2>Languages</h2></a></li>
                <li class="Comedy button"><a href="Genres.php"><h2>Genres</h2></a></li>
            </ul>
        </div>
    </section>
    
        <br>
        <section class="trailer">
            <h1 id="ampn"><pre>Coming Soon</pre></h1><br>
            <video width="2160" height="720" autoplay loop>
                <source src="assets/videos/videoplayback.mp4" type="video/mp4">
            </video>
            <div class="vidhov">
                <h1>Oppenheimer<br><br>
                    Releasing Worldwide: 21-7-23</h1>
            </div>
            <script>
  
                // Targeting video element 
                let clip = document.querySelector("video")
          
                /* Applying mouseover event on video clip 
                and then we call play() function to play 
                the video when the mouse is over the video */
                clip.addEventListener("mouseover", function (e) {
                    clip.play();
                })
            </script>
        </section>
        <br>
        <h1 id="ampn"><pre>Now Playing</pre></h1>
        <section class="slider-container">
            <div class="container">
                <div class="swiper card_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img_box"><a href="The Thing.php">
                                <img src="assets/images/The Thing.jpg" alt="">
                            </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_box"><a href="Goodfellas.php">                                
                                <img src="assets/images/Goodfellas.jpg" alt="">
                            </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_box"><a href="Andhadhun.php">
                                <img src="assets/images/Andhadhun.jpg" alt="">
                            </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_box"><a href="3 idiots.php">
                                <img src="assets/images/3 Idiots.jpg" alt="">
                            </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_box"><a href="City Lights.php">
                                <img src="assets/images/City Lights.jpg" alt="">
                            </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_box"><a href="The Shining.php">
                                <img src="assets/images/The Shining.jpg" alt="">
                            </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_box"><a href="Shoplifters.php">
                                <img src="assets/images/Shoplifters.jpg" alt="">
                            </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_box"><a href="Monty Python.php">
                                <img src="assets/images/Monty Python.jpg" alt="">
                            </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_box"><a href="Memories of Murder.php">
                                <img src="assets/images/Memories of Murder.jpg" alt="">
                            </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_box"><a href="BTTF.php">
                                <img src="assets/images/BTTF.jpg" alt="">
                            </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                                <div class="img_box"><a href="Parasite.php">
                                <img src="assets/images/Parasite.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                                <div class="img_box"><a href="Hera Pheri.php">
                                <img src="assets/images/Hera Pheri.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                                <div class="img_box"><a href="Cure.php">
                                <img src="assets/images/Cure.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_box"><a href="House.php">
                                <img src="assets/images/House.jpg" alt="">
                            </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_box"><a href="Tumbbad.php">
                                <img src="assets/images/Tumbbad.jpg" alt="">
                            </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_box"><a href="Isawthedevil.php">
                                <img src="assets/images/I saw the devil.jpg" alt="">
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        var swiper = new Swiper(".card_slider", {
        slidesPerView: 6,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
</body>
</html>