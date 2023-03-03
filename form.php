<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>LaboratoriumElektro Lanjut | UNMUL</title>
<link rel="icon" href="logo lab.png" type="image/x-icon">
<link href="css.css" rel="stylesheet" type="text/css" />
</head>
<body >

<div id="web">
<div id="container">
<div id="header"></div>
<div id="batas1"></div>
<div id="nav">

<ul>
<li><a href="eksper.php">Beranda</a></li>
		<li><a href="profil.php">Penelitian</a></li>
		<li><a href="fasilitas.php">Fasilitas</a></li>
		<li><a href="jadwal.php">Praktikum</a></li>
		<li><a id="navselect" href="daftarasisten.php">Aslab</a></li>
		<li><a href="kontak.php">Kontak</a></li>
			
</ul></div>
<div id="content">
<div id="batas"></div>
<div id="left">
<div id="welcome"><table><tr><td><marquee behavior="scroll" scrollamount=3 onmouseover="this.stop();" onmouseout="this.start();" direction="left"><b>Selamat Datang di Laboratorium Elektro Lanjut</b><marquee></td></tr></table></div>
<div id="nav1">
<ul>
<li><a  href="daftarasisten.php">Asisten Laboratorium</a></li>
		<li><a id="navselect1" href="form.php">Pendaftaran Asisten</a></li>
		<li><a href="login.php">Login</a></li>
	
</ul>
</div>

<h1>Laboratorium Elektro Lanjut</h1>
<p align=justify>Some quick example text to build on the card title and make up the bulk of the card's content.
                          Some quick example text to build on the card title and make up the bulk of the card's content..</p>

<p align=justify>Some quick example text to build on the card title and make up the bulk of the card's content.
                          Some quick example text to build on the card title and make up the bulk of the card's content..</p>

<p align=justify>Some quick example text to build on the card title and make up the bulk of the card's content.
                          Some quick example text to build on the card title and make up the bulk of the card's content..</p>
			
</div>
<div id="tengah"> <br>
			<h1 align=center>Form Pendaftaran Aslab</h1>
<p align=justify>
			
			<form action="proses.php" method="post">
			<table align=center> 
			<tr align=left> 
				<td width=150px>Nama</td> 
				<td width=50px><input type="text" name="nama" size="50"></td> 
			</tr> 
			<tr align=left> 
				<td>NPM</td> 
				<td><input type="text" name="npm" size="50"></td> 
			</tr> 
			<tr align=left>
				<td>Jenis Kelamin</td>
				<td> <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if (['jenis_kelamin'=="Laki-laki"]) { echo "checked";}?>> Laki-laki &nbsp;&nbsp;
				<input type="radio" name="jenis_kelamin" value="Perempuan"  <?php if (['jenis_kelamin']=="Perempuan") { echo "checked";}?>>Perempuan </td> 
			</tr>
			<tr align=left valign=top> 
				<td >Tempat Tanggal Lahir</td> 
				<td><input placeholder="Tempat" type="text" name="tempat_lahir" size="19">,<input placeholder="Tgl" type="text" name="tgl_lahir" size="5">/<input placeholder="Bln" type="text" name="bln_lahir" size="5">/<input placeholder="Thn" type="text" name="thn_lahir" size="7"></td> 
			</tr> 
			<tr align=left> 
				<td>IPK</td> 
				<td><input type="text" name="ipk" size="20"></td> 
			</tr> 
			<tr align=left> 
				<td>Agama</td> 
				<td><input type="text" name="agama" size="20"></td> 
			</tr> 
			<tr align=left valign=top> 
				<td>Alamat</td> 
				<td><textarea cols="37" rows="3" name="alamat"></textarea></td> 
			</tr> 
			<tr align=left valign=top> 
				<td>Motivasi</td> 
				<td><textarea cols="37" rows="3" name="motivasi"></textarea></td> 
			</tr> 
			<tr align=left  valign=top> 
				<td>Motto Hidup</td> 
				<td><textarea cols="37" rows="3" name="motto_hidup"></textarea></td>
			</tr> 
			<tr align=left> 
				<td><input type="submit" name="kirim" value="Kirim"></td> 
				<td><input type="Reset" value="Batal"></td> 
			</tr> 
			</table> 
			</form>
			
			</p>

</div>
<div id="cari">
<form  method=post><input placeholder="Cari di sini..." name=cari type=search size=17><input type=submit value=Cari></form>
</div>
<div id="kotakwaktu">
<div style=" text-align:center background-color:#397eb7;" id="data"><script src="waktu.js" type="text/javascript">
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
<tr align=left><td><a href="sitem_linier.php">Sistem Linier</a></a></td></tr>
<tr align=left><td><a href="#">Dasar Sistem Pengaturan</a></a></td></tr>
<tr align=left><td><a href="#">Operasi Sistem Tenaga Listrik</a></a></td></tr>
<tr ><td color=gold>_______________</td></tr>

<tr><td><a href="#">Website Lab Elektro Lanjut</a></a></td></tr>
</table>
</div>

</div>
</div>
<div id="footer"><img src="unmul.png" width=40px height=30px>&nbsp;<img src="logo lab.png" width=30px height=30px><br>| Copyright © Lab Elektro Lanjut Universitas Mulawarman 2023 |</div>
</div>

</body>
</html>