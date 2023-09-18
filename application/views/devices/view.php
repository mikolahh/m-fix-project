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
<a id="/remont-<?php echo $type_devices ?>" itemscope itemtype="http://schema.org/Thing" itemprop="item" href="../../remont-<?php echo $type_devices ?>#st">
<span itemprop="name">Ремонт <?php echo $type_devices_rus ?></span></a>
<meta itemprop="position" content="2" />
</li>



<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
	<a id="/<?php echo $brand ?>" itemscope itemtype="http://schema.org/Thing"
			   itemprop="item" href="../<?php echo $brand ?>#st">
<span itemprop="name">Ремонт <?php echo $type_devices_rus ?> <?php echo $brand_name_title ?></span></a>
<meta itemprop="position" content="3" />
</li>	 
</ol>
</nav>

	<?php
//Так мы подключили while.php (необходимо подключить именно так)
    ob_start();
include 'view_all_mod.php';
$include1 = ob_get_contents();
ob_end_clean();

ob_start();
include 'view_iphone.php';
$include2 = ob_get_contents();
ob_end_clean();

ob_start();
include 'view_ipad_mod.php';
$include3 = ob_get_contents();
ob_end_clean();

ob_start();
include 'view_ipad_touch.php';
$include4 = ob_get_contents();
ob_end_clean();

ob_start();
include 'view_all_touch.php';
$include5 = ob_get_contents();
ob_end_clean();

ob_start();
include 'edit.php';
$include6 = ob_get_contents();
ob_end_clean();

//Объявляем список комплектующих с разборки
ob_start();
include 'parts.php';
$include7 = ob_get_contents();
ob_end_clean();

//Далее конструкция print <<<HERE HERE; Запомните что перед и после этих тегов не должно быть даже пробелов.




if ($brand == 'iphone') {
	print <<<HERE

$include2

HERE;
}

if ($brand !== 'iphone' && $brand !== 'ipad' && $type_lcd != 1) {
	print <<<HERE

$include1

HERE;
}

if ($brand !== 'iphone' && $brand !== 'ipad' && $type_lcd == 1) {
	print <<<HERE

$include5

HERE;
}


if ($brand == 'ipad' && $type_lcd != 1) {
	print <<<HERE

$include3

HERE;
}


if ($brand == 'ipad' && $type_lcd == 1) {
	print <<<HERE

$include4

HERE;
}
//Вводим список комплектующих


if ($control_part == 1 ) {
	print <<<HERE

$include7

HERE;
}










?>


</div>


