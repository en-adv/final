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
			<center><h1>Buku Sejarah Terpopuler</h1></center><br>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://tse1.mm.bing.net/th?id=OIP.oDt8xDJQiNo9Ouf7338k1QHaLL&pid=Api&P=0&w=300&h=300" class="gambardepan">
				<br><h2>1. Guns, Germs, and Steel</h2>
				<h3>by Jared Diamond</h3><br>
				Buku ini ditulis oleh Jared Diamond, salah satu professor geografi University of California, Los Angeles. Buku ini membahas mengenai kenapa masyarakat Eropa dan Amerika memiliki kebudayaan yang lebih maju dibandingkan kebudayaan negara lain seperti negara India, Afrika, Amerika Selatan, termasuk salah satunya Indonesia. Kenapa masyarakat Eropa dan Amerika lebih canggih dan modern dibandingkan negara yang lain?<br>
				<a href="konten-sejarah1.php">
				Baca selengkapnya >>>>>
				</a>
			</div>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://tse3.mm.bing.net/th?id=OIP.IfT8u_WRj9vWpqRmaVogzAAAAA&pid=Api&P=0&w=300&h=300" class="gambardepan">
				<br><h2>2. A Little History of the World</h2>
				<h3>by EH Gombrich</h3><br>
				Buku ini ditulis oleh EH Gombrich pada tahun 1935 dan sudah diterjemahkan dalam 18 bahasa termasuk Bahasa Inggris. Buku ini menjelaskan mengenai sejarah manusia dari Zaman Batu sampai Perang Dunia II diantarannya catatan sejarah mengenai topik-topik seperti manusia gua dan penemuannya, kehidupan kuno sepanjang Sungai Nil, Mesopotamia, dan Yunani, pertumbuhan agama, abad kegelapan, zaman kesatriaan, dunia baru, dan perang tiga puluh tahun. Buku ini bisa dibaca untuk segala usia, mudah dipahami, dan disajikan dalam bentuk narasi cerita.<br>
				<a href="konten-sejarah2.php">
				Baca selengkapnya >>>>>
				</a>
			</div>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://tse1.mm.bing.net/th?id=OIP.rSI9S7_sdRvDyTbzfFgYJQHaJ4&pid=Api&P=0&w=300&h=300" class="gambardepan">
				<br><h2>3. Sapiens</h2>
				<h3>by Yuval Noah Harari</h3><br>
				Buku ini ditulis oleh Yuval Noah Harari dan sudah sangat terkenal sejak awal tahun 2018. Buku ini menjelaskan sejarah awal mula adanya manusia hingga sekarang dengan secara ringkas dan mudah dipahami. Buku ini juga menjelaskan mengapa Homo sapiens bisa bertahan dan lebih unggul daripada spesies yang lain. Selain itu, buku ini juga menjelaskan perkembangan manusia yang berawal dari hidup menetap hingga nomaden, asal mula manusia mulai bercocok tanam dan berburu. Buku ini menjelaskan sejarah yang berkaitan dengan biologi, teknologi, sosiologi, dan bermacam-macam bidang ilmu lainnya.<br>
				<a href="konten-sejarah3.php">
				Baca selengkapnya >>>>>
				</a>
			</div>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://tse4.mm.bing.net/th?id=OIP.RPKr25bDid_eli1V0sfsPAHaLj&pid=Api&P=0&w=300&h=300" class="gambardepan">
				<br><h2>4. A Short History of Nearly Everything</h2>
				<h3>by Bill Bryson</h3><br>
				Buku ini ditulis oleh Bill Bryson dan sangat cocok dibaca oleh anak-anak sekolah. Buku ini menjelaskan berbagai macam hal yang dikemas secara ringkas dan mudah dipahami. Buku ini juga menceritakan mengenai ilmu pengetahuan alam seperti awal mula adanya alam semesta seperti bima sakti, tatanan tata surya dan seisinya, teori seleksi alam Darwin hingga beberapa spesies mencapai kepunahan. Menceritakan berbagai ilmuwan yang berkontribusi besar dalam mengembangkan ilmu pengetahuan alam di dunia. Tetapi buku ini belum ada terjemahan dalam Bahasa Indonesia, tetapi kita bisa membacanya dalam versi Bahasa Inggris.<br>
				<a href="konten-sejarah4.php">
				Baca selengkapnya >>>>>
				</a>
			</div>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://tse2.mm.bing.net/th?id=OIP.b7pxKKZBTt4hPsi8lR-d_QHaJV&pid=Api&P=0&w=300&h=300" class="gambardepan">
				<br><h2>5. History Year By Year</h2>
				<h3>published in August 2013</h3><br>
				Buku ini dipublikasikan pada bulan Agustus 2013. Buku ini menceritakan tentang perjalanan awal dari manusia purba hingga manusia modern. Buku ini juga menjelaskan mengenai peristiwa-peristiwa penting dalam suatu abad atau decade tertentu. Kelebihan buku ini adalah cara menyajikan ceritanya dengan berbagai macam ilustrasi gambar berwarna yang mendukung visual pada kejadian tertentu sehingga terlihat tidak membosankan untuk dibaca oleh pemula.<br>
				<a href="konten-sejarah5.php">
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
<?php
