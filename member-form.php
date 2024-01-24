<?php
$baseUrl = 'http://localhost/NGO/';
?>

<?php include "common/header.php"?>
<style>
    
   
    .slider-card {
        background: #fff; 
        border-radius: 2px;
        /* border : 1px solid black; */
        /* box-shadow: 0 0 10px 0 rgba(34, 33, 33, 0.081) !important;  */
        
    }
    .slider-card .img-box {
        
        }    
        .slider-card .img-box iframe{
        width: 100%;
        height: auto;
        }
        .overview{	
        text-align: center;
        /* padding: 20px;    */
    }
    .overview a {
        color: #333;
        font-size: 15px;
        text-decoration: none;
    }
    .owl-dots {
        text-align: center;
    }
    .owl-dots .owl-dot {
        height: 10px;
        width: 10px;
        border-radius: 10px;
        background:  #7474746c!important;
        margin-left: 3px;
        margin-right: 3px;
        
    }
    .owl-dots .owl-dot.active {
        background: #ecd1f2 !important;
    }
    

    .owl-nav .owl-prev,.owl-next { 
    display: none;
    }  
    
  </style>
  <body>
    <?php include "common/navbar.php"?>
    
     
    <section class="contact">
      <div class="session-title ">    
        <p>KNOW AND COME TO JOIN</p>
        <h2>Members</h2>
      </div>
      <div class="container">
        <div class="row">

          <div class="col-lg-6 m-auto">
            <form class="email-form mb-4">
              <div class="mb-3">
                <label class="form-label">Name</label>
                  <input type="text" class="form-control" placeholder="Enter your name">
              </div>
              <div class="mb-3">
                <label class="form-label">Country</label>
                <input type="text" class="form-control" placeholder="Enter country">
              </div>
              <div class="mb-3">
                <label class="form-label">State</label>
                <input type="text" class="form-control" placeholder="Enter state">
              </div>
              <div class="mb-3">
                <label class="form-label">City</label>
                <input type="text" class="form-control" placeholder="Enter city">
              </div>
              <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" class="form-control" placeholder="Enter address">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="About Yourself" required></textarea>
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
 