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
				<h2>Nineteen Eighty-Four</h2>
			<img src="https://media.karousell.com/media/photos/products/2018/10/14/ebook_george_orwell__1984_1539491850_8af0afd6_progressive.jpg" class="gambarposting1">
			<ul>
			    <h3>- Identitas Buku</h3>
			</ul>
				<p> Judul Buku      : Nineteen Eighty-Four<br>
                    Penulis         : George Orwell<br>
                    Penerbit        : Bentang Pustaka<br>
                    Tebal Buku      : 408 halaman
                </p>
			<ul>
			    <h3>- Rangkuman Buku</h3>
			</ul>
				<p>Novel “1984” bercerita tentang suatu masa di sekitar tahun 1984. Orwell menggambarkan masa itu sebagai masa yang penuh penderitaan. Dalam semesta “1984”, dunia dibagi menjadi tiga poros kuasa; Oceania, Eurasia, dan Eastasia. Setiap negara dipimpin oleh satu partai. Mereka semua berhaluan sosialis. Setiap negara juga menerapkan sistem totalitarian. Novel ini fokus menceritakan Oceania, khususnya London dimana sang tokoh utama hidup. Oceania dipimpin oleh Big Brother (Bung Besar) yang wajahnya tertera di poster-poster di berbagai penjuru negara. Sistem kediktatoran yang diterapkan membuat semua warganya harus tunduk dan patuh. Kedisiplinan ini sifatnya menyeluruh. Mulai dari jadwal bangun tidur, hiburan, buku yang dibaca, bahkan ekspresi muka dan pikiran.</p>
				<p>Teleskrin adalah kunci Partai dan Bung Besar melanggengkan kekuasaannya. Selain sebagai media doktrinasi, teleskrin adalah sebuah alat yang efektif untuk mengendalikan tingkah laku seseorang. Teleskrin adalah sarana yang efektif dan efisien dalam mempertahankan kekuasaan, menebar ketakutan, dan memodifikasi tingkah laku. Dengan adanya teleskrin, pemerintah Oceania dapat segera mencegah adanya indikasi penyelewengan atau pemberontakan dari warganya. Teleskrin juga sekaligus membuat warga Oceania yang mempunyai pandangan berbeda takut menyuarakan gagasannya dan menyimpannya agar tak kena hukuman. Dengan begitu, tidak akan ada gerakan kolektif menentang pemerintahan, sebab bibit perlawanan sudah dibabat pada level individual.</p>
				<p>Konsep teleskrin dapat dibilang menyerupai konsep Panopticon yang dicetuskan oleh Jeremy Bentham lalu kemudian dikembangkan oleh Michel Foucault. Dalam Discipline and Punish: The Birth of The Prison, Foucault menjelaskan bahwa panopticon adalah sebuah rancangan arsitektur penjara yang dibuat Jeremy Bentham untuk memaksimalkan fungsi penjara. Dalam skema penjara panopticon, penjara dibuat berbentuk lingkaran dan di bagian tengahnya terdapat menara pusat. Sel penjaranya berada di pinggir lingkaran. Pada setiap sel, terdapat jendela yang memungkinkan menara pusat untuk melihatnya. Namun, sang tahanan penjara tidak dapat mengetahui apakah dia sedang diawasi atau tidak. Maka, ia akan selalu bertindak seakan-akan ia diamati.
					Ada dua aspek yang penting; visibile (terlihat) dan unverifiable (tak bisa dipastikan). Visible berarti subjek yang diawasi atau tahanan penjara melihat dan tahu bahwa ada yang mengamatinya. Unverifiable berarti subjek tidak tahu apakah ia sedang diawasi atau tidak. Dengan perasaan selalu diawasi, Foucault berkata bahwa power (kuasa) akan bekerja secara otomatis. Cara kerja teleskrin dan panopticon sama; menggunakan pengawasan untuk memaksa subjek yang diawasi berperilaku sesuai yang diharapkan. Dalam aspek visible, teleskrin dan panopticon mempunyai kesamaan. Keduanya sama-sama dapat dilihat oleh subjek yang diawasi.</p>
				<p>Gagasan pengawasan yang dihadirkan Orwell mempunyai kesamaan dengan internet. Saat ini, internet juga dilakukan untuk pengawasan. Namun, pola kerja pengawasan yang ada di internet berbeda dengan teleskrinnya Orwell dan panopticon-nya Foucault. Hal yang membedakan panopticon dan teleskrin dengan internet adalah unsur visible. Carlo Bordoni, seorang pakar sosiologi cum jurnalis asal Italia, mengatakan bahwa, “The new Panopticon already exists, it is the web: surveillance is being carried out but not visibly so, and with the maximum discretion.”[1] Bordoni mengutip Zygmunt Bauman, pakar sosiologi Polandia, menjelaskan bahwa jaringan global di era sekarang membuat kita semua dapat terlihat dan dapat diobservasi oleh kekuatan yang tak terlihat.</p>
				<p>Saat ini, kita tahu bahwa seluruh aktivitas manusia di internet terbuka. Kita diawasi. Setiap jejak langkah kita di internet dapat dilihat. Ada dua agen yang menjadi pengawas; kapitalis dan pemerintah. Kapitalis atau korporasi besar di internet menggunakan situsnya sebagai alat pengawas dan pengeruk data. Tercatat 50% dari situs populer di internet menggunakan cookies untuk mengeruk informasi. Berbagai situs di internet yang sering kita gunakan seperti Google, Facebook dan Twitter, mengeruk informasi pribadi kita untuk kepentingan mereka. Data pribadi yang didapatkan digunakan sebagai informasi untuk mengoptimalkan iklan. Informasi pribadi digunakan untuk mencari preferensi pribadi sehingga iklan dapat bekerja dengan tepat sasaran.</p>
				<p>Selain kapitalis, pemerintah juga melakukan hal yang sama. Pada 2013 lalu, Edward Snowden mengungkapkan ke beberapa jurnalis tentang aktivitas National Security Agency (NSA). Amerika Serikat yang mengawasi berbagai hal di internet. Pemerintah dengan pengawasan melalui internet dapat “menelanjangi” warganya dengan mengetahui segala informasi dan aktivitasnya di internet. Pengawasan di era internet seperti ini berbeda tujuannya dengan pengawasan panopticon atau teleskrin. Pengawasan panopticon dan teleskrin digunakan untuk membenahi perilaku seseorang. Sedangkan, pengawasan saat ini (internet) digunakan untuk mengeruk informasi sebanyak-banyaknya untuk kemudian dimanfaatkan. Yang dapat memanfaatkan informasi tersebut tentu yang mempunyai akses kepada informasi itu; kapitalis dan pemerintah. Keduanya memanfaatkan data pribadi untuk keperluannya masing-masing.</p>
				<p>Kapitalis menggunakan informasi yang didapat untuk meningkatkan tingkat keuntungan. Data-data pribadi digunakan untuk keperluan iklan. Informasi seperti lokasi, nama, hobi, aktivitas pencarian, musik yang sering didengar, video yang sering ditonton, semua dikeruk dan digunakan dalam rangka meningkatkan penghasilan. Semua data itu digunakan untuk mengetahui apa yang kita pikirkan. Lalu, mereka bisa mengiklankan produk yang sesuai dengan keinginan kita. Kapitalis internet mendapatkan sarana meningkatkan pendapatan secara cuma-cuma melalui informasi yang kita tinggalkan di internet.</p>
                <p>Dengan membaca “1984” dan membenturkannya dengan keadaan saat ini kita bisa menarik satu gagasan yang menarik. Kita mungkin tidak hidup dalam rezim totaliter seperti di “1984”. Tidak ada teleskrin di sekitar kita. Tidak ada Bung Besar yang mengintai kita. Namun, apakah keadaan sekarang lebih baik dari apa yang di-”ramal”kan Orwell? Kita memang tidak hidup di bawah Bung Besar, tapi kita hidup di bawah dua penguasa; kapitalis dan pemerintah. Dengan kenyataan bahwa seluruh tindakan kita di dunia maya tidak lepas dari intaian dua mata itu.</p>
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
