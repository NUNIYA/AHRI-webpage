<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rabies Tech Watch</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="Assets/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
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
                      <li><a href="plan.html">Plan</a></li>
                    <li><a href="activity.html">Activity</a></li>
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
<footer class="site-footer">
  <div class="footer-content">
      <div class="footer-section">
          <h3>Quick Links</h3>
          <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="plan.html"></a>Plan</li>
              <li><a href="activity.html"></a>Active</li>
              <li><a href="Resources.php">Resource</a></li>
              <li><a href="Blog.php">Blog</a></li>
          </ul>
      </div>
      <div class="footer-section">
          <h3>About Us</h3>
          <ul>
              <li><a href="program.html">Program</a></li>
              <li><a href="researchers.html"></a>Research</li>
              <li><a href="digitalization.html"></a>Digitalization</li>
              <li><a href="operational.html"></a>Operational</li>
              <li><a href="partnership.html">Partnership</a></li>
          </ul>
      </div>
      <div class="footer-section">
          <h3>Projects</h3>
          <ul>
              <li><a href="INRVMS.html">INHRVMS</a></li>
              <li><a href="NRSP.html">NRSP</a></li>
              <li><a href="SCP.html">CE</a></li>
          </ul>
      </div>
      <div class="footer-section">
          <h3>Contact Us</h3>
          <p>Email: info@example.com</p>
          <p>Phone: +1 (123) 456-7890</p>
          <div class="social-icons">
              <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
          </div>
      </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 One Digital Platform for Rabies Prevention. All rights reserved.</p>
    <p>Designed by <a href="https://dartdigitaltech.com/">Dart Digital Technologies PLC</a>.</p>
  </div>
</footer>
<!-- end of footer-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <script src="Assets/main.js"></script>
</body>
</html>