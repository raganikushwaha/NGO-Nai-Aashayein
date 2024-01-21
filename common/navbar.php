<!-- <nav class="nav-bar-container">
		<div class="nav-bar-container__contactform">
			<button type="button" class="become-partner-button" data-toggle="modal" data-target="#become-partnerModal">Become our Partner</button>

			<select>
				Select Langugage
				<option>Hindi</option>
				<option>English</option>
				<option>Bengali</option>
				<option>Karnatak</option>
				<option>Tamil</option>
			</select>
		</div>

		<div class="nav-bar-container__main-nav">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="<?= $baseUrl ?>index.html" class="company-logo">
					<img class="company-logo-img" src="asset/img/MediHostIndia.png" alt="company logo" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse my-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="<?= $baseUrl ?>index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= $baseUrl ?>hospital-list.php">Hospitals</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= $baseUrl ?>index.php">Doctors</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= $baseUrl ?>index.php">Treatments</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= $baseUrl ?>index.php">Medical Visa</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= $baseUrl ?>index.php">Free Consultaion</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= $baseUrl ?>index.php">Video Gallery</a>
						</li>
					</ul>

					<div class="connect-with-parent">
						<button class="connect-with-btn">Connect With Us!</button>
					</div>
				</div>

			</nav>
		</div>
	</nav> -->

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
				<img src="<?= $baseUrl ?>images/logo.png">
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
                  <li><a class="dropdown-item" href="<?= $baseUrl ?>about/member.php">Members</a></li>
                  <li><a class="dropdown-item" href="<?= $baseUrl ?>about/volentier.php">VOlunters</a></li>
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
                <a href="<?= $baseUrl ?>#">Member</a>
                <a href="<?= $baseUrl ?>#">Volentier</a>
                
              </div>
            </div>
                 
          </div>  
        </div>
      </nav>
    </div> 