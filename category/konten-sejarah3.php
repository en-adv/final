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
			<div class="isipostingall">
				<h2>Sapiens</h2>
			<img src="https://tse1.mm.bing.net/th?id=OIP.rSI9S7_sdRvDyTbzfFgYJQHaJ4&pid=Api&P=0&w=300&h=300" class="gambarposting1">
			<ul>
			    <h3>- Identitas Buku</h3>
			</ul>
				<p> Judul           : Sapiens - A Brief History of Humankind<br>
                    Jenis Buku      : Non Fiksi - Sejarah<br>
                    Penulis         : Yuval Noah Harari<br>
                    Penerbit        : Vintage Publishing<br>
                    Tahun Terbit    : 2015<br>
                    Jumlah Halaman  : 512 halaman<br>
                    Dimensi Buku    : 12.90 x 19.70 x 4.10 cm<br>
                    ISBN            : 9780099590088</p>
			<ul>
			    <h3>- Sinopsis Buku</h3>
			</ul>
				<p>Pada dasarnya buku ini terbagi atas 4 bagian besar: (1) Revolusi Kognitif, (2) Revolusi Agrikultur, (3) Penyatuan Manusia dan (4) Revolusi Saintifik. Sejarah manusia telah dibentuk oleh tiga revolusi besar: Revolusi Kognitif (70.000 tahun yang lalu), Revolusi Pertanian (10.000 tahun yang lalu), dan Revolusi Ilmiah (500 tahun yang lalu). </p>
				<p>Revolusi-revolusi ini telah memberdayakan manusia untuk melakukan sesuatu yang belum pernah dilakukan dalam bentuk kehidupan lain, yaitu menciptakan dan menghubungkan di sekitar ide-ide yang secara fisik tidak ada (pikirkan agama, kapitalisme, dan politik). "Mitos" bersama ini telah memungkinkan manusia untuk mengambil alih dunia dan menempatkan umat manusia di ambang mengatasi kekuatan seleksi alam.</p>
				<p>Sekiranya enam juta tahun yang lalu, spesies manusia dinyatakan tidak ada. Sebuah kalimat di dalam buku seperti, "Seekor kera betina memiliki dua anak perempuan. Yang satu menjadi nenek moyang semua simpanse, yang lainnya adalah nenek kita sendiri." Menandakan bahwa berbagai macam spesies manusia: sapiens, erectus, dan neanderthalensis berevolusi dari tekanan evolusioner seperti spesies lainnya.</p>
				<p>Mengapa sapiens bertahan dan berkembang? Karakteristik khusus apa yang memungkinkan spesies tersebut mendominasi planet ini sepenuhnya seperti yang kita lakukan saat ini? Jawabannya adalah dengan penguasaan senjata dan api yang memungkinkan kita untuk berburu, memasak makanan, dan untuk mengontrol lingkungan (terutama dengan membakar hutan sebagai senjata melawan predator). Pada saat itu, semua spesies manusia menikmati teknologi ini. Itu adalah otak besar Homo sapiens, yang hanya berevolusi 150.000 tahun yang lalu, yang memungkinkan kita menaklukkan planet ini, melenyapkan semua spesies manusia lainnya, dan mengendalikan bumi.</p>
                <ul>
			    <h3>- Kelebihan</h3>
			</ul>
				<p>Sapiens: Sejarah Singkat Umat Manusia adalah salah satu buku paling informatif dan menarik yang pernah saya baca. Buku ini telah mengubah cara saya memandang sesuatu dan telah menginspirasi banyak orang lain yang saya kenal, melalui penulisan cerita dan fakta yang luar biasa. Buku ini harus menjadi model untuk semua buku lain yang berbicara tentang antropologi karena meskipun kita tidak mau mengakuinya, kita serakah dan egois dan menghancurkan hampir semua fauna di dunia, tetapi kita mampu melakukan hal-hal hebat juga.</p>
				<p>Kita bisa menciptakan mitos dan cerita yang akan bertahan puluhan ribu tahun. Kita bisa bersatu dan hidup bersama dengan kecepatan dan koordinasi yang luar biasa seperti yang belum pernah dilihat dunia sebelumnya. Ini adalah kisah jenis kita dan permulaannya sejauh atau lebih penting daripada masa kini dan masa depan.</p>
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
