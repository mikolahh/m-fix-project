<a name="st"></a>
<br>

<h2 style="font-size: 1.5em; font-weight: bold; ">Комплектующие:</h2>

<ul>

<?php foreach ($parts_item as $key => $value): ?>


	
		<li style="text-align: left;"><h3 style="font-size: 1.2em; font-weight: bold; margin-top: 2px; margin-bottom: 2px;"><a style="text-decoration: none;" href="/parts/<?php echo $value['slug_device'] ?>/<?php echo $value['slug'] ?>#st"><span style="color: black;"><?php echo $value['name_h1'] ?></span><span style="font-size: 0.8em; color: black;"> (<?php echo $value['id']; ?><?php echo $value['seller'] ?>)</span></a></h3>
			
		</li>	

	
	
<?php endforeach ?>
</ul>