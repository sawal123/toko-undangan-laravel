var elements = document.querySelectorAll(".ac");
elements.forEach((element) => {
  element.addEventListener("click", () => {
    const icon = element.querySelector("i");
    const subAc = element.nextElementSibling;
    console.log(element);
    subAc.classList.toggle("hidden");
    icon.classList.toggle("rotate-90");
  });
});

$(document).ready(function () {
  $(".center").slick({
    infinite: true,
    slidesToShow: 8,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 768, // Breakpoint untuk layar mobile
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });
});

$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});

$(".category").owlCarousel({
  loop: true,
  margin: 10,
  autoWidth: true,
  nav: true,
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});

$('.header-undangan').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 1,
  // autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});


function myImg(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}