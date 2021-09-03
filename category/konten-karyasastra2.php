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
				<h2>Bumi Manusia</h2>
			<img src="http://jepang.upi.edu/wp-content/uploads/2019/10/resensi3.jpg" class="gambarposting1">
			<ul>
			    <h3>- Identitas Buku</h3>
			</ul>
				<p> Judul Buku      : Bumi Manusia<br>
                    Penulis         : Pramoedya Ananta Toer<br>
                    Penerbit        : Lentera Dipantara<br>
                    Isi             : 535 halaman<br>
                    ISBN            : 979-97312-3-21
                </p>
			<ul>
			    <h3>- Rangkuman Buku</h3>
			</ul>
				<p>Bumi Manusia adalah salah satu novel yang ceritanya mengalir dan di dalamnya mengandung konflik-konflik monumental. Kisah di dalamnya adalah tentang kondisi sosial dengan latar waktu di akhir abad 19 hingga abad 20. Kisah yang diangkat adalah percintaaan warga pribumi dengan seorang gadis Indo yang merupakan keturunan Belanda.</p>
				<p>Minke adalah laki-laki pribumi yang luar biasa. Pasalnya, ia memiliki pola pikir seperti orang-orang Eropa pada umumnya. Di dalam tubuhnya mengalir darah para raja di Pulau Jawa, namun dirinya hampir tidak dikenali lagi sebagai orang Jawa. Postur tubuhnya menggambarkan masyarakat Jawa, akan tetapi pandangan hidup dan pemikirannya setara dengan bangsa Eropa. Ini bukanlah hal yang biasa pada zaman itu. Minke juga sosok pemuda cerdas yang mencintai sastra tidak seperti pemuda lainnya.</p>
				<p>Annelies Mellema, sosok gadis cantik ini digambarkan lebih cantik jika dibandingkan kecantikan Ratu Netherland kala itu, yaitu Ratu Wilhelmina. Ia adalah putri seorang nyai yang lain daripada sosok nyai pada umumnya dan bukanlah seperti gundik yang dianggap menjijikkan oleh masyarakat.
                    Ibunya ini sangat luar biasa karena selain berperan sebagai ibu, beliau juga mampu mengurus berbagai macam pekerjaan setelah suami tidak sahnya yaitu Tuan Mellema menjadi gila. Bahkan, apa pun di sekelilingnya sudah tidak dipedulikan oleh suaminya tersebut.
                    Annelies memutuskan untuk menjadi pribumi seperti halnya ibunya meskipun ayahnya berkebangsaan Belanda. Ia sangat manja dengan ibunya dan sikapnya juga manis. Hal ini sangat berbeda dengan kakaknya, yaitu Robert Mellema. Robert merasa dirinya adalah orang Belanda asli.</p>
                <p>Pada kisah selanjutnya, penulis mulai menunjukkan pentingnya seseorang belajar karena aktivitas tersebut akan mengubah nasib. Contohnya adalah nyai, meskipun tidak bersekolah namun bisa menjadi sosok guru yang sangat hebat untuk siswanya di HBS.
                    Nyai memiliki wawasan dan pengetahuan yang jauh lebih luas daripada guru-guru di sekolah elit tersebut. Semua ini dikarenakan nyai belajar dari pengalaman, buku-buku dan yang paling penting adalah berdasarkan kehidupannya sehari-hari.</p>
                <p>Kisah ditulis dengan kata-kata indah dan puitis yang bertebaran di setiap bagian. Konflik dan permasalahan mulai bermunculan yang digambarkan begitu nyata. Lalu, mulai menceritakan aktivitas sehari-hari Minke yang juga merupakan siswa di HBS.</p>
                <p>Tidak lupa Pramoedya juga menceritakan dengan jelas dan cerdas situasi apa saja yang terjadi dan rutinitas masyarakat di masa tersebut. Suatu hari, Minke diajak Robert Surhof yang notabennya adalah temannya. Mereka berdua akan pergi menuju rumah Wonokromo yang juga temannya. Selama ini Minke sering mendengar gosip mengenai keberadaan suatu keluarga pemilik perusahaan besar yang berdiri di Wonokromo.</p>
                <p>Nyai Ontosoroh, itulah nama panggilan dari orang-orang kampung. Beliau adalah pemilik Perusahaan Boerderij Boeitenzorg. Nyai mempunyai kekuatan sehingga membuat tuannya bertekuk lutut kepada dirinya.
                    Nyai juga memiliki pengawal yang tampak sangat menyeramkan, bernama Darsam. Minke pun ketakutan saat memikirkan akan hal itu. Namun, tiba-tiba berhentilah kereta kuda mereka di depan gerbang rumah yang megah. Kemudian, Minke diajak turun oleh temannya.</p>
                <p>Pikiran Minke berkecamuk, ia bertanya-tanya tentang rumah yang dikunjungi apakah benar milik nyai Ontosoroh. Robert Surhof pun tidak mempedulikan berita tersebut karena ia adalah Belanda tulen dan tidak mau tau dengan apa pun yang diperbincangkan orang pribumi.
                    Kedua pemuda itu masuk ke dalam rumah. Kemudian, mulailah konflik-konflik yang menegangkan dan rumit. Meskipun novel mengandung cerita percintaan, namun penulis tidak mengajarkan para pembacanya untuk bersikap cengeng hanya karena cinta.</p>
                <p>Kehadiran novel seolah-olah membawa semua orang ke masa di mana pemerintah Hindia Belanda menguasai negeri ini. Anda dapat menyaksikan peristiwa yang terjadi dan tentu semakin menambah wawasan.</p>
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
