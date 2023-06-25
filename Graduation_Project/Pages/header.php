<div class="navbar"><nav>
    <ul class="menu">
        <?php
            if (isset($_SESSION["id"])) {

                if ($_SESSION["utype"] == "customer") {
                  echo '<li>
                      <a href="CustomerHome.php">Home</a>
                  </li>
                  <li class="nav-item">
                       <a class="nav-link" href="Occasion.php">Packages</a>
                     </li>
                      <li>
                             <a href="profile.php"" class="nav-link">My Profile</a>
                         </li>';
                }else{
                  echo '<li>
                        <a href="AdminHome.php">Home</a>
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
                  <a href="../index.php">Home</a>
              </li>
              <li>
                  <a href="AboutUs.php">About</a>
              </li>
              <li>
                  <a href="#contactus">Contact Us</a>
              </li>
                <ul class="buttons">
                    <li>
                        <a href="SignUp.php"" class="btn">Sign up</a>
                    </li>
                    <li>
                        <a href="signinbtn.php" class="btn">Sign in</a>
                    </li>
                </ul>';
            }

         ?>
    </ul>
</nav></div>