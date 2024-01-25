


<nav class="navbar navbar-expand-lg navbar-light">
        <img src="logo1.png"  width="60" height="60">
             
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                      </li>
                      
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Page
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                            <li><a class="dropdown-item" href="https://www.reuters.com/technology/">News</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                          </ul>
                      </li>
                      <?php
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                            // User is logged in, display their name and a "Logout" button
                            echo '<li class="nav-item"><span class="nav-link">Welcome, ' . $_SESSION['username'] . '</span></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                        } else {
                            // User is not logged in, display "Login" and "Register" buttons
                            echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>';
                        }
                      ?>
                  </ul>
                
                  <form class="d-flex" id="searchForm" action="search.php" method="GET">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searchTerm">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
           
           </div>
        </nav>