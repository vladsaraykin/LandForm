<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LandingPage</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" language="javascript">
            function GetDateTime() {
                var currentdate = new Date();
                document.getElementById('date').value=currentdate.getFullYear() + "/"
                    + (currentdate.getMonth()+1)  + "/"
                    + currentdate.getDate() + " "
                    + currentdate.getHours() + ":"
                    + currentdate.getMinutes() + ":"
                    + currentdate.getSeconds();
            }
        </script>
</head>
<body>
<header class="site-header">
    <div class="container">
        <a class="site-header__logo">
            <img src="assets/img/logo.png">
        </a>
        <nav class="site-header__menu main-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Prices</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Download</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="home-first_screen">
    <div class="home-content">
        <!--FIXME: Начало слайда -->
        <div class="home-content-text">
                <span class="context-head-usual">Simple, Beautiful <span
                        class="context-head-highlighted">and Amazing</span></span>
            <span class="context-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus
                        ullamcorper. Nam porttitor ullamcorper felis at convallis. Aenean ornare vestibulum nisi
                        fringilla lacinia. Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.</span>
        </div>
        <div class="home-content-button">
            <a href="#" class="btn-download"><span>Download</span></a>
            <a href="#" class="btn-learn-more"><span>Learn More</span></a>
        </div>
        <div class="home-content-available">
            <span>Available on :</span>
            <a href="#" class="icon"><img src="assets/img/apple.png"></a>
            <a href="#" class="icon"><img src="assets/img/android.png"></a>
        </div>
        <!--FIXME: конец слайда -->
    </div>
</div>
<div class="features">
    <div class="container container-align-items">
        <div class="heading-content">
            <span class="head-tittle">summarise the features</span>
            <span class="subhead-tittle">summarise what your product is all about</span>
        </div>

        <div class="features-item">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-content">
                        <a href="#">
                            <div class="feature-logo"><img class="img-features" src="assets/img/attractive-layout.png"></div>
                            <span class="feature-title">Attractive Layout</span>
                            <span class="feature-text">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massaidporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-content">
                        <a href="#">
                            <div class="feature-logo"><img class="img-features" src="assets/img/fresh-design.png"></div>
                            <span class="feature-title">Attractive Layout</span>
                            <span class="feature-text">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massaidporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-content">
                        <a href="#">
                            <div class="feature-logo"> <img class="img-features" src="assets/img/multiprose.png"></div>
                            <span class="feature-title">Attractive Layout</span>
                            <span class="feature-text">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massaidporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-content">
                        <a href="#">
                            <div class="feature-logo"><img class="img-features" src="assets/img/easy-to-customize.png"></div>
                            <span class="feature-title">Attractive Layout</span>
                            <span class="feature-text">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massaidporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="show-gallery">
    <div class="container container-align-items">
        <div class="heading-content">
            <span class="head-tittle">show the gallery</span>
            <span class="subhead-tittle">summarise what your product is all about</span>
        </div>
        <div class="items-of-gallery">
            <div class="row">
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <div class="item-image">
                        <div class="item-image-active">
                            <img src="assets/img/image-show-gallery.png">
                            <!--<button class="btn-plus"></button>-->
                        </div>
                        <span class="screenshot">SCREEN SHOT #1</span>
                    </div>
                    <span class="description">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                 </div>
                </div>
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <div class="item-image">
                        <div href="#" class="item-image-active">
                            <img src="assets/img/image-show-gallery.png">
                        </div>
                        <span class="screenshot">SCREEN SHOT #2</span>
                    </div>
                    <span class="description">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                </div>
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <div class="item-image">
                        <div class="item-image-active">
                            <img src="assets/img/image-show-gallery.png">
                            <a href="#"></a>
                        </div>
                        <span class="screenshot">SCREEN SHOT #3</span>
                    </div>
                    <span class="description">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                </div>
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <div class="item-image">
                        <div class="item-image-active">
                            <img src="assets/img/image-show-gallery.png">
                            <a href="#"></a>
                        </div>
                        <span class="screenshot">SCREEN SHOT #4</span>
                    </div>
                    <span class="description">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="video">
    <div class="container video-box">
        <div class="btn-play-video">
        </div>
        <div class="video-content-text">
            <span class="tittle">Watch the best Technology in <span>Action</span></span>
            <span class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
                    Nam porttitor ullamcorper felis at convallis. Aenean ornare vestibulum nisi fringilla lacinia. Nullam pulvinar sollicitudin velit id laoreet.
                    Quisque non rhoncus sem.</span>
        </div>
    </div>
</div>
<div class="price">
    <div class="container container-align-items">
        <div class="price-content">
            <span class="head-tittle">choose your price</span>
            <span class="subhead-tittle">summarise what your product is all about</span>
        </div>
        <div class="price-card-box">
            <div class="item-price">
                <span>Basic Package</span>
                <div class="price-tag">
                    <span>20$</span>
                </div>
                <div class="price-description">
                    <ul>
                        <li>Nullam suscipit vitae</li>
                        <li>Etiam faucibus</li>
                        <li>Vivamus viverra</li>
                    </ul>
                </div>
                <a href="#" class="btn-price" type="submit">Purchase</a>
            </div>
            <div class="item-price">
                <span>Professional Package</span>
                <div class="price-tag">
                    <span>25$</span>
                </div>
                <div class="price-description">
                    <ul>
                        <li>Nullam suscipit vitae</li>
                        <li>Etiam faucibus</li>
                        <li>Vivamus viverra</li>
                        <li>Praesent pharetra</li>
                    </ul>
                </div>
                <a href="#" class="btn-price" type="submit">Purchase</a>
            </div>
            <div class="item-price">
                <span>Advanced Package</span>
                <div class="price-tag">
                    <span>30$</span>
                </div>
                <div class="price-description">
                    <ul>
                        <li>Nullam suscipit vitae</li>
                        <li>Etiam faucibus</li>
                        <li>Vivamus viverra</li>
                    </ul>
                </div>
                <a href="#" class="btn-price" type="submit">Purchase</a>
            </div>
        </div>
    </div>
</div>
<div class="testimonials">
    <div class="container">
        <span class="testimonials-content-tittle">Testimonials</span>
        <div class="testimonials-quote">
            <!--FIXME: Начало слайда -->
            <div class="testimonials-icon">
                <img src="assets/img/testimonials-icon.png">
            </div>
            <div class="testimonials-quote__content">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent lobortis lectus eget libero blandit venenatis.
                    In blandit tortor vel congue malesuada. Suspendisse
                    molestie lobortis lorem dignissim pretium.<br/>
                    <span class="author">John Doe<br> from some company</span>
                </span>
            </div>
            <!--FIXME: конец слайда -->
        </div>
    </div>
</div>
<div class="download">
    <div class="container container-align-items">
        <div class="download-content">
            <span>Do you Like this app?</span>
            <a href="#" class="btn-download"><span>download now</span></a>
        </div>
    </div>
</div>

<div class="map">
    <div class="container">
        <div class="contact-form">
            <form action="form.php" method="post" accept-charset="UTF-8">
                <span>Contact</span>
                <div class="form-item">
                    <input type="text" class="form-field" name="user_name" required placeholder="Your Name" onclick="GetDateTime()">
                </div>

                <div class="form-item">
                    <input type="email" class="form-field" name="user_email" required placeholder="Your Email">
                </div>

                <div class="form-item">
                    <input type="text" class="form-field" name="subject" required placeholder="Subject">
                </div>

                <div class="form-item message">
                    <textarea class="form-field" rows="7" name="msg" required placeholder="Message"></textarea>
                </div>
				<input type="hidden" id="date" name="datetime">
                <button type="submit" class="btn-send">Send</button>
            </form>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <span class="upper-case">Copyright &#169 2013 |BAZINGER| All Rights Reserved</span>
            <a href="#">Terms of Service Policy</a>
        </div>
    </div>
</footer>
</body>
</html>