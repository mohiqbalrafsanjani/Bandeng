<?php

$bd1=$_SESSION['bandeng1'];
$bd2=$_SESSION['bandeng2'];
$bd3=$_SESSION['bandeng3'];
$bd4=$_SESSION['bandeng4'];
$bd5=$_SESSION['bandeng5'];

$total1=0;
$total2=0;
$total3=0;
$total4=0;
$total5=0;

?>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>
Daftar Keranjang Belanja
</h1>
<table border="1" width="800">
<tr align="center" bgcolor="orange">
<td>Produk</td>
<td>Harga satuan</td>
<td>jumlah</td>
<td>total</td>
<td>aksi</td>
</tr>

<?php
if ($cart>0) {
	
if ($bd1>0) {
$id=0;
$total1=$bd1*130000;	
	echo "<tr>
<td>Bandeng Duri Lunak Vacuum Kering (Tanggung)</td>
<td>Rp.130000</td>
<td>$bd1</td>
<td>Rp.$total1</td>
<td>
<a href='index.php?page=8&id=$id'><button value='hapus' name='hapus' class='button2'>Hapus</button></a>
</td>
</tr>";

}

if ($bd2>0) {
$id=1;
$total2=$bd2*110000;	
	echo "<tr>
<td>Bandeng Duri Lunak Vacuum Basah (Tanggung)</td>
<td>Rp.110000</td>
<td>$bd2</td>
<td>Rp.$total2</td>
<td>
<a href='index.php?page=8&id=$id'><button value='hapus' name='hapus' class='button2'>Hapus</button></a>
</td>
</tr>";
}

if ($bd3>0) {
$id=2;
$total3=$bd3*50000;	
	echo "<tr>
<td>Bandeng Teriyaki</td>
<td>Rp.50000</td>
<td>$bd3</td>
<td>Rp.$total3</td>
<td>
<a href='index.php?page=8&id=$id'><button value='hapus' name='hapus' class='button2'>Hapus</button></a>
</td>
</tr>";
}

if ($bd4>0) {
$id=3;
$total4=$bd4*170000;	
	echo "<tr>
<td>Bandeng Dalam Sangkar Vacuum</td>
<td>Rp.170000</td>
<td>$bd4</td>
<td>Rp.$total4</td>
<td>
<a href='index.php?page=8&id=$id'><button value='hapus' name='hapus' class='button2'>Hapus</button></a>
</td>
</tr>";
}

if ($bd5>0) {
$id=4;
$total5=$bd5*170000;	
	echo "<tr>
<td>Bandeng Otak Otak Vacuum</td>
<td>Rp.170000</td>
<td>$bd5</td>
<td>Rp.$total5</td>
<td>
<a href='index.php?page=8&id=$id'><button value='hapus' name='hapus' class='button2'>Hapus</button></a>
</td>
</tr>";
}

}else{

	echo "<script language=javascript>
alert('Maaf Anda tidak bisa mengakses halaman ini bila Keranjang Belanja anda masih kosong, silahkan berbelanja kembali');
document.location='index.php?page=0';
</script>";
}

$totalcart=$total1+$total2+$total3+$total4+$total5;
echo "<tr bgcolor='orange'>
	<td colspan='3'>Total Bayar</td>
	<td colspan='2'>Rp.$totalcart</td>
	</tr>";
?>

</table>

<a href="index.php?page=10"><button class="button2" style="float:right;margin:50px;">Lanjutkan Proses Pengiriman</button></a>
<a href="index.php?page=9"><button class="button2" style="float:right;margin:50px;">Edit Keranjang Belanja</button></a>
<a href='index.php?page=0'><button class='button2' style="float:right;margin:50px;">Lihat Produk Lainnya</button></a>
</center>
</body>
</html>