 <link rel="stylesheet" href="layout/assets/css/style.css">
  
 
<div class="utama">
    	<div class="kepala">
			<?php include "header.php" ?>
		</div>

<form action="album_proses.php" method="POST">
	<table>

		<tr>
			<td>ID PENGIRIMAN</td>
			<td><input type="text" name="photo_id"></td>
			
		</tr>

		<tr>
			<td>ALAMAT PENGIRIMAN</td>
			<td><input type="text" name="name"></td>
			
		</tr>
<tr>
			<td>NO HP</td>
			<td><input type="text" name="teks"></td>
			
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="t_simpan" value="simpan"></td>
		</tr>
			
	</table>
</form>
