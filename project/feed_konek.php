  <?php  
    $koneksi = mysqli_connect("localhost","root","","latihan_db") or die('Gagal Terhubung ke Database');
    
    $username = $_POST['username'];
    $feedback = $_POST['feedback'];
    $jenkel = $_POST['jenkel'];
    $query2 = "INSERT INTO feedback VALUES('$username','$jenkel','$feedback')";
    mysqli_query($koneksi, $query2);

    echo "Feedback telah dikirim<br>";
    echo "<a href=index.php>Kembali Ke Halaman Utama </a><br>";
?>