<!DOCTYPE html>
<html lang="en">

<head>
    <title>Spacify</title>
    <link rel="icon" href="images/logo1.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- JS -->
    <script src="js/slideShow.js" defer></script>
    <script src="js/pod.js" defer></script>
    <script src="js/slider.js" defer></script>
    <script src="js/formValidator.js" defer></script>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div>
            <div class="logo-div">
                <a href="#home"><img src="images/logo-c.jpg" alt="Spacify" class="logo"></a>
            </div>
            <div class="nav-div">
                <ul class="nav-list">
                    <li class="nav-item"><a href="#about">about</a></li>
                    <li class="nav-item"><a href="#pod">Picture Of Day</a></li>
                    <li class="nav-item"><a href="#info">Information</a></li>
                    <li class="nav-item"><a href="#contactUs">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section -->

    <div id="home">
        <div class="slideshow-container">

            <div class="mySlides" id="slide-1">
                <div class="content">
                    <p class="author">Saturn</p>
                    <q>Saturn also known as the ‘The Jewel of the Solar System’ is the second largest planet of the
                        solar system. Its beautiful rings are not solid. They are made up of bits of ice, dust and rock.
                    </q>
                </div>
            </div>

            <div class="mySlides" id="slide-2">
                <div class="content">
                    <p class="author">Meteors</p>
                    <q>Meteors are space rocks produced by particles of interstellar dust which become extremely hot by
                        the resistance or drag of air while entering earth’s atmosphere. Its speed while entering the
                        earth’s atmosphere ranges from 11km/sec to 72km/sec.</q>
                </div>
            </div>

            <div class="mySlides" id="slide-3">
                <div class="content">
                    <p class="author">Milky Way</p>
                    <q>Milky Way is the galaxy in which our solar system exists. It is estimated to have 200 billion
                        stars. The Local Group of galaxies, which Milky Way is part of, is estimated to be moving at
                        about 600km/s or about 2.2 million km/hr.</q>
                </div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>

        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <div>
    </div>

    <!-- About -->
    <div id="about">
        <h1 class="about-heading">About Space</h1>
        <p class="about-content">
        From the perspective of an Earthling, outer space is a zone that occurs about 100 kilometers (60 miles) above the planet, where there is no appreciable air to breathe or to scatter light. In that area, blue gives way to black because oxygen molecules are not in enough abundance to make the sky blue. Space is a vacuum, meaning that sound cannot carry because molecules are not close enough together to transmit sound between them. That's not to say that space is empty, however. Gas, dust and other bits of matter float around "emptier" areas of the universe, while more crowded regions can host planets, stars and galaxies.
        </p>
    </div>

    <!-- Picture of the day section -->
    <div id="pod">
        <h1 class="pod-heading">Today's Picture </h1>

        <h2 class="pod-title"></h2>
        <div class="pod-image-div">
            <img alt="picture of the day" class="pod-image">
        </div>
        <p class="pod-explained"></p>
        <div class="btn-toggler">
            <button class="see-more-less">See More</button>
        </div>
    </div>

    <!-- More info section -->

    <div id="info">
        <div class="slide-container">
            <div class="card-1">
                <h1 class="def">Other Celestial Bodies</h1>
                <div class="click-1"><button><a href="defination.php">Know More</a></button></div>
            </div>

            <div class="card-2">
                <h1 class="def-2">Planets and stars we know</h1>
                <div class="click-2"><button><a href="planetsStar.php">Know More</a></button></div>
            </div>

            <a class="prev-card">❮</a>
            <a class="next-card">❯</a>
        </div>
    </div>

    <!-- Most recent discovery Section -->
    <div id="recent-discovery">
        <!-- to be changed through php-->
        <h1 class="discovery-heading">Fast Radio Burst (FRBs)</h1>

        <div class="img-div">
            <img src="https://cdn.mos.cms.futurecdn.net/QPioBQMmVhwDqSKavFYM4h.jpg" alt="discovery-pic" class="discovery-pic">
        </div>

        <p class="discovery-p">
        In radio astronomy, a fast radio burst (FRB) is a transient radio pulse of length ranging from a fraction of a millisecond to a few milliseconds, caused by some high-energy astrophysical process not yet understood. Astronomers estimate the average FRB releases as much energy in a millisecond as the Sun puts out in 3 days. While extremely energetic at their source, the strength of the signal reaching Earth has been described as 1,000 times less than from a mobile phone on the Moon. The first FRB was discovered by Duncan Lorimer and his student David Narkevic in 2007 when they were looking through archival pulsar survey data, and it is therefore commonly referred to as the Lorimer Burst.
        </p>

        <a href="https://en.wikipedia.org/wiki/Fast_radio_burst" target='blank' class="more-info-link">See More >>></a>
    </div>

    <!-- Contact Us Section -->
    <div id="contactUs">
        <h1 class="heading">Contact Us</h1>
        <form>
            <label for="name">Name</label>
            <div class="input">
                <input type="text" placeholder="Name" class="name" required>
            </div>
            <label for="email">Email</label>
            <div class="input">
                <input type="email" placeholder="Email" class="email" required>
            </div>
            <label for="contact">contact number</label>
            <div class="input">
                <input type="tel" placeholder="Contact Number" class="number" required>
            </div>
            <div class="input">
                <button id="subscribe">Subscribe</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <div id="logoImg">
            <img src="images/logo1.png" alt="Logo" class="logoImg">
        </div>

        <div class="footer-content">
            <p>&#169; made by Samarth, Rohan and Archit</p>
        </div>
    </footer>
</body>

</html>