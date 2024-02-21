<?php
class Nilai
{
    public $mapel, $nilai;

    public function __construct($mapel, $nilai)
    {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

class Siswa
{
    public $nrp, $nama;
    public $daftarNilai = array();

    public function __construct($nrp, $nama, $daftarNilai)
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = $daftarNilai;
    }
}


function randomString($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}

$dataSiswa = array();
$dataMapel = ["Inggris","Indonesia","Jepang"];
// Inisialisasi
// $siswa = new Siswa(001, "Delfan", new Nilai("Inggris", 100));
for ($i=0; $i < 10; $i++) { 
    $dataSiswa[] = new Siswa(randomString(3), randomString(10), new Nilai($dataMapel[rand(0,2)], rand(0,100)));
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Soal No 2</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Mapel</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dataSiswa as $siswa) {?>
                <tr>
                    <td><?= $siswa->nrp ?></td>
                    <td><?= $siswa->nama ?></td>
                    <td><?= $siswa->daftarNilai->mapel ?></td>
                    <td><?= $siswa->daftarNilai->nilai ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>