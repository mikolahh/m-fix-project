<a name="st"></a>
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
<a id="/razemy-zaryadki" itemscope itemtype="http://schema.org/Thing" itemprop="item" href="../../razemy-zaryadki#st">
<span itemprop="name">Все разъемы</span></a>
<meta itemprop="position" content="2" />
</li>

</ol>  


  </nav>

  <?php 


       //Объявляем блок вывода девайсов разъема-аналога
ob_start();
include 'devcon_analog.php';
$include1 = ob_get_contents();ob_end_clean();




   ?>
    
     <div style="width: 99%;">
       <a href="/assets/img/char/<?php echo $slug ?>.jpg" target="blank" ><img src="/assets/img/char/<?php echo $slug ?>.jpg" width="240"  height="180"  alt="фото разъема"></a>
  




<br>



<h1 style="font-size: 1.5em;">Разъем зарядки номер <?php echo $slug ?> используется в следующих устройствах :</h1>






<div class="row" style="margin-left: 1px;">
  
<?php foreach ($devcon as $key => $value): ?>  







      

       <div class="tab_view_block_devcon col-lg-3 col-md-3 col-sm-4 col-xs-6">
      

              <table class="table_view table-striped table-bordered table-hover table-condensed" >

              <thead>
               <tr>
                <th style="text-align: center; font-size: 1em;"><?php echo $value['brand_name'] ?></th>
 
                </tr>
                </thead>
                <tbody>
                 <tr>
                 <td style="font-size: 1.1em;"><?php echo $value['commerc_name'] ?></td>
 
                 </tr>
                  <tr>
                     <td style="font-size: 1em; overflow: hidden; "><?php echo $value['oth_names']?></td> 
                    </tr>

  
                    </tbody>
                    </table>

        
        
              
      
        
                        </div> 

  
<?php endforeach ?>
</div>
<br>

     </div>



    

<?php 

     //Выводим девайсы разъема-аналога

 if (!empty($devcon_analog)) {
  print <<<HERE

$include1

HERE;
 } 


 ?>

 <br>


 <p style="margin-right: 10px; width: 90%;"><a href="/razemy-zaryadki#st">Перейти к списку всех разъемов</a></p>




