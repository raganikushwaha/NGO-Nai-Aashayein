 
	<!-- ======= Top Bar ======= -->
    <section class="topbar">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info">
          <i class="fa-solid fa-envelope"><a href="#">contact@example.com</a></i>
          <i class="fa-solid fa-mobile ms-4"><span>+91 1234567890</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" ><i class="fab fa-twitter"></i></a>
          <a href="#" ><i class="fab fa-facebook"></i></a>
          <a href="#" ><i class="fab fa-instagram"></i></a>
          <a href="#" ><i class="fab fa-linkedin"></i></i></a>
        </div>
      </div>
    </section>
    <!-- ======= Header ======= -->
    <div class="navigation-wrap">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
			<a class="navbar-brand" href="<?= $baseUrl ?>index.php">
				<img src="<?= $baseUrl ?>images/logo (2).png">
			</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa-solid fa-bars-staggered navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
			  	<a class="nav-link" href="<?= $baseUrl ?>index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?= $baseUrl ?>about/about.php">About</a></li>
                  <li><a class="dropdown-item" href="<?= $baseUrl ?>about/member.php">Members</a></li>
                  <li><a class="dropdown-item" href="<?= $baseUrl ?>about/volentier.php">Volunteer</a></li>
                </ul>  
              </li>  
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Project
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?= $baseUrl ?>project/food.php">Food</a></li>
                  <li><a class="dropdown-item" href="<?= $baseUrl ?>project/education.php">Education</a></li>
                  <li><a class="dropdown-item" href="<?= $baseUrl ?>project/environment.php">Environment</a></li>
                  <li><a class="dropdown-item" href="<?= $baseUrl ?>project/women.php">Women Empowerment</a></li>
                  
                </ul>  
              </li>  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Media
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?= $baseUrl ?>media/blogs.php">Blogs</a></li>
                  <li><a class="dropdown-item" href="<?= $baseUrl ?>media/gallery/gallery.php">Gallery</a></li>
                  <li><a class="dropdown-item" href="<?= $baseUrl ?>media/videos.php">Videos</a></li>
                </ul>  
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="<?= $baseUrl ?>contributor/contributor.php">Our contributors</a>
              </li>  
            </ul>  
            <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn"><i class="fa fa-heart"></i>JOIN NGO</button>
              <div id="myDropdown" class="dropdown-content">
                <a href="<?= $baseUrl ?>member-form.php">Member</a>
                <a href="<?= $baseUrl ?>#">Volunteer</a>
                
              </div>
            </div>
                 
          </div>  
        </div>
      </nav>
    </div> 
    