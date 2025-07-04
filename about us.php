<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="./css/about us.css">


    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>

<body>

<?php include("navbar.php"); ?>

    <div class="heading">
        <img src="./assets/about bg.jpg" alt="">
        <h1>About Us</h1>
    </div>

    <section class="about">

        <div class="image">
            <img src="./assets/about.jpg" alt="">
        </div>

        <div class="content">
            <h3>Why Choose Us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente veniam dolorum accusamus vitae
                voluptatum aperiam ut omnis laborum, assumenda libero id asperiores, soluta nisi provident magni
                eligendi sint repudiandae.</p>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur iusto ipsam sit ab a consequuntur
                veritatis, cupiditate fuga architecto quasi.</P>

            <div class="icons-container">

                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>Top Destination</span>
                </div>

                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Affordable Price</span>
                </div>

                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Guide Service</span>
                </div>
            </div>

        </div>
    </section>

    <!-- Reviews Section -->

    <section class="reviews">
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ab, consequuntur ea reiciendis
                        quam error suscipit. Repellat voluptas veniam eligendi asperiores mollitia esse.</p>
                    <img src="./assets/images-1.jpg" alt="">
                    <span>Traveler</span>
                    <h3>John Deo</h3>
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, tenetur laboriosam!</p>
                    <img src="./assets/images-2.jpg" alt="">
                    <span>Traveler</span>
                    <h3>John Deo</h3>
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, itaque aliquam fuga ea
                        voluptatum ratione? Eveniet delectus explicabo id iure debitis quia.</p>
                    <img src="./assets/images-3.jpg" alt="">
                    <span>Traveler</span>
                    <h3>John Deo</h3>
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, asperiores sequi. Eligendi autem
                        id modi.</p>
                    <img src="./assets/images-4.jpg" alt="">
                    <span>Traveler</span>
                    <h3>John Deo</h3>
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam iste rerum veritatis
                        necessitatibus, omnis reprehenderit consequatur deleniti. Aliquam tempora quibusdam veniam
                        minima.</p>
                    <img src="./assets/images-5.jpg" alt="">
                    <span>Traveler</span>
                    <h3>John Deo</h3>
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, corrupti dolore? Tempore harum
                        modi sunt excepturi molestias similique? Minus, quis!</p>
                    <img src="./assets/images-6.jpg" alt="">
                    <span>Traveler</span>
                    <h3>John Deo</h3>

                </div>
            </div>
            <!-- Navigation buttons (optional) -->
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
        </div>


    </section>


    <script src="./js/about us.js"></script>
</body>

</html>