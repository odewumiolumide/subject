<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="about.css">
     <!---------Iconsout Link--------->

     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

     
     <!----------------------Goggle Fonts--------->

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">


  <!---------Icon Link--------->

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <title>Home School Page</title>
</head>
<body>

<!-----------NAVBAR SECTION------------->
    
<nav>
        <div class="container nav_container">
            
        <h4>Welcome <?php echo $row["name"]; ?></h4>
        
            <ul class="nav_menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="course-2.php">Courses</a></li>
                <li><a href="contact-2.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
                
            </ul>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></i></button>
            <button id="open-menu-btn"><i class="uil uil-list-ul"></i></button>

        </div>
    </nav>

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

    <!-----------TOP CATEGORIES------->

    <section class="about_achievement" style="background: var(--color-bg2);" >
        <div class="container about_achievement-container">
            <div class="about_achievement-left">
                <img src="images/svg/icon-compatible.svg" alt="">
            </div>
            <div class="about_achievement-right">
                <h1>Top Categories</h1>
                <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam fugiat tenetur quibusdam 
                    accusamus facilis quae eum numquam, hic repellendus dignissimos porro, explicabo dolor rerum natus.</p>
                    <br>
                    <div class="achievement_cards">
                        <article class="achievement_card">
                            <span class="achievement_icon"><i class="uil uil-bitcoin-circle"></i></span>
                            <h3>450+</h3>
                            <p>Digital Marketing</p>
                        </article>

                        <article class="achievement_card">
                            <span class="achievement_icon"><i class="uil uil-users-alt"></i></span>
                            <h3>79,00+</h3>
                            <p>AI Machine Learning</p>
                        </article>

                        <article class="achievement_card">
                            <span class="achievement_icon"><i class="uil uil-users-alt"></i></span>
                            <h3>79,00+</h3>
                            <p>Software Development</p>
                        </article>

                        <article class="achievement_card">
                            <span class="achievement_icon"><i class="uil uil-users-alt"></i></span>
                            <h3>79,00+</h3>
                            <p>IT Service Architecture</p>
                        </article>

                        <article class="achievement_card">
                            <span class="achievement_icon"><i class="uil uil-users-alt"></i></span>
                            <h3>79,00+</h3>
                            <p>Cyber Security</p>
                        </article>

                        <article class="achievement_card">
                            <span class="achievement_icon"><i class="uil uil-palette"></i></span>
                            <h3>250+</h3>
                            <p>Quality Management</p>
                        </article>
                    </div>
            </div>
        </div>
    </section>

    <!-----------TOP CATEGORIES ENDS------->

    <!-----------CATEGORIES SECTION ENDS------------->

    <section class="categories">
        <div class="container categories_container">
            <div class="categories_left">
                <h1>Courses student are learning</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ea iusto qui magni aut dolorum magnam sunt 
                    doloremque perspiciatis neque, fugit harum vitae rerum. Reiciendis repudiandae eos dolores accusantium sint.</p>
                    <a href="courses.php" class="btn btn-primary">Learn More</a>
            </div>

            <div class="categories_right">
                <article class="category">
                    <span class="category_icon"><i class="uil uil-bitcoin-circle"></i></span>
                    <h5>Power BI Beginners</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sapiente?</p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-laptop-cloud"></i></span>
                    <h5>Introduction to SQL</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sapiente?</p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-adobe-alt"></i></span>
                    <h5>Python for Beginners</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sapiente?</p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-music"></i></span>
                    <h5>Introdction to Data Analytics Course</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sapiente?</p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-puzzle-piece"></i></span>
                    <h5>Introduction to Cybercrime</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sapiente?</p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-palette"></i></span>
                    <h5>Introdction to IoT</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sapiente?</p>
                </article>
            </div>
        </div>
    </section>

    <!-----------CATEGORIES SECTION ENDS------------->


    <!-----------COURSE SECTION------------->

    <section class="courses">
        <h2>Recommended Courses</h2>
        <div class="container courses_conatiner">
            <article class="course">
                <div class="course_image">
                    <img src="images/svg/fx.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4>Azure Fundamentals</h4>
                    <span class="achievement_icon">4.6<i class="uil uil-plus"></i></span>
                    <p>Enroll and win Rewards</p>
                    <a href="courses.php" class="btn btn-primary">FREE</a>
                </div>
            </article>

            <article class="course">
                <div class="course_image">
                    <img src="images/svg/class.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4>Introdction to MS Excel</h4>
                    <span class="achievement_icon">4.5<i class="uil uil-plus"></i></span>
                    <p>Enroll and win Rewards</p>
                    <a href="courses.php" class="btn btn-primary">FREE</a>
                </div>
            </article>

            <article class="course">
                <div class="course_image">
                    <img src="images/svg/lab.jpg" alt="">
                </div>

                <div class="course_info">
                    <h4>Introdction to MS Excel</h4>
                    <span class="achievement_icon">4.7<i class="uil uil-plus"></i></span>
                    <p>Enroll and win Rewards</p>
                    <a href="courses.php" class="btn btn-primary">FREE</a>
                       
                </div>
                
            </article>
        </div>
    </section>

    <!-----------COURSE SECTION ENDS------------->

    
    
    <!-----------FOOTER SECTION------------->

    <footer class="">

        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.php" class="footer_logo"><H4>Resources</H4></a>
                <p>Your Weekly Reads</p>
                <p>Popular Resources</p>
                
            </div>

            <div class="footer_2">
                <h4>Advance Courses</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Big Data Hadoop</a></li>
                    <li><a href="about.php">Applied Data Science</a></li>
                    <li><a href="courses.php">AWS Solution Architect</a></li>
                    <li><a href="contact.php">Advance Java Training</a></li>
                </ul>
            </div>

            <div class="footer_4">
                <h4>Invit your friends</h4>
                <p>Enroll for as many SkillUp courses</p>
                <p>Example@gmail.com</p>
                <p>Location (Live): Lagos</p>
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

    <script src="port.js"></script>
</body>
</html>