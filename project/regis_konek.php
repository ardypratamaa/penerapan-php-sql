<?php
    $koneksi = mysqli_connect("localhost","root","","latihan_db") or die('Gagal Terhubung ke Database');

    $nama = $_POST['nama'];
    $email= $_POST['email'];
    $notelp = $_POST['notelp'];
    $keahlian = $_POST['keahlian'];
    $alamat = $_POST['alamat'];
    $query = "INSERT INTO latihan_db VALUES('$nama','$email','$notelp','$keahlian','$alamat')";
    mysqli_query($koneksi, $query);

    echo "Berhasil registrasi!<br>";
    echo "<a href=index.php>Kembali Ke Halaman Utama </a><br>";
?>