<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="./css/homess.css">
</head>

<body>

<!-- home.php -->
<?php include("navbar.php"); ?>

    <!-- Header section  -->
    <div class="slideshow-container">
        <!-- Slide 1 -->
        <div class="mySlides fade">
            <img src="./assets/carosol-1.jpg" alt="Slide 1">
            <div class="text">Caption One</div>
        </div>

        <!-- Slide 2 -->
        <div class="mySlides fade">
            <img src="./assets/carosol-2.jpg" alt="Slide 2">
            <div class="text">Caption Two</div>
        </div>

        <!-- Slide 3 -->
        <div class="mySlides fade">
            <img src="./assets/carosol-3.jpg" alt="Slide 3">
            <div class="text">Caption Three</div>
        </div>

        <!-- Navigation Buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- Dots/Indicators -->
    <div class="dots-container">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>


    <!-- Services section  -->
    <section class="services">
        <h1 class="heading-title">Our service</h1>

        <div class="box-container">
            <div class="box">
                <img src="./assets/image-1.jpg" alt="" />
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="./assets/image-2.jpg" alt="" />
                <h3>Tour guide</h3>
            </div>

            <div class="box">
                <img src="./assets/image-3.jpg" alt="" />
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="./assets/image-4.jpg" alt="" />
                <h3>Camp Fire</h3>
            </div>

            <div class="box">
                <img src="./assets/image-5.jpg" alt="" />
                <h3>Off Road</h3>
            </div>

            <div class="box">
                <img src="./assets/image-6.jpg" alt="" />
                <h3>Camping</h3>
            </div>
        </div>
    </section>

    <section class="home-about">

        <div class="image">
            <image src="./assets/Travel-directory.jpg" alt="" />
        </div>

        <div class="content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Perferendis neque tenetur unde maiores repellendus animi,
                quasi omnis quos non quod provident culpa explicabo voluptate
                dolorum autem blanditiis sed ipsa fugit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Perferendis neque tenetur unde maiores repellendus animi,
                quasi omnis quos non quod provident culpa explicabo voluptate
                dolorum autem blanditiis sed ipsa fugit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Perferendis neque tenetur unde maiores repellendus animi,
                quasi omnis quos non quod provident culpa explicabo voluptate
                dolorum autem blanditiis sed ipsa fugit.
            </p>
            <a href="about.php"><button class="btn">Read More</button></a>
        </div>

    </section>

    <!-- Home to Section -->

    <section class="home-packages">

        <h1 class="heading-title">Our Pakages</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="./assets/pakage-1.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. placeat a nam? Iusto mollitia.</p>
                    <a href="book.php"><button class="btn">Book Now</button></a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./assets/pakage-2.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        placeat a nam? Iusto mollitia </p>
                    <a href="book.php"><button class="btn">Book Now</button></a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./assets/pakage-3.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        placeat a nam? Iusto mollitia.</p>
                    <a href="book.php"><button class="btn">Book Now</button></a>
                </div>
            </div>

        </div>


        <div class="load-more">
            <a href="package.php"><button class="btn">Load More</button></a>
        </div>

    </section>

    <!-- Home offer Section -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla eveniet, obcaecati facilis consequatur,
                delectus beatae itaque blanditiis perferendis molestiae natus quisquam in possimus dignissimos. Nulla et
                sunt sint nesciunt.</p>
            <a href="book.php"><button class="btn">Book Now</button></a>
        </div>
        </div>
    </section>

    <?php include("footer.php"); ?>

    <script src="./js/home.js"></script>


</body>

</html>

