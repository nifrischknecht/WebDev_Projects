<!-- based on: https://www.w3schools.com/howto/howto_js_slideshow.asp -->

<!-- Single Slides -->
<div class="image-container-outside">
  <div class="slideshow-container">

    <div class="slides fade">
      <picture>
        <source srcset="img/detail-carousel_slide-01-l.png" media="(min-width: 1024px)">
        <source srcset="img/detail-carousel_slide-01-m.png" media="(min-width: 769px)">
        <img src="img/detail-carousel_slide-01-s.png" alt="Carousel-Picture: Eindrücke Festival «Sur Le Lac»">
      </picture>
    </div>

    <div class="slides fade">
      <picture>
        <source srcset="img/detail-carousel_slide-02-l.png" media="(min-width: 1024px)">
        <source srcset="img/detail-carousel_slide-02-m.png" media="(min-width: 769px)">
        <img src="img/detail-carousel_slide-02-s.png" alt="Carousel-Picture: Eindrücke Festival «Sur Le Lac»">
      </picture>
    </div>

    <div class="slides fade">
      <picture>
        <source srcset="img/detail-carousel_slide-03-l.png" media="(min-width: 1024px)">
        <source srcset="img/detail-carousel_slide-03-m.png" media="(min-width: 769px)">
        <img src="img/detail-carousel_slide-03-s.png" alt="Carousel-Picture: Eindrücke Festival «Sur Le Lac»">
      </picture>
    </div>

    <div class="slides fade">
      <picture>
        <source srcset="img/detail-carousel_slide-04-l.png" media="(min-width: 1024px)">
        <source srcset="img/detail-carousel_slide-04-m.png" media="(min-width: 769px)">
        <img src="img/detail-carousel_slide-04-s.png" alt="Carousel-Picture: Eindrücke Festival «Sur Le Lac»">
      </picture>
    </div>

    <div class="slides fade">
      <picture>
        <source srcset="img/detail-carousel_slide-05-l.png" media="(min-width: 1024px)">
        <source srcset="img/detail-carousel_slide-05-m.png" media="(min-width: 769px)">
        <img src="img/detail-carousel_slide-05-s.png" alt="Carousel-Picture: Eindrücke Festival «Sur Le Lac»">
      </picture>
    </div>

    <div class="slides fade">
      <picture>
        <source srcset="img/detail-carousel_slide-06-l.png" media="(min-width: 1024px)">
        <source srcset="img/detail-carousel_slide-06-m.png" media="(min-width: 769px)">
        <img src="img/detail-carousel_slide-06-s.png" alt="Carousel-Picture: Eindrücke Festival «Sur Le Lac»">
      </picture>
    </div>


    <!-- Arrow-Buttons to slide from one to other -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
</div>


<!-- Squere-Buttons (at the bottom) to slide from one to other -->
<div class="btnSlider">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
</div>




<!-- start JavaScrip -->

<script>

  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slides");
    var dots = document.getElementsByClassName("dot");

    if (n > slides.length) {
      slideIndex = 1
    }

    if (n < 1) {
      slideIndex = slides.length
    }

    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
    }

    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }

</script>