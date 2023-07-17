<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 10</title>
</head>
<body>
    <form action="" method="POST">
        Nama : 
        <input type="text" name="nama"><br>
        Nilai :
        <input type="text" name="nilai"><br>
        <input type="submit" value="Hasil">
    </form>
    <?php
    
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    if($nilai >= 80){
        $hasil = "A";
    }elseif($nilai >= 70){
        $hasil = "B";
    }elseif($nilai >= 60){
        $hasil = "C";
    }else{
        $hasil = "D";
    }

    if($hasil == "A"){
        $kelulusan = "Lulus";
    }elseif($hasil == "B"){
        $kelulusan = "Lulus";
    }elseif($hasil == "C"){
        $kelulusan = "Lulus";
    }else{
        $kelulusan = "Tidak Lulus";
    }

    echo "
    <h1> Nilai Mahasiswa </h1>
    Nama Mahasiswa : $nama <br>
    Nilai Mahasiswa : $nilai <br>
    Nilai Abjad : $hasil <br>
    Keterangan : $kelulusan
    ";
    ?>
</body>
</html>