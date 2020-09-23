const $ = jQuery;
$(document).ready(function () {
  $(".venobox").venobox();
  const options = {
    autoplay: 5000,
    animationDuration: 500,
    hoverpause: true,
  };

  const slider = document.querySelector(".glide");

  if (slider) {
    const glide = new Glide(slider, options);
    glide.mount();
  }

  const menuToggle = document.getElementById("menuToggle");
  const mobileNav = document.getElementById("mobileNav");
  const html = document.getElementById("html");
  const mobileMenuListItems = document.querySelectorAll(".menu-item");

  const toggleMenu = () => {
    const delay = 50;
    mobileNav.classList.toggle("mobile-nav__menu--active");
    html.classList.toggle("no-scroll");
    if (mobileMenuListItems[0].classList.contains("animated")) {
      mobileMenuListItems.forEach((listItem) => {
        listItem.classList.remove("animated");
      });
    } else {
      mobileMenuListItems.forEach((listItem, index) => {
        setTimeout(() => {
          listItem.classList.add("animated");
        }, delay * index);
      });
    }
  };

  menuToggle.addEventListener("click", toggleMenu);

  // FAQ Accordion
  const faqButtons = document.querySelectorAll(".faq");

  faqButtons.forEach((button, idx) => {
    button.addEventListener("click", (e) => {
      button.classList.toggle("active");
      const answer = button.nextElementSibling;
      if (answer.style.maxHeight) {
        answer.style.maxHeight = null;
      } else {
        answer.style.maxHeight = answer.scrollHeight + "px";
      }
    });
  });

  // Class Schedule
  const classHeaders = document.querySelectorAll(".class__header");

  classHeaders.forEach((header, idx) => {
    header.addEventListener("click", (e) => {
      header.classList.toggle("active");
      const classBody = header.nextElementSibling;
      if (classBody.style.maxHeight) {
        classBody.style.maxHeight = null;
      } else {
        classBody.style.maxHeight = classBody.scrollHeight + "px";
      }
    });
  });

  // SHTF Component
  const shtfComponent = document.querySelector(".shtf");
  const closeButton = document.querySelector(".close-button");

  const hideShtfComponent = () => {
    shtfComponent.style.display = "none";
  };

  closeButton.addEventListener("click", hideShtfComponent);
});
