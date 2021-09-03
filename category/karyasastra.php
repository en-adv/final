
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
			<center><h1>Buku Karya Sastra Terpopuler</h1></center><br>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://inc.mizanstore.com/aassets/img/com_cart/produk/covGRM-197.jpg" class="gambardepan">
				<br><h2>1. Hujan Bulan Juni</h2>
				<h3>by Sapardi Djoko Damono</h3><br>
				Hujan Bulan Juni adalah kumpulan puisi karya Sapardi Djoko Damono yang diterbitkan Grasindo pada 1994. Kumpulan puisi ini memuat 102 puisi karya Sapardi yang ditulis tahun 1964 hingga 1994. Beberapa puisi dalam kumpulan ini merupakan penerbitan ulang dari puisi-puisi yang pernah terbit dalam buku Duka-Mu Abadi (1969), Mata Pisau (1974), Akuarium (1974), dan Perahu Kertas (1984). Judul kumpulan puisi ini diambil dari puisi yang ditulis Sapardi tahun 1989. Saat ini, Hujan Bulan Juni sudah diterjemahkan ke bahasa Inggris, Jepang, Arab, dan Mandarin.<br>
				<a href="konten-karyasastra1.php">
				Baca selengkapnya >>>>>
				</a>
			</div>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="http://jepang.upi.edu/wp-content/uploads/2019/10/resensi3.jpg" class="gambardepan">
				<br><h2>2. Bumi Manusia</h2>
				<h3>by Pramoedya Ananta Toer</h3><br>
				Bumi Manusia adalah buku pertama dari Tetralogi Buru karya Pramoedya Ananta Toer yang pertama kali diterbitkan oleh Hasta Mitra pada tahun 1980. Buku ini ditulis Pramoedya Ananta Toer ketika masih mendekam di Pulau Buru.<br>
				<a href="konten-karyasastra2.php">
				Baca selengkapnya >>>>>
				</a>
			</div>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://www.bukukita.com/babacms/displaybuku/113992_f.jpg" class="gambardepan">
				<br><h2>3. Tenggelamnya Kapal van der Wijck</h2>
				<h3>by Hamka</h3><br>
				Tenggelamnya Kapal van der Wijck adalah sebuah novel yang ditulis oleh Haji Abdul Malik Karim Amrullah atau lebih dikenal dengan nama Hamka. Novel ini mengisahkan persoalan adat yang berlaku di Minangkabau dan perbedaan latar belakang sosial yang menghalangi hubungan cinta sepasang kekasih hingga berakhir dengan kematian.<br>
				<a href="konten-karyasastra3.php">
				Baca selengkapnya >>>>>
				</a>
			</div>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://inc.mizanstore.com/aassets/img/com_cart/produk/pride-and-prejudice-republish.jpg" class="gambardepan">
				<br><h2>4. Pride and Prejudice</h2>
				<h3>by Jane Austen</h3><br>
				Pride and Prejudice adalah sebuah novel karangan Jane Austen yang dipublikasikan pada 28 Januari 1813. Novel ini menceritakan tentang kisah cinta kelas menengah-atas keluarga Inggris di akhir abad ke-19. Novel ini berisi deskripsi dari peristiwa seputar kehidupan tokoh utamanya, Elizabeth Bennet, yang tinggal di Longbourn, Inggris. Elizabeth digambarkan sebagai gadis yang periang, sopan, serta memiliki kecerdasan tajam dan menolak untuk diintimidasi oleh siapapun.<br>
				<a href="konten-karyasastra4.php">
				Baca selengkapnya >>>>>
				</a>
			</div>
			<div class="isiposting">
				<!--menampilkan gambar-->
				<img src="https://media.karousell.com/media/photos/products/2018/10/14/ebook_george_orwell__1984_1539491850_8af0afd6_progressive.jpg" class="gambardepan">
				<br><h2>5. Nineteen Eighty-Four</h2>
				<h3>by George Orwell</h3><br>
				Nineteen Eighty-Four atau 1984 adalah buku karya George Orwell yang diterbitkan pada tahun 1949 dan sebagian besar ditulis pada tahun 1948. Buku ini menceritakan visi Orwell mengenai keadaan di dunia pada tahun 1984, dalam masa kekuasaan suatu rezim yang mengamati setiap tingkah laku warganegaranya sampai tidak ada satu tempatpun yang lolos dari pengamatan, termasuk kamar tidur sendiri. Karya ini terinspirasi dari Senate House di London yang adalah kantor administratif Universitas London.<br>
				<a href="konten-karyasastra5.php">
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
