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
     itemtype="http://schema.org/ListItem" class="breadcrumb-item active">
      <a id="/products" itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/products#st">
      <span itemprop="name">Товары</span></a>
      <meta itemprop="position" content="2" />
     </li>
 
<li itemprop="itemListElement" itemscope
itemtype="http://schema.org/ListItem" class="breadcrumb-item">
<a id="/products/<?php echo $slug_category ?>" itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/products/<?php echo $slug_category ?>#st">
<span itemprop="name"><?php echo $title_breadcrumb ?></span></a>
<meta itemprop="position" content="3" />
</li>	 
</ol>
 </nav>
 <br>
 <h1 style="font-size: 1.4em;"><?php echo $name_h1  ?></h1>
 <br>

 <?php

  // объявляем одиночный рисунок
 ob_start();
include 'product_img_1.php';
$include1 = ob_get_contents();
ob_end_clean();

//объявляем 2 рисунка
ob_start();
include 'product_img_1_2.php';
$include2 = ob_get_contents();
ob_end_clean();

//объявляем 3 рисунка
ob_start();
include 'product_img_1_2_3.php';
$include3 = ob_get_contents();
ob_end_clean();

//объявляем 4 рисунка
ob_start();
include 'product_img_1_2_3_4.php';
$include4 = ob_get_contents();
ob_end_clean();

//объявляем ссылку на обзор
ob_start();
include 'link_review.php';
$include5 = ob_get_contents();
ob_end_clean();

//Выводим рисунки

if (file_exists($img_4)) {
  print <<<HERE

$include4

HERE;
}
else if (file_exists($img_3) ) {
	print <<<HERE

$include3

HERE;
}
else if (file_exists($img_2) ) {
	print <<<HERE

$include2

HERE;
}
else {
  print <<<HERE

$include1

HERE;
}

 ?>

<br>
<p>
	<?php echo $info ?>
</p>
<br>

<p style="color: green">
	   <?php echo $price_ex ?>
</p>
<p style="color: red">
  <?php 
  if ($price_discount !=0) {
    echo $price_discount_ex;
  }

   ?>
  

</p>
<br>

<p>
	<?php echo $note ?>
</p>
<?php 

if ($link_review !== '0') {
  print <<<HERE

$include5

HERE;
}

 ?>
</div>