<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SlideShow</title>
<link rel="stylesheet" href="style.css">

<title>Laboratorium Elektro Lanjut | UNMUL</title>
<link rel="stylesheet" type="text/css" href="slider.css">
<!-- Script JavaScript untuk slider -->
<script src="slider.js"></script>
<link href="css.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="logo lab.png" type="image/x-icon">
</head>
<body >

<div id="web">
<div id="container">
<div id="header"></div>
<div id="batas1"></div>
<div id="nav">

<ul>
<li><a id="navselect" href="index.php">Beranda</a></li>
		<li><a href="profil.php">Penelitian</a></li>
		<li><a href="fasilitas.php">Fasilitas</a></li>
		<li><a href="jadwal.php">Praktikum</a></li>
		<li><a href="daftarasisten.php">Aslab</a></li>
		<li><a href="kontak.php">Kontak</a></li>
			
</ul></div>
<div id="content">
<div id="batas"></div>
<div id="left">
<div id="welcome"><table><tr><td><marquee behavior="scroll" scrollamount=3 onmouseover="this.stop();" onmouseout="this.start();" direction="left"><b>Selamat Datang di Laboratorium Elektro Lanjut</b><marquee></td></tr></table></div>

<h1>Laboratorium Elektro Lanjut</h1>
<p align=justify>Some quick example text to build on the card title and make up the bulk of the card's content.
                          Some quick example text to build on the card title and make up the bulk of the card's content..</p>

<p align=justify>Some quick example text to build on the card title and make up the bulk of the card's content.
                          Some quick example text to build on the card title and make up the bulk of the card's content..</p>

<p align=justify>Some quick example text to build on the card title and make up the bulk of the card's content.
                          Some quick example text to build on the card title and make up the bulk of the card's content..</p>		
</div>

<div id="tengah"><p align=justify>Slider Foto<div id="kotakposting">
<div class="container">
        <div class="content-slide">
            <div class="imgslide fade">
                <div class="numberslide">1 / 3</div>
                <img src="foto/p1.jpg" alt="">
                <div class="text">Kegiatan 1</div>
            </div>

            <div class="imgslide fade">
                <div class="numberslide">2 / 3</div>
                <img src="foto/p2.jpg" alt="">
                <div class="text">Kegiatan 2</div>
            </div>

            <div class="imgslide fade">
                <div class="numberslide">3 / 3</div>
                <img src="foto/p3.jpg" alt="">
                <div class="text">Kegiatan 3</div>
            </div>

            <a class="prev" onClick="nextslide(-1)">&#10094;</a>
            <a class="next" onClick="nextslide(1)">&#10095;</a> 
        </div>

        <div class="page">
            <span class="dot" onClick="dotslide(1)"></span>
            <span class="dot" onClick="dotslide(2)"></span>
            <span class="dot" onClick="dotslide(3)"></span>
        </div>

    </div>

    <script>
        var slideIndex = 1;
            showSlide(slideIndex);

        function nextslide(n){
            showSlide(slideIndex += n);
        }

        function dotslide(n){
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide");
            var dot = document.getElementsByClassName("dot");
            
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                
                slides[i].style.display = "none";
            }

            for (i = 0; i < slides.length; i++) {
                
                dot[i].className = dot[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";

            dot[slideIndex - 1].className += " active";
            


        }
    </script>
  
</div></p>

<p align=justify>Berita Terbaru<div id="kotakposting">
Some quick example text to build on the card title and make up the bulk of the card's content.
                          Some quick example text to build on the card title and make up the bulk of the card's content...<a href="#">Baca lebih lengkap</a></div></p>

<p align=justify>PROFIL RISET <div id="kotakposting">
SSome quick example text to build on the card title and make up the bulk of the card's content.
                          Some quick example text to build on the card title and make up the bulk of the card's content...<a href="#">Baca lebih lengkap</a></div></p>
<aa><a href="#">Halaman berikutnya...</a></aa>
</div>

<div id="cari">
<form  method=post><input placeholder="Cari di sini..." name=cari type=search size=17><input type=submit value=Cari></form>
</div>
<div id="kotakwaktu">
<div style=" text-align:center; background-color:#397eb7;" id="data"><script src="waktu.js" type="text/javascript">
</script> </div></div>

<div id="right">
	<p align=center color=gold>Matakuliah Praktikum:</p>
	<table><tr align=left><td><a href="#">Rangkaian Listrik 1</a></td></tr>
	<tr align=left><td><a href="#">Mengambbar Teknik Elektro</a></a></td></tr>
	<tr align=left><td><a href="#">Mikrokontroller</a></a></td></tr>
	<tr align=left><td><a href="#">Energi Baru Terbarukan</a></a></td></tr>
	<tr align=left><td><a href="#">Analisis Sistem Tenaga</a></a></td></tr>
	<tr align=left><td><a href="#">Distribusi Daya Listrik</a></a></td></tr>
	<tr align=left><td><a href="#">Pengaman Tenaga LIstrik</a></a></td></tr>
	<tr align=left><td><a href="sistem_linier.php">Sistem Linier</a></a></td></tr>
	<tr align=left><td><a href="#">Dasar Sistem Pengaturan</a></a></td></tr>
	<tr align=left><td><a href="#">Operasi Sistem Tenaga Listrik</a></a></td></tr>

	<tr ><td color=gold>_________________</td></tr>
	
	<tr><td><a href="#">Website Lab Elektro Lanjut</a></a></td></tr>
	</table>
	</div>
	
	</div>
	</div>
	<div id="footer"><br>| Copyright © Lab Elektro Lanjut Universitas Mulawarman 2023 |</div>
	</div>
	
	</body>
	</html>