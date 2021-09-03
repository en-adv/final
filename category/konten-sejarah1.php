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
				<h2>Guns, Germs, and Steel</h2>
			<img src="https://tse1.mm.bing.net/th?id=OIP.oDt8xDJQiNo9Ouf7338k1QHaLL&pid=Api&P=0&w=300&h=300" class="gambarposting1">
			<ul>
			    <h3>- Identitas Buku</h3>
			</ul>
				<p> Judul Terjemahan    : Bedil, Kuman dan Baja <br>
                    Pengarang           : Jared Diamond <br>
                    Penerjemah          : Hendarto Setiadi  Damaring Tyas Wulandari <br>
                    Penerbit            : PT Gramedia <br>
                    Cetakan             : IV <br>
                    Tebal Buku          : XIV + 624 hlm <br>
                    Tahun Terbit        : 2018 </p>
			<ul>
			    <h3>- Rangkuman Buku</h3>
			</ul>
				<p>Sebuah buku bergenre social science ini mencoba menjawab pertanyaan mendalam seorang teman penulis yang berasal dari Papua Nugini. "Mengapa kalian orang kulit putih membuat begitu banyak barang berharga dan  membawanya ke Papua, tapi kami orang kulit hitam memiliki begitu sedikit barang berharga sendiri ?"  Atau secara umum pertanyaan tersebut dirumuskan kembali menjadi "Mengapa perkembangan manusia berlangsung dengan kecepatan yang berbeda di benua yang berbeda ?"</p>
				<p>Pada awalnya penulis menjelaskan tentang kemunculan dan penyebaran pangan di dunia. Dijelaskan mengapa beberapa bangsa berhasil mendomestikasi beberapa jenis tanaman liar maupun hewan liar, sedangkan bangsa lain tidak. Mengapa pada akhirnya kaum petani lah yang menggusur kaum pemburu-pengumpul, dan bukan sebaliknya. Mengapa penyebaran pangan lebih cepat terjadi dari timur ke barat atau sebaliknya dan bukan dari utara ke selatan ataupun sebaliknya. Berawal dari kondisi geografis menjadi kunci utama keragaman tanaman dan hewan yang membedakan setiap daerah. Sedangkan kecepatan penyebaran pangan cenderung cepat dari barat ke timur dan sebaliknya, karena penyebaran tersebut berarti masih dalam iklim yang serupa. Produksi pangan inilah yang membawa penyebab langsung terhadap pengaruh dan kedigdayaan suatu bangsa, seperti kuman, tingkat literasi, teknologi, dan pemerintahan sentralisasi.</p>
				<p>Dari pembahasan masalah pangan, penulis membahas peran kuman penyakit yang memegang peran penting dalam banyak perang dan penaklukan yang pada masa lalu. Ternyata, meskipun senjata orang-orang Spanyol juga memakan korban suku-suku di amerika , namun ternyata wabah yang dibawa orang-orang Spanyol lah yang membunuh lebih banyak orang. Orang-orang spanyol datang ke Amerika dengan membawa virus/bakteri pembawa wabah seperti cacar, influenza, campak - penyakit khas penduduk padat. Orang-orang Aztec, Inca dan suku-suku lain yang tidak memiliki kekebalan terhadap penyakit ini, tertuar yang kemudian ramai-ramai membawa mereka ke maut. Bahkan terkadang, virus/bakteri yang di bawa orang Spanyol lebih dahulu memasuki suatu kawasan pedalaman Amerika sebelum orang Spanyol memasuki kawasan tersebut. Bakteri/virus ini ditularkan oleh orang-orang pesisir yang berinteraksi dengan orang Spanyol yang datang ke Pesisir, hingga menyebar sampai ke pedalaman. Mengapa justru orang Eropa yang menularkan penyakit ke penduduk pribumi dan bukan sebaliknya ? Mengapa bukan sebaliknya. Buku ini menjawab bahwa sebagian besar penyakit yang mewabah di Eropa pada zaman itu berasal dari penyakit yang di derita hewan yang kemudian berevolusi hanya menyerang manusia. Karena perbedaan keragaman, karakteristik hewan yang di domestikasi di Amerika berbeda dengan di Eropa, di mana hewan-hewan di Amerika cenderung tidak menularkan penyakit. Sehingga tidak ada penyakit epidemik di sana.</p>
				<p>Di bagian selanjutnya memaparkan tentang kemunculan tulisan, yang pada satu bangsa, bisa jadi memang merupakan pencipta tulisan tersebut,atau berupa difusi gagasan dari tulisan bangsa lain. Pertanyaan nya adalah, mengapa tulisan muncul pada beberapa masyarakat dan menyebar ke masyarakat lain, namun tidak pada masyarakat lain nya ? Salah satu faktornya adalah penggunaan dan keterbatasan (sedikitnya) pengguna tulisan. Tulisan dibutuhkan pada masyarakat yang terstratifikasi sosial dengan lembaga politik yang kompleks dan tersentralisasi. Penggunanya pun hanyalah para birokrat yang isinya catatan mengenai produksi pangan. Dalam penyebaran nya, sama seperti teknologi dan pangan , banyak terhambat oleh sistem geografi dan ekologi.</p>
				<p>Masuk ke dalam bidang teknologi, melalui penelitian yang penulis lakukan, ternyata disimpulkan bahwa teknologi berkembang secara kumulatif, bukan sebagai tindakan heroik terisolsi, dan bahwa sebagian besar kegunaanya ditemukan justru setelah teknologi tersebut diciptakan, bukan untuk memenuhi kebutuhan yang telah diperkirakan sebelumnya.Contohnya adalah pada kasus diciptakanya fonograf oleh Thomas Edison, yang tak memaksudkannya untuk merekam dan memainkan musik. Catatan penting dari bab ini adalah bahwa bukan kecerdasan manusia yang berbeda yang mempengaruhi keunggulan satu kawasan atas kawasan lain, namun karena kondisi geografi dan situasi yang berbeda mengalihkan kecerdasan diantara manusia-manusia tersebut untuk mengatasi masalah teknologi sesuai situasi masing-masing, misal dalam kasus rimba Papua adalah cara bertahan hidup yang tanpa barang-barang impor.</p>
				<p>Dengan demikian, produksi pangan dan persaiangan serta pembauran antar masyarakat, merupakan penyebab-penyebab mendasar, ,melalui rangkaian sebab-akibat yang berbeda-beda perincian nya namun semuanya melibatkan populasi padat yang besar dan kehidupan menetap, yang memunculkan agen-agen langsung penaklukan : kuman, tulisan, teknologi, dan organisasi tesentralisasi. Karena penyebab mendasar itu berkembang secara berbeda di benua berbeda-beda, demikian pula agen - agen penaklukan itu.</p>
				<p><i>"Sejarah berbagai bangsa mengikuti alur yang berbeda-beda karena adanya perbedaan pada lingkungan berbagai suku bangsa itu, bukun karena adanya perbedaan biologis pada suku-suku bangsa itu sendiri"</i></p>
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
