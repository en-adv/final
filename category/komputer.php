<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../style_index.css" />
    
    <title>Library Information System</title>
  </head>
  <body>
	  <div class="container-fluid"style="padding: 0px;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top "style=" box-shadow:  0px 2px 20px #ffa60073;">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Perpustakaan_Nasional_Republik_Indonesia_insignia.svg" alt="" width="60" height="60" class="d-inline-block align-text-top" />
          <h3>MeBrainry.</h3>
          <h5>Library Information System</h5>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php?p=beranda">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php?p=contact-us">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Data </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="../index.php?p=anggota">Data Anggota</a></li>
                <li><a class="dropdown-item" href="../index.php?p=buku">Data Buku</a></li>
                <li><a class="dropdown-item" href="../index.php?p=transaksi">Transaksi Peminjaman</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Category </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                <li><a class="dropdown-item" href="komputer.php">Ilmu Komputer</a></li>
                <li><a class="dropdown-item" href="karyasastra.php">Karya Sastra</a></li>
              </ul>
            </li>
          </ul>
        </div>
		</div>
    
    </nav>
    <!-- End Navbar -->

    <!-- Line -->
  
    <!-- End Line -->


    <!-- SideBar -->
    <div class="sidebar container-fluid">
      <div class="row flex-nowrap" >
        <div class="col-auto col-md-3  col-xl-2 px-sm-2 px-0 " style=" z-index: 2; box-shadow:  1px 0px 5px #ffa60073; ">
          <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
          <div class="dropdown pb-4 drop mb-3">
              <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../Image/face.svg" alt="hugenerd" width="30" height="30" class="rounded-circle" />
                <span class="d-none d-sm-inline mx-1"> <span class="fs-5 d-sm-inline" id="nama-user">Hai Admin !!</span></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-white text-small shadow">
                <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
              </ul>
            </div>  
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
              <li class="nav-item">
                <a href="../event.php" class="nav-link align-middle px-0"> <img src="../image/event.svg" alt="" /> <span class="ms-1 d-none d-sm-inline">Event</span> </a>
              </li>
              <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle"> <img src="../image/Books.svg" alt="" /> <span class="ms-1 d-none d-sm-inline">Popular Writer</span> </a>
                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                  <li class="w-100">
                    <a href="https://id.wikipedia.org/wiki/Andrea_Hirata" class="nav-link px-0"> <span class="d-none d-sm-inline">Andrea Hirata</span> </a>
                  </li>
                  <li>
                    <a href="https://id.wikipedia.org/wiki/Tere_Liye_(penulis)" class="nav-link px-0"> <span class="d-none d-sm-inline">Tere Liye</span> </a>
                  </li>
                  <li>
                    <a href="https://id.wikipedia.org/wiki/Pramoedya_Ananta_Toer" class="nav-link px-0"> <span class="d-none d-sm-inline">Pramoedya Ananta</span> </a>
                  </li>
                  <li>
                    <a href="https://www.goodreads.com/author/show/8269949.Haidar_Musyafa" class="nav-link px-0"> <span class="d-none d-sm-inline">Haidar Musyafa</span> </a>
                  </li>
                  <li>
                    <a href="https://id.wikipedia.org/wiki/William_Shakespeare" class="nav-link px-0"> <span class="d-none d-sm-inline">William Shakespeare</span> </a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle"> <img src="../image/Facility.svg" alt=""></i> <span class="ms-1 d-none d-sm-inline">History Visualisation</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                  <li class="w-100">
                    <a href="http://pameran.perpusnas.go.id/visualisasi-sejarah-perpusnas/" class="nav-link px-0"> <span class="d-none d-sm-inline">Perpusnas</span> </a>
                  </li>
                  <li>
                    <a href="http://pameran.perpusnas.go.id/visualisasi-sejarah-perpustakaan-di-indonesia/" class="nav-link px-0"> <span class="d-none d-sm-inline">Perpustakaan di Indonesia</span> </a>
                  </li>
                  <li>
                    <a href="http://pameran.perpusnas.go.id/visualisasi-indonesia-dalam-peta-dari-masa-ke-masa/" class="nav-link px-0"> <span class="d-none d-sm-inline">Indonesia Dalam Peta Dari Masa Ke Masa</span> </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle"> <img src="../image/cam.svg" alt=""> <span class="ms-1 d-none d-sm-inline">Activity</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                  <li class="w-100">
                    <a href="https://www.perpusnas.go.id/news-photo.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Berita Foto</span></a>
                  </li>
                  <li>
                    <a href="https://www.perpusnas.go.id/video.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Berita Video</span></a>
                  </li>
                  <li>
                    <a href="https://www.perpusnas.go.id/agenda.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Agenda</span></a>
                  </li>
                  <li>
                    <a href="https://www.perpusnas.go.id/directory.php?lang=id&id=Hari%20Penting" class="nav-link px-0"> <span class="d-none d-sm-inline">Hari Penting</span></a>
                  </li>
                  <li>
                    <a href="https://www.perpusnas.go.id/news.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Artikel</span></a>
                  </li>
                </ul>
              </li>
              
            </ul>
            <hr />
            
          </div>
        </div>
		<div id="isi">
			<center><h1>Rekomendasi Buku Komputer (Programmer)</h1></center><br>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://cf.shopee.co.id/file/d80d5d940d54b081eca76ca7afa568db" class="gambardepan">
				<br><h2>1. The Pragmatic Programmer</h2>
				<h3>by David Thomas, Andrew Hunt</h3><br>
				Isi buku ini memang lebih umum dan tidak terlalu spesifik, tetapi kondisi ini tidak membuatnya kehilangan sisi informatifnya. Anda bakal diajak memahami berbagai bahasa pemrograman dan informasi menarik lainnya. Jika diibaratkan sebagai sebuah novel, buku ini adalah sebuah prolog dalam dunia programming sebelum Anda mempelajari materi yang lebih rumit. Setelah membaca buku ini, Anda pun akan lebih memahami bagaimana coding sederhana tercipta. <br>
				<a href="konten-komputer1.php">
				Baca selengkapnya >>>>>
				</a>
			</div>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://cf.shopee.co.id/file/b663bf1e846ec11468470e9ff9e8dd0b" class="gambardepan">
				<br><h2>2. Dasar Pemrograman Python 3 + Cd</h2>
				<h3>by Abdul Kadir</h3><br>
				Buku ini memuat berbagai topik, seperti pembuatan kelas dan obyek penanganan file, penanganan eksepsi, instalasi interpreter Python, dan masih banyak lagi. Selain itu, produk ini juga dilengkapi dengan CD sehingga proses belajar makin interaktif. <br>
				<a href="konten-komputer2.php">
				Baca selengkapnya >>>>>
				</a>
			</div>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://images.tokopedia.net/img/cache/700/product-1/2017/9/25/14481426/14481426_17944204-f3c8-4aaf-adc8-fba14017f359_600_894.jpg" class="gambardepan">
				<br><h2>3. The Mythical Man-Month</h2>
				<h3>by Frederick P. Brooks Jr.</h3><br>
				Buku ini banyak berbicara tentang manajemen proyek. Jadi, Anda berkesempatan untuk belajar dari kesalahan ataupun kegagalan. Jika suatu saat Anda bergabung dalam organisasi atau tim proyek, Anda sudah tidak perlu kebingungan lain untuk mengelolanya. Selain itu, buku ini juga cocok untuk Anda yang ingin belajar tentang leadership dalam dunia programming. <br>
				<a href="konten-komputer3.php">
				Baca selengkapnya >>>>>
				</a>
			</div>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://images.tokopedia.net/img/cache/700/product-1/2017/8/8/14481426/14481426_4254c60e-f548-45ea-b1e8-f03387cbda55_444_500.jpg" class="gambardepan">
				<br><h2>4. Algorithms</h2>
				<h3>by Robert Sedgewick, Kevin Wayne</h3><br>
				Tak peduli apakah Anda programmer pemula ataupun expert, algoritma akan selalu menjadi persoalan yang sulit untuk dipahami. Saking sulitnya, programmer yang sudah berjibaku pada suatu proyek hingga berbulan-bulan sekalipun, ada kemungkinan mereka belum mengetahui algoritma dari proyek yang dikerjakannya, lho. Hal ini menunjukkan seberapa rumit dan kompleksnya algoritma. <br>
				<a href="konten-komputer4.php">
				Baca selengkapnya >>>>>
				</a>
			</div>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://cf.shopee.co.id/file/e6120cf3ef743c669ce5e8e6b351c17a" class="gambardepan">
				<br><h2>5. The Self-Taught Programmer</h2>
				<h3>by Cory Althoff</h3><br>
				The Self-Taught Programmer adalah buku untuk programmer pemula yang ingin learn programming from the scratch. Pasalnya, buku ini mengulas berbagai topik penting, seperti Python, fundamental programming, dasar algoritma, dan lainnya. Bonusnya, buku ini juga memuat tips untuk wawancara kerja.<br>
				<a href="konten-komputer5.php">
				Baca selengkapnya >>>>>
				</a>
			</div>
		</div>
		
			
	</div>
	
	</div>

    <!-- End Line -->
	<div id="footer">
		<h3>&copy 2021 Sistem Informasi Perpustakaan</h3>
		<h4>Made By: Kelompok 2 </h4>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
