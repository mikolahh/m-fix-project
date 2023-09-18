    
     <a name="st"></a>
     <div style="width: 98%; margin-left: 2px;">
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
      
        <h1 style="">Ремонт Apple в Минске</h1>      
      <br>
      <p style="">
        Ремонт техники Apple отличается рядом характерных особенностей по сравнению с другими брендами. <a href="/osobennosti-remonta-iphone">Подробнее..</a>
      </p>
      <br>
      <p style="">
        Для подробного ознакомления выберите тип изделия Apple, затем его модель либо воспользуйтесь поиском.
      </p>
          <hr>
          <div class="row" style="margin-left: 20px;">
            <?php foreach ($type_apple as $key => $value): ?>
              <div class="repairs_block_apple col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-right: 50px; margin-left: 5px;">
              <a href="/remont-<?php echo $value['slug']?>#st"><img src="/assets/img/apples/<?php echo $value['poster']?>" alt="Ремонт Apple"></a>
              <div class="repair_label_apple"><a href="/remont-<?php echo $value['slug']?>#st"><?php echo $value['name']; ?></a></div>
            </div>
            <?php endforeach ?>        
          </div>
     </div>




 