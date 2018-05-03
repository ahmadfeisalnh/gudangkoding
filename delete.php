			<?php
			include('koneksi.php');
			@session_start();
            $hasil1=$db->query("DELETE FROM tempdetailpembelian WHERE idbeli ='".$_SESSION['beli']."'");
            $hasil2=$db->query("DELETE FROM temppembelian WHERE idbeli ='".$_SESSION['beli']."'");
            if ($hasil1 && $hasil2) {
            	unset($_SESSION['beli']);
            	echo "<script> window.location='index.php';</script>";
            }

            
            ?>