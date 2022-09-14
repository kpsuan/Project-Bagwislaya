<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>project bagwislaya</title>
        <link rel="icon" href="image/logo.png">
        <link rel = "stylesheet" href = "./css/style.css"/>
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navi-bar">
            <div class="nav-container">
                <a href ="index.php" id = "navlogo">bagwislaya</a> 
                <div class="toggle" id="mobile-version"> 
                    <span class = "bar"></span> <span class = "bar"></span>
                    <span class = "bar"></span>
                </div>
                <!--Contains all the different links for our website-->
                <ul class="navigation-menu">
                    <li class = "items"><a href = "#" class="link">Home</a></li>
                    <li class = "items"><a href = "#about" class="link">About Us</a></li>
                    <li class = "items"><a href = "yearbook.html" class="link">Yearbook</a></li>
                    <li class = "items"><a href = "project.html" class="link">Projects</a></li>
                    <li class = "items"><a href = "login.php" class="link">Sign In</a></li>        
                </ul>
            </div>
        </nav>

        <!--Main Page-->
        <section>
        <div class="main">
            <div class="main-cont">
                <div class="bg">
                    <video autoplay loop class="bg-vid" muted plays-inline>
                        <source src="image/landing2.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="main-text">
                    <p>The official website of Bagwislaya Class of 2020, <br>the pioneer batch of
                        Philippine Science High School - Caraga Region Campus.</p>
                    <a href="class.html" class="aboutus">more about us </a>
                    <a href="#contact-us" class="ctn"> contact us </a>             
                </div>
            </div>
        </div>
        </section>

        <!--About us-->
        <section id="about">
            <div class="about-cont">
                <div class="title">
                    <p>About Us</p>
                    <h1>Batch Name</h1>
                </div>
                <div class="text">
                    <h1> <span class="auto-type"></span> </h1>
                    <p><br>The term <b>"Bagwislaya"</b> is a portmanteau of the Filipino words <i>"bagwis"</i> and <i>"laya" </i> 
                        <br> which mean <i>"wing"</i> and <i>"freedom".</i>The <i><b>"Wings of Freedom"</b></i> describes this batch's 
                        <br> tendencies to deviate from the norm in search of their freedom
                            from the conventional.
                        <br><br>In the years to come "Bagwislaya" represents their continuous search of the ideal, 
                        <br>their never-ending flight for success and excellence, 
                        <br>and their stance of defiance amidst adversity. </p></p>
                </div>
            </div>
        </section>
        <!--Video embed-->
        <section id ="vid-embed">
            <center>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/kByb1vb-euI" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/KkDTr3WQYik" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/qalLbA5xjO8" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                 allowfullscreen></iframe>
            </center>
        </section>
        <!--Contact Form-->
        <section id="contact-us">
            <div class = "container">
                <h1>get in touch! </h1>
                <form action = "mail.php" method="POST">
                    <div class="form-area">
                        <label for ="name">Name:</label>
                        <input type="text" placeholder="Ako Bogart" name ="name" id="name" onkeyup="checkName()">
                        <span id="name-error"></span>
                    </div>
                
                    <div class="form-area">
                        <label for ="email">Email:</label>
                        <input type="text" placeholder="bogart143@yehey.com" name ="email" id="email" onkeyup="checkEmail()">
                        <span id="email-error"></span>
                    </div>
                
                    <div class="form-area">
                        <label for ="subject">Subject:</label>
                        <input type="text" placeholder="ikaw bahala" id="subject" name ="subject" onkeyup="checkSubject()">
                        <span id="subj-error"></span>
                    </div>
                    <div class="form-area">
                        <label for ="message">Write your message:</label>
                        <textarea name = "message" cols="30" rows="10" id="msg" name ="message"></textarea>
                    </div>
                
                    <button type="submit" value="submit!" onclick="return validateForm()">submit</button>
                    <span id="submit-error"></span>
                </form>
            </div>
        </section>
        <!--Footer-->
        <div class="footer-cont">
            <div class="footer-wrapper">
                <div class="footer-def">
                    <a href ="/" id = "footer-logo">project bagwislaya</a> 
                    <p class="end">The official website of Bagwislaya Class of 2020, <br>the pioneer batch of
                     Philippine Science High School - Caraga Region Campus.</p>
                </div>
                <div class="footer-text">
                    <div class="footer-item">
                        <h3>CONTACT US:</h3>
                        <a href="https://www.facebook.com/bagwislayabente/">Facebook</a>
                        <a href="https://mobile.twitter.com/bagwislaya20">Twitter</a>
                        <a href="https://www.instagram.com/bagwislaya20/">Instagram</a>
                    </div>
                </div>        
            </div>
        </div>
        <!--Javascript Files-->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            var typed = new Typed(".auto-type", {
                strings: ["bagwislaya", "batch name", "meaning"], 
                typeSpeed:60, backSpeed: 60, loop: true
            })
        </script>
        <script src="js/contact-script.js"></script>
        <script src="./js/js.js"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


    </body>
</html>