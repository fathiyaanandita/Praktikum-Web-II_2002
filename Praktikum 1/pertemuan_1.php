<?php
  // Variable user
  $nama = 'fathiya';
  $umur = 19;
  $berat = 67;

  $nama = 'anandita';

  echo 'Nama saya '.$nama.' umur saya '.$umur.' berat saya '.$berat;
  echo "<br />";
  echo "<h1 style='color: salmon'>Nama saya $nama, umur saya $umur, berat saya $berat</h1>";
  echo "<br />";

  // Variable sistem
  // Variable built in php
  echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
  echo "<br />";

  // Variable konstan
  // adalah variable yang tidak bisa diubah nilainya
  define('makanan', 'seblak');
  // define('makanan', 'telur gulung');
  echo '<h1 style="color: brown">'.makanan.'</h1>';
  echo makanan;
?>