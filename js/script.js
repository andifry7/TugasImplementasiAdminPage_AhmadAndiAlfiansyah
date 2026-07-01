console.log("Pixel++ Website Loaded");
const sections = $("section");
const navLinks = $(".nav-link");
const words = ["Modern Website", "Digital Experience", "Creative Solutions"];
const counters = document.querySelectorAll(".counter");

// Loader Screen
$(window).on("load", function () {
  $(".loader-wrapper").fadeOut(800);
});

// Navbar Scroll Effect
$(window).scroll(function () {
  if ($(this).scrollTop() > 50) {
    $(".navbar").addClass("navbar-scrolled");
  } else {
    $(".navbar").removeClass("navbar-scrolled");
  }
});

// Reveal on Scroll
function revealOnScroll() {
  $(".reveal").each(function () {
    let windowHeight = $(window).height();
    let elementTop = $(this).offset().top;
    let revealPoint = 120;

    if (elementTop < window.scrollY + windowHeight - revealPoint) {
      $(this).addClass("active");
    }
  });
}

$(window).scroll(revealOnScroll);
revealOnScroll();

// Active Navbar Menu
$(window).scroll(function () {
  let current = "";

  sections.each(function () {
    const sectionTop = $(this).offset().top - 150;

    if ($(window).scrollTop() >= sectionTop) {
      current = $(this).attr("id");
    }
  });

  navLinks.removeClass("active");

  navLinks.each(function () {
    if ($(this).attr("href") === "#" + current) {
      $(this).addClass("active");
    }
  });
});

$(".nav-link").click(function () {
  $(".navbar-collapse").collapse("hide");
});

// Typing Effect Hero
let wordIndex = 0;
let charIndex = 0;
let currentWord = "";
let currentChar = "";

function typingEffect() {
  if (wordIndex < words.length) {
    currentWord = words[wordIndex];

    currentChar = currentWord.slice(0, charIndex++);

    $(".typing-text").text(currentChar);

    if (charIndex > currentWord.length) {
      wordIndex++;

      charIndex = 0;

      setTimeout(typingEffect, 1000);
    } else {
      setTimeout(typingEffect, 100);
    }
  } else {
    wordIndex = 0;

    typingEffect();
  }
}

typingEffect();

// Portfolio Filter
$(".filter-btn").click(function () {
  const value = $(this).attr("data-filter");

  $(".filter-btn").removeClass("active");

  $(this).addClass("active");

  $(".portfolio-card").each(function () {
    if (value === "all" || $(this).attr("data-category") === value) {
      $(this).parent().show(1);
    } else {
      $(this).parent().hide(1);
    }
  });
});

// statistic Counter Animation
counters.forEach((counter) => {
  counter.innerText = "0";

  const updateCounter = () => {
    const target = +counter.getAttribute("data-target");

    const current = +counter.innerText;

    const increment = target / 100;

    if (current < target) {
      counter.innerText = `${Math.ceil(current + increment)}`;

      setTimeout(updateCounter, 20);
    } else {
      counter.innerText = target;
    }
  };

  updateCounter();
});

// Back to Top Button
$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    $(".back-to-top").fadeIn();
  } else {
    $(".back-to-top").fadeOut();
  }
});

$(".back-to-top").click(function () {
  $("html, body").animate(
    {
      scrollTop: 0,
    },
    600,
  );
});

// Contact Form Validation
$("#contactForm").submit(function (e) {
  e.preventDefault();

  let isValid = true;

  const name = $("#name");
  const email = $("#email");
  const subject = $("#subject");
  const message = $("#message");

  $(".form-control").removeClass("error");

  if (name.val().trim() === "") {
    name.addClass("error");
    isValid = false;
  }

  if (email.val().trim() === "") {
    email.addClass("error");
    isValid = false;
  }

  if (subject.val().trim() === "") {
    subject.addClass("error");
    isValid = false;
  }

  if (message.val().trim() === "") {
    message.addClass("error");
    isValid = false;
  }

  if (isValid) {
    $(".form-alert").hide().fadeIn().text("Message sent successfully!");

    $("#contactForm")[0].reset();
  }
});
