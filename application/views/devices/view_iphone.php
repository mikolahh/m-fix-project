<div class="row" style="width: 100%;">	

		<table class="table table-striped table-bordered table-hover table-condensed" >
<caption>
     <div class="row">

		<div class="col-md-3">
			<img src="/assets/img/<?php echo $type_devices_img ?>/<?php echo $brand ?>/<?php echo $image ?>"  alt="Изображение <?php echo $type_device_rp ?>" style="width: 100px; height: 150px;">
		</div>

		<div class="col-md-9">
			<h1>
	<span style="font-size: 0.80em;">
		<?php echo $title_view_apple; ?>
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
 <td><h2 style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Диагностический осмотр</h2></td>
 <td><?php echo $diag_sur_iphone; ?></td>
 <td class="hidden-xs"><?php echo $diag_sur_iphone_disc; ?></td>
 <td class="hidden-xs"><?php echo "от 20-минут до 4-х часов"; ?></td>
 <td class="hidden-xs"><?php echo "----"; ?></td>
 </tr>
 <tr>
 <td><h2 style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Замена дисплейного модуля</h2></td>

 <td><?php if ($lcd_price == 0) {echo "звоните для уточнения";}
	else { echo $lcd_repair_iphone;} ?></td>
 <td class="hidden-xs"><?php if ($lcd_price == 0) {echo "звоните для уточнения";}
	else { echo $lcd_repair_iphone_disc;} ?></td>
 <td class="hidden-xs"><?php echo "можно быстрее, но лучше 1-сутки "; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца"; ?></td>
 </tr>
 <tr>
 <td colspan="5" style="font-size: 1.15em; font-weight: bolder;"><a href="/remont-<?php echo $type_devices ?>/<?php echo $brand ?>/<?php echo $slug ?>/net-zaryadki#st">Ремонт системы питания и зарядки подробнее, дополнительная информация</a></td>
 
 </tr>
 
 <tr>
 <td><h2 style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Замена верхнего шлейфа с фронтальной камерой</h2></td>
 <td><?php if ($upp_flex_iph == 0) {echo "звоните для уточнения";}
	else { echo $upp_flex_iph_repair;} ?></td>
 <td class="hidden-xs"><?php if ($upp_flex_iph == 0) {echo "звоните для уточнения";}
	else { echo $upp_flex_iph_repair_disc;} ?></td>
 <td class="hidden-xs"><?php echo "от 4-часов до 1-суток"; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца"; ?></td>
 </tr>
 <tr>
 <td><h2 style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Замена кнопки "Home"</h2></td>
 <td><?php if ($home_flex_iph == 0) {echo "звоните для уточнения";}
	else { echo $home_flex_iph_repair;} ?></td>
 <td class="hidden-xs"><?php if ($home_flex_iph == 0) {echo "звоните для уточнения";}
	else { echo $home_flex_iph_repair_disc;} ?></td>
 <td class="hidden-xs"><?php echo "от 4-часов до 1-суток"; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца"; ?></td>
 </tr>
 <tr>
 <td><h2 style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Замена шлейфа с кнопкой включения</h2></td>
 <td><?php if ($key_flex_iph == 0) {echo "звоните для уточнения";}
	else { echo $key_flex_iph_repair;} ?></td>
 <td class="hidden-xs"><?php if ($key_flex_iph == 0) {echo "звоните для уточнения";}
	else { echo $key_flex_iph_repair_disc;} ?></td>
 <td class="hidden-xs"><?php echo "от 4-часов до 1-суток"; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца"; ?></td>
 </tr>
 
 <tr>
 <td><h2 style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Замена вызывного динамика</h2></td>
 <td><?php if ($buz_price == 0) {echo "звоните для уточнения";}
	else { echo $buz_iph_repair;} ?></td>
 <td class="hidden-xs"><?php if ($buz_price == 0) {echo "звоните для уточнения";}
	else { echo $buz_iph_repair_disc;} ?></td>
 <td class="hidden-xs"><?php echo "от 4-часов до 1-суток"; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца"; ?></td>
 </tr>
 <tr>
 <td><h2 style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Замена слухового динамика</h2></td>
 <td><?php if ($ear_price_iph == 0) {echo "звоните для уточнения";}
	else { echo $ear_iph_repair;} ?></td>
 <td class="hidden-xs"><?php if ($ear_price_iph == 0) {echo "звоните для уточнения";}
	else { echo $ear_iph_repair_disc;} ?></td>
 <td class="hidden-xs"><?php echo "от 1-часа до 1-суток"; ?></td>
 <td class="hidden-xs"><?php echo "4 месяца"; ?></td>
 </tr>
 <tr>
 <td><h2 style="font-size: 1.15em; font-weight: bold; margin-top: 1px; margin-bottom: 1px;">Установка защитного стекла</h2></td>
 <td><?php echo "15"; ?></td>
 <td class="hidden-xs"><?php echo "10"; ?></td>
 <td class="hidden-xs"><?php echo "до 5-минут"; ?></td>
 <td class="hidden-xs"><?php echo "----"; ?></td>
 </tr>
 
 </tbody>
 </table>
	
	


</div>