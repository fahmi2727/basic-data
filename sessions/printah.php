<?php

error_reporting(false);
 session_start();

$psn = $_GET['psn'];
if ($psn == 'save') {
	// Ambil data dari session
 if (isset($_SESSION['tmpnama'])) {
  $tmpnama = $_SESSION['tmpnama'];
 }
 if (isset($_SESSION['tmpalamat'])) {
  $tmpalamat = $_SESSION['tmpalamat'];
 }
 // End ambil data dari session

 // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
 $tmpnama[] = $_POST['nama'];
 $tmpalamat[] = $_POST['alamat'];
 // End script tambah ke array

 // Simpan data array yang baru ke session
 $_SESSION['tmpnama'] = $tmpnama;
 $_SESSION['tmpalamat'] = $tmpalamat;
 // End script simpan ke session
} else {

   unset($_SESSION['tmpnama'][$_GET['id']]);
  unset($_SESSION['tmpalamat'][$_GET['id']]);
 
 echo "afasfa";

}

//header("location: index.php");

?>

