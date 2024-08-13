<?php
    $hostname= "localhost";
    $username1= "root";
    $password= "";
    $database= "perpustakaan";

    $koneksi=mysqli_connect ('localhost','root','','perpustakaan');
    if($koneksi){
        echo "";
    }
    else{
        die ("koneksi ke database tidak berhasil").mysqli_connect_error();
    }
?>