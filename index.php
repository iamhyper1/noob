<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travel Website</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

    <!--owl carousel-->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />

    <link type="image" rel="icon" href="images/holyday-bg.jpg" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,500i,600,600i" rel="stylesheet">
</head>

<body>

    <div id="arrow">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>

    <nav>
        <div class="container">
            <div class="menu-par">
                <div class="logo-par">
                    <a href="index.html">
                        <h2>Travel Nepal</h2>
                    </a>
                </div>
                <div class="nav">
                    <ul>
                        <li><a class="menu_hover" href="index.html">Home</a></li>
                        <li><a class="menu_hover" href="travel.html">Tarvel</a></li>
                        <li><a class="menu_hover" href="booknow.html">Book Now</a></li>
                        <li><a class="menu_hover" href="gallery.html">Gallery</a></li>
                        <li><a class="menu_hover" href="holiday.html">Holiday</a></li>
                        <li><a class="menu_hover" href="blog.html">Blog</a></li>
                        <li><a class="menu_hover" href="contactus.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="toggle-btn">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <header>
        <div class="conatiner">
            <div class="home_header_info">
                <h1 class="typewrite" data-period="2000" data-type='[ "Happiness is closer than you think", "Adventure awaits, go find it.", "Don’t be a tourist, be a traveler." ]'></h1>
                <p>A lot of people around the world travel every year to many places. Moreover, it is important to travel to humans. Some travel to learn more while some travel to take a break from their life. No matter the reason, travelling opens a big door for us to explore the world beyond our imagination and indulge in many things.</p>
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="video">
            <video id="video" autoplay loop muted>
                <source type="video/mp4" src="images/Your MIND will Relax After Watching _ THIS (4K) NEPAL CINEMATIC SHORT FILM.mp4" />
            </video>
        </div>
    </header>

    <Section id="welcome_Sec">
        <div class="container">
            <h2><span>The official travel site of the friendly Nepal<span></h2>
            <p>when an unknown printer took a galley of type and scrambled it to make a type specimen</p>
        </div>
    </Section>

    <Section id="slides_parent">
        <div class="container">
            <div class="slides">
                <div class="slide_1">
                    <div class="slide_info">
                        <p>Annapurna Base Camp</p>
                    </div>
                </div>
                <div class="slide_1 slide_2">
                    <div class="slide_info">
                        <p>Kulekhani Dam</p>
                    </div>
                </div>
                <div class="slide_1 slide_3">
                    <div class="slide_info">
                        <p>Fewa Lake, Pokhara</p>
                    </div>
                </div>
                <div class="slide_1 slide_4">
                    <div class="slide_info">
                        <p>Sagarmatha</p>
                    </div>
                </div>
                <div class="slide_1 slide_5">
                    <div class="slide_info">
                        <p>Pasupatinath Temple</p>
                    </div>
                </div>
                <div class="slide_1 slide_6">
                    <div class="slide_info">
                        <p>Upper Mustang Village</p>
                    </div>
                </div>
                <div class="slide_1 slide_7">
                    <div class="slide_info">
                        <p>Syambhunath Temple</p>
                    </div>
                </div>
            </div>
        </div>
    </Section>

    <section id="explore-fiji">
        <div class="container">
            <div class="explore-content-par">
                <div class="explore-info">
                    <h3>Book Now </h3>
                    <div id="clockdiv">
                        <div>
                            <span class="days"></span>
                            <div class="smalltext">Days</div>
                        </div>
                        <div>
                            <span class="hours"></span>
                            <div class="smalltext">Hours</div>
                        </div>
                        <div>
                            <span class="minutes"></span>
                            <div class="smalltext">Minutes</div>
                        </div>
                        <div>
                            <span class="seconds"></span>
                            <div class="smalltext">Seconds</div>
                        </div>
                    </div> 
                </div>
                <div class="counter-form">
                    <form action="submit_form.php" method="post">                        
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                        <input type="text" id="Email" name="Email" placeholder="Your Email..">

                        <input type="text" id="Duration Time" name="duration_time" placeholder="Please Write Here a Duration Time(ie. From....To)">
                        <select id="country" name="country">
                            <option value="Pasupatinath">Pasupatinath Temple</option>
                            <option value="Swayambhu">Swayambhu </option>
                            <option value="Mustang">Mustang</option>
                            <option value="Pokhara">Pokhara</optiion>
                        </select>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                        <input type="submit" value="Submit">
                        

                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            
            <div class="row">
                <div align="center">
                    <button class="btn filter-button active" data-filter="all">All</button>
                    <button class="btn filter-button" data-filter="hdpe">Diving</button>
                    <button class="btn filter-button" data-filter="sprinkle">Nature</button>
                    <button class="btn filter-button" data-filter="spray">Temple</button>
                </div>

                <div class="filter-gal-par">
                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                        <img src="images/fiji-surprise//Bunjy-Nepal-6.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="images//fiji-surprise/Nature_Nepal.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                        <img src="images/fiji-surprise/maxresdefault.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                        <img src="images/recipe_slides/pashupatinath_sm_pilgrims-1624452531.jpeg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="imageS/fiji-surprise/780-Rhino-photo-for-envt-day.webp" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                        <img src="images/recipe_slides/1200px-Swayambhunath_2018.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="images/fiji-surprise/why-travel-to-nepal-nature-and-spiritual-tour.jpeg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                        <img src="images/fiji-surprise/shradha-silwal-2-375x195.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                        <img src="images/fiji-surprise/181003_XFLO0081_Boudhanath-Stupa_1200x.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                        <img src="images/fiji-surprise/FILE-1602006525-20200723194334.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="images/fiji-surprise/photo-1533130061792-64b345e4a833.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                        <img src="images/fiji-surprise/manakamana-temple.jpg" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fiji-holyday">
        <div class="container">
            <h3>Start planning your dream holiday</h3>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/recipe_slides/Phewa_lake_,_Pokhara.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Fewa Lake</h3>
                            <p>Pokhara</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/recipe_slides/pashupatinath_sm_pilgrims-1624452531.jpeg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Pasupatinath Temple     </h3>
                            <p>Kathmandu</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/recipe_slides/maxresdefault-30.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Swayambhu Nath </h3>
                            <p>Kathmandu</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/recipe_slides/images.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Mustang</h3>
                            <p>Nepal</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/recipe_slides/Annapurna-Helicopter-and-Trekking.jpeg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Annapurna Base Camp</h3>
                            <p>Nepal</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/recipe_slides/ama-dablam-himalayas-sagarmatha-national-park-national-park-wallpaper-preview.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Sagarmatha </h3>
                            <p>Nepal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <h3>About Historical Place Of Nepal</h3>
            
            <div id="blog-par">
                <div class="blog-content">
                    <div class="blog-img">
                        <img class="img-responsive" src="images/recipe_slides/pashupatinath_sm_pilgrims-1624452531.jpeg" />
                    </div>
                    <div class="blog-info">
                        <ul>
                            <li>Pasupatinath Temple,</li>
                            <li>Kathmandu</li>
                        </ul>
                        <h4>श्री पशुपतिनाथ मन्दिर</h4>
                        <p>Pashupatinath Temple (Nepali: श्री पशुपतिनाथ मन्दिर) is a Hindu temple dedicated to Lord Pashupati, and is located in Kathmandu, Nepal near the Bagmati River. This is currently the largest temple in the world as well as one of the Oldest Temple.

                        </p>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="blog-img">
                        <img class="img-responsive" src="images/recipe_slides//about-swayambhunath_1552978452.jpg" />
                    </div>
                    <div class="blog-info">
                        <ul>
                            <li>Swayambhunath Stupa,</li>
                            <li>Kathmandu</li>
                        </ul>
                        <h4>स्वयम्भू स्तूप</h4>
                        <p>Swayambhunath Stupa, also known as “Monkey Temple” is located on the hilltop in the Northwest of Kathmandu Valley. It is a peaceful place where the beautiful panoramic view of the Kathmandu city can be observed. It is said that the glory of Kathmandu valley has been started from here.</p>
                    </div>
                </div>
            </div>
            <div id="blog-par">
                <div class="blog-content">
                    <div class="blog-img">
                        <img class="img-responsive" src="images/recipe_slides/temple-g2f93590bb_1920.jpg" />
                    </div>
                    <div class="blog-info">
                        <ul>
                            <li>Patan Durbar Square,</li>
                            <li>Lalitpur</li>
                        </ul>
                        <h4>पाटन दरवार</h4>
                        <p>Patan durbar Square is situated at the centre of the city of Lalitpur in Nepal. It is one of the three Durbar Squares in the Kathmandu Valley, all of which are UNESCO World Heritage Sites. One of its attractions is the ancient royal palace where the Malla Kings of Lalitpur resided.</p>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="blog-img">
                        <img class="img-responsive" src="images/recipe_slides/2022110811118_6159ce54bd04f19f9135172adc6dc596abd0c761398827bb3437027690d6682c.jpg" />
                    </div>
                    <div class="blog-info">
                        <ul>
                            <li>Lumbini</li>
                            <li>Lumbini, Nepal</li>
                        </ul>
                        <h4>लुम्बिनी</h4>
                        <p>is a Buddhist pilgrimage site in the Rupandehi District of Lumbini Province in Nepal. It is the place where, according to Buddhist tradition, queen Maya gave birth to Siddhartha Gautama at around 566 BCE.Gautama, who, according to Buddhist tradition, achieved Enlightenment some time around 528 BCE,became Shakyamuni Buddha and founded Buddhism. Lumbini is one of many magnets for pilgrimage that sprang up in places pivotal to the life of the Buddha.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <h3>PRICE OF PER PERSON ACCORDING TO DESTINATION</h3> 
    <footer>
        <body>
          <table>
            <tr>
              <th>Destination</th>
              <th>Price(Per Day)</th>
              <th>Departure date</th>
              <th>Return date</th>
            </tr>
            <tr>
              <td>Pashupatinath
              </td>
              <td>RS.5,000</td>
              <td>May 14, 2024</td>
              <td>May 16, 2024</td>
            </tr>
            <tr>
              <td>Lumbini</td>
              <td>Rs.75,000</td>
              <td>May 14, 2024</td>
              <td>May 25, 2024</td>
            </tr>
            <tr>
              <td>Manakamana Temple</td>
              <td>Rs.25,000</td>
              <td>May 14, 2024</td>
              <td>May 20, 2024</td>
            </tr>
          </table>
       
              
        <p class="copyright">Copyright © 2021 Prabhat Ojha Travel Nepal</p>
    </footer>
    <div class="messenger-container">
        <div class="messenger-icon">
          <img src="images/recipe_slides/Massangar-icon-on-transparent-background-PNG.png" alt="Message Icon">
        </div>
        <div class="messenger-box">
          <div class="messenger-header">
            <h2>Messenger Box</h2>
          </div>
          <div class="messenger-body" id="messenger-body">
            <!-- Messenger messages will be dynamically added here -->
          </div>
          <div class="messenger-footer">
            <input type="text" id="message-input" placeholder="Type your message..." />
            <button id="send-button">Send</button>
          </div>
        </div>
      </div>
    
      <script src="Travel-html/js/extrenaljq.js"></script>

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/extrenaljq.js"></script>
</body>

</html>
