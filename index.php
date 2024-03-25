
<?php 

include("signup.php");


 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CulToura</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"><!--to get font family online-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /><!--for fontawesome-->
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       
    </head>
    <body>
        <!--Start section-->
        <div class="bar">
            <nav>
                <div class="logo"></div>
                <h5 class="title">Virtual escapade<br>awaits!</span></h5>
                <ul>
                    <li><a href="service.php"><i class="fas fa-box"></i>  <br>Packages</a></li>
        <li><a href="booking.php"><i class="fas fa-calendar-alt"></i>  <br>Booking</a></li>
        <li><a href="destination.php"><i class="fas fa-map-marked-alt"></i>  <br>Destinations</a></li>
        <li><a href="contact.php"><i class="fas fa-envelope"></i> <br> Contact Us</a></li>
        <li><a href="about.php"><i class="fas fa-info-circle"></i>   <br>About Us</a></li>
        <li><a href="feed.php"><i class="fas fa-comments"></i>  <br> Feedbacks</a></li>
                </ul>
                <a href="login.php" class="btn">Logout</a>
            </nav>
<br>
            <div class="content">
        <h2>WELCOME!</h2>
        <h4>Are you ready to TRAVEL without LEAVING?</h4>
        <div class="newslatter">
            <div class="slider">
            <div class="slide"><img src="s.png" alt="s.png"></div>
            <div class="slide"><img src="s2.png" alt="s2.png"></div>
            <div class="slide"><img src="s3.png" alt="s3.png"></div>
            <div class="slide"><img src="s4.png" alt="s4.png"></div>
            <div class="slide"><img src="s5.png" alt="s5.png"></div>
            <div class="slide"><img src="s6.png" alt="s6.png"></div>
            <div class="slide"><img src="s7.png" alt="s7.png"></div>
            <div class="slide"><img src="s8.png" alt="s8.png"></div>
            <div class="slide"><img src="s9.png" alt="s9.png"></div>
            <div class="slide"><img src="s10.png" alt="s10.png"></div>

        </div>

            <form>
            </div>
        </div>
        </div>
        <script>
            let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  updateSlide();
}

function updateSlide() {
  slides.forEach((slide, index) => {
    slide.style.transform = `translateX(${(index - currentSlide) * 100}%)`;
  });
}

setInterval(nextSlide, 3000); // Change slides every 3 seconds
</script>
    </body>
</html>