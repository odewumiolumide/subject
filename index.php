<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!---------Iconsout Link--------->

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

   <!------------Swiper Js Link----------------->
    
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

   <!----------------------Goggle Fonts--------->

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">


     <!---------Icon Link--------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Online School Website</title>
</head>


<body>

    <!-----------NAVBAR SECTION------------->
    
    <nav>
        <div class="container nav_container">
            <a href="index.php"><h4>Austin Texas</h4></a>
            <ul class="nav_menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact.php">Contact</a></li>
                
            </ul>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></i></button>
            <button id="open-menu-btn"><i class="uil uil-list-ul"></i></button>

        </div>
    </nav>

    <!-----------NAVBAR SECTION ENDS------------->

    <!-----------HEADER SECTION------------->

    <header>
        <div class="container header_container">
            <div class="header_left">
                  <h1>Grow your skill to advance your career path</h1>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam dicta 
                    sequi minima corporis natus blanditiis nisi iure, voluptas earum ipsa.</p>
                    <a href="courses.php" class="btn btn-primary">Get Started</a>
            </div>

            <div class="header_right">
                <div class="header_right-image">
                    <img src="images/svg/icon-light.svg" alt="">
                </div>

            </div>
        </div>
    </header>

    <!-----------HEADER SECTION ENDS------------->

    <!-----------CATEGORY SECTION------------->


    <section class="categories">
        <div class="container categories_container">
            <div class="categories_left">
                <h1>Categories</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ea iusto qui magni aut dolorum magnam sunt 
                    doloremque perspiciatis neque, fugit harum vitae rerum. Reiciendis repudiandae eos dolores accusantium sint.</p>
                    <a href="courses.php" class="btn btn-primary">Learn More</a>
            </div>

            <div class="categories_right">
                <article class="category">
                    <span class="category_icon"><i class="uil uil-bitcoin-circle"></i></span>
                    <h5>BlockChain</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sapiente?</p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-laptop-cloud"></i></span>
                    <h5>Cloud Computing</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sapiente?</p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-adobe-alt"></i></span>
                    <h5>Python for Beginners</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sapiente?</p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-music"></i></span>
                    <h5>Artifical Intelligence</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sapiente?</p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-puzzle-piece"></i></span>
                    <h5>Data Analytics</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sapiente?</p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-palette"></i></span>
                    <h5>Cyber Security</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sapiente?</p>
                </article>
            </div>
        </div>
    </section>

    <!-----------CATEGORY SECTION ENDS------------->


    <!-----------COURSE SECTION------------->

    <section class="courses">
        <h2>Our Popular Courses</h2>
        <div class="container courses_conatiner">
            <article class="course">
                <div class="course_image">
                    <img src="images/svg/fx.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4>Business Adminstration</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, voluptas. Veniam, cum. 
                        Temporibus officia, rem porro est aperiam illum pariatur dolorum maxime fugiat possimus a!</p>
                        <a href="courses.php" class="btn btn-primary">Leran More</a>
                </div>
            </article>

            <article class="course">
                <div class="course_image">
                    <img src="images/svg/class.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4>Tech Space</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, voluptas. Veniam, cum. 
                        Temporibus officia, rem porro est aperiam illum pariatur dolorum maxime fugiat possimus a!</p>
                        <a href="courses.php" class="btn btn-primary">Leran More</a>
                </div>
            </article>

            <article class="course">
                <div class="course_image">
                    <img src="images/svg/lab.jpg" alt="">
                </div>

                <div class="course_info">
                    <h4>Robotics Engineering</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, voluptas. Veniam, cum. 
                        Temporibus officia, rem porro est aperiam illum pariatur dolorum maxime fugiat possimus a!</p>
                        <a href="courses.php" class="btn btn-primary">Leran More</a>
                       
                </div>
                
            </article>
        </div>
    </section>

    <!-----------COURSE SECTION ENDS------------->

    <!-----------FAQS SECTION------------->


    <section class="faqs">
        <h2>Frequently Asked Question</h2>
        <div class="container faqs_container">
            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do i know the right course for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Assumenda voluptatem debitis optio ex iure porro!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do i know the right course for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Assumenda voluptatem debitis optio ex iure porro!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do i know the right course for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Assumenda voluptatem debitis optio ex iure porro!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do i know the right course for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Assumenda voluptatem debitis optio ex iure porro!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do i know the right course for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Assumenda voluptatem debitis optio ex iure porro!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do i know the right course for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Assumenda voluptatem debitis optio ex iure porro!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do i know the right course for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Assumenda voluptatem debitis optio ex iure porro!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do i know the right course for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Assumenda voluptatem debitis optio ex iure porro!</p>
                </div>
            </article>
        </div>
    </section>

    <!-----------FAQS SECTION ENDS------------->


    <!-----------TESTIMIONAL SECTION------------->

    <!----<section class="container testimoinals_container mySwiper">
        
        <h2>Student's Testimoinals</h2>
        <div class="swiper-wrapper">
        
            <article class="testimoinal swiper-slide">
                <div class="avatar">
                    <img src="images/svg/per.jpg" alt="">
                </div>
                <div class="testimoinal_info">
                    <h2>Star Rose</h2>
                    <small>UI/UX Designer</small>
                </div>
                <div class="testimoinal_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Omnis, aut fugit esse assumenda in accusamus!</p>
                </div>
            </article>

           <article class="testimoinal swiper-slide">
                <div class="avatar">
                    <img src="images/svg/icon-battery.svg" alt="">
                </div>
                <div class="testimoinal_info">
                    <h2>Star Clef</h2>
                    <small>Student</small>
                </div>
                <div class="testimoinal_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Omnis, aut fugit esse assumenda in accusamus!</p>
                </div>
            </article>

            <article class="testimoinal swiper-slide">
                <div class="avatar">
                    <img src="images/svg/icon-battery.svg" alt="">
                </div>
                <div class="testimoinal_info">
                    <h2>Star Clef</h2>
                    <small>Student</small>
                </div>
                <div class="testimoinal_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Omnis, aut fugit esse assumenda in accusamus!</p>
                </div>
            </article> 

            <article class="testimoinal swiper-slide">
                <div class="avatar">
                    <img src="images/svg/per 1.jpg" alt="">
                </div>
                <div class="testimoinal_info">
                    <h2>John Deo</h2>
                    <small>Web Devloper</small>
                </div>
                <div class="testimoinal_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Omnis, aut fugit esse assumenda in accusamus!</p>
                </div>
            </article>

            <article class="testimoinal swiper-slide">
                <div class="avatar">
                    <img src="images/svg/per 2.jpg" alt="">
                </div>
                <div class="testimoinal_info">
                    <h2>Will Rice</h2>
                    <small>Cloud Engineer</small>
                </div>
                <div class="testimoinal_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Omnis, aut fugit esse assumenda in accusamus!</p>
                </div>
                
            </article>
            
        </div>

        <div class="swiper-pagination"></div> 
    </section> ---> 

    <!-----------TESTIMIONAL SECTION ENDS------------->

     <!--------FOOTER SECTION----->
    
    
     <footer class="">

        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.php" class="footer_logo"><H4>STARCLEF</H4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>

            <div class="footer_2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="footer_4">
                <h4>Contact</h4>
                <p>+123-234-6789</p>
                <p>Example@gmail.com</p>
                <p>Lagos</p>
                <ul class="footer_socials">
                    <li><a href="#"><i class="uil uil-facebook-f"></i></a>
                    <li><a href="#"><i class="uil uil-instagram-alt"></i></a>
                    <li><a href="#"><i class="uil uil-twitter"></i></a>
                    <li><a href="#"><i class="uil uil-linkedin-alt"></i></a>
                </ul>
                <div class="footer_copyright">
                    <small>copyright starclef</small>
                </div>
            </div>

            

            
        </div>

     </footer>

    <!-----------FOOTER SECTION ENDS------------->



    <script src="port.js"></script>

    <!--------Swiper  Js Link-------->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },

          // when window width is >= 600px
          
          breakpoint: {
            600: {
                slidesPerView: 3,
            }
          }
        });
        </script>

</body>
</html>