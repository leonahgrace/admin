<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>luchies </title>

    <link rel="shortcut icon" href="luchieicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="style.js">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Open+Sans:wght@400;500;700&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
</head>

<body id="top">


    <div class="container glass"></div>

    <!--- #HEADER --->

    <header class="header" data-header>
        <div class="container">

            <a href="#">
                <h1 class="logo">LUCHIES</h1>
            </a>

            <button class="nav-toggle-btn" aria-label="Toggle Menu" data-nav-toggle-btn>
                <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
                <ion-icon name="close-outline" class="close-icon"></ion-icon>
            </button>

            <nav class="navbar container">
                <ul class="navbar-list">

                    <li>
                        <a href="#home" class="navbar-link" data-nav-link>Home</a>
                    </li>

                    <li>
                        <a href="#about" class="navbar-link" data-nav-link>About</a>
                    </li>

                    <li>
                        <a href="#services" class="navbar-link" data-nav-link>Services</a>
                    </li>

                    <li>
                        <a href="#prices" class="navbar-link" data-nav-link>Prices</a>
                    </li>

                    <li>
                        <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
                    </li>

                    <li>
                        <a href="#gallery" class="navbar-link" data-nav-link>Gallery</a>
                    </li>



                </ul>
            </nav>

        </div>
    </header>






    <main>
        <article>

            <!--#HERO-->
            <section class="hero" id="home">
                <div class="container">

                    <div class="hero-banner">

                        <img src="lil.png" width="800" height="864" loading="lazy" alt="Luchie's Photo"
                            class="img-cover">

                        <div class="elem elem-1">
                            <p class="elem-title">39</p>

                            <p class="elem-text">Years of Success</p>
                        </div>

                        <div class="elem elem-2">
                            <p class="elem-title">1985</p>

                            <p class="elem-text">Business Established</p>
                        </div>

                        <div class="elem elem-3">
                            <ion-icon name="trophy"></ion-icon>
                        </div>

                    </div>

                    <div class="hero-content">

                        <h2 class="hero-title">
                            <span>Hello We Are</span>
                            <strong>LUCHIES</strong> A Beauty Parlor from Nagcarlan, Laguna
                        </h2>

                        <p class="hero-text">
                            Continue to serve your beauty with Luchie's Salon!
                        </p>

                        <div class="btn-group">
                            <a href="#contact" class="btn btn-primary blue">Book Now!</a>
                        </div>

                    </div>

                </div>
            </section>





            <!--- #ABOUT --->

            <section class="section about" id="about">
                <div class="container">

                    <figure class="about-banner">

                        <img src="about.jpg" width="800" height="652" loading="lazy" alt="Ethan's Photo"
                            class="img-cover">
                        <div class="elem elem-1">
                            <p class="elem-title">39</p>

                            <p class="elem-text">Years of Success</p>
                        </div>


                        <div class="elem elem-3">
                            <ion-icon name="trophy"></ion-icon>
                        </div>



                    </figure>

                    <div class="about-content">

                        <p class="section-subtitle"></p>

                        <h2 class="h2 section-title">ABOUT US</h2>

                        <p class="section-text"> Luchie's Salon, which has been around since 1985 in Nagcarlan, Laguna.
                            Discover the beauty and style with our salon, We will make sure you leave with confidence
                            and radiance.
                        </p>

                        <p class="section-text">
                            Experience our affordable beauty services and rely on us to deliver our promise of expert
                            service
                            where beauty and quality meet.

                    </div>

                </div>
            </section>





            <!--- #SERVICES/PORTFOLIO --->

            <section class="section portfolio" id="services">
                <div class="container">

                    <p class="section-subtitle">OUR</p>

                    <h2 class="h2 section-title">SERVICES</h2>

                    <p class="section-text">
                        SERVICE POLICY: Once you've received our service, refunds are not provided. However, if you're
                        dissatisfied within a week, we will make adjustments.
                        Just return to the salon for us to assess the situation. We will do our best to fix any issues
                        with no extra charge.
                    </p>

                    <ul class="portfolio-list">

                        <li>
                            <a href="#prices" class="portfolio-card" style="background-image: url('uno.png')">
                                <div class="card-content">

                                    <p class="card-subtitle">HAIR</p>

                                    <h3 class="h3 card-title">Haircut, Shampoo & Style, Color, Perm, Hot-Oil, Rebond
                                    </h3>


                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#prices" class="portfolio-card" style="background-image: url('dosh.png')">
                                <div class="card-content">

                                    <p class="card-subtitle">WAXING/MAKEUP/LASH</p>

                                    <h3 class="h3 card-title">Brows, Makeup Application, Lash Tint, Lashes</h3>


                                </div>
                            </a>
                        </li>

                    </ul>

                </div>
            </section>





            <!--- #PRICES/SKILLS-->

            <section class="section skills" id="prices">
                <div class="container">

                    <p class="section-subtitle">OUR</p>

                    <h2 class="h2 section-title">PRICES</h2>

                    <p class="section-text"> PRICE POLICY: The cost of certain services may vary depending on your hair
                        length, contrary to what is stated. </p>

                    <!-- Add your photo here -->
                    <img src="prices.png" alt="Service Photo" style="max-width: 100%;">

                </div>
            </section>






            <!--- #CONTACT --->

            <section class="section contact" id="contact">
                <div class="container">

                    <div class="contact-card">

                        <p class="card-subtitle">BOOK NOW!</p>

                        <h2 class="h2 section-title">CONTACT US</h2>
                        <p class="section-text"> IMPORTANT POLICY: WE ARE CLOSED EVERY MONDAY, AND WALK-INS ARE STRICTLY
                            PROHIBITED. </p>

                        <div class="wrapper">
                            <form action="SUBMIT.php" class="contact-form" method="post">
                                <input type="text" name="name" placeholder="Name" required class="contact-input">
                                <input type="number" name="phone" placeholder="Phone Number" required
                                    class="contact-input">
                                <input type="email" name="email" placeholder="Email" required class="contact-input">
                                <textarea name="message" placeholder="Message" required
                                    class="contact-input"></textarea>
                                <button type="submit" class="btn-submit" value="Submit">Submit</button>
                            </form>


                            <ul class="contact-list">

                                <li class="contact-item">

                                    <div class="contact-icon">
                                        <ion-icon name="location"></ion-icon>
                                    </div>

                                    <div>
                                        <h3 class="contact-item-title">Address</h3>

                                        <address class="contact-item-link">
                                            144 C. LIRIO ST. NAGCARLAN, LAGUNA
                                        </address>
                                    </div>

                                </li>

                                <li class="contact-item">

                                    <div class="contact-icon">
                                        <ion-icon name="mail"></ion-icon>
                                    </div>

                                    <div>
                                        <h3 class="contact-item-title">Email</h3>

                                        <a href="mailto:luchiesalon@gmail.com"
                                            class="contact-item-link">luchiesalon@gmail.com</a>
                                    </div>

                                </li>

                                <li class="contact-item">

                                    <div class="contact-icon">
                                        <ion-icon name="call"></ion-icon>
                                    </div>

                                    <div>
                                        <h3 class="contact-item-title">Phone</h3>

                                        <a href="tel:+639177081846" class="contact-item-link">+63917-708-1846</a>
                                    </div>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>
            </section>





            <!--- #GALLERY/BLOG --->

            <section class="section blog" id="gallery">
                <div class="container">

                    <p class="section-subtitle">GALLERY</p>

                    <h2 class="h2 section-title">Checkout our gallery</h2>

                    <ul class="blog-list">

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner">
                                    <a href="#">
                                        <img src="wan.jpg" width="1181" height="843" loading="lazy" alt="luchies"
                                            class="img-cover">
                                    </a>
                                </figure>

                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner">
                                    <a href="#">
                                        <img src="cert.jpg" width="1181" height="843" loading="lazy" alt="luchies"
                                            class="img-cover">
                                    </a>
                                </figure>
                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner">
                                    <a href="#">
                                        <img src="too.jpg" width="1181" height="843" loading="lazy" alt="luchies"
                                            class="img-cover">
                                    </a>
                                </figure>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

        </article>
    </main>





    <!--- #FOOTER --->

    <footer class="footer">
        <div class="container">

            <p class="copyright">
                &copy; 2024 <a href="#" class="copyright-link">luchiesalon</a>. All Rights Reseverd
            </p>



        </div>
    </footer>






    <a href="#top" class="back-to-top" data-back-to-top>BACK TOP</a>
    <script src="style.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>