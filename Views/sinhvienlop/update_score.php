<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include 'Views/home.php' ?>
<div class="danhsach">
<h3>DANH SACH SINH VIEN</h3>
<table>
	<thead>
		<tr>
			<th>STT</th>
			<th>Ten sinh vien</th>
			<th>Diem</th>
			<th>Hanh dong</th>
		</tr>
	</thead>
	<tbody>
	<?php
	     	$stt=1;
		    foreach ( $data as $value ){
		?>
		<tr>
			<td><?php echo $stt ?></td>
			<td><?php echo $value['masv'] ?></td>
			<td><?php echo $value['diem'] ?></td>
		</tr>
		<?php
		  $stt++;
	     }
     
		?>
   </tbody>
</table>	
</div>
</body>
</html>