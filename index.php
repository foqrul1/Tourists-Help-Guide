<?php
    
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tourist Guide</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<div class="w3-container">
    <header>
        <div class="row" style="padding-top: 20px;">
            <div class="col-5">
                <h1 class="h1" id="logo" style="color: #f3bf9f; font-family: 'Permanent Marker', cursive;">Tourist Guide</h1>
            </div>
            <div class="col-6">
                <ul class="nav nav-tabs" style=" border-bottom: 0px; float: right;">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php" style="border-bottom-left-radius: .25rem; border-bottom-right-radius: .25rem;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php" style="border-bottom-left-radius: .25rem; border-bottom-right-radius: .25rem;">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_login.php" style="border-bottom-left-radius: .25rem; border-bottom-right-radius: .25rem;">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminlogin.php" style="border-bottom-left-radius: .25rem; border-bottom-right-radius: .25rem;">Admin Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</div>


<body style="background-image:url('images/background/back_final.jpg');">

    <div class="slideshow-container">

        <div class="mySlides">
            <div class="numbertext">1 / 5</div>
            <img src="images/slider/saintmartin.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 5</div>
            <img src="images/slider/sundarban.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 5</div>
            <img src="images/slider/sajek.jpg" style="width:100%">
        </div>
        
        <div class="mySlides">
            <div class="numbertext">4 / 5</div>
            <img src="images/slider/sundarban2.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 5</div>
            <img src="images/slider/view.jpg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>


    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 1800); // Change image every 2 seconds
        }
    </script>
</body>

</html>
<?php
include_once('includes/footer.php')
?>