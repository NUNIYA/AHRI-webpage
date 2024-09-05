<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One Digital Platform for Rabies Prevention</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="Assets/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

  <style>
    .nav-menu {
  position: relative;
}

.nav-links {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.nav-links > li {
  display: inline-block;
  position: relative;
}

.nav-links > li > a {
  text-decoration: none;
  padding: 10px;
  display: block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content li {
  display: block;
  position: relative; /* Needed for nested dropdown positioning */
}

.dropdown-content li a {
  padding: 10px;
  text-decoration: none;
  display: block;
}

/* Show dropdown on hover */
.dropdown:hover > .dropdown-content {
  display: block;
}

/* Nested dropdown positioning to the right */
.dropdown-content .dropdown-content {
  top: 0;
  left: 100%;
  margin-left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Only show nested dropdown on hover of Teams */
.dropdown-content .dropdown:hover > .dropdown-content {
  display: block;
}

/* Prevent the nested dropdown from being visible when hovering over About */
.dropdown-content .dropdown-content {
  display: none;
}

.dropdown-content .dropdown:hover .dropdown-content {
  display: block;
}

  </style>
</head>
<body>
  <header>
    <div class="topbar">
      <div class="contact-info">
        <a href="mailto:xxx@rabie.org"><i class="fas fa-envelope"></i> xxx@rabie.org</a>
        <a href="tel:+251-9000000"><i class="fas fa-phone"></i> +251-9000000</a>
      </div>
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
    <div class="nav-container" id="header">
      <div class="clas1" style="display: flex; justify-content: space-between;">
        <a href="index.html">
          <img src="images/mhrplogo.png"  alt="" class="logo">
        </a>
        <button class="menu-toggle" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="overlay"></div>
      </div>
      <nav class="nav-menu">
          <ul class="nav-links">
              <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
              <li class="dropdown">
                  <a href="#"><i class="fas fa-info-circle"></i> About</a>
                  <ul class="dropdown-content">
                      <li><a href="program.html">Program</a></li>
                      <li class="dropdown">
                          <a href="#"> Teams</a>
                          <ul class="dropdown-content">
                              <li><a href="researchers.html">Researchers</a></li>
                              <li><a href="digitalization.html">Digitalization</a></li>
                              <li><a href="operational.html">Operational</a></li>
                          </ul>
                      </li>
                      <li><a href="partnership.html">Partnership</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#"><i class="fas fa-tools"></i> D-Tools</a>
                  <ul class="dropdown-content">
                      <li><a href="RVMS.html">RVMS</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#"><i class="fas fa-project-diagram"></i> Projects</a>
                  <ul class="dropdown-content">
                      <li><a href="INRVMS.html">INHRVMS</a></li>
                      <li><a href="NRSP.html">NRSP</a></li>
                      <li><a href="SCP.html">CE</a></li>
                  </ul>
              </li>
              <li><a href="Resources.php"><i class="fas fa-book"></i> Resource</a></li>
              <li><a href="Blog.php"><i class="fas fa-blog"></i> Blog</a></li>
          </ul>
      </nav>
      
      
    </div>
  </header>
  
  <div class="coming-soon">
    <?php
        include 'coming_soon.php';
        $contentAvailable = false; 
        displayContent($contentAvailable);
    ?>
  </div>
  
 <!-- footer -->
<footer id="footer" class="footer" style=" width: 100%; bottom: 0; left: 0;">
  <div class="container">
      <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
              <div class="logo-container">
                  <a href="index.html" class="logo">
                      <img src="images/mhrplogo.png" alt="Company Logo" class="img-fluid">
                  </a>
              </div>
              <div class="social-text">
                  <p>Connect with us on social media</p>
              </div>
              <div class="social-links d-flex mt-4">
                  <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                  <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                  <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
              </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="RVMS.html">RVMS</a></li>
                  <li><a href="INRVMS.html">INRVMS</a></li>
              </ul>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
              <h4>Services</h4>
              <ul>
                  <li><a href="NRSP.html">NRSP</a></li>
                  <li><a href="SCP.html">SCP</a></li>
                  <li><a href="Resources.html">Resources</a></li>
                  <li><a href="Blog.html">Blog</a></li>
              </ul>
          </div>
      </div>
  </div>
  <div class="container mt-4">
    <div class="copyright">
        <p>&copy; 2024 One Digital Platform for Rabies Prevention. All rights reserved.</p>
    </div>
      <div class="credits">
          Designed by <a href="https://dartdigitaltech.com/">Dart Digital Technologies PLC</a>
      </div>
  </div>
</footer>
<!-- end of footer-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <script src="Assets/main.js"></script>
</body>
</html>