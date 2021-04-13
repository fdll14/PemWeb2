<?php

class Mahasiswa{
    private $nimmhs;
    private $namamhs;
    private $nilaimhs;

    function __construct($nim,$nama,$nilai){
        $this->nimmhs = $nim;
        $this->namamhs = $nama;
        $this->nilaimhs = $nilai;
    }

    function Show(){
            echo '<br><br>';
            echo '<center>';
            echo '===================================<br>';
            echo 'NIM : '.$this->nimmhs.'<br>';
            echo 'Nama : '.$this->namamhs.'<br>';
            echo 'Nilai : '.$this->nilaimhs.'<br>';
            echo '===================================<br>';
            echo '</center>';
        }
        
}

?>