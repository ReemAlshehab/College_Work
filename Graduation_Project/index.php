<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="style/style.css"" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@300;400;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class="header">

            <div class="navbar">

                <nav>

 <ul class="menu">
                      <?php
                          if (isset($_SESSION["id"])) {

                              if ($_SESSION["utype"] == "customer") {
                                echo '<li>
                                    <a href="CustomerHome.php">Home</a>
                                </li>
                                <li class="nav-item">
                                     <a class="nav-link" href="Occasion.php">Package</a>
                                   </li>';

                              }else{
                                echo '<li>
                                      <a href="AdminHome.php">Home</a>
                                  </li><li class="nav-item">
                                     <a class="nav-link" href="Occasion.php">Package</a>
                                   </li>';
                              }
                              echo '  <li>
                                    <a href="AboutUs.php">About</a>
                                </li>
                                <li>
                                    <a href="#contactus">Contact Us</a>
                                </li>';
                               echo '  <ul class="buttons">
                                       <li>
                                           <a href="logoff.php"" class="btn">Sign out</a>
                                       </li>
                                   </ul>';
                          }else{
                            echo '<li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="pages/AboutUs.php">About</a>
                            </li>
                            <li>
                                <a href="#contactus">Contact Us</a>
                            </li>
                              <ul class="buttons">
                                  <li>
                                      <a href="pages/SignUp.php"" class="btn">Sign up</a>
                                  </li>
                                  <li>
                                      <a href="pages/signinbtn.php" class="btn">Sign in</a>
                                  </li>
                              </ul>';
                          }

                       ?>
                  </ul>
                </nav>

            </div>

        </section>
        <section class="home">
            <br>
            <br>
            <br>
            <br>
            <br>
            <img src="images/home.png" alt="home" width="800px" height="800px"/>

        </section>
        <?php
        // put your code here
        ?>

        <div class="footer" id="contactus">
            <ul>
                <li><a href="#"><img src="images/Facebook.png"width="35px"  alt="facebook"/></a></li>
                <li><a href="#"><img src="images/Twitter.png"width="35px"  alt="twitter"/></a></li>
                <li><a href="#"><img src="images/Instagram.png" width="35px" alt="instagram"/></a></li>
                <li><a href="#"><img src="images/Youtube.png"width="35px"  alt="youtube"/></a></li>
                <li><a href="#"><img src="images/Email.png" width="35px" alt="mail"/></a></li>
                <li><a href="#"><img src="images/Linkedin.png"width="35px"  alt="linkedin"/></a></li>
            </ul>
            <br>
            <br>
            <p>All rights reserved. Designed by <a href="#">Group 4</a></p>
        </div>

    </body>
</html>
