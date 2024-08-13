<?php
if($_POST){
    $nama_buku=$_POST['nama_buku'];
    $pengarang=$_POST['pengarang'];
    $deskripsi=$_POST['deskripsi'];
    $foto=$_POST['foto'];
   
    if(empty($nama_buku)){
        echo "<script>alert('id buku  tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } elseif(empty($pengarang)){
        echo "<script>alert('nama buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } elseif(empty($deskripsi)){
        echo "<script>alert('pengarang tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } elseif (empty($foto)) {
        echo "<script>alert('foto tidak boleh kosong');location.href='tambah_buku.php';</script>";
    }else {
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"insert into buku (id_buku,nama_buku, pengarang,deskripsi,foto) value ('".$id_buku."','".$nama_buku."','".$pengarang."','".$deskripsi."','".$foto."')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses menambahkan buku');location.href='tambah_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan buku');location.href='tambah_buku.php';</script>";
        }
    }
}
?>