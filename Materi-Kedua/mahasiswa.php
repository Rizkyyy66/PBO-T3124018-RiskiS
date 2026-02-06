<?php 
class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;

    public function __construct($nim, $nama, $prodi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function getProfile(){
        return "[$this->nim]$this->nama-$this->prodi";
    }
}

$m1 = new mahasiswa("T312401","Riski","Teknik Informatika");
echo $m1->getProfile();
?>