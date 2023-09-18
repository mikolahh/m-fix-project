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
 

</ol>
      </nav>      
          <h1>
       Ремонт планшетов в Минске
        </h1>
      
      <p style="">
        Для подробного ознакомления выберите производителя мобильного телефона, затем его модель либо воспользуйтесь поиском.
      </p>


          <hr>
          <div class="row" style="margin-left: 2px;">
            <?php foreach ($tablets_brands as $key => $value): ?>
              <div class="repairs_block_brands col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="/remont-planshetov/<?php echo $value['slug']?>#st"><img src="/assets/img/tablets/<?php echo $value['poster']?>" alt="Ремонт планшетов"></a>
              <div class="repair_label_brands"><a href="/remont-planshetov/<?php echo $value['slug']?>#st"><?php echo $value['brand']; ?></a></div>
            </div>
            <?php endforeach ?>        

            
          </div>

    </div>
      
        
            

      
     


     