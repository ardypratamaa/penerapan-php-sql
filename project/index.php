<?php  
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'latihan_db';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die('Gagal Terhubung ke Database');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Project Website</title>
    <link rel="stylesheet" type="text/css" href="style.css"/> 
    <script>

    </script>
</head>
<body>
    <section>
        <!-- navigasi bar -->
        <ul>
          <li><a class="#active" href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#feedback">Feedback</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#register">Register</a></li>
            <!--<li><a> <form class="d-flex ">
            <input type="search" placeholder="Search" aria-label="Search"/>
            <button type="submit"> Search </button>
          </form></a></li> -->
        </ul>
 
        <!--- text --->
        <div class="text-container">
            <p>Selamat datang di,</p>
            <p>Findnet Job's</p>
            <p>Website pendaftaran freelance job
            <br>di indonesia.</p>
            <div class="main">
              <a href="#about"><button class="button">About</button></a>
              <a href="#register"><button class="button">Register</button></a>
            </div>
        </div>
        <!-- model -->
        <img alt="model" class="model" src="img/ilus1.png">  
    </section>
 
    <!-- about -->
    <div id="about" class="about">
        <!--text-->
        <div class="about-text ">
            <p>About</p>
            <hr>
            <div class="text">
              <h><b><li>Tujuan dibuatnya website ini :</li></b></h><br>
              <p>Tujuan dibuatnya website ini adalah memfasilitasi para freelancer agar memperoleh penghasilan tambahan maupun penghasilan utama berdasarkan skill yang dimiliki</p><br>
              <h><b><li>Visi dibuatnya website ini :</li></b></h><br>
              <p>- Menambah lapangan pekerjaan part time/tetap bagi seluruh freelancer</p>
              <p>- Menambah pengalaman bagi freelancer</p><br>
              <h><b><li>Misi dibuatnya website ini :</li></b></h><br>
              <p>- Sarana pekerjaan untuk menambah pengalaman</p>
              <p>- Koneksi saling menguntungkan </p><br>
            </div>
        </div>
    </div>
     
    <!--feedback-->
    <div id="feedback" class="feedback">
        <!--text-->
        <div class="feedback-text">
            <p >Feedback</p>
            <hr>
            <form action="feed_konek.php" method="post">
              <label>Username</label>
              <input type="text" name="username" value="">
              <label>Feedback anda</label>
              <input type="text" name="feedback" value="">
              <div class="justify-content-center ">
                <label>Jenis Kelamin</label>
                <input type="radio" name="jenkel" value="Pria">Pria
                <input type="radio" name="jenkel" value="Wanita">Wanita
              </div>
              <input type="submit" value="Submit">
            </form>
        </div>

        <div class="feedback-col">
            <div class="feedback-1">
                <img src="img/ava1.png">
                <div>
                    <p>Kurangnya job yang disediakan, kedepannya agar ditambah lebih banyak.</p>
                    <h3>@Mactavish</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
 
            <div class="feedback-2">
                <img src="img/ava2.png">
                <div>
                    <?php
                      $username = ['username'];
                      $feedback = ['feedback'];
                    ?>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>

    <div id="register" class="register">
          <!--text-->
          <div class="register-text ">
              <p>Register</p>
              <hr>
              <div class="container">
              <form action="regis_konek.php" method="post">
                <div class="row">
                  <div class="col-25">
                    <label for="nama">Nama Anda</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="nama" name="nama" placeholder="Nama anda...">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="email">Email</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="email" name="email" placeholder="Email..">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="notelp">No Telp</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="notelp" name="notelp" placeholder="No Telp...">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="keahlian">Keahlian</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="keahlian" name="keahlian" placeholder="Keahlian...">
                  </div>
                </div>
              
                <div class="row">
                  <div class="col-25">
                    <label for="alamat">Alamat</label>
                  </div>
              
                  <div class="col-75">
                    <textarea id="alamat" name="alamat" placeholder="Alamat..." style="height:200px"></textarea>
                  </div>
                </div>
                <div class="row">
                  <input type="submit" name="submit" value="Submit">
                </div>
                </form>
              </div>
          </div>
    </div>

  

    <!--news-->
    <div id="news" class="news">
      <!--text-->
      <div class="news-text ">
        <p>News</p>
          <hr>   
      </div>
      <div class="ber1">
        <img src="img/ber2.jpeg">
        <h3>Berita terkini</h3>      
        <p>Presiden jokowi mengungkapkan indonesia membutuhkan sembilan juta talenta digital dalam 15 tahun ke depan untuk...<a href="https://m.antaranews.com/berita/1646162/presiden-jokowi-indonesia-butuh-9-juta-talenta-digital">Selengkapnya</a></p>
      </div>
    </div>
  </div>
 
    <!-- footer -->
    <footer>
        <p>Pemrograman Web</p>
        <p class="copyright">Hsn x Ard</p>
    </footer>
</body>
</html>