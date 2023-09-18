<div class="row" style="width: 100%;">	

		<table class="table table-striped table-bordered table-hover table-condensed">
<caption>

	<div class="row">

		<div class="col-md-3">
			<img src="/assets/img/<?php echo $type_devices_img ?>/<?php echo $brand ?>/<?php echo $image ?>"  alt="Изображение <?php echo $type_device_rp ?>" style="width: 100px; height: 150px;">
		</div>

		<div class="col-md-9">
			<h1>
	<span style="font-size: 0.8em;">
		<?php if($brand_id == 14) {
	echo $title_view_apple;
}
else {echo $title_view;}
 ?>
	</span>
	
  <br>
  <span style="font-size: 0.7em;">
  	<?php echo $title_oth_names; ?>
  </span>
  </h1>
		</div>
        

	</div>

	</caption>			

 <thead>
 <tr>
 <th>Наименование услуги</th>
 <th>Стоимость, руб.</th>
 <th class="hidden-xs">Стоимость со скидкой, руб.</th>
 <th class="hidden-xs">Срок исполнения</th>
 <th class="hidden-xs">Гарантия</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td><h2 style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Предварительный осмотр</h2></td>
 <td><?php echo "бесплатно"; ?></td>
 <td class="hidden-xs"><?php echo "бесплатно"; ?></td>
 <td class="hidden-xs"><?php echo "до 20-минут"; ?></td>
 <td class="hidden-xs"><?php echo "----"; ?></td>
 </tr>
 <tr>
 <td><h2  style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Диагностический осмотр</h2></td>
 <td><?php echo $diag_sur; ?></td>
 <td class="hidden-xs"><?php echo $diag_sur_disc; ?></td>
 <td class="hidden-xs"><?php echo "от 20-минут до 4-х часов"; ?></td>
 <td class="hidden-xs"><?php echo "----"; ?></td>
 </tr>
 <tr>
 <td colspan="5" style="font-size: 1.15em; font-weight: bolder;"><a href="/remont-<?php echo $type_devices ?>/<?php echo $brand ?>/<?php echo $slug ?>/net-zaryadki#st" style = "">Ремонт системы питания и зарядки подробнее, дополнительная информация</a></td>
 
 </tr>
 <tr>
 <td><h2  style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Замена дисплейного модуля</h2></td>

 <td><?php if ($lcd_price == 0) {
	echo "звоните для уточнения";}
	else { echo $lcd_repair;} ?></td>

 <td class="hidden-xs"><?php if ($lcd_price == 0) {
	echo "звоните для уточнения";}
	else { echo $lcd_repair_disc;} ?></td>
 <td class="hidden-xs"><?php echo "можно быстрее, но лучше 1-сутки "; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца"; ?></td>
 </tr>
 <tr>
 <td><h2  style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Установка дисплейного модуля заказчика</h2></td>
 <td><?php echo $lcd_repair_ext; ?></td>
 <td class="hidden-xs"><?php echo $lcd_repair_ext_disc; ?></td>
 <td class="hidden-xs"><?php echo "можно быстрее, но лучше 1-сутки!"; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца (только на вполненную работу!)"; ?></td>
 </tr>
 <tr>
 <td><h2  style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Чистка от окислов после попадания влаги</h2></td>
 <td><?php echo $water_repair; ?></td>
 <td class="hidden-xs"><?php echo $water_repair_disc; ?></td>
 <td class="hidden-xs"><?php echo "можно быстрее, но лучше 1-сутки!"; ?></td>
 <td class="hidden-xs"><?php echo "не предоставляется"; ?></td>
 </tr>
 <tr>
 <td><h2  style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Замена слухового динамика</h2></td>
 <td><?php echo $speaker_repair; ?></td>
 <td class="hidden-xs"><?php echo $speaker_repair_disc; ?></td>
 <td class="hidden-xs"><?php echo "от 30-минут до 1-суток"; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца"; ?></td>
 </tr>
 <tr>
 <td><h2  style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Замена вызывного динамика</h2></td>
 <td><?php echo $buz_repair; ?></td>
 <td class="hidden-xs"><?php echo $buz_repair_disc; ?></td>
 <td class="hidden-xs"><?php echo "от 30-минут до 1-суток"; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца"; ?></td>
 </tr>
 <tr>
 <td><h2  style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Замена микрофона</h2></td>
 <td><?php echo $mic_repair; ?></td>
 <td class="hidden-xs"><?php echo $mic_repair_disc; ?></td>
 <td class="hidden-xs"><?php echo "от 30-минут до 1-суток"; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца"; ?></td>
 </tr>
 <tr>
 <td><h2  style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Замена кнопки включения, боковых кнопок</h2></td>
 <td><?php echo $key_repair; ?></td>
 <td class="hidden-xs"><?php echo $key_repair_disc; ?></td>
 <td class="hidden-xs"><?php echo "от 30-минут до 1-суток"; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца"; ?></td>
 </tr>
 <tr>
 <td><h2  style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Замена разъема SIM карты, карты памяти</h2></td>
 <td><?php echo $sim_con__repair; ?></td>
 <td class="hidden-xs"><?php echo $sim_con__repair_disc; ?></td>
 <td class="hidden-xs"><?php echo "от 1-часа до 1-суток"; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца"; ?></td>
 </tr>
 <tr>
 <td><h2 style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Ремонт 1-ого уровня сложности без использования дополнительных комплектующих</h2></td>
 <td><?php echo $small_repair; ?></td>
 <td class="hidden-xs"><?php echo $small_repair_disc; ?></td>
 <td class="hidden-xs"><?php echo "от 30-минут до 2-часов"; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца"; ?></td>
 </tr>
 <tr>
 <td><h2  style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Программный ремонт, разблокировка, снятие кода оператора (стандартный случай)</h2></td>
 <td><?php echo $small_soft_repair; ?></td>
 <td class="hidden-xs"><?php echo $small_soft_repair_disc; ?></td>
 <td class="hidden-xs"><?php echo "от 10-минут до 2-часов"; ?></td>
 <td class="hidden-xs"><?php echo "7 суток на проверку"; ?></td>
 </tr>
  <tr>
 <td><h2  style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Программный ремонт, разблокировка, снятие кода оператора (нестандартный случай)</h2></td>
 <td><?php echo $big_soft_repair; ?></td>
 <td class="hidden-xs"><?php echo $big_soft_repair_disc; ?></td>
 <td class="hidden-xs"><?php echo "от 4-часов до 2-суток"; ?></td>
 <td class="hidden-xs"><?php echo "7 суток на проверку"; ?></td>
 </tr>
  <tr>
 <td><h2  style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Установка защитного стекла</h2></td>
<td><?php echo "10"; ?></td>
 <td class="hidden-xs"><?php echo "8"; ?></td>
 <td class="hidden-xs"><?php echo "до 5-и минут"; ?></td>
 <td class="hidden-xs"><?php echo "------"; ?></td>
 </tr>
  
 </tbody>
 </table>

	
	

</div>