<a name="st"></a>

<div style="width: 95%;">	


		<nav aria-label="breadcrumb">


			 <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
<li itemprop="itemListElement" itemscope
itemtype="http://schema.org/ListItem" class="breadcrumb-item active">
<a id="/" itemscope itemtype="http://schema.org/Thing" itemprop="item" href="https://m-fix.mikola.tech">
<span itemprop="name">Главная</span></a>
<meta itemprop="position" content="1" />
</li>


 
<li itemprop="itemListElement" itemscope
itemtype="http://schema.org/ListItem" class="breadcrumb-item">
<a id="/remont-<?php echo $type_devices ?>" itemscope itemtype="http://schema.org/Thing" itemprop="item" href="../../../remont-<?php echo $type_devices ?>#st">
<span itemprop="name">Ремонт <?php echo $type_devices_rus ?></span></a>
<meta itemprop="position" content="2" />
</li>



<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
	<a id="/<?php echo $brand_name ?>" itemscope itemtype="http://schema.org/Thing"
			   itemprop="item" href="../../<?php echo $brand_name ?>#st ">
<span itemprop="name">Ремонт <?php echo $type_devices_rus ?> <?php echo $brand_name_title ?></span></a>
<meta itemprop="position" content="3" />
</li>




<li itemprop="itemListElement" itemscope
			  itemtype="http://schema.org/ListItem" class="breadcrumb-item">
			<a id="/<?php echo $slug ?>" itemscope itemtype="http://schema.org/Thing"
			   itemprop="item" href="../<?php echo $slug ?>#st ">
			  <span itemprop="name">Ремонт <?php echo $brand_name_title ?> <?php echo $commerc_name ?></span></a>
			<meta itemprop="position" content="4" />
		  </li> 


		  
		 
		</ol>

        </nav>  
            
		
			

	<?php 
//Объявляем блок вывода девайсов
/*ob_start();
include 'get_dev_block.php';
$include1 = ob_get_contents();
ob_end_clean();*/

//Объявляем oth_names в скобках
ob_start();
include 'oth_names_block.php';
$include2 = ob_get_contents();
ob_end_clean();

 //Объявляем блок с информацией о разъеме зарядки
ob_start();
include 'info_char_con_block.php';
$include3 = ob_get_contents();
ob_end_clean();

//Объявляем блок с информацией о расположении раз. зар. на основной плате
ob_start();
include 'info_place_char_con_block_1.php';
$include4 = ob_get_contents();
ob_end_clean();

//Объявляем блок с информацией о расположении раз. зар. на отдельном шлейфе
ob_start();
include 'info_place_char_con_block_2.php';
$include5 = ob_get_contents();
ob_end_clean();

//Объявляем новый блок с информацией о расположении раз. зар. на отдельном шлейфе после 'заморозки' папки fles_char
ob_start();
include 'info_place_char_con_block_2_new.php';
$include9 = ob_get_contents();
ob_end_clean();

//Объявляем блок с информацией о расположении раз. зар. на отдельной плате
ob_start();
include 'info_place_char_con_block_3.php';
$include6 = ob_get_contents();
ob_end_clean();

//Объявляем новый блок с информацией о расположении раз. зар. на отдельной плате после 'заморозки' папки board_char
ob_start();
include 'info_place_char_con_block_3_new.php';
$include16 = ob_get_contents();
ob_end_clean();

//Объявляем блок с информацией о неизвестном разъеме зарядки 
ob_start();
include 'info_char_con_block_nonumber.php';
$include7 = ob_get_contents();
ob_end_clean();

//Объявляем блок с информацией о разъеме зарядки с известным только аналогом
ob_start();
include 'info_char_con_block_numberanalog.php';
$include8 = ob_get_contents();
ob_end_clean();



//Объявляем верхний блок title_view.
ob_start();
include 'title_view.php';
$include10 = ob_get_contents();
ob_end_clean();


//Объявляем верхний блок title_view_apple для эйпл и хонор.
ob_start();
include 'title_view_apple.php';
$include11 = ob_get_contents();
ob_end_clean();

//Объявляем расценки на замену системного разъема.
ob_start();
include 'price_ch_con_rep.php';
$include12 = ob_get_contents();
ob_end_clean();

//Объявляем расценки на замену шлейфа с разъемом зарядки.
ob_start();
include 'price_flex_ch_rep.php';
$include13 = ob_get_contents();
ob_end_clean();

//Объявляем блок акб с разборкой без фото
ob_start();
include 'info_akb_name.php';
$include14 = ob_get_contents();
ob_end_clean();

//Объявляем блок акб с разборкой c фото
ob_start();
include 'info_akb_name_img.php';
$include15 = ob_get_contents();
ob_end_clean();

//Объявляем общие заметки.
ob_start();
include 'notes.php';
$include17 = ob_get_contents();
ob_end_clean();

//Объявляем фото разъема гарнитуры на плате
ob_start();
include 'main_board_hs.php';
$include18 = ob_get_contents();
ob_end_clean();

//Объявляем фото сим-коннектора на плате
ob_start();
include 'main_board_sim.php';
$include19 = ob_get_contents();
ob_end_clean();

//Объявляем фото платы, сторона a
ob_start();
include 'main_board_a.php';
$include20 = ob_get_contents();
ob_end_clean();

//Объявляем фото платы, сторона b
ob_start();
include 'main_board_b.php';
$include21 = ob_get_contents();
ob_end_clean();

//Объявляем дополнительное фото 1
ob_start();
include 'oth_1.php';
$include22 = ob_get_contents();
ob_end_clean();

//Объявляем дополнительное фото 2
ob_start();
include 'oth_2.php';
$include23 = ob_get_contents();
ob_end_clean();

//Объявляем дополнительное фото 3
ob_start();
include 'oth_3.php';
$include24 = ob_get_contents();
ob_end_clean();

//Объявляем фото дисплейного модуля
ob_start();
include 'lcd.php';
$include25 = ob_get_contents();
ob_end_clean();




 




if ($brand_name == 'iphone' or $brand_name == 'ipad' or $brand_name == 'honor' ) {
	print <<<HERE

$include11

HERE;
}
else {
	print <<<HERE

$include10

HERE;
}



//Выводим oth_names
if ($oth_names !== '') {
 	print <<<HERE

$include2

HERE;
 }

 ?>


 <br>

 <div class="row" style="">
 	<p class="col-md-10">Правильно произведенная  диагностика системы зарядки является основой для быстрого и надежного устранения неисправности. В СЦ 'M-FIX' такая услуга осуществляется бесплатно в присутствии заказчика.</p>

<div class="col-md-2" style="margin-top: 15px; border: solid 1px; font-size: 0.95em; line-height: 1.1; border-radius: 3px; border-color: blue; padding-top: 3px; padding-bottom: 3px;">
	<a href="/net-zaryadki#st">Подробнее о неисправностях системы питания и зарядки</a>
</div>

 </div>







<?php 

//Выводим info_char_con_block
 if ($numb_char_con !== '0') {
 	print <<<HERE

$include3

HERE;
 }

//Выводим info_char_con_block с известным только аналогом
 if ($numb_char_con == '0' AND $numb_char_con_analog !== '0') {
 	print <<<HERE

$include8

HERE;
 }

 //Выводим info_char_con_block_nonumber с неизвестным номером
 if ($numb_char_con == '0' AND $numb_char_con_analog == '0') {
 	print <<<HERE

$include7

HERE;
 }

//Вывод блока с располож. раз. зар. на основной плате
 if ($place_char_con == 1) {
 	print <<<HERE

$include4

HERE;
 } 

 //Вывод блока с располож. раз. зар. на отдельном шлейфе 
 if ($place_char_con == 2 AND file_exists($flex_ch_old) ) {
 	print <<<HERE

$include5

HERE;
 } 

 //Вывод нового блока с располож. раз. зар. на отдельном шлейфе 
 if ($place_char_con == 2 AND file_exists($flex_ch) ) {
 	print <<<HERE

$include9

HERE;
 } 

 //Вывод блока с располож. раз. зар. на отдельной плате
 if ($place_char_con == 3 AND file_exists($board_ch_old) ) {
 	print <<<HERE

$include6

HERE;
 } 

 //Вывод нового блока с располож. раз. зар. на отдельной плате
 if ($place_char_con == 3 AND file_exists($board_ch) ) {
 	print <<<HERE

$include16

HERE;
 } 

 //Вывод блока с располож. раз. зар. на отдельном шлейфе, который меняется целиком, выводится тот же блок, что и для обычного шлейфа.
 if ($place_char_con == 4) {
 	print <<<HERE

$include5

HERE;
 }

 ?>
  
 <br>

 <?php 

 //Выводим расценки на замену системного разъема micro-usb, если неизвестно расположение
 if ($place_char_con == 0 AND $type_char_con == 'micro-usb') {
 	print <<<HERE

$include12

HERE;
 }

 //Выводим расценки на замену системного разъема.
 if ($place_char_con == 1 OR $place_char_con == 2 OR $place_char_con == 3) {
 	print <<<HERE

$include12

HERE;
 }

 

 //Выводим расценки на замену шлейфа с разъемом зарядки.
 if ($place_char_con == 4) {
 	print <<<HERE

$include13

HERE;
 }

 //Выводим АКБ блоки.

 if ($batt_type == 2) {
 	if (file_exists($batt_foto)) {
 		print <<<HERE

$include15

HERE;
 	}
 }

 if ($batt_type == 2) {
 	if (!file_exists($batt_foto)) {
 		print <<<HERE

$include14

HERE;
 	}
 }
  ?>

  <br>
  <br>

  <h2 style="margin-bottom: 0px;">Дополнительная информация</h2>
  <span>(добавляется по мере поступления)</span>
  <br>
  <br>
  <!-- Выводим ТТХ -->
<p style=" margin-right: 20px;">
	<?php echo $ttp; ?>
</p>

<?php

/*Выводим общие заметки */
if ($notes !== '0') {
	print <<<HERE

$include17

HERE;
}

//Выводим фото разъема гарнитуры
if (file_exists($hs_a)) {
	print <<<HERE

$include18

HERE;
}

//Выводим фото сим-коннектора
if (file_exists($sim)) {
	print <<<HERE

$include19

HERE;
}

//Выводим фото основной платы-a
if (file_exists($mb_a)) {
	print <<<HERE

$include20

HERE;
}

//Выводим фото основной платы-b
if (file_exists($mb_b)) {
	print <<<HERE

$include21

HERE;
}

//Выводим дополнительное фото 1
if (file_exists($oth_1)) {
	print <<<HERE

$include22

HERE;
}

//Выводим дополнительное фото 2
if (file_exists($oth_2)) {
	print <<<HERE

$include23

HERE;
}

//Выводим дополнительное фото 3
if (file_exists($oth_3)) {
	print <<<HERE

$include24

HERE;
}

//Выводим  фото дисплейного модуля
if (file_exists($lcd)) {
	print <<<HERE

$include25

HERE;
}




 ?>




</div>










