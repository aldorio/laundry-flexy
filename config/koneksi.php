<?php 
$hostname = "localhost";
$hostusername = "root";
$hostpassword = "";
$hostdatabase = "laundry_aldo";
$config = mysqli_connect($hostname,$hostusername, $hostpassword,$hostdatabase);
if(!$config){
  echo "Koneksi gagal";
}

?>