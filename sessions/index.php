<!DOCTYPE html>
<html>
<?php
error_reporting(false);
 session_start();
?>
<head>
 </head>
<body>
<div align="center" style="font-family:arial;font-size:30px;">
Program Tambah Data</div>
</br>

<form method="post" action="printah.php?psn=save">
 <table>
<tr>
   <td>Masukkan Nama</td>
   <td>: <input type="text" name="nama"></td>
  </tr>
<tr>
   <td>Masukkan Alamat</td>
   <td>: <input type="text" name="alamat"></td>
  </tr>
<tr>
   <td><input type="submit" name="kirim" value="Kirim"></td>
  </tr>
</table>
</form>
<?php
 
?>
<br>
<table>
<tr>
   <td>Nama</td>
  <td>Alamat</td>
 </tr>
<?php
   // Ambil data dari session
   if (isset($_SESSION['tmpnama'])) {
    $tmpnama = $_SESSION['tmpnama'];
   }
   if (isset($_SESSION['tmpalamat'])) {
    $tmpalamat = $_SESSION['tmpalamat'];
   }
   // End script ambil data
   
  

   // Cetak dengan cara uraikan isi arraynya
   for ($i=0; $i < count($tmpnama); $i++) {
    echo "<tr>";
    echo "<td>".$tmpnama[$i]."</td><td>".$tmpalamat[$i]."<a href='index.php?psn=hps&id=".$i."'>hapus</a></td></tr>";
   }
   // End script urai array
   //session_destroy();
  ?>
</table>
</body>
</html>