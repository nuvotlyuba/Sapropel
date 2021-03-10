    <footer>
      <div class="footer wrapper">
        <div class="footer-content">
          <a href="/"><img class="footer-content__img" src="<?php echo base_url(); ?>/img/logo.svg" alt="Logo"></a>

          <div class="footer-content__contacts">
            <div class="footer-content__contacts-item">
              <h2 class="footer-content__contacts-item__title">Нижний Новгород:</h2>
              <a class="footer-content__contacts-item__text" href="tel:+7 (905) 014-00-95">+7 (905) 014-00-95</a>
              <a class="footer-content__contacts-item__text display-inline" href="tel: 419-06-07"> 419-06-07,</a>
              <a class="footer-content__contacts-item__text display-inline" href="tel: 419-06-08"> 419-06-08</a>
            </div>

            <div class="footer-content__contacts-item">
              <h2 class="footer-content__contacts-item__title">Москва:</h2>
              <a class="footer-content__contacts-item__text" href="tel:+7 (910) 435-13-29">+7 (910) 435-13-29</a>
              <a class="footer-content__contacts-item__text" href="tel:+7 (095) 234-46-97">+7 (095) 234-46-97</a>
            </div>
          </div>
        </div>
      </div>

      <!-- POPUP FORM -->
      <div class="popup-form flex-center" data-element="overlay">
        <div class="popup-form__container flex-center bg-dark">
          <form class="popup-form__form bg-dark flex-column">
            <h3 class="popup-form__form-title text-center">Оставьте свои контакты, в ближайшее время с вами свяжется наш менеджер:</h3>

            <input type="text" name="name" placeholder="Имя*" class="popup-form__input-name input-default">

            <input type="tel" name="phone" placeholder="Телефон*" class="popup-form__input-phone input-default">

            <input type="email" name="email" placeholder="Email" class="popup-form__input-email input-default">

            <textarea type="text" name="message" rows="6" placeholder="Ваше сообщение" class="popup-form__input-text input-default"></textarea>

            <input type="submit" data-submit='popup' value="Отправить" class="popup-form__input-button btn-default">
          </form>

          <!-- PRELOADER -->
          <div id="preloader" class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
          <!-- / PRELOADER -->

          <div class="popup-form__success-message">
            <p class="popup-form__success-text text-center">Благодарим Вас <br> за проявленный интерес!</p>
            <p class="popup-form__success-subtext text-center">Ожидайте звонка нашего менеджера.</p>
            <div class="popup-form__success-img-wrapper text-center">
              <img class="popup-form__success-img" src="<?php echo base_url(); ?>/img/popup_img.svg" alt="Logo">
            </div>
          </div>
        </div>
      </div>
      <!-- / POPUP FORM -->

    </footer>



    <!-- button up -->

    <div class="btn-up">
      <img class="btn-up-arrow" src="<?php echo base_url(); ?>/img/btn_up_arrow.svg" alt="Arrow">

    </div>

    <!-- JS -->
    <script src="<?php echo base_url(); ?>/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/main.js"></script>
    <script src="<?php echo base_url(); ?>/js/formAjax.js"></script>
    <script src="<?php echo base_url(); ?>/js/popup.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>

    </body>

    </html>