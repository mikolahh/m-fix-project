
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
		<loc>https://m-fix.mikola.tech/</loc>
		<lastmod><?php echo $date_item ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.1</priority>
	</url>
	<url>
		<loc>https://m-fix.mikola.tech/remont-telefonov</loc>
		<lastmod><?php echo $date_item ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.1</priority>
	</url>
	<url>
		<loc>https://m-fix.mikola.tech/remont-planshetov</loc>
		<lastmod><?php echo $date_item ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.1</priority>
	</url>	
	<url>
		<loc>https://m-fix.mikola.tech/kontakty</loc>
		<lastmod><?php echo $date_item ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.1</priority>
	</url>	
	<url>
		<loc>https://m-fix.mikola.tech/net-zaryadki</loc>
		<lastmod><?php echo $date_item ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.1</priority>
	</url>
	<url>
		<loc>https://m-fix.mikola.tech/remont-apple</loc>
		<lastmod><?php echo $date_item ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.1</priority>
	</url>
	<url>
		<loc>https://m-fix.mikola.tech/articles</loc>
		<lastmod><?php echo $date_item ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.1</priority>
	</url>	
	<url>
		<loc>https://m-fix.mikola.tech/articles/popadanie-vody-v-telefon</loc>
		<lastmod><?php echo $date_item ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.1</priority>
	</url>	
	<url>
		<loc>https://m-fix.mikola.tech/articles/osobennosti-remonta-iphone</loc>
		<lastmod><?php echo $date_item ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.1</priority>
	</url>
	<?php foreach ($devices_links as $key => $value): ?>
	<url>
		<loc>https://m-fix.mikola.tech/remont-<?php echo $value['type_devices'] ?>/<?php echo $value['brand_name'] ?>/<?php echo $value['slug'] ?></loc>
		<lastmod><?php echo $value['date_item'] ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.4</priority>
	</url>
	<?php endforeach ?>
	<?php foreach ($devices_links as $key => $value): ?>
	<url>
		<loc>https://m-fix.mikola.tech/remont-<?php echo $value['type_devices'] ?>/<?php echo $value['brand_name'] ?>/<?php echo $value['slug'] ?>/net-zaryadki</loc>
		<lastmod><?php echo $value['date_item'] ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.4</priority>
	</url>
	<?php endforeach ?>
	<?php foreach ($parts_links as $key => $value): ?>
	<url>
		<loc>https://m-fix.mikola.tech/parts/<?php echo $value['slug_device'] ?>/<?php echo $value['slug'] ?></loc>
		<lastmod><?php echo $value['date_item'] ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.8</priority>
	</url>
	<?php endforeach ?>
	<?php foreach ($products_links as $key => $value): ?>
	<url>
		<loc>https://m-fix.mikola.tech/products/<?php echo $value['slug_category'] ?>/<?php echo $value['slug'] ?></loc>
		<lastmod><?php echo $value['date_item'] ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.9</priority>
	</url>
	<?php endforeach ?>
</urlset>              	