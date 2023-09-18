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
<a id="/products" itemscope itemtype="http://schema.org/Thing" itemprop="item" href="../../products#st">
<span itemprop="name">Товары</span></a>
<meta itemprop="position" content="2" />
</li>

        </ol>
      </nav>

                     <h1 style="font-size: 1.4em; font-weight: bolder;"><?php echo $category_name ?></h1>

          <hr>

          <div class="row" style="margin-left: 2px;">
            <?php foreach ($category_parts as $key => $value): ?>
              <div class="products_category col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="/products/<?php echo $value['slug_category']?>/<?php echo $value['slug']?>#st"><img src="/assets/img/products/<?php echo $value['slug_category']?>/<?php echo $value['slug'] ?>/<?php echo $value['slug'] ?>.jpg" alt="Рисунок <?php echo $value['slug'] ?>"></a>
                <div class="products_category_label"><a href="/products/<?php echo $value['slug_category']?>/<?php echo $value['slug']?>#st"><?php echo $value['name_h1']; ?>: <span style="color: green;"><?php echo $value['price']?>р.</span><br> <span style="color: red"><?php echo $value['discount']  ?></span> </a></div>               
              </div>
            <?php endforeach ?>        
          
            
          </div>

          

     </div>