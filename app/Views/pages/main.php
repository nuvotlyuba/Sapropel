<!-- УСЛУГИ -->
<div class="services bg-dark">
  <div class="services__container wrapper">
    <h2 class="services__title content-title">Наши услуги</h2>

    <div class="services__items flex-center">
      <div class="services__item flex-column">
        <a href="/cleaning_of_reservoirs">
          <div class="services__item-icon-wrapper flex-center">
            <img src="<?php echo base_url(); ?>/img/services_icon_1.svg" alt="" class="services__item-icon">
          </div>
        </a>
        <a href="/cleaning_of_reservoirs">
          <p class="services__item-subtitle">Очистка водоемов</p>
        </a>
      </div>

      <div class="services__item flex-column">
        <a href="/extraction_and_sand_reclamation">
          <div class="services__item-icon-wrapper flex-center">
            <img src="<?php echo base_url(); ?>/img/services_icon_2.svg" alt="" class="services__item-icon">
          </div>
        </a>
        <a href="/extraction_and_sand_reclamation">
          <p class="services__item-subtitle">Добыча и намыв песков</p>
        </a>
      </div>

      <div class="services__item flex-column text-center">
        <a href="/sand_reclamation">
          <div class="services__item-icon-wrapper flex-center">
            <img src="<?php echo base_url(); ?>/img/services_icon_3.svg" alt="" class="services__item-icon">
          </div>
        </a>
        <a href="/sand_reclamation">
          <p class="services__item-subtitle">Намыв пляжей</p>
        </a>
      </div>

      <div class="services__item flex-column">
        <a href="/sapropel_extraction">
          <div class="services__item-icon-wrapper flex-center">
            <img src="<?php echo base_url(); ?>/img/services_icon_4.svg" alt="icon" class="services__item-icon">
          </div>
        </a>
        <a href="/sapropel_extraction">
          <p class="services__item-subtitle">Добыча сапропеля</p>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- / УСЛУГИ -->

<!-- АРЕНДА И ПОКУПКА ЗЕМСНАРЯДА -->
<div class="dredgers bg-light">
  <div class="dredgers__container wrapper">
    <h2 class="dredgers__cards-title content-title">Аренда и покупка земснаряда</h2>
    <div class="dredgers__cards flex-center">
      <?php foreach ($zem->getResult() as $row) : ?>
        <div class="dredgers__card flex-column">
          <div class="dredgers__card-image-wrapper flex-center">
            <img src="<?php echo base_url(); ?><?php echo $row->img; ?>" alt="dredger" class="dredgers__card-image">
          </div>
          <div class="dredgers__card-body">
            <p class="dredgers__card-subtitle text-center"><?php echo $row->title; ?></p>
            <p class="dredgers__card-text text-center"><?php echo $row->discription; ?></p>

            <div class="dredgers__card-control flex-between">
              <p class="dredgers__card-cost"><?php echo $row->price; ?></p>
              <a class="dredgers__card-button-link" href="/dredger_template/<?php echo $row->id; ?>"><button class="dredgers__card-button btn-default">
                  Подробнее</button></a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- / АРЕНДА И ПОКУПКА ЗЕМСНАРЯДА -->

<!-- ПОЧЕМУ ВЫБИРАЮТ НАС -->
<div class="selling-points bg-dark">
  <div class="selling-points__container wrapper flex-column">
    <h2 class="services__title content-title">Почему выбирают нас?</h2>

    <div class="selling-points__item flex-center">
      <div class="selling-points__info flex-center">
        <p class="selling-points__text text-center">Собственное производство</p>
      </div>

      <div class="selling-points__icon-wrapper flex-center">
        <img src="<?php echo base_url(); ?>/img/selling-points-icon_1.svg" alt="point-icon" class="selling-points__icon" />
      </div>
    </div>

    <div class="selling-points__item flex-center">
      <div class="selling-points__info flex-center">
        <p class="selling-points__text text-center">Более 30 лет опыта</p>
      </div>

      <div class="selling-points__icon-wrapper flex-center">
        <img src="<?php echo base_url(); ?>/img/selling-points-icon_2.svg" alt="point-icon" class="selling-points__icon" />
      </div>
    </div>

    <div class="selling-points__item flex-center">
      <div class="selling-points__info flex-center">
        <p class="selling-points__text text-center">Инновационный подход: 34 патента и изобретения</p>
      </div>

      <div class="selling-points__icon-wrapper flex-center">
        <img src="<?php echo base_url(); ?>/img/selling-points-icon_3.svg" alt="point-icon" class="selling-points__icon" />
      </div>
    </div>

    <div class="selling-points__item flex-center">
      <div class="selling-points__info flex-center">
        <p class="selling-points__text text-center">Разработка сапропелевых отложений</p>
      </div>

      <div class="selling-points__icon-wrapper flex-center">
        <img src="<?php echo base_url(); ?>/img/selling-points-icon_4.svg" alt="point-icon" class="selling-points__icon" />
      </div>
    </div>

    <div class="selling-points__item flex-center">
      <div class="selling-points__info flex-center">
        <p class="selling-points__text text-center">Техническое обслуживание и ремонт земснарядов</p>
      </div>

      <div class="selling-points__icon-wrapper flex-center">
        <img src="<?php echo base_url(); ?>/img/selling-points-icon_5.svg" alt="point-icon" class="selling-points__icon" />
      </div>
    </div>
  </div>
</div>
<!-- / ПОЧЕМУ ВЫБИРАЮТ НАС -->

<!-- КАК НАС НАЙТИ? -->
<div class="map bg-light">
  <div class="wrapper">
    <h2 class="services__title content-title">Как нас найти?</h2>
  </div>
  <div class="map__container">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aec23013fddbf1665d96da4a21a39c30904596a93b4333bebb7e5d2bf8f00f577&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
  </div>

</div>
<!-- / КАК НАС НАЙТИ? -->

<!--ОСТАЛИСЬ ВОПРОСЫ?-->
<div class="questions bg-dark">
  <div class="questions__container wrapper">
    <h2 class="services__title content-title">Остались вопросы?</h2>
    <div class="questions__flex-container flex-around">
      <div class="questions__form-container">
        <!-- результат при успешном сабмите -->
        <div class="question__result content-text text-center"></div>
        <!-- / результат при успешном сабмите -->

        <!-- PRELOADER -->
        <div id="preloader" class="lds-ring">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
        <!-- / PRELOADER -->

        <form method="post" id="formAjax" class="questions__form flex-column">

          <h3 class="questions__form-title">Свяжитесь с нами:</h3>

          <input type="text" name="name" value="" placeholder="Имя*" class="question__input-name input-default" />

          <input type="text" name="phone" value="" class="question__input-phone input-default" placeholder="Телефон*" />

          <input type="text" name="email" value="" class="question__input-email input-default" placeholder="Email*" />

          <input type="text" name="theme" value="" class="question__input-theme input-default" placeholder="Тема" />

          <textarea type="text" name="message" value="" class="question__input-text input-default" rows="9" placeholder="Ваше сообщение"></textarea>

          <input type="submit" data-submit="main" value="Отправить" class="question__input-button btn-default" />
        </form>

      </div>

      <div class="questions__info flex-column">
        <div class="questions__info-block flex-column">
          <div class="questions__icon-wrapper">
            <img src="<?php echo base_url(); ?>/img/glob-icon.svg" alt="icon" class="questions__icon">
          </div>
          <p class="questions__info-text text-center">Мы оказываем высокий сервис нашим клиентам</p>
        </div>

        <div class="questions__info-block flex-column">
          <div class="questions__icon-wrapper">
            <img src="<?php echo base_url(); ?>/img/key-icon.svg" alt="icon" class="questions__icon">
          </div>

          <p class="questions__info-text text-center">Найдем оптимальное решение для Вас</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ОСТАЛИСЬ ВОПРОСЫ?-->