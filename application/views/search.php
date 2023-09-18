  <a name="st"></a>
  <div style="width: 95%;">
      
      <h2>Поиск (найдено <?php echo count($search_result); ?>)</h2>



 <div class="row" style="margin-left: 3px;">
    <?php foreach ($search_result as $key => $value): ?>


    



     <div class="tab_view_block_search well col-lg-3 col-md-3 col-sm-4 col-xs-6">
        
         <table class="table-striped table-bordered table-hover table-condensed">

                <tr>
                 <td style="font-size: 1.0em; font-weight: bold;"><a href="/remont-<?php echo $value['type_devices']; ?>/<?php echo $value['brand_name']; ?>/<?php echo $value['slug']; ?>#st"><?php echo $value['brand_name'] ?></a></td>                  
                 </tr>            
              
                
                 <tr>
                 <td style="font-size: 1.0em; font-weight: bold;"><a href="/remont-<?php echo $value['type_devices']; ?>/<?php echo $value['brand_name']; ?>/<?php echo $value['slug']; ?>#st"><?php echo $value['commerc_name'] ?></a></td> 
                 </tr>

                  <tr>
                     <td style="font-size: 0.9em; overflow: hidden; "><a href="/remont-<?php echo $value['type_devices']; ?>/<?php echo $value['brand_name']; ?>/<?php echo $value['slug']; ?>#st"><?php echo $value['oth_names']?></a></td> 
                    </tr>

                    <tr>
                     <td style="font-size: 1.0em; font-weight: bold; overflow: hidden; "><a href="/remont-<?php echo $value['type_devices']; ?>/<?php echo $value['brand_name']; ?>/<?php echo $value['slug']; ?>#st">Расценки</a></td> 
                    </tr>

                    <tr>
                        <td style="font-size: 0.95em; overflow: hidden; "><a href="/remont-<?php echo $value['type_devices'] ?>/<?php echo $value['brand_name'] ?>/<?php echo $value['slug']; ?>/net-zaryadki#st ">Не заряжается, доп. информация.</a></td> 

                    </tr>   
                
                 
  
                    
                    </table>

     </div>    





    
<?php endforeach ?> 

 </div>

  </div>


 






