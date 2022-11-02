<?php 
//pewarisan

//induk
class komputer {
    //property
    public $merk;
    public $prosesor;
    public $memory;

    //fungsi
    public function beli_komputer(){
        return "beli komputer baru";
    }
}

// class turunan
class laptop extends komputer {
    public function lihat_spek(){
        return "merk: $this->merk,prosesor: $this->prosesor,memory: $this->memory";
    }
}

?>