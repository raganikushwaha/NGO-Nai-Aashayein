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
    <section class="we-are-making">
      <div class="container">
        <div class="session-title">
          <p>HELP US TO ACHIEVE OUR GOAL</p>
          <h2>About Our Charity</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 imag-part">
              <img class="img-fluid" src="images/count.jpg" alt="">
          </div>
          <div class="col-lg-6 col-md-12 text-part">
              <h3>WHO WE ARE?</h3>
              <p><strong style="color:#ff4dc1;">NAYI ASHAYEIN</strong>  is a Lucknow- based nonprofit organization spanning the area that dedicates itself to bringing positive change into this life of marginalized and unprivileged people, especially children. This journey started with a social purpose to offer the brightest of futures for those who need it most. We aim at empowering the disadvantaged, especially children in orphanages by giving them life necessities such as education and food. A group of volunteers works earnestly to ensure that these children are raised in a suitable environment. In the areas such as education, women empowerment, food and nutritional security and environmental sustainability we make an attempt to develop a society that is more inclusive. </p>
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
    </section>  
    

    <!-- ======= Program Section ======= -->
    <section class="program-section">
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
                <h3>Education Program</h3>
                <p class="mb-auto">NAYI ASHAYEIN believes that education is the key to breaking the circle of poverty. Our Education Program...</p>
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
                <h3>Women Empowerment Program </h3>
                <p class="mb-auto">Women empowerment is the essence of our mission. The Women’s Empowerment Program provides women..</p>
                <a href="project/women.php">Read More..</a>
              </div>  
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row  position-relative card-shadow">
              <div class="col-auto">
                <img src="images/food/img_1.jpg">
              </div>
              <div class="col d-flex flex-column position-static text-part">
                <h3>Food Program (Food Distribution & Food Security for Poor Kids)</h3>
                <p class="mb-auto">Our twofold Food Program addresses the immediate needs of the vulnerable. We also carry out frequent food distribution..</p>
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
                <h3>Sustainability and Green Initiatives</h3>
                <p class="mb-auto">NAYI ASHAYEIN aims at developing a green future that is sustainable. Natural Environmental Program includes..</p>
                <a href="project/environment.php">Read More..</a>
              </div>  
            </div>
          </div>
  
        </div> 
      </div>
    </section> 

    <!-- ======= Blogs Section ======= -->
    <section class="container blog-section">
      <div class="session-title">
        <h2>Our Blog</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-4">
          <div class="card">
            <img src="images/count.jpg">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <small>RAISED: $764</small>
                <small>TARGET: $1500</small>
              </div>
              <h3>BRIDGING EDUCATION GAPS</h3>
              <p>The most notable challenge is education imbalances. Most of the children, especially those in needy institutions such as orphanages are denied quality education. Nai Aashayein’s Education Program seeks to fill this gap by ensuring...</p>
              <div class="text-center">
                <a class="btnreadmore" href="media/blogs.php">Read more</a> 
              </div>     
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="card">
            <img src="images/count.jpg">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <small>RAISED: $764</small>
                <small>TARGET: $1500</small>
              </div>
              <h3>EMPOWERING WOMEN</h3>
              <p>Empowerment of the woman is not merely a need but an engine driving societal evolution. Our women empowerment program aims to demolish these boundaries by providing training, workshops and support networks for disadvantaged communities...</p>
              <div class="text-center">
                <a class="btnreadmore" href="media/blogs.php">Read more</a> 
              </div>   
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="card">
            <img src="images/count.jpg">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <small>RAISED: $764</small>
                <small>TARGET: $1500</small>
              </div>
              <h3>COMBATING FOOD INSECURITY</h3>
              <p>Hunger continues to be a major problem in several societies. This is addressed by Nai Aashayein’s Food Program, which provides both short-term and long-term solutions. We hold regular feeding programs  and we strive for food security, especially...</p>
              <div class="text-center">
                <a class="btnreadmore" href="media/blogs.php">Read more</a> 
              </div>    
            </div>
          </div>
        </div>

        
         
         
      </div>
    </section>

    <!-- ======= event Section ======= -->
    <section class="event-section">
      <div class="session-title">    
        <p>KNOW AND COME TO VISIT OUR</p>
        <h2>ACKNOWLEDGE & EVENTS</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <h3>Our Events Story</h3>
            <p>Our <strong style="color:#ff4dc1;">Nai Aashayein</strong> volunteers had a wonderful time at Rajkiya Balgriha, creating special moments with the cheerful children. It was a day filled with laughter and shared stories, creating bonds of compassion and unity.
            </p>
            <p> Our contributors' generous support made this visit possible, whose commitment can be seen in the smiles of the children. We deeply thank each contributor for their kindness and compassion. </p>
            <p>We continue our journey, nurturing a sense of belonging and community through these connections. Your support is instrumental to Nai Aashayein's effort to transform the lives of these wonderful children through hope, love, and positivity.</p>
              <div class="text-center mb-5">
                <a class="btnreadmore" href="member-form.php">JOIN OUR TEAM</a> 
              </div> 
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <img class="img-fluid" src="images/img_1.jpg">
          </div>
        </div>
      </div>
    </section> 

    
    <!-- ======= contact Section ======= -->
    <section class="contact">
      <div class="session-title">    
        <p>KNOW AND COME TO JOIN</p>
        <h2>CONTACTS</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
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

          <div class="col-lg-6 col-md-12">
            <form action="#" class="email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <select class="form-select">
                <option selected>Select for Donate</option>
                <option value="1">Food</option>
                <option value="2">Stationary</option>
                <option value="3">Cloths</option>
                <option value="4">Money</option>
                <option value="5">Others</option>
                <option value="6">othings</option>
              </select>
              <!-- <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div> -->
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              
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
 