<?php 
include "db_connect.php"; 
$Nama_Mhs = $_POST['Nama_Mhs'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Asal_Daerah = $_POST['Asal_Daerah'];
$Jurusan = $_POST['Jurusan']; 
 
$query=mysqli_query($kon, "INSERT INTO tbmahasiswa(Nama_Mhs, Jenis_Kelamin, Asal_Daerah, Jurusan)
VALUES ('$Nama_Mhs', '$Jenis_Kelamin', '$Asal_Daerah', '$Jurusan')")or die (mysql_error()); 
 
if($query) {
?>
<script language="JavaScript">
   document.location='index.php'</script> 
<?php 
} 
?>
