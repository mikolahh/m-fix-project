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

                     <h1 style="font-size: 1.5em; font-weight: bolder;">Комплектующие и аксессуары для мобильных телефонов и планшетов, прочие товары</h1>

          <hr>
          <div class="row" style="margin-left: 2px;">
            <?php foreach ($products_category as $key => $value): ?>
              <div class="products_category col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="/products/<?php echo $value['slug'] ?>#st"><img src="assets/img/products/<?php echo $value['image']?>" alt="Рисунок <?php echo $value['name'] ?>"></a>
                <div class="products_category_label"><a href="/products/<?php echo $value['slug'] ?>#st"><?php echo $value['name']; ?></a></div>
              </div>
            <?php endforeach ?>        
          
            
          </div>


     </div>
       