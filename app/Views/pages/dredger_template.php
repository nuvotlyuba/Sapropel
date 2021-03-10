<div class="dredger__container">
  <div class="wrapper">
  
    <h1 class="dredger__container-title"><?php echo $zem_id->getRow('title'); ?></h1>
    <div class="dredger__description">
      <div class="dredger__description-img-container">
        <img class="dredger__description-img" src="<?php echo base_url(); ?><?php echo $zem_id->getRow('img');?>" alt="Pic">
      </div>

      <div class="dredger__description-specs-wrapper">
        <h2 class="dredger__description-title">Технические характеристики:</h2>
        <table class="dredger__description-specs-table">
          <tr class="dredger__description-specs-row">
            <td class="dredger__description-specs table-col">Подача насоса по пульпе м3/ч</td>
            <td class="dredger__description-specs table-col"><?php echo $zem_id->getRow('pumping');?></td>
          </tr>
          <tr class="dredger__description-specs-row">
            <td class="dredger__description-specs table-col">Мощность насоса, кВт</td>
            <td class="dredger__description-specs table-col"><?php echo $zem_id->getRow('power');?></td>
          </tr>
          <tr class="dredger__description-specs-row">
            <td class="dredger__description-specs table-col">Максимальная глубина разработки, м </td>
            <td class="dredger__description-specs table-col"><?php echo $zem_id->getRow('mining_depth');?></td>
          </tr>
          <tr class="dredger__description-specs-row">
            <td class="dredger__description-specs table-col">Дальность транспортирования, м</td>
            <td class="dredger__description-specs table-col"><?php echo $zem_id->getRow('length_of_haul');?></td>
          </tr>
        </table>

        <div class="dredgers__description-buttons flex-around">
          <button class="dredgers__description-button buy-button btn-default box-shadow btn-popup">Покупка</button>
          <button class="dredgers__description-button rent-button btn-default box-shadow btn-popup">Аренда</button>
        </div>
      </div>



    </div>
    <div class="dredgers__description-text-wrapper content-text">
      <p class="dredgers__description-text"><?php echo $zem_id->getRow('discription');?></p>
      <p class="dredgers__description-text">Изготовим земснаряд или выполним работу на собственных мощностях.</p>
    </div>

    <button class="dredgers__description-protfolio-btn btn-default">О выполненных работах</button>
  </div>

</div>