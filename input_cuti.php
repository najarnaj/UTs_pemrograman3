<?php
include("koneksi.php");
if (isset($_POST['simpan'])) {
	$query_input_cuti = "insert into input_cuti(nik,nama,jabatan,hak_Cuti)values
	('" . $_POST['nik'] . "',
	 '" . $_POST['nama'] . "',
     '" . $_POST['jabatan'] . "',
     '" . $_POST['hakCuti'] . "')";
	$proses_data =mysqli_query($conn,$query_input_cuti);
if ($proses_data){
		 echo 'SUCCESS';
	 } else {
		 echo mysqli_error();
	 }
}
?>

<form method="POST" action="">
	<table>
		<tr>
			<td>NIK</td>
			<td><input name="nik" type="text"></td>
		</tr>
		<tr>
			<td>NAMA KARYAWAN</td>
			<td><input name="nama" type="text"></td>
		</tr>
		<tr>
			<td>JABATAN KARYAWAN</td>
			<td><input name="jabatan" type="text"></td>
		</tr>
		<tr>
			<td>HAK CUTI KARYAWAN</td>
			<td><input name="hakCuti" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
		<button><a href="viewuts.php">tampilkan data</a></button>
	</table>
</form>