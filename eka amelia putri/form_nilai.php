<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET" action="array_siswa.php">
Nama : <input type="text" name="nama" id="nama" value="" size="30"/><br/>
Mata Kuliah :
<select name="matkul" id="matkul">
<option value="DDP">Dasar-Dasar Pemrograman</option>
<option value="BDI">Basis Data I</option>
<option value="WEB1">Pemrograman Web</option>
</select><br/>
Nilai UTS : <input type="text" name="nilai_uts" id="nilai_uts" value=""
size="6"/><br/>
Nilai UAS : <input type="text" name="nilai_uas" id="nilai_uas" value=""
size="6"/><br/>
Nilai Tugas/Praktikum : <input type="text" id="nilai_tugas" name="nilai_tugas"
value="" size="6"/><br/>
<input type="submit" value="Simpan" name="proses" id="proses"/>
</form>
</body>
</html>