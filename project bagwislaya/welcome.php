<?php
include('DBConnector.php');

session_start();

if(!isset($_SESSION['logged_user']) && !isset($_SESSION['logged_username'])){
     header('location:loginCheck.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link rel="stylesheet" href="css/welcome.css">
</head>
<body>
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
                    <li class = "dropdown"><a href = "#" class="link" style = "font-weight: bold"><?php echo $_SESSION['logged_username'] ?></a>
                        <div class="dropdown-content">
                            <a href="logout.php">Sign Out</a>
                        </div>
                    </li>        
                </ul>
            </div>
        </nav>
     <div class = "wrapper">
          <div class="content">
            <div class="welcome-user">
               <h1><span class="auto-type"></h1>
               <h2><?php echo $_SESSION['logged_user'] ?></h2>
            </div> 
          </div>
     </div>
    <<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            var typed = new Typed(".auto-type", {
                strings: ["hello", "kumusta", "mabuhay"], 
                typeSpeed:60, backSpeed: 60, loop: true
            })
        </script>
</body>
</html>
