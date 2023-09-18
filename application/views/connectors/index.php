<a name="st"></a>
       
      <div style="width: 98%; margin-left: 3px;">


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
        <h1 style="">Список разъемов зарядки</h1>
       <br>

<div class="row" style="margin-left: 5px;">
  
<?php foreach ($connectors as $key => $value): ?>

  

    <div class="connectors_block col-lg-3 col-md-4 col-sm-6 col-xs-12">

      <div class="connectors_label">
    


     <a href="/razemy-zaryadki/<?php echo $value['numb_char_con'] ?>#st">Разъем зарядки №<?php echo $value['numb_char_con']; ?></a> 
      
        </div>
      <a href="/assets/img/char/<?php echo $value['numb_char_con'] ?>.jpg#st" target="blank"><img src="/assets/img/char/<?php echo $value['numb_char_con'] ?>.jpg"  alt="рисунок разъема"></a>

      <div class="type_connectors_label">

      
          
               <?php echo $value['type_char_con']; ?>
    


       

      
        </div>
      

      

    </div>

  
  
  

  
<?php endforeach ?>
</div>

      </div>


       