<?php
switch($jenis){

  // Modul admin
  case "Home"; include("home.php"); break;
  case "Produk Hukum"; include("phukum/produkhukum.php"); break;
  case "Update Produk"; include("phukum/update_produkhukum.php"); break;
  
}

?>
