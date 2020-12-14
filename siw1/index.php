<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/all.css">

    <title>Travello</title>
</head>
<body>
    <section class="banner">
        <header class="header">
            <div class="logo">Travello</div>
                <ul class="nav__list">
                    <li class="nav__item"><a class="nav__link" href="">Home</a></li>
                    <li class="nav__item"><a class="nav__link" href="about.php">About us</a></li>
                    <li class="nav__item"><a class="nav__link" href="">Services</a></li>
                    <li class="nav__item"><a class="nav__link" href="">News</a></li>
                    <li class="nav__item"><a class="nav__link" href="contact.php">Contact us</a></li>
                </ul>
                <div class="contact">Call us: 00-56 445 678 33</div>
        </header>

        <div class="banner__content">
            <h2 class="banner__title">Let us take you away</h2>
            <div class="banner__search">
                <div class="banner_search_elements">
                    <input type="text" class="search_city" placeholder="City">
                    <input type="text" class="search_dep" placeholder="Depature">
                    <input type="text" class="search_arrival" placeholder="Arrival">
                    <input type="text" class="search_budget" placeholder="Budget">
                    <button class="search_btn">Search</button>
                </div>
            </div>
        </div>

    </section>
    <?php
        class Place {
            public $title;
            public $subtitle;
            public $price;
            public $image;

            function __construct($title, $subtitle, $price, $image) {
                $this->title = $title;
                $this->subtitle = $subtitle;
                $this->price = $price;
                $this->image = $image;
            }
        }

        $place1 = new Place("Bali", "Nulla pretium tincidunt felis, nec.","From $400", "des1.jpg");
        $place2 = new Place("Indonesia", "Nulla pretium tincidunt felis, nec.", "From $679", "des2.jpg");
        $place3 = new Place("San Francisco", "Nulla pretium tincidunt felis, nec.", "From $890", "des3.jpg");
        $place4 = new Place("Paris", "Nulla pretium tincidunt felis, nec.","From $900", "des4.jpg");
        $place5 = new Place("Mykonos", "Nulla pretium tincidunt felis, nec.", "From $300", "des5.jpg");
        $place6 = new Place("Phi Phi Island", "Nulla pretium tincidunt felis, nec.","From $490", "des6.jpg");
        $place7 = new Place("Phi Phi Island", "Nulla pretium tincidunt felis, nec.","From $600", "des6.jpg");
        $place8 = new Place("San Francisco", "Nulla pretium tincidunt felis, nec.", "From $770", "des3.jpg");
        $place9 = new Place("Paris", "Nulla pretium tincidunt felis, nec.","From $900", "des4.jpg");

        $places = array(
            $place1,
            $place2,
            $place3,
            $place4,
            $place7,
            $place5,
            $place6,
            $place8,
            $place9
        )
    ?>

    <section class="travel">
        <div class="travel__info">
            <p class="travel__title">SIMPLFY AMAZING PLACES</p>
            <h1 class="travel__subtitle">Popular Destinations</h1>
        </div>

        <div class="travel__places">
                <?php
                    foreach ($places as $place): ?>
                        <div class="place">
                            <img width='350' height='250' src="images/<?php echo $place->image; ?>" >
                            <div class="place-title"><?php echo $place->title; ?></div>
                            <div class="place-subtitle"><?php echo $place->subtitle; ?></div>
                            <div class="place-price"><?php echo $place->price; ?></div>                           
                        </div>

                <?php endforeach; ?>

        </div>

    </section>
    

    <footer class="footer">
        <div class="footer__main">
            <div class="footer__name">
                <h1 class="footer-title">Subscribe to our newsletter to get the latest trends & news</h1>
                <p class="footer-subtitle">Join our database NOW!</p>
            </div>

            <div class="footer__container">
                <form class="submit__form" action="subscribe.php" method="GET">
                    <input class="submit-name" type="text" placeholder="Name" name="name">
                    <input class="submit-email" type="text" placeholder="Your Email" name="email">
                    <button class="submit-btn" type="submit">Subscribe</button>
                </form>
            </div>
            
            <div class="footer__contact">
                <div class="footer__contact_item">
                    <div class="footer__contact_title">GIVE US CALL</div>
                    <ul class="footer__contact_info">
                        <li>Office Landline: +44 5567 32 664 567</li>
                        <li>Mobile: +44 5567 89 3322 332</li>
                    </ul>
                </div>
    
                <div class="footer__contact_item">
                    <div class="footer__contact_title">COME & DROP BY</div>
                    <ul class="footer__contact_info">
                        <li>4124 Barnes Street, Sanford, FL 32771</li>
                    </ul>
                </div>
    
                <div class="footer__contact_item">
                    <div class="footer__contact_title">SEND US A MESSAGE</div>
                    <ul class="footer__contact_info">
                        <li>youremail@gmail.com</li>
                        <li>Office@yourbusinessname.com</li>
                    </ul>
                </div>
    
            </div>
        </div>
        

    </footer>

    

</body>
</html>