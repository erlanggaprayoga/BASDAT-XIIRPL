<?php

$files = $_FILES;
$folder_upload = "./assets/uploads";

// Periksa apakah folder sudah ada
if (!is_dir($folder_upload)){
    // Jika tidak ada maka folder harus di buat terlebih dahulu
    mkdir($folder_upload, 0777, $rekursif = true);
}

// simpan masing masing file ke dalam variabel
// simpan file ke dalam array dan ubah menjadi objek
$fileFoto = (object) @$_FILES['foto'];
$fileKtp = (object) @$_FILES['ktp'];

// mulai upload file
$uploadFotoSukses = move_uploaded_file(
    $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
);

$uploadKtpSukses = move_uploaded_file(
    $fileKtp->tmp_name, "{$folder_upload}/{$fileKtp->name}"
);

// Menampilkan Link File yang terupload

if ($uploadFotoSukses) {
    $link = "{$folder_upload}/{$fileFoto->name}";
    echo "Sukses Upload Foto : <a href = '{$link}'> {$fileFoto->name}</a>";
    echo "<br>";
}

if ($uploadKtpSukses) {
    $link = "{$folder_upload}/{$fileKtp->name}";
    echo "Sukses Upload Foto : <a href = '{$link}'> {$fileKtp->name}</a>";
    echo "<br>";
}


// Batas ukuran file yang di upload
if ($fileFoto->size > 1000*2000){
    die("File tidak boleh lebih dari 2MB");
}

// Jenis Gambar yang bisa diupload
if ($fileKtp->type !== 'image/jpg'){
    die ("Foto harus berformat JPG");
}

// echo "<pre>";
// print_r($files);
// echo "</pre>";
?>