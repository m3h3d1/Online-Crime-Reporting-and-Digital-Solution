<nav class="navbar navbar-expand-lg navbar-dark bg-dark dmenu">
            <div class="container-fluid dmenudiv">
              <!-- <a class="navbar-brand" href="https://www.police.gov.bd/"> -->
                <img src="../images/logo2.png">
              </a>
              <button class="navbar-toggler dtoggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home.php">Home</a>
                  </li>
                  
                  <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Area     
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Dhaka</a></li>
                      <li><a class="dropdown-item" href="#">Chittagong</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Other</a></li>
                    </ul>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="../Pages/about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../Pages/contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Pages/faq.php">FAQ</a>
                  </li>
                  <li class="nav-item dropdown">
                    <?php
                      if(isset($_SESSION['nid'])) {
                        echo '<p class="nav-link" style="color: white;"> Welcome <code>'.$_SESSION["name"].'</code></p>'; 

                        echo '<li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="../php/logout_session.php">Logout</a>
                          </li>';
                        }
                        elseif(isset($_SESSION['aid'])) {
                          echo '<p class="nav-link" style="color: white;"> Welcome <code> '.$_SESSION["aname"].' </code></p>';

                          echo '<li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../php/logout_session.php">Logout</a>';
                        }
                        elseif(isset($_SESSION['pid'])) {
                          echo '<p class="nav-link" style="color: white;"> Welcome <code> '.$_SESSION["pname"].' </code></p>';

                          echo '<li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../php/logout_session.php">Logout</a>';
                        }
                        elseif(isset($_SESSION['iid'])) {
                          echo '<li class="nav-item">
                            <p class="nav-link" style="color: white;"> Welcome <code> '.$_SESSION["iname"].' </code></p>
                          </li>';

                          echo '<li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../php/logout_session.php">Logout</a>
                            </li>';
                        }
                        else {
                        // echo "<p style=\"color:white;\">Please login first .</p>";
                        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="../Pages/login.php">User</a></li>
                          <li><a class="dropdown-item" href="../Pages/official_login.php">Admin</a></li>
                          <li><a class="dropdown-item" href="../Pages/officialPage.php">Official</a></li>
                        </ul>';
                      }

                    ?>
                    </li>
                    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a> -->
                    <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="../Pages/login.php">User</a></li>
                      <li><a class="dropdown-item" href="../Pages/official_login.php">Admin</a></li>
                    </ul> -->
                  </li>
                </ul>
                <!-- <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
              </div>
            </div>
          </nav>