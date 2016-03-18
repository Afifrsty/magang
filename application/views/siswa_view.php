<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE CRUD APPLICATION</title>
   <link href="<?php echo base_url();?>style/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div class="content">
  	<h1><?php echo $title;?></h1>
  	  <div class="data">
  	  	 <table>
  	  	 	<tr>
  	  	 		<td width="30%">ID</td>
  	  	 		<td><?php echo $siswa->id;?></td>
  	  	 	</tr>
  	  	 	<tr>
  	  	 		<td valign="top">Name</td>
  	  	 		<td><?php echo $siswa->name;?></td>
  	  	 	</tr>
  	  	 	<tr>
  	  	 		<td valign="top">Alamat</td>
  	  	 		<td><?php echo $siswa->alamat;?></td>
  	  	 	</tr>
  	  	 	<tr>
  	  	 		<td valign="top">Jenis Kelamin</td>
  	  	 		<td><?php echo ($siswa->jenis_kelamin)=='M'?'Laki-laki':'perempuan';?></td>
  	  	 	</tr>
  	  	 	<tr>
  	  	 		<td valign="top">Tanggal Lahir (dd-mm-yyyy)</td>
  	  	 		<td><?php echo ('Y-m-d'. strtotime($siswa->tanggal_lahir)); ?></td>
  	  	 	</tr>
  	  	 </table>
  	  	</div>
  	  <br/>
  	  <?php echo $link_back;?>
  	 </div>
</body>
</html>