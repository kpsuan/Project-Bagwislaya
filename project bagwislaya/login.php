<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign up</title>
    <link rel="stylesheet" href="css/loginStyle.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="box">
                <div class="formContainer">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class = "error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>

                        <?php if (isset($_GET['success'])) { ?>
                            <p class = "success"><?php echo $_GET['success']; ?></p>
                        <?php } ?>                    

                    <form action="loginCheck.php" method="post" autocomplete="off" class="sign-in">
                        <div class="logo">
                            <img src="image/logo.png" alt="bagwislaya">
                            <a href ="index.php" id = "navlogo">project bagwislaya</a> 
                        </div>
                        
                        <div class="title">
                            <h1>hello! </h1>
                            <h6>No account yet?</h6>
                            <a href="#" class="toggle">Sign Up</a>
                        </div>

                        <div class="contentform">
                            <div class="input">
                                <input type = "text"  
                                minlength="4" 
                                class="input-field" 
                                placeholder="Username" 
                                name="username" 
                                autocomplete="off" required/>
                                
                            </div>
                            <div class="input">
                                <input type = "password" 
                                minlength="8" 
                                class="input-field" 
                                placeholder="Password" 
                                name="password" 
                                autocomplete="off" 
                                pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[^0-9a-zA-Z]).{8,26}$" 
                                title ="Password must contain at least 8 characters, including UPPER/lowecase, numbers and symbol"
                                required/>  
                            </div>

                            <input type="submit" name ="submit" value="Sign In" class="loginBtn">       
                            <p class="txt">Forgot password?
                                <a href="#">Reset password</a>
                            </p>
                        </div>
                    </form>

                    <form action="register.php" method="POST" autocomplete="off" class="sign-up">
                        <div class="logo">
                            <img src="image/logo.png" alt="bagwislaya">
                            <a href ="index.php" id = "navlogo">project bagwislaya</a> 
                        </div>
                        
                        <div class="title">
                            <h1>dalaygon!</h1>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign in</a>
                        </div>

                        <div class="contentform">
                            <div class="input">
                                <input type = "text"  minlength="4" class="input-field" placeholder="Name" autocomplete="nope" name="name" required/>      
                            </div>
                            <div class="input">
                                <?php if (isset($_GET['user'])){ ?>
                                    <input type = "text"  
                                           minlength="4" 
                                           class="input-field" 
                                           placeholder="Username" 
                                           name="user" 
                                           required
                                           value= "<?php echo $_GET['user']; ?>">
                                <?php }else{ ?>
                                    <input type="text" 
                                           minlength="4" 
                                           class="input-field" 
                                           placeholder="Username" 
                                           name="user" 
                                           required>
                                <?php }?> 
                            </div>
                            <div class="input">
                                <input type = "password" 
                                       minlength="8" class="input-field"
                                       placeholder="Password"
                                       name="password" 
                                       pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[^0-9a-zA-Z]).{8,26}$" 
                                       title ="Password must contain at least 8 characters, including UPPER/lowecase, numbers and symbol"
                                       required/>  
                            </div>

                            <input type="submit" value="Sign Up" class="loginBtn">    
                            <p class="txt">By clicking Sign Up, you agree to our  
                                <a href="#">Terms</a>
                                <a href="#">Privacy Policy</a> and
                                <a href="#">Cookies Policy</a>
                            </p>
                        </div>
                    </form>

                </div>
                <div class="sidebox">
                    <div class="picsWrapper">
                        <img src="image/reg.png" class="image img1 show" alt="" />
                        <img src="image/say.png" class="image img2" alt="" />
                        <img src="image/2.png" class="image img3" alt="" />
                        <img src="image/1.png" class="image img4" alt="" />
                        <img src="image/13.png" class="image img5" alt="" />
                        <img src="image/9.png" class="image img6" alt="" />
                    </div>
                    <div class="messageSlider">
                        <div class="dots">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                            <span data-value="4"></span>
                            <span data-value="5"></span>
                            <span data-value="6"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--Footer-->
    <div class="footer-cont">
        <div class="footer-wrapper">
            <div class="footer-def">
                <a href ="/" id = "footer-logo">project bagwislaya</a> 
                <p class="end">The unofficial website of Bagwislaya Class of 2020, <br>the pioneer batch of
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
<script src="js/loginjs.js"></script>
</body>
</html>
