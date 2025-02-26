// banner effects
document.addEventListener('DOMContentLoaded', () => {
  const bannerImg = document.querySelector('.bannerImage');

  bannerImg.addEventListener('animationend', (event) => {
    if (event.animationName === 'fadeInSlowDown') {
      bannerImg.classList.add('floatActive');
    }
  });
});

// Fade-in effect on titles for elements with the class 'fadeInTitle'
const fadeInElements = document.querySelectorAll(".fadeInTitle");

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('observ'); // Adds the 'observ' class to trigger CSS animations
            return; // Exit loop once the element is handled
        }
    });
});

// Monitor all elements with 'fadeInTitle' class
fadeInElements.forEach((element) => observer.observe(element));


// swiper characters
document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper(".swiper", {
      effect: "coverflow", 
      coverflowEffect: {
          rotate: 60, 
          depth: 100, 
          slideShadows: false, 
          modifier: 1, 
      },
      slidesPerView: 3, 
      spaceBetween: 40, 
      direction: "horizontal", 
      centeredSlides: true, 
      loop: true, 
      speed: 1000, 
      grabCursor: true,
      autoplay: {
          delay: 1000,
      },
  });
});

// clouds animation 
console.log("clouds animation");

const divPlace = document.getElementById("place");

// clouds exist checking
if (!divPlace) {
  console.error("container 'place' not found.");
} else {
  const bigCloud = divPlace.querySelector(".bigCloud");
  const littleCloud = divPlace.querySelector(".littleCloud");

  if (!bigCloud || !littleCloud) {
    console.error("big cloud or little cloud element not found.");
  } else {
    console.log("cloud elements found:", { bigCloud, littleCloud });

    window.addEventListener("scroll", () => {
      const scrollY = window.scrollY;
      const speedClouds = 0.3;
      const debutPosition = 300;

      // new clouds position
      const cloudPosition = debutPosition - scrollY * speedClouds;
      bigCloud.style.transform = `translateX(${cloudPosition}px)`;
      littleCloud.style.transform = `translateX(${cloudPosition}px)`;
    });
  }
}

// selected class menuToggle DOM
const menuToggle = document.querySelector(".menuToggle");

// selected clic menuToggle
const partToggle = [
  document.querySelector(".menuNav"),
  document.querySelector(".menuLogo"),
  document.querySelector(".menuFlowers"),
  document.querySelector(".menuCats"),
  document.querySelector(".menuFooter"),
];

// Gestion des navItems
const navItems = document.querySelectorAll(".navItem");

// add listener button menu clic toggleNav
menuToggle.addEventListener("click", function () {
  toggleNav();

  // Retire la classe 'active' de tous les navItems lorsque le menu est rouvert
  if (menuToggle.classList.contains("active")) {
    navItems.forEach((item) => item.classList.remove("active"));
  }
});

// Gestion du clic sur les éléments navItem
navItems.forEach((item) => {
  item.addEventListener("click", function () {
    // Supprime la classe active de tous les navItems
    navItems.forEach((i) => i.classList.remove("active"));

    // Ajoute la classe active à l'élément cliqué
    item.classList.add("active");

    // Ferme le menu après un court délai (pour conserver la classe active)
    setTimeout(() => {
      closedMenu();
    }, 30000); // Délai en millisecondes
  });
});

function toggleNav() {
  // toggleNav add/delete class 'active' menuToggle
  menuToggle.classList.toggle("active");
  partToggle.forEach((part) => part.classList.toggle("active"));
}

function closedMenu() {
  menuToggle.classList.remove("active");
  partToggle.forEach((part) => part.classList.remove("active"));
}
