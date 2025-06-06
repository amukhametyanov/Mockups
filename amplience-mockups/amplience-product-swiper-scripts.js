// Check if the code has already been executed
if (!window.amplienceProductSwiperScriptsExecuted) {

  // Set a flag to indicate that the code has been executed
  window.amplienceProductSwiperScriptsExecuted = true;

  document.addEventListener("DOMContentLoaded", function() {
                // Initialization code goes here
                var swiper;
                // Callback function
                function assignHashClass(callback) {
                    // Create a random hash value
                    let hash;
                 
                    // Select all elements with class "swiper"
                    let swiperDivs = document.querySelectorAll("div.productSwiper");
                  
                    // Loop through all the swiperDivs and add the hash value as a class to each of them
                    for (let i = 0; i < swiperDivs.length; i++) {
                      hash = "ar" +  Math.random().toString(36).substr(2, 6);
                      
                      swiperDivs[i].classList.add(hash);
                      // Call the callback function with the hash value as an argument for each swiper div
                      callback(hash);
                      hash = "";
                    }
                  }
                  
                  // Initialize swiper js by using the new class with hash value
                  function initSwiper(newClass) {
                    swiper = new Swiper("." + newClass, {
                      slidesPerView: 3,
                      spaceBetween: 20,
                      freeMode: true,
                      navigation: {
                        nextEl: "." + newClass + " ~ .product-arrow-next",
                        prevEl: "." + newClass + " ~ .product-arrow-prev"
                      },
                      pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                      },
                      breakpoints: {
                        320: {
                          slidesPerView: 1.5,
                          spaceBetween: 10,
                        },
                        576: {
                          slidesPerView: 2,
                          spaceBetween: 20,
                        },
                        768: {
                          slidesPerView: 3,
                          spaceBetween: 20,
                        },
                      },
                    });
                  }
                  
                  // Call the assignHashClass function with initSwiper as a callback
                  assignHashClass(initSwiper);
              });

}