<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" rel="stylesheet" crossorigin="anonymous">
<title></title>
</head>
<body>
    <h3> Tambah siswa </h3>
    <form action= "proses_tambah_siswa.php" method="post">
        Nama Siswa:
        <input type="text" name="nama_siswa" value="" class="form-control">
        Tanggal Lahir:
        <input type="date" name="tanggal_lahir" value="" class="form-control">
        Gender:
        <select name= "gender" class="form-control">
            <option></option>
            <option value= "L">laki-laki</option>
            <option value= "p">perempuan</option>
        </select>
        Alamat:
        <textarea name="alamat" class="form-control" rows="5"></textarea>
        Kelas:
        <select name="id_kelas" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_kelas=mysqli_query($koneksi, "select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                echo'<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
            }
            ?>
        </select>
        Username:
        <input type="text" name="username" value="" class="form-control">
        Password:
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="tambah siswa" class= "btn btn-primary">
    </form>
</body>
</html>