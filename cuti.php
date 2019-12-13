<?php
include('koneksi.php');
$TampilData=mysqli_query($conn,"select * from input_cuti");
?>

<table border='1'>
	<tr>
		<td>NIK</td>
		<td>NAMA</td>
		<td>JABATAN</td>
		<td>CUTI</td>
	</tr>

<?php while($cuti=mysqli_fetch_array($TampilData)) { ?>
		<tr>
			<td><?php echo $cuti['NIK']; ?></td>
			<td><?php echo $cuti['NAMA']; ?></td>
			<td><?php echo $cuti['JABATAN']; ?></td>
			<td><?php echo $cuti['HAK_CUTI']; ?></td>
		</tr>
	<?php } ?>
</table>