<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h3>Daftar Mahasiswa</h3>
		<?php foreach ($mhs as $m): ?>
			<ul>
			<li><?= $m['nama'];  ?></li>
			<li><?= $m['nrp'];  ?></li>
			<li><?= $m['email'];  ?></li>
			<li><?= $m['jurusan'];  ?></li>
			</ul>
		<?php endforeach; ?>



</body>
</html>