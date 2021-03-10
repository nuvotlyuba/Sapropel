// $(".popup-form__form").submit(async function (e) {
//   e.preventDefault();
//   let response = await fetch("http://localhost/", {
//     method: "POST",
//     body: new FormData(form),
//   });
//   $(".popup-form__form").fadeOut();
//   $("#preloader").fadeIn();

//   setTimeout(() => {
//     $("#preloader").fadeOut();
//     $(".popup-form__success-message").fadeIn();
//   }, 1000);

//   // let result = await response.json();

//   // alert(result.message);
// });

$(".popup-form").click((e) => {
  const element = e.target.dataset.element;
  if (element === "overlay") {
    $(".popup-form").toggleClass("popup-form_visible");
    $(".popup-form__form").fadeIn();
    $(".popup-form__success").fadeOut();
  }
});

$(".btn-popup").click((e) => {
  $(".popup-form").toggleClass("popup-form_visible");
});
