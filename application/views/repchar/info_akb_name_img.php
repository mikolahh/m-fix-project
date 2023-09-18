<div class="row" style="border: solid 2px; border-radius: 3px;">

	<div class="col-md-9" style="margin-top: 20px;">
		<p style="font-size: 1.3em;">
			В <?php echo $type_device_pp ?> используется АКБ <?php echo $batt_name ?>. Для ее замены необходима разборка <?php echo $type_device_rp ?>, что желательно делать в условиях мастерской.

		</p>
		
        

	</div>

	<div class="col-md-3" style="margin-top: 3px; margin-bottom: 3px;">

		<a href="/assets/img/akb/<?php echo $batt_name ?>.jpg"><img src="/assets/img/akb/<?php echo $batt_name ?>.jpg" target="blank" alt="Рисунок АКБ" style="width: 160px; height: 120px;" title = "Нажмите для увеличения: аккумуляторная батарея <?php echo $batt_name ?>"></a>		

	</div>	

</div>
<br>

<div class="row" style="border: solid 2px; border-radius: 3px;">
	
	<h2 class="col-md-7" style="margin-top: 6px;">Замена аккумулятора
		<br>
		<span style="font-size: 0.8em;">(аккумуляторной батареи)</span>
	</h2>


<div class="col-md-5" style="margin-top: 11px;">
	<p>Стоимость без скидки: <?php echo $batt_repair?> руб.</p>
<p>Стоимость со скидкой: <?php echo $batt_repair_disc ?> руб.</p>

</div>


</div>