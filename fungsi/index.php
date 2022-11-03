<?php
// cara membuat function
function ngoding(){

}
// function bisa di kategorikan menggunakan public, protected, private
class vscode{
    public function coding_php(){

    }
}

// mencoba buat fungsi
function sapa_teman(){
    echo "<h1>Hai Gais<h1>";
    echo "<h3>Ketemu Lagi Sama GW<h3>";
}

// mencoba membuat fungsi yang ada parameter
function teman($teman_gw, $umur){
    echo "<h2>Hey Disini GW Sama {$teman_gw}</h2>";
    echo "<h2>Umur Dia Segini {$umur}</h2>";
} 

// cara panggil fungsi
// tuliskan nama fungsinya 
sapa_teman();

// jika fungsi menggunakan parameter, harus di tulis saat panggilannya
teman("adi", 20);

// mencoba membuat fungsi mengguanakan percabankan
function kasir($nama, $jumlah){
    echo "<h3> Hai {$nama}, Terima Kasih Telat Berkunjung!!</h3>";
    echo "<h3> Dan Jangan Lupa Kembali Lagi!!</h3>";

    //
    if ($jumlah > 10){
        echo "<h3>Gookil, Kamu Dapat Mobil Karena Telah Berkunjung Sebanyak {$jumlah} Kali </h3>";
    }
}

// panggil 
kasir("ADI", 20);

?>