<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

    $conn = mysqli_connect("localhost","root","","jurnal_modul3");
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya

    if ($conn ->connect_error){
        die("". $conn->connect_error);
    }

// 
?>