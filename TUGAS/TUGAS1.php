<?php
class Mahasiswa {
    private $nim;
    private $nama;
    private $ipk;

    public function __construct($nim, $nama, $ipk) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
    }


    public function getStatus() {
        if ($this->ipk >= 3.0) {
            return "Baik";
        } else {
            return "Perlu Bimbingan";
        }
    }

    public function getNim() {
        return $this->nim;
    }
    public function getNama() {
        return $this->nama;
    }

}

$mhs1 = new Mahasiswa("T3124018", "Riski", 3.6);
$mhs2 = new Mahasiswa("T3124022", "Julbarias Baid", 1.2);

echo "NIM : " . $mhs1->getNim() . "<br>";
echo "NIM : " . $mhs1->getNama() . "<br>";
echo "NIM : " . $mhs1->getStatus() . "<br><br>";

echo "NIM : " . $mhs2->getNim() . "<br>";
echo "NIM : " . $mhs2->getNama() . "<br>";
echo "NIM : " . $mhs2->getStatus()
?>
