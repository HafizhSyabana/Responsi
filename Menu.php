<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Akhir</title>
	<style>
	*{
		box-sizing: border-box;
	}

	body{
		font-family: arial;
		padding: 10px;
		background: #f1f1f1;
	}

	/* Judul Web Site */
	.header{
		padding: 30px;
		text-align: center;
		background: white;
	}

	.header1{
		font-size: 50px;
	}

	/* Style menu di bagian atas */
	.topnav{
		overflow: hidden;
		background-color: #333;
	}

	/* Style link dalam menu */
	.topnav a{
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	/* ubah warna saat kursor di atasnya */
	.topnav a:hover{
		background-color: #ddd;
		color: black;
	}

	/* Membuat dua kolom yang tidak sama lebarnya */
	/* Kolom kiri */
	.leftcolumn{
		float: left;
		width: 75%;
	}

	/* Kolom kanan */
	.rightcolumn{
		float: left;
		width: 25%;
		background-color: #f1f1f1;
		padding-left: 20px;
	}

	/* Gambar palsu */
	.fakeimg{
		background-color: #aaa;
		width: 100%;
		padding: 20px;
	}

	/* Tambahkan efek card pada artikel */
	.card{
		background-color: white;
		padding: 20px;
		margin-top: 20px;
	}

	/* Bersihkan sisa float */
	.row:after{
		content: "";
		display: table;
		clear: both;
	}

	/* Footer */
	.footer{
		padding: 20px;
		text-align: center;
		background-color: #ddd;
		margin-top: 25px;
	}

	/* Tata letak resposif - jika lebar browser kurang dari 800px, maka dua kolom tersebut berubah menjadi bertumpuk */
	@media screen and (max-width: 800px){
		.leftcolumn, .rightcolumn{
			width: 100%;
			padding: 0;
		}
	}

	/* Tata letak resposif - jika lebar browser kurang dari 400px, maka link akan bertumpuk */
	@media screen and (max-width: 400px){
		.topnav a{
			float: none;
			width: 100%;
		}
	}
</style>
</head>
<body>

<!-- membuat header pada row 1 -->
<div class="header">
	<h1>Selamat Datang</h1>
	<p><font face="times new roman">Semoga Harimu Menyenangkan</font></p>
</div>

<!-- membuat menu navigasi pada row 2 -->
<div class="topnav">
		<a href="kalkulator.html">Kalkulator</a>
		<a href="simpan.php">Isi Form</a>
		<a href="kalender.php">Kalender</a>
</div>

<!-- membuat konten pada row 3 terbagi menjadi 2 kolom -->
<div class="row">
	<!-- Kolom sebelah kiri berisi teks artikel -->
	<div class="leftcolumn">
		<!-- Artikel ke 1 -->
		<div class="card">
			<?php 
				include("simpan.php");
			?>
		</div>
		<!-- Artikel ke 2 -->
		<div class="card">
				<?php 
					include("kalkulator.html");
				?>		
		</div>
	</div>

	<!-- kolom sebelah kanan berisi tentang ringkasan -->
	<div class="rightcolumn">
		<div class="card">
			<?php 
				include("kalender.php");
			?>
		<br><br>	
		</div>
		<div class="card">
			<h2>About Me</h2>
			<div class="fakeimg" style="height: 100px;">
				<table>
					<tr>
						<td>Nama</td>
						<td> : </td>
						<td>M. Hafizh Syabana</td>
					</tr>
					<tr>
						<td>NIM</td>
						<td> : </td>
						<td>2100018208</td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td> : </td>
						<td>D</td>
					</tr>
				</table>
			</div>
			<p align="right">
				Haloo...<br>
				Salam Kenal<br>
				<img src="kle.png" align="center" width="100%" height="100%">
			</p>
		</div>

		<div class="card">
			<h3>Follow Me</h3>
			<table>
				<tr>
					<img src="ig.png" width="6%" height="6%"> <font face="arial"> @hafizh_syabana</font>
				</tr>
			</table>
		</div>
	</div>
</div>

<!-- membuat footer pada row 3 -->
<div class="footer">
	<h3><?php include("ftr.html");?></h3>
</div>
</body>
</html>