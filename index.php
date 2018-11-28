<?php 
	include 'conn.php';
	include 'conf.php';
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>PDO CRUDSRUD</title>
 	<link rel="stylesheet" type="text/css" href="assets/css/css.css">
 </head>
 <body>
 	<div class="top-gray"></div>
 	<div class="header">
 		<div class="big-logo">Latihan CRUDSRUD</div>
 		<?php include 'menu.php';?>
 	</div>
 	<div class="content">
 		<div class="container">
 			<?php 
 				if (!is_null(get('p'))){
 					switch (get('p')) {
 						case 'Blog':
 							inc('CRUD');
 							break;
 						case 'CRUD':
 						switch (get('m')) {
 							case 'Blog':
 								inc('tampilan/blog/all');
 								break;
 							case 'add':
 								inc('tampilan/blog/add');
 								break;
 							case 'edit':
 								inc('tampilan/blog/edit');
 								break;
 							
 							default:
 								inc('tampilan/blog/all');
 								break;
 						}
 						break;
 					default:
 						inc('Blog');
 						break;
 							
 					}
 				}else{ inc('Blog'); } ?>
 			
 		</div>
 		
 	</div>
 </body>
</html>