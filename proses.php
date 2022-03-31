<?php 
$makanan = $_POST ["makanan"];
$jumlah = $_POST ["jumlah"];

if($makanan === "1") {
	$nama = "Cumi Asam Manis";
	$harga = 75000;
	
}else if($makanan === "2") {
	$nama = "Cah Kangkung";
	$harga = 25000;
	
}else if($makanan === "3") {
	$nama = "Nasi Timbel Kumplit";
	$harga = 80000;
	
}else if($makanan === "4") {
	$nama = "Ayam Rica-Rica";
	$harga = 120000;
	
}else if($makanan === "5") {
	$nama = "Daging Sapi Lada Hitam";
	$harga = 100000;
	
} 
$total = $jumlah * $harga;
$pajak = $total * 10;
$ppn = $pajak / 100;
?>

<!DOCTYPE html>
<html>
<head>
	<title>5.7.1 REVANI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="wrapper">
	<h1>RUMAH MAKAN</h1>
	<h3>Menu Pilihan Makanan</h3>
		<table border="1px" cellpadding="5" cellspacing="0" width="600px">
			<thead style="background-color: skyblue;">
				<th width="6px">No</th>
				<th>Nama Makanan</th>
				<th>Harga Makanan</th>
				<th>Kode Makanan</th>
			</thead>
			<tbody style="text-align: center;">
				<tr>
					<td>1. </td>
					<td>Cumi Asam Manis</td>
					<td>Rp. 75.000,-</td>
					<td>1</td>
				</tr>
				<tr>
					<td>2. </td>
					<td>Cah Kangkung</td>
					<td>Rp. 25.000,-</td>
					<td>2</td>
				</tr>
				<tr>
					<td>3. </td>
					<td>Nasi Timbel Kumplit</td>
					<td>Rp. 80.000,-</td>
					<td>3</td>
				</tr>
				<tr>
					<td>4. </td>
					<td>Ayam Rica-Rica</td>
					<td>Rp. 120.000,-</td>
					<td>4</td>
				</tr>
				<tr>
					<td>5. </td>
					<td>Daging Sapi Lada Hitam</td>
					<td>Rp. 100.000,-</td>
					<td>5</td>
				</tr>
			</tbody>
		</table>
		<br>
		<hr>
		<br>

	<h2>Pesanan Makanan Anda (<?php echo $nama; ?>) :</h2>
	<p>Harga <?php echo $nama; ?> = Rp. <?php echo $harga; ?></p>
	<p>Total Harga = Rp. <?php echo $total; ?></p>
	<p>PPN 10% = Rp. <?php echo $ppn; ?></p>
	<p>Harus dibayarkan = Rp. <?php echo $total+$ppn; ?></p>

	<form method="POST" action="index.html">
	<table>
		<tr>
			<td colspan="3">
				<input type="submit" name="btn" value="Kembali">
			</td>
		</tr>
	</table>
</form>
</div>
</body>
</html>