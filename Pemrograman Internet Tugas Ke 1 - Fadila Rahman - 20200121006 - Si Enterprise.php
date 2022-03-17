<?php
class bus {
    public function __construct($nama="Bus Blacpink") {
        $this->nama = $nama;
    }
        public function mesin(){
            return "hino"; 
        }
        public function getnamabis(){
            return $this->nama;
        }
    }

class spesifikasi extends bus{
    public function warna(){
        return "Item Pink";
    }
    public function supir(){
        return "Asep";
    }

}

class spesifikasi2 extends bus{
    public function kapasitas(){
        return "48 Seat";
    }
    public function kapasitas2(){
        return "59 Seat";
    }
}


    $bis = new spesifikasi();
    echo $bis->getnamabis();
    echo "<br>";
    echo "Jenis : " . $bis->mesin();
    echo "<br>"; 
    echo "Warna : " . $bis->warna();
    echo "<br>";
    echo "Nama Supir : " . $bis->supir();
    echo "<br>";
    $bis2 = new spesifikasi2();
    echo "Kapasitas bus : " . $bis2->kapasitas();
    echo "<br>";
    echo "Kapasitas bus2 : " . $bis2->kapasitas2();
    echo "<br>";

    echo "<hr>";


    class kereta {
        public function __construct($nama="Pt.Kereta Api indonesia") {
            $this->nama = $nama;
        }
            public function Jenis_Lokomotif(){
                return "CC201 CC203 CC206"; 
            }
            public function getnamakereta(){
                return $this->nama;
            }
        }

 class JenisKereta extends kereta{
    public function kelas(){
     return "Exsekutif Ekonomi Bisnis";
    }
    public function jurusan(){
    return "Bandung";
    }    
    }


    $kereta = new JenisKereta();
    echo $kereta->getnamakereta();
    echo "<br>";
    echo "Kelas Kereta : " . $kereta->kelas();
    echo "<br>";
    echo "Lokomotif : " . $kereta->Jenis_lokomotif();
    echo "<br>";
    echo "Jurusan : " . $kereta->Jurusan();
    echo "<br>";

    ?>
    