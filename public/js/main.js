const menu = document.querySelector(".header__menu-nav");

$(function () {
  //menu toggle
  $(".js-menu-toggle").on("click", function () {
    $(this).toggleClass("is-active");
    $(".header__menu-nav").toggleClass("is-open");
  });
});

// slider
let counter = 0;
setInterval(() => {
  if (counter <= 1) {
    counter++;
    $(".header__banners-row").animate({
      left: counter * -100 + "%",
    });
  } else {
    counter++;
    $(".header__banners-row").animate(
      {
        left: counter * -100 + "%",
      },
      () => {
        counter = 0;
        $(".header__banners-row").css("left", counter);
      }
    );
    counter = 0;
    $(".header__banners-row").css("left", counter);
  }
}, 4000);

// button-up
$(".btn-up").click(function () {
  $("html, body").animate(
    {
      scrollTop: 0,
    },
    500
  );
});

$(window).scroll(() => {
  if ($(window).scrollTop() < 900) {
    $(".btn-up").fadeOut();
  } else {
    $(".btn-up").fadeIn();
  }
});
