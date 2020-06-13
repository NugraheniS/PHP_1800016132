<html>
<head>
	<title>Form Mahasiswa</title>
</head>
<body>

	<table border="1" cellspacing="0" cellpadding="4" width="50%">
		<tr>
			<td><b>NIM</b></td>
			<td><?php echo $_POST['nim']; ?></td>
		</tr>
		<tr>
			<td><b>Nama</b></td>
			<td><?php echo $_POST['nama']; ?></td>
		</tr>
		<tr>
			<td><b>Jenis kelamin</b></td>
			<td><?php echo $_POST['kelamin']; ?></td>
		</tr>
		<tr>
			<td><b>Alamat</b></td>
			<td><?php echo $_POST['alamat']; ?></td>
		</tr>
		<tr>
			<td><b>Program studi</b></td>
			<td><?php echo $_POST['prodi']; ?></td>
		</tr>
		<tr>
			<td><b>Bahasa pemrograman yang dikuasai</b></td>
			<td>
				<?php

					$lang = $_POST['lang'];
					foreach ($lang as $language) {
					 	echo "<b>$language</b><br>";
					 } 
				?>
			</td>
		</tr>
    </table>
    
</body>
</html>