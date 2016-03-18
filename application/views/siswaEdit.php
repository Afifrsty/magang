<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>SIMPLE CRUD APPLICATION</title>
<link href="<?php echo base_url();?>style/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<div class="content">
	<h1><?php echo $title;?></h1>
	<?php echo $message;?>
	<?php echo validation_errors();?>
	<?php echo form_open($action);?>
	<form method="post" action="<?php echo base_url();?>controller/siswa_controller.php">
	<div class="data">
		<table>
		<tr>
		<td width="30%">ID</td>
		<td><input type="text" name="id" disabled="disable" class="text" value="<?php echo(isset($siswa['id']))?$siswa['id']:'';?>"/></td>
		<input type="hidden" name="id" value="<?php echo(isset($siswa['id']))?$siswa['id']:'';?>"/>
		</tr>
		
		<tr>
		<td valign="top">Nama<span style="color:red;">*</span></td>
		<td><input type="text" name="nama" class="text" value="<?php echo(set_value('nama'))?set_value('nama'):$siswa['nama'];?>"/>
		<?php echo form_error('nama');?></td>
		</tr>
		
		<tr>
		<td valign="top">Alamat</td>
		<td><input type="text" name="alamat" class="text" value="<?php echo set_value('alamat')?set_value('alamat'):$siswa['alamat'];?>"/>
		<?php echo form_error('alamat');?></td>
		</tr>
		
		<tr>
		<td valign="top">Jenis Kelamin<span style="color:red;">*</span></td>
		<td><input type="radio" name="jenis_kelamin" value="M"<?php echo set_radio('jenis_kelamin','M',TRUE);?>/> Laki-Laki
		<input type="radio" name="jenis_kelamin" value="F"<?php echo set_radio('jenis_kelamin','F');?>/> Perempuan
		<?php echo form_error('jenis_kelamin');?></td>
		</tr>
		
		<tr>
		<td valign="top">Tanggal Lahir (dd-mm-yyyy)<span style="color:red;">*</span></td>
		<td><input type="text" name="tanggal_lahir" class="text" value="<?php echo(set_value('tanggal_lahir'))?set_value('tanggal_lahir'):$siswa['tanggal_lahir'];?>"/>
		<?php echo form_error('tanggal_lahir');?></td>
		</tr>
		
		<tr>
		<td>&nbsp;</td>
		<td><input type="submit" value="Save"/></td>
		</tr>
		
		</table>
		</div>
		</form>
		<br/>
		<?php echo $link_back;?>
		</div>
</body>
</html>