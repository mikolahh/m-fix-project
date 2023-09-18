<h2 style="margin-right: 30px; font-size: 1.4em;">    В качестве аналога разъем номер <?php echo $slug ?> может использоваться в следующих устройствах:  </h2>


<div class="row" style="margin-left: 1px;">
	
<?php foreach ($devcon_analog as $key => $value): ?>  
	    

	    <div class="tab_view_block_devcon col-lg-3 col-md-3 col-sm-4 col-xs-6">

	    	
	    	 	 	    
	   

	    <table class="table_view table-striped table-bordered table-hover table-condensed" >

              <thead>
               <tr>
                <th style="text-align: center; font-size: 1.1em; "><?php echo $value['brand_name'] ?></th>
 
                </tr>
                </thead>
                <tbody>
                 <tr>
                 <td style="font-size: 1.1em;"><?php echo $value['commerc_name'] ?></td>
 
                 </tr>
                  <tr>
                     <td style="font-size: 1em;"><?php echo $value['oth_names']?></td> 
                    </tr>

  
                    </tbody>
                    </table>
	    
	  
	    
	       	    
	    
	    	
	    </div> 

	
<?php endforeach ?>
</div>