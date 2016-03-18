<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE CRUD APPLICATION</title>
	<linkhref="<?php echo base_url();?>style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <divclass="content">
 	<h1>Contoh Insert Update dan Delete</h1>
 	<divclass="paging"><?php echo $pagination;?></div>
 	<divclass="data"><?php echo $table;?></div>
 	<divclass="paging"><?php echo $pagination;?></div>
 	<?php echo anchor('siswa_controller/add/',
 	'Tambah Siswa Baru', array('class'=>'add'));?></div>
</body>
</html>