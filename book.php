<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    
    <link rel="stylesheet" href="./css/book.css">
</head>
<body>
    <?php include("navbar.php"); ?>
    
    <div class="heading">
        <img src="./assets/about bg.jpg" alt="">
        <h1>BOOKING</h1>
    </div>

<section class="booking">
    
    <h1 class="heading-title">Book Your Trip!</h1>

    <form action="book_form.html" method="post" class="book-form">

        
        <div class="flex">

            <div class="inputBox">
                <span>Name :</span>
                <input type="text" placeholder="Enter your name" name="name"/>
            </div>

            
            <div class="inputBox">
                <span>Email :</span>
                <input type="text" placeholder="Enter your email" name="email"/>
            </div>

            
            <div class="inputBox">
                <span>Mobile number :</span>
                <input type="number" placeholder="Enter your mobile" name="phone"/>
            </div>

            
            <div class="inputBox">
                <span>Address :</span>
                <input type="text" placeholder="Enter your address" name="address"/>
            </div>

            
            <div class="inputBox">
                <span>Where to :</span>
                <input type="text" placeholder="Place you wont to visit" name="location"/>
            </div>

            
            <div class="inputBox">
                <span>How many :</span>
                <input type="number" placeholder="Number of guests" name="guests"/>
            </div>

            
            <div class="inputBox">
                <span>Arrival :</span>
                <input type="date" name="arrivals"/>
            </div>

            
            <div class="inputBox">
                <span>Leaving :</span>
                <input type="date" name="leaving"/>
            </div>
        </div>

        <input type="submit" value="Submit" class="btn" name="send"/>
    </form>
</section>

</body>
</html>