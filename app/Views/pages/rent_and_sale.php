<div class="dredgers bg-light">
    <h2 class="dredgers__title content-title">О земснарядах</h2>
    <div class="dredgers__text-wrapper wrapper">
        <p class="dredgers__text content-text">
            Мы изготавливаем земснаряды более 30 лет (с 1988 года). Занимаемся расчисткой
            озёр, прудов, каналов, русел рек, заиленных и заросших хозяйственных и пожарных водоёмов. Добываем экологически
            чистое органическое удобрение — сапропель, строительные пески, торф. Выполняем намыв строительных площадок,
            дамб,
            насыпей, пляжей.
        </p>
        <p class="dredgers__text content-text">Вы можете купить земснаряд или нанять наших специалистов и использовать
            наше
            оборудование (земснаряды) при выполнении работ. Произведем монтаж и пуско-наладочные работы на объекте
            заказчика, при помощи своих специалистов проведем расчистку водных объектов или гидронамыв песка.</p>
    </div>

    <div class="dredgers__container">
        <h2 class="dredgers__title content-title">Наши земснаряды</h2>
        <div class="dredgers__cards flex-center">
        <?php foreach($zem->getResult() as $row): ?>
            <div class="dredgers__card flex-column">
                <div class="dredgers__card-image-wrapper flex-center">
                    <img src="<?php echo base_url(); ?><?php echo $row->img; ?>" alt="dredger" class="dredgers__card-image">
                </div>
                <div class="dredgers__card-body">
                    <p class="dredgers__card-subtitle text-center"><?php echo $row->title; ?></p>
                    <p class="dredgers__card-text text-center"><?php echo $row->discription; ?></p>

                    <div class="dredgers__card-control flex-between">
                        <p class="dredgers__card-cost"><?php echo $row->price; ?></p>
                        <a class="dredgers__card-button-link" href="/dredger_template/<?php echo $row->id; ?>"><button class="dredgers__card-button btn-default">Подробнее</button></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>

    <div class="dredgers__text-wrapper wrapper">
        <p class="dredgers__text content-text">Мы проводим техническое обслуживание и ремонт, а также модернизацию
            (повышение производительности) земснарядов.</p>
        <p class="dredgers__text content-text">Созданные конструкции земснарядов защищены нашими патентами и авторскими
            свидетельствами на изобретения, имеют сертификаты соответствия.</p>
    </div>
</div>