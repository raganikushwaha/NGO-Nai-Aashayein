<?php
$baseUrl = 'http://localhost/NGO/';
?>

<?php include "common/header.php"?>

  <body>
    <?php include "common/navbar.php"?>
    
    <!-- ======= Hero Section ======= -->
    <section class="slider-section"> 
      
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner banner-image" id="banner-image">
          <div class="carousel-item active">
            <img class="img-fluid" src="images/slider/slider-1.jpg" alt="Black and White Image">
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="images/slider/slider-1.jpg" alt="Black and White Image">
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="images/slider/slider-1.jpg" alt="Black and White Image">
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="images/slider/slider-1.jpg" alt="Black and White Image">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="textOverlay" id="textOverlay">
        <h2>Lorem ipsum dolor elit.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <button class="colorButton" id="colorButton" onclick="toggleColor()">Your Wishes</button> 
       
    </section>
    
    
    <!-- ======= About Section ======= -->
    <div class="we-are-making container-fluid">
      <div class="container">
        <div class="session-title">
          <p>HELP US TO ACHIEVE OUR GOAL</p>
          <h2>About Our Charity</h2>
        </div>
        <div class="row">
          <div class="col-md-6 imag-part">
              <img class="img-fluid" src="images/count.jpg" alt="">
          </div>
          <div class="col-md-6 text-part">
              <h3>WHO WE ARE?</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora quisquam impedit, consequuntur maiores consectetur optio! Quo dicta quidem fugit, earum officia rerum fuga, voluptatum vero necessitatibus, dolores unde possimus? Enim?.</p>
              <div class="row count">
                  <div class="col-md-4">
                      <div class="count-sing">
                           <i class="fas fa-donate"></i>
                          <h2>$8765</h2>
                          <b>People Contribution</b>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="count-sing">
                           <i class="fas fa-users"></i>
                          <h2>$8765</h2>
                          <b>Volunteer Reached</b>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="count-sing">
                          <i class="fas fa-trophy"></i>
                          <h2>$8765</h2>
                          <b>Successful Project</b>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>  
    <!-- End Hero -->

    <!-- ======= Program Section ======= -->
    <div class="container-fluid program-section">
      <div class="session-title">    
          <p>KNOW AND COME TO JOIN OUR</p>
          <h2>OUR PROGRAMS</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row h-md-150 position-relative card-shadow">
              <div class="col-auto">
                <img src="images/education/img_3.jpg">
              </div>
              <div class="col d-flex flex-column position-static text-part">
                <h3>Education</h3>
                <p class="card-text mb-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit facilis.</p>
                <a href="project/education.php">Read More..</a>
              </div>  
            </div>
          </div>
  
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row h-md-150 position-relative card-shadow">
              <div class="col-auto">
                <img src="images/women/img_2.jpg">
              </div>
              <div class="col d-flex flex-column position-static text-part">
                <h3>Women Empowerment</h3>
                <p class="card-text mb-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit facilis.</p>
                <a href="project/women.php">Read More..</a>
              </div>  
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row h-md-150 position-relative card-shadow">
              <div class="col-auto">
                <img src="images/food/img_1.jpg">
              </div>
              <div class="col d-flex flex-column position-static text-part">
                <h3>Food</h3>
                <p class="card-text mb-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit facilis.</p>
                <a href="project/food.php">Read More..</a>
              </div>  
            </div>
          </div>
  
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row h-md-150 position-relative card-shadow">
              <div class="col-auto">
                <img src="images/women/img_3.jpg">
              </div>
              <div class="col d-flex flex-column position-static text-part">
                <h3>Environment</h3>
                <p class="card-text mb-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit facilis.</p>
                <a href="project/environment.php">Read More..</a>
              </div>  
            </div>
          </div>
  
        </div> 
      </div>
    </div> 

    <!-- ======= Blogs Section ======= -->
    <div class="container blog-section">
      <div class="session-title">
        <h2>Our Blog</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="images/count.jpg">
            <div class="card-body card-text">
              <div class="d-flex justify-content-between align-items-center">
                <small>RAISED: $764</small>
                <small>TARGET: $1500</small>
              </div>
              <h3>CONNECTING THE PEOPLE</h3>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur odit, culpa provident quasi aspernatur! Incidunt error vel non assumenda rerum ut sapiente eius illum.</p>
              <a class="btnreadmore" href="#">Read more</a>     
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="images/count.jpg">
            <div class="card-body card-text">
              <div class="d-flex justify-content-between align-items-center">
                <small>RAISED: $764</small>
                <small>TARGET: $1500</small>
              </div>
              <h3>CONNECTING THE PEOPLE</h3>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur odit, culpa provident quasi aspernatur! Incidunt error vel non assumenda rerum ut sapiente eius illum.</p>
              <a class="btnreadmore" href="#">Read more</a>     
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="images/count.jpg">
            <div class="card-body card-text">
              <div class="d-flex justify-content-between align-items-center">
                <small>RAISED: $764</small>
                <small>TARGET: $1500</small>
              </div>
              <h3>CONNECTING THE PEOPLE</h3>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur odit, culpa provident quasi aspernatur! Incidunt error vel non assumenda rerum ut sapiente eius illum.</p>
              <a class="btnreadmore" href="#">Read more</a>     
            </div>
          </div>
        </div>

        
         
         
      </div>
    </div>

    <!-- ======= event Section ======= -->
    <div class="container-fluid event-section">
      <div class="session-title">    
          <p>KNOW AND COME TO VISIT OUR</p>
          <h2>ACKNOWLEDGE & EVENTS</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Our Events Story</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae officia non natus, a, totam, nulla eum fuga expedita perferendis quidem mollitia nisi cupiditate magnam possimus quae? Hic tenetur minus fugiat.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae officia non natus, a, totam, nulla eum fuga expedita perferendis quidem mollitia nisi cupiditate magnam possimus quae? Hic tenetur minus fugiat.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae officia non natus, a, totam, nulla eum fuga expedita perferendis quidem mollitia nisi cupiditate magnam possimus quae? Hic tenetur minus fugiat.</p>
          </div>
          <div class="col-md-6">
            <img class="img-fluid" src="images/count.jpg">
          </div>
        </div>
      </div>
    </div> 

    <section class="contact">
      <div class="session-title">    
        <p>KNOW AND COME TO JOIN</p>
        <h2>CONTACTS</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="info-box mb-4">
              <i class="fa fa-map"></i>
              <h3>Our Address</h3>
              <p> Invisortech Lucknow up.</p>
            </div>
            <div class="div d-flex gap-2">
              <div class="col">
                <div class="info-box mb-4">
                  <i class="fa fa-envelope"></i>
                  <h3>Email Us</h3>
                  <p>contact@example.com</p>
                </div>
              </div>
  
              <div class="col">
                <div class="info-box  mb-4">
                  <i class="fa fa-phone"></i>
                  <h3>Call Us</h3>
                  <p>+91 1234567890</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="#" method="post" role="form" class="email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

   <!-- ======= Footer ======= -->
	 <?php include "common/footer.php"?>

   
  </body>
</html>
 