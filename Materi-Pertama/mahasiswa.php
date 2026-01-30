<?php 

class mahasiswa {
    //Property
    public $nim;
    public $nama;
    public $prodi;

    //method
    public function sayHello(){
        return "Hallo, Nama is " . $this->nama . "dengan NIM " . $this->nim . "saya adalah jurusan / prodi" . $this->prodi . " program.";
    }
    
}



//object 1
$mahasiswa1=new mahasiswa('T3124018','Riski','Teknik Informatika');


//object2
$mahasiswa2 = new mahasiswa();
$mahasiswa2->nim = 'T3124018';
$mahasiswa2->nama = 'Riski';
$mahasiswa2->prodi = 'Teknik Informatika';

echo "Dafrar Mahasiswa <br>";
echo "------------------------ <br>";
echo $mahasiswa1->sayHello().'<br>';
echo $mahasiswa2->sayHello().'<br>';


?>