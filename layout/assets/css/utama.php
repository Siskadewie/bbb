  <link rel="stylesheet" href="assets/css/table.css">
    <link rel="stylesheet" href="assets/css/style.css">
  
 
<div class="utama">
    	<div class="kepala">
			<?php include "header.php" ?>
		</div>
    
		<div class="siska-dewi">
      <a href="index.php">HOME</a>

    	<li class="dropdown"><a href="#">ANGGOTA DIKSI</a>
		<ul class="isi-dropdown">
			<li><a href="inpt_anggota_baru.php">Registrasi Anggota</a></li>
			<li><a href="tampil_anggota_baru.php">Data Anggota</a></li>
			
		</ul>

    	<li class="dropdown"><a href="#">ABSENSI ANGGOTA</a>
		<ul class="isi-dropdown">
			<li><a href="absen_diksi.php">Absensi Anggota</a></li>
			<li><a href="absensi_tampil.php">Data Absensi</a></li>
			
		</ul>

		<li class="dropdown"><a href="#">RANGKUMAN</a>
		<ul class="isi-dropdown">
			<li><a href="rangkuman_input.php">Input Rangkuman/Pertemuan</a></li>
			<li><a href="rangkuman_tampil.php">Data Rangkuman/Pertemuan</a></li>
			
		</ul>
    	<li class="dropdown"><a href="#">CATATAN PRESTASI</a>
		<ul class="isi-dropdown">
			<li><a href="prestasi_input.php">Input Kegiatan</a></li>
			<li><a href="prestasi_tampil.php">Data Kegiatan</a></li>
			
		</ul>

		
		<a class="logout" href="logout.php">Logout</a>
      
    </div>