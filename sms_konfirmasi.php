<?php
include ("koneksi.php");
$nama = $_POST['namapembeli'];
$nope = $_POST['nope'];
$tampil = $db->query("SELECT * from user WHERE nope='".$nope."'") or die ($db->error);
 while($data = mysqli_fetch_assoc($tampil)){
 ?>
 <?php
$_db = mysqli_connect("localhost", "root", "", "sms") or die($db->error);
$status = $data['status_barang'];
$nope = $data['nope'];
$pesan = "Terima kasih telah berbelanja di Amelia Roti $nama. Biaya dapat dikirimkan ke rekening kami Bank BRI dengan nomer rekening 123-234-56347-8 atas nama Amelia Roti. Segera kirimkan bukti pembayaran melalui email kami: ameliaroti@gmail.com <br>*catatan: Harap mengirim bukti pembayaran kurang dari 2jam apabila melewati batas waktu pesanan kami anggap batal.";
$sms=$_db->query("INSERT INTO outbox (DestinationNumber, TextDecoded) VALUES('$nope','$pesan')") or die($_db->error); 
if($sms!=0){
?>
	<script type="text/javascript">alert("Harap Tunggu SMS Konfirmasi Dari Kami")</script>
	echo "<script> window.location='index.php';</script>";
<?php
}else{
echo "Gagal";
}
}
?>