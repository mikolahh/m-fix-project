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
             


      




       
                     <h1 style="">Ремонт мобильных телефонов в Минске</h1>


      
      <p style="">
        Для подробного ознакомления c расценками выберите производителя мобильного телефона, затем его модель либо воспользуйтесь поиском.
      </p>








          <hr>
          <div class="row" style="margin-left: 2px;">
            <?php foreach ($phones_brands as $key => $value): ?>
              <div class="repairs_block_brands col-lg-2 col-md-3 col-sm-4 col-xs-6">
              <a href="/remont-telefonov/<?php echo $value['slug']?>#st"><img src="/<?php echo $value['poster']?>" alt="Ремонт телефонов"></a>
              <div class="repair_label_brands"><a href="/remont-telefonov/<?php echo $value['slug']?>#st"><?php echo $value['brand']; ?></a></div>
            </div>
            <?php endforeach ?>        

            
          </div>


     </div>
       

     



     
          <!-- CONTENT (index) end -->