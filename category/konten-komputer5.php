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
				<h2>The Self-Taught Programmer</h2>
			<img src="https://cf.shopee.co.id/file/e6120cf3ef743c669ce5e8e6b351c17a" class="gambarposting1">
			<ul>
			    <h3>- Identitas Buku</h3>
			</ul>
				<p> Judul Buku      : Pride and Prejudice<br>
                    Genre           : Roman, Klasik<br>
                    Penulis         : Jane Austen<br>
                    Penerbit        : The Modern Library New York<br>
                    Tahun Terbit    : 1813
                </p>
			<ul>
			    <h3>- Isi Buku</h3>
			</ul>
				<p>Keluarga Bennet -yang menempati Longbourn estate, memiliki masalah besar yakni 5 anak perempuan dan tidak ada satupun anak laki-laki. Keluarga Bennet setelah nantinya Mr. Bennet meninggal akan punah dalam garis pria. Sialnya lagi, ketika Mr. Bennet meninggal nanti, kediaman dan lahannya Longbourn akan menjadi milik kerabat pria terdekatnya, Mr. Collins.</p>
				<p>Tidak satu senpun akan bisa jatuh ke tangan Mrs. Bennett atau 5 putrinya, Jane, Elizabeth 'Lizzie', Lidya, Kitty & Mary. Satu-satunya sumber pemasukan adalah tunjangan dana warisan keluarga asal Mrs. Bennet itupun hanya sebesar £200 pertahun. Dengan 5 putri yang salah satunya saja setahun membutuhkan £90? Mereka akan tidak hanya jatuh miskin tapi juga kelaparan.</p>
                <p>Pride and Prejudice utamanya menceritakan tentang usaha keras Mrs. Bennet untuk memastikan putri-putrinya hidup layak sepeninggal ayah mereka. Dengan cara bekerja, berdagang atau menjadi penulis seperti Jo di Little women? Tentu tidak! Bennet adalah keluarga terhormat dimana bekerja adalah hal yang tidak diperlukan dan tidak dibayangkan, hasil dari petani & penyewa lahan-lah yang selama ini menghidupi mereka. Mr. Bennet juga tidak merasa harus mengerjakan apapun kecuali berdiam di ruang kerjanya membaca buku & sesekali menghadiri pesta. Mustahil sekali Mrs. Bennet akan tega melihat anaknya bekerja. Satu-satunya yang bisa dilakukan adalah memastikan mereka menikah dengan pria kaya, lebih bagus lagi jika termasuk bangsawan.</p>
                <p>Novel ini mengalir dari sudut pandang Lizzie ketika gadis cerdas, teguh dan pemberani ini bertemu dengan Mr. Darcy yang berkerabat dengan bangsawan Lady DeBourgh, arogan dan dingin nyaris anti sosial, teman dari Mr. Bingley -penduduk baru Meryton- pria kaya target ibunya untuk dijodohkan dengan Jane. Mrs. Bennet yang 'scheming', dengan berbagai cara membuat Jane dan Bingley melewatkan waktu bersama; belum lagi Lidya yang centil dan boros tak peduli keadaan keuangan keluarga, sibuk menggoda para prajurit, sementara ayah mereka cenderung passive. Lizzie sebagai anak kedua juga tidak luput dari rencana perjodohan yang diatur ibunya. Lizzie diharapkan menikah dengan Mr. Collins agar mereka tidak terusir dari Longbourn suatu hari.</p>
                <p>Mr. Darcy jatuh cinta pada Lizzie. Namun lamarannya ditolak karena meski terang-terangan berkata bahwa ia menyukai gadis tersebut, namun berkata bahwa keluarga Bennet dan DArcy tidak setara. Ditambah lagi Lizzie mendengar bahwa Darcy tidak hanya membuat Jane & Bingley berpisah namun juga pria kejam dan tak berperikemanusiaan yang membuat Mr. Wickham menderita. Harga dirinya terluka dan prasangka lizzie pada Mr. Darcy menguat. Tidak menyangka akan ditolak, DArcy rupanya merenungkan bagaimana selama ini ia bersikap lalu memperbaiki diri, bersedia melihat keluarga Bennet lebih dalam -tidak hanya dari Mrs. Bennet yang agresif mencari menantu kaya.</p>
                <p>Lika-liku cerita membuat semua kesalahpahaman terselesaikan, DArcy membantu keluarga Bennet dari hilangnya martabat -ketika Lidya kabur dan hidup bersama Wickham tanpa pernikahan. D'Arcy melacak tempat mereka bahkan diam-diam memberikan ribuan poundsterling agar Wickham mau menikahi lidya. Pandangan Lizzie berubah kepada Darcy dan lambat laun bersedia menerimanya. </p>
				<p>Selain Lady De Bourgh yang menentang hubungan Lizzie & Darcy, everyone happy at last, terutama Mrs. Bennet karena meski Longbourn nantinya tidak lagi ditangan mereka, Jane akhirnya menikah dengan Mr. Bingley yang kaya dan Lizzie juga menikah dengan Darcy yang dua kali lebih kaya dari Bingley dan dengan penghasilan 533 ribu pound pertahun dibandingkan dengan Bennet yang hanya £5000 -meski lizzie menikah karena juga menyukai Darcy, bukan karena kekayaannya. Setidaknya nasib adik-adiknya akan terjamin.</p>
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
