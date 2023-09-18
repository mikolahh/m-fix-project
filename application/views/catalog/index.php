<a name="st"></a>
<div style="width: 100%;">

  <nav aria-label="breadcrumb">        
        <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
        <li itemprop="itemListElement" itemscope
        itemtype="http://schema.org/ListItem" class="breadcrumb-item active">
        <a id="/" itemscope itemtype="http://schema.org/Thing" itemprop="item" href="https://m-fix.mikola.tech">
        <span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1" />
        </li>        
        </ol>
      </nav>

  <div class="row" style="border: solid 1px; border-radius: 3px; width: 100%; margin-left: 2px;" >
  <p class="col-sm-8" style="font-size: 1.1em; margin-bottom: 2px; ">Для наиболее быстрого нахождения нужной модели и получения необходимой информации рекомендуется пользоваться поиском</p>

 <p class="col-sm-4" style="margin-top: 5px; margin-right: 0px;">
  <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   Подробнее о поиске
  </a>  
</p>
 </div>
 <br>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <div class="row" style="">
          <p> Введите название модели в окно поиска и нажмите соответствующую кнопку. Для таких брендов, как Iphone, Ipad, Honor название бренда следует указывать. Например: iphone 5, ipad 2, honor 4c. В остальных случаях следует указаваить только название модели. Например: redmi 4x - правильный вариант, xiaomi redmi 4x - неправильный. У многих моделей существует несколько названий, они, по возможности, вносятся в базу данных. Поэтому можно пробовать разные варианты.</p>            
          </div>
  </div>
</div>
 <p style="border: solid 1px; border-radius: 3px;">Если поиск не принес нужных результатов, можно отыскать нужную модель с помощью каталога. Если таковая отсутствует в каталоге, убедительная просьба сообщить об этом через форму обратной связи или написать по адресу mikolahh@gmail.com</p>

 <h1 style="font-family: Times New Roman;">Каталог моделей мобильных телефонов и планшетов</h1>
 <h2>Мобильные телефоны</h2>
 <div class="row">    
    <?php foreach ($phones_brands as $key => $value): ?>
              <div class=" phones_brands col-lg-2 col-md-3 col-sm-4 col-xs-6" style="">
              <a href="/remont-telefonov/<?php echo $value['slug']  ?>#st"><img src="/<?php echo $value['poster'] ?>"   alt="Телефоны <?php echo $value['brand'] ?>" ></a>
            </div>
            <?php endforeach ?>
 </div>
 <br>

 <h2>Планшеты</h2>

 <div class="row">    
    <?php foreach ($tablets_brands as $key => $value): ?>
              <div class="phones_brands col-lg-2 col-md-3 col-sm-4 col-xs-6" style="">
              <a href="/remont-planshetov/<?php echo $value['slug']  ?>#st"><img src="assets/img/tablets/<?php echo $value['poster'] ?>"   alt="Планшеты <?php echo $value['brand'] ?>" ></a>
            </div>
            <?php endforeach ?>
 </div>
</div>
	


 
 	
 



 


 
 


 

















