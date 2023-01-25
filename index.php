<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Tugas UAS</title>
	<link rel="stylesheet" href="asset/css/style.css">
	<link rel="icon" type="image/png" href="asset/img/icon.png">
	<script src="https://kit.fontawesome.com/4592f70558.js" crossorigin="anonymous"></script>
</head>
<body>
	<nav>
		<div class="logo">
			<a href="#"><img src="asset/img/icon.png" alt="logo">UNIVERSITAS BINA BANGSA</a>
		</div>
		<div class="toggle">
			<a href="#"><ion-icon name="menu-outline"></ion-icon></a>
		</div>
		<ul class="menu">
			<li><a href="#">HOME</a></li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">PROFIL</a>
				<div class="dropdown-content">
					<a href="#">SEJARAH</a>
					<a href="#">STRUKTUR ORGANISASI</a>
					<a href="#">VISI MISI & TUJUAN</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">FAKULTAS</a>
				<div class="dropdown-content">
					<a href="#">PROGRAM PASCA SARJANA</a>
					<a href="#">FAKULTAS EKONOMI DAN BISNIS</a>
					<a href="#">FAKULTAS HUKUM</a>
					<a href="#">FAKULTAS KEGURUAN & ILMU PENDIDIKAN</a>
					<a href="#">FAKULTAS ILMU KOMPUTER</a>
					<a href="#">FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</a>
					<a href="#">FAKULTAS SAINS DAN TEKNOLOGI</a>
					<a href="#">FAKULTAS ILMU KESEHATAN</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">LEMBAGA</a>
				<div class="dropdown-content">
					<a href="#">SPMI</a>
					<a href="#">LP2M</a>
					<a href="#">BIDANG HUMAS</a>
					<a href="#">LKBH UNIBA</a>
					<a href="#">LEMBAGA SERTIFIKASI PROFESI</a>
					<a href="#">INKUBATOR BISNIS DAN KEWIRAUSAHAAN</a>
					<a href="#">PUSAT BAHASA</a>
					<a href="#">TAX CENTRE</a>
					<a href="#">LABORATORIUM</a>
					<a href="#">PERPUSTAKAAN</a>
					<a href="#">PUSAT STUDI DOSEN DAN BIDANG ILMU</a>
					<a href="#">BIDANG KERJASAMA</a>
					<a href="#">PUSAT DATA DAN PELAPORAN</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">ORGAMA</a>
				<div class="dropdown-content">
					<a href="#">DPM</a>
					<a href="#">BEM</a>
					<a href="#">LABAIK</a>
					<a href="#">IKOMA</a>
					<a href="#">KSR</a>
					<a href="#">PSM</a>
					<a href="#">MAPELBA</a>
					<a href="#">LISBU</a>
					<a href="#">EXTAMA</a>
					<a href="#">RESIMEN MAHASISWA UNIBA</a>
				</div>
			</li>
			<li><a href="#">SARPAS</a></li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">DOK KINERJA</a>
				<div class="dropdown-content">
					<a href="#">RENCANA STRATEGIS</a>
					<a href="#">PERJANJIAN KINERJA</a>
					<a href="#">LAPORAN KINERJA</a>
					<a href="#">INDIKATOR KERJA UTAMA (IKU)</a>
				</div>
			</li>
		</ul>
		<div class="search-box">
			<input type="text" placeholder="Search Here">
			<a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
	</nav>
	<div class="container">
		<div class="container-slide">
			<div class="imgslide fade">
				<img src="asset/img/1.jpg" alt="">
			</div>
			<div class="imgslide fade">
				<img src="asset/img/2.jpg" alt="">
			</div>
			<a class="prev" onclick="nextslide(-1)">&#10094;</a>
			<a class="next" onclick="nextslide(1)">&#10095;</a>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

	<script>
		$(".toggle").on("click", function(){
			if($(".menu").hasClass("active")){
		    	$(".menu").removeClass("active");
		    	$(this).find("a").html("<ion-icon name='menu-outline'></ion-icon>");
			} else {
				$(".menu").addClass("active");
				$(this).find("a").html("<ion-icon name='close-outline'></ion-icon>");
			}
		})
	</script>

	<script>
		var slideIndex = 1;
			showSlide(slideIndex);

		function nextslide(n) {
			showSlide(slideIndex = n);
		}

		function showSlide(n) {
			var i;
			var slides = document.getElementsByClassName ("imgslide");

			if (n > slides.length) {
				slideIndex = 1
			}

			if (n < 1) {
				slideIndex = slides.length;
			}

			for (i = 0; i <slides.length; i++) {
				slides[i].style.display = "none";
			}

			slides[slideIndex - 1].style.display = "block";
		}
	</script>
</body>
</html>
