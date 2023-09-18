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
<a id="/<?php echo $for_breadcrumb_2_slug ?>" itemscope itemtype="http://schema.org/Thing" itemprop="item" href="../../<?php echo $for_breadcrumb_2_slug ?>#st">
<span itemprop="name"><?php echo $for_breadcrumb_2 ?></span></a>
<meta itemprop="position" content="2" />
</li>



</ol>

    


  </nav>


   
        
             

      




   
<h1 style=""><?php echo $title_repair; ?> </h1>
 <hr>


      <p style="">
        Для ознакомления с расценками выберите модель вашего устройства либо воспользуйтесь поиском.
      </p>
                
                              <hr>
<!-- начало вставки -->

<div class="row" style="margin-left: 3px;">
            <?php foreach ($alldevices as $key => $value): ?>
             




      <div class="tab_view_block_names col-lg-2 col-md-3 col-sm-4 col-xs-6">
      

              <table class="table_view table-striped table-bordered table-hover table-condensed" >

              

                <tbody>
                 <tr>
                 <td style="font-size: 0.9em; font-weight: bolder;"><a href="/remont-<?php echo $value['type_devices']?>/<?php echo $value['brand_name']?>/<?php echo $value['slug']?>#st"><?php echo $value['commerc_name'] ?></a></td> 
                 </tr>

                  <tr>
                     <td style="font-size: 0.85em; overflow: hidden; "><a href="/remont-<?php echo $value['type_devices']?>/<?php echo $value['brand_name']?>/<?php echo $value['slug']?>#st"><?php echo $value['oth_names']?></a></td> 
                    </tr>
                    <tr>
                    <td style="font-size: 0.9em; font-weight: bold;">
                        <a href="/remont-<?php echo $value['type_devices']?>/<?php echo $value['brand_name']?>/<?php echo $value['slug']?>#st">Расценки</a>
                    </td> 
                     
                   </tr> 

                   <tr>
                     <td style="font-size: 0.85em">
                         <a href="/remont-<?php echo $value['type_devices']?>/<?php echo $value['brand_name']?>/<?php echo $value['slug']?>/net-zaryadki#st">Не заряжается, доп. инф-я</a>
                     </td>                     
                   </tr>         

                  

                   

  
                    </tbody>
                    </table>

        
        
              
      
        
                        </div> 



                   <?php endforeach ?> 

            
          </div>

  
    
      

       

  
    
  
  

<!-- конец вставки -->


 </div>



 