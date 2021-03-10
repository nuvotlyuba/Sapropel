

const formaterPhoneNumber = (value) => {
  return value
    .slice(3, 18)
    .replace(/\D/g, "")
    .replace(/(\d{3})(\d{3})(\d{2})(\d{2})/, "($1)-$2-$3-$4");
};

const forms = {
  main: $("#formAjax"),
  popup: $("popup-form__form"),
};

const br = "<br>";

$(document).ready(function () {
  $("input[name='phone']").on("change input", function () {
    $("input[name='phone']").val(
      `+7 ${formaterPhoneNumber($("input[name='phone']").val())}`
    );
  });

  $("#formAjax").submit(function (event) {
    event.preventDefault(); //перекрыли отправку формы

    const fullname = $("input[name='name']").val().trim();
    const telephone = $("input[name='phone']").val().trim().replace(/\D/g, "");
    const email = $("input[name='email']").val().trim();
    const message = $("textarea[name='message']").val().trim();
    const theme = $("input[name='theme']").val().trim();



    $("#formAjax").validate({
      //Правила
      rules: {
        name: { required: true, maxlength: 40 },
        phone: { required: true },
        email: { required: true, maxlength: 40, email: true },
      },
      //Тексты предупреждений
      messages: {
        name: {
          required: "<p class='error-text'>Обязательное поле!</p>",
          maxlength:
            "<p class='error-text'>Максимальное кол-во символов 40 единиц!</ap",
        },
        phone: {
          required: "<p class='error-text'>Обязательное поле!</p>",
          number:
            "<p class='error-text'>Введите только цифры номера телефона!</p>",
        },
        email: {
          required: "<p class='error-text'>Обязательное поле!</p>",
          email: "<p class='error-text'>Введите адрес почты корректно!</p>",
          maxlength:
            "<p class='error-text'>Максимальное кол-во символов 40 единиц!</p>",
        },
      },
      //Обработчик и отправка данных
      submitHandler: function (form) {
        $(form).ajaxSubmit({
          target: ".question__result",
          url: "/ajax",
          type: "POST",
          cache: false,
          data: {
            fullname: fullname,
            telephone: telephone,
            email: email,
            theme: theme,
            message: message,
          },
          dataType: "html",

          beforeSend: function (data) {
            $("#formAjax").fadeOut();
            // preloader
            $("#preloader").css("display", "inline-block");
            $("#formAjax").prop("disable", true);
          },
          success: function (data) {
            $("#formAjax").trigger("reset");
            $("#formAjax").prop("disable", false);
            $(".question__result")
              .fadeIn()
              .html("Ваше сообщение отправлено!<br>Вам скоро перезвонят!");
            $("#preloader").css("display", "none");
            $(".question__result").css("display", "block");
          },
        });
      },
    });
  });

  // POPUP FORM
  $(".popup-form__form").submit(function (event) {
    event.preventDefault(); //перекрыли отправку формы

    const fullname = $("input[name='name']").val().trim();
    const telephone = $("input[name='phone']").val().trim().replace(/\D/g, "");
    const email = $("input[name='email']").val().trim();
    const message = $("textarea[name='message']").val().trim();

    $(".popup-form__form").validate({
      //Правила
      rules: {
        name: { required: true, maxlength: 40 },
        phone: { required: true },
        email: { required: true, maxlength: 40, email: true },
      },
      //Тексты предупреждений
      messages: {
        name: {
          required: "<p class='error-text'>Обязательное поле!</p>",
          maxlength:
            "<p class='error-text'>Максимальное кол-во символов 40 единиц!</ap",
        },
        phone: {
          required: "<p class='error-text'>Обязательное поле!</p>",
          number:
            "<p class='error-text'>Введите только цифры номера телефона!</p>",
        },
        email: {
          required: "<p class='error-text'>Обязательное поле!</p>",
          email: "<p class='error-text'>Введите адрес почты корректно!</p>",
          maxlength:
            "<p class='error-text'>Максимальное кол-во символов 40 единиц!</p>",
        },
      },
      //Обработчик и отправка данных
      submitHandler: function (form) {
        $(form).ajaxSubmit({
          // target: ".question__result",
          url: "/ajax",
          type: "POST",
          cache: false,
          data: {
            fullname: fullname,
            telephone: telephone,
            email: email,
            theme: null,
            message: message,
          },
          dataType: "html",

          beforeSend: function (data) {
            $(".popup-form__form").fadeOut();
            // preloader
            $("#preloader").fadeIn();
          },
          success: function (data) {
            $("#preloader").fadeOut();
            $(".popup-form__success-message").fadeIn();
          },
        });
      },
    });
  });
  $("input[data-submit='main']").mouseup((e) =>
    $("#formAjax").trigger("submit")
  );
  $("input[data-submit='popup']").mouseup((e) =>
    $(".popup-form__form").trigger("submit")
  );
});
