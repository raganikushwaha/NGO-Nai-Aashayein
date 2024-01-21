// Owlcarousel
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
      margin:10,
      nav:true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      center: true,
      navText: [
          "<i class='fa fa-angle-left'></i>",
          "<i class='fa fa-angle-right'></i>"
      ],
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:3
          }
      }
    });
  });

//   banner

function toggleColor() {
    var image = document.getElementById("banner-image");
    var colorButton = document.getElementById("colorButton");

    // Check if the image is currently grayscale
    if (image.style.filter === "grayscale(100%)") {
        // Change the image to color
        image.style.filter = "none";
        colorButton.innerText = "Your Wishes";
    } else {
        // Change the image to black and white
        image.style.filter = "grayscale(100%)";
        colorButton.innerText = "Your Wishes";
    }
} 



//   navbar wrap
let nav = document.querySelector(".navigation-wrap");
    window.onscroll = function () {
        if(document.documentElement.scrollTop  > 0){
            nav.classList.add("scroll-on");
        }else{
             nav.classList.remove("scroll-on");
        }
    }      

//  toggle button
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
}  
    
       