<?php
include ("koneksi.php");
$nama = $_POST['namapembeli'];
$nope = $_POST['nope'];
$tampil = $db->query("SELECT * from user WHERE nope='".$nope."'") or die ($db->error);
 while($data = mysqli_fetch_array($tampil)){
 ?>
 <?php
$_db = mysqli_connect("localhost", "root", "", "sms") or die($db->error);
$status = $data['status_barang'];
$nope = $data['nope'];
$pesan = "Kepada $nama, Status Pesanan Anda : $status. Mohon Menghubungi Costumer Service kami apabila Terjadi Kesalahan.";
$sms=$_db->query("INSERT INTO outbox (DestinationNumber, TextDecoded) VALUES('$nope','$pesan')") or die($_db->error); 
if($sms!=0){
?>
	<script type="text/javascript">alert("Harap Tunggu SMS Dari Kami")</script>
	echo "<script> window.location='cek_status.php';</script>";
<?php
}else{
echo "Gagal";
}
}
?>