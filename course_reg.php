<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">


    <!---------Iconsout Link--------->

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

   
   <!----------------------Goggle Fonts--------->

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">


     <!---------Icon Link--------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Online School Website</title>
</head>


<body>
    <!-----------CONTACT SECTION------------->

    <section class="contact">
        <div class="container contact_container">
            <aside class="contact_aside">
                <div class="aside_image">
                    <img src="images/svg/icon-compatible.svg" alt="">
                </div>
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Molestias consequuntur, ipsum facilis nostrum adipisci vel.</p>
                     

            </aside>

            <!-----------CONTACT SECTION END------------->


            <!-----------FORM SECTION------------->

            <form action="https://formspree.io/f/xrgnqdbp" method="post" class="contact_form">
                <div class="form_name">
                    <input type="text" name="First Name" placeholder="First Name" required>
                    <input type="text" name="Last Name" placeholder="Last Name" required>
                </div>
                <input type="email" name="Email Address" placeholder="Your Email Address" required>

                <select style="width: 100%;
                               padding: 1rem;
                               background: var(--color-bg);
                               color: var(--color-white);
                            " type="course" name="course" placeholder="Your Course" required>
                      
                      <option value="Program of Interest">Program of Interest</option>
                      <option value="Automotive Product">Automotive Product</option>
                      <option value="Plumbing Product">Plumbing Product</option>
                      <option value="Plastic Product">Plastic Product</option>
                      <option value="Skin Care Product">Skin Care Product</option>
                      <option value="Electrical & Solar">Electrical & solar</option>
                      <option value="Farm Product">Farm Product</option>
                      <option value="Kitchen Product">Kitchen Product</option>
                      <option value="Phones">Phones</option>
                      <option value="Furnitures">Furnitures</option>
                  </select>
           
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="course-2.php">Alreday Have An Account / Next</a>
            </form>
        </div>
    </section>

     <!-----------FORM SECTION END------------->



</body>
</html>