<?php
class Buku {
    private $judul;
    private $penulis;
    private $tahunTerbit;

    public function __construct($judul, $penulis, $tahunTerbit){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function getInfo() {
        return "Judul : {$this->judul}, Penulis : {$this->penulis}, Tahun : {$this->tahunTerbit}";
    }
}

$buku1 = new Buku("Laskar Pelangi","Andre", "2005");
$buku2 = new Buku("Bumi Manusia","Riski", "2006");
$buku3 = new Buku("Unisan","Ryas", "2007");

echo $buku1->getInfo() . "<br>";
echo $buku2->getInfo() . "<br>";
echo $buku3->getInfo() . "<br>";
?>