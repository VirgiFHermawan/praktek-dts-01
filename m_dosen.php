<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="tabel.css">

<head>
	<title>Data Dosen Trilogi</title>
</head>

<body>
	<div id="header">
		<h3> Data Dosen Pengajar Kelas Karyawan </h3>
		<h3> Universitas Trilogi </h3>
	</div>
	<h1 id="table-name">Data Dosen</h1>
	<?php
	$dataMahasiswa = [
	[
        "kode_matkul" => "IKT013118",
		"nama_kelas" => "Interaksi Digital",
		"nama_dosen" => "Aida Fitriyani, S.Kom., MMSI.",
		"ruang_kelas" => "201",
	],
	[
		"kode_matkul" => "TIF263118",
		"nama_kelas" => "Grafika Komputer",
		"nama_dosen" => "Silvester Dian Handy Permana, ST., MTI, CDS, CPro",
		"ruang_kelas" => "210",
	],
	[
		"kode_matkul" => "TIF253118",
		"nama_kelas" => "Interaksi Manusia Komputer",
		"nama_dosen" => "Aida Fitriyani, S.Kom., MMSI.",
		"ruang_kelas" => "201",
	],
	[
		"kode_matkul" => "TIF310418",
		"nama_kelas" => "Pemrograman Berbasis Web",
		"nama_dosen" => "Gatot Tri Pranoto, S.Kom., M.Kom.",
		"ruang_kelas" => "204",
	],
    [
		"kode_matkul" => "TIF310418",
		"nama_kelas" => "Pratikum Pemrograman Berbasis Web",
		"nama_dosen" => "Ir. Yaddarabullah, M.Kom., Asean Eng.",
		"ruang_kelas" => "Lab3",
	],
    [
		"kode_matkul" => "TIFWP22101",
		"nama_kelas" => "Kalkulus",
		"nama_dosen" => "Dr. EH. Riyadi, MTI",
		"ruang_kelas" => "206",
	],
    [
		"kode_matkul" => "TIFWP22102",
		"nama_kelas" => "Matematika Diskrit",
		"nama_dosen" => "Mohammad Fachruddin, S.Pd., M.Si.",
		"ruang_kelas" => "306",
	],
    [
		"kode_matkul" => "TIFWP22103",
		"nama_kelas" => "Statistika dan Probabilitas",
		"nama_dosen" => "Desi Ramayanti, S.Kom., M.T.",
		"ruang_kelas" => "202",
	],
    [
		"kode_matkul" => "UTR093018",
		"nama_kelas" => "Sistem Ekonomi Pancasila",
		"nama_dosen" => "Lestari Agusalim, S.E., M.Si",
		"ruang_kelas" => "210",
	],
    [
		"kode_matkul" => "UTR113118",
		"nama_kelas" => "Praktik Keteknososiopreneuran",
		"nama_dosen" => "Yocki Pramudya A, SE.MM.",
		"ruang_kelas" => "307",
	],
	];

	$no = 1;
		echo "
	<table>
		<thead>
			<tr>
				<th>No</th>
                <th>Kode Mata Kuliah</th>
				<th>Nama Mata Kuliah</th>
				<th>Nama Dosen</th>
				<th>Ruang Kelas</th>
				<th></th>
			</tr>
		</thead>
		<tbody>";
	foreach ($dataMahasiswa as $mahasiswa) {
		echo "
			<tr>
				<td>{$no}</td>
                <td>{$mahasiswa["kode_matkul"]}</td>
				<td>{$mahasiswa["nama_kelas"]}</td>
				<td>{$mahasiswa["nama_dosen"]}</td>
				<td>{$mahasiswa["ruang_kelas"]}</td>
			</tr>";
		$no++;
	}
	echo "
		</tbody>
	</table>";
	?>
</body>

</html>