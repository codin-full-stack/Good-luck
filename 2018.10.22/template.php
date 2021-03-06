<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindaugas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="newstyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">    <!-- <script src="script.js" async></script> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
<main>
    <section class="first">
        <div class="container-fluid flex">
            <div class="int">
                <h1 class="section-title">
                    Stylish Portfolio
                </h1>
                <h2>
                    <i>A Free Bootstrap Theme by Start Bootstrap</i>
                </h2>
            <button class="button button-blue"> 
                <a href="#" class="btn">
                    Find out more
                </a>
            </button>
            </div>
        </div>
    </section>

    <section class="second">
        <div class="container-fluid">
            <div class="int">
                <h1 class="section-title">
                    Stylish portfolio is the perfect theme for your next project!
                </h1>
                <h2>
                    This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at <a href="#">Unsplash!</a>
                </h2>
            <button class="button button-white"> 
                <a href="#" class="btn">
                    What we offer
                </a>
            </button>
            </div>
        </div>
    </section>
    
    <section class="third">
        <div class="container">
            <div class="int">
                <h1 class="section-title">
                    SERVICES
                </h1>
                <h2>
                    What we offer
                </h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class='icon'>
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <article class="art">
                        <h2>Responsive</h2>
                        <h5>Looks great on any screen size!</h5>
                    </article>
                </div>
                <div class="col-md-3">
                    <div class='icon'>
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <article class="art">
                        <h2>Redesigned</h2>
                        <h5>Freshly redisigned for Bootstrap 4.</h5>
                    </article>
                </div>
                <div class="col-md-3">
                    <div class='icon'>
                        <i class="far fa-thumbs-up"></i>
                    </div>
                    <article class="art">
                        <h2>Favorited</h2>
                        <h5>Milions of userds start Bootstrap!</h5>
                    </article>
                </div>
                <div class="col-md-3">
                    <div class='icon'>
                        <i class="fas fa-space-shuttle"></i>
                    </div>
                    <article class="art">
                        <h2>Question</h2>
                        <h5>I mustache you a question</h5>
                    </article>
                </div>
            </div> 
        </div>
    </section>

    <section class="fourth">
        <div class="container-fluid flex">
            <div class="int">
                <h1 class="section-title">
                    Welcome to your next website!
                </h1>
            <button class="button button-blue"> 
                <a href="#" class="btn">
                    Download now!
                </a>
            </button>
            </div>
        </div>
    </section>

    <section class="fifth">
        <div class="container">
            <div class="int">
                <h4 class="section-title">
                    PORTFOLIO
                </h4>
                <h1>
                    Recent Projects
                </h1>
            </div>

            <div class="row">
                <div class="col-md-6 portfolio-item">
                    <article class='art-fifth'>
                        <h2> STATIONARY </h2>
                        <p> A yellow pencil with envelopes on a clean, blue backdrop!</p>
                    </article>
                </div>
                <div class="col-md-6 portfolio-item">
                    <article class='art-fifth'>
                        <h2> ICE CREAM </h2>
                        <p> A dark blue background  with a colored pencil, a clip, and a tiny ice cream cone!</p>
                    </article>
                </div>
                <div class="col-md-6 portfolio-item">
                    <article class='art-fifth'>
                        <h2> STRAWEBERRIES </h2>
                        <p> Strawberries are such a tasty snack, especially with a little sugar on top!</p>
                    </article>
                </div>
                <div class="col-md-6 portfolio-item"> 
                    <article class='art-fifth'>
                        <h2> WORKSPACE </h2>
                        <p> A yellow workspace with some scissors, pencils, and another objects.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="sixth">
        <div class="container-fluid">
            <div class="int">
                <h1 class="section-title">
                    The buttons below are impossible to resist...
                </h1>
            <button class="button button-white"> 
                <a href="#" class="btn">
                    Click me!
                </a>
            </button>
            <button class="button button-black"> 
                <a href="#" class="btn">
                    Look at me!
                </a>
            </button>

            </div>
        </div>
    </section>

    <section class="seventh" id="map">
        <div class="container-fluid">
            <div class="int">
                <script>
                    function initMap() {
                        var school = {lat: 54.723483, lng: 25.337977};
                        var map = new google.maps.Map(
                            document.getElementById('map'), {zoom: 15, center: school});
                        var marker = new google.maps.Marker({position: school, map: map});
                    }
                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDE1j9u1kchz59Gy20nzaCTj16sfpFbg6U&callback=initMap">
                </script>
            </div>
        </div>
    </section>

    <section class="eight">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class='icon'>
                        <i class="fab fa-facebook-f"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class='icon'>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class='icon'>
                        <i class="fas fa-cat"></i>
                    </div>
                </div>
            </div> 
            <div class="footer-text">
                Copyright © Your Website 2018
            </div>
        </div>
    </section>


</main>
</body>