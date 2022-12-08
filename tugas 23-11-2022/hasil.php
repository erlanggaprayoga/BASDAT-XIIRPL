<?php 
    $files = $_FILES;
    $folder_upload = "./assets/uploads";
    
    if(!is_dir($folder_upload)){
        mkdir($folder_upload, 0777, $rekursif = true);
    }
    
    $fileFoto = (object) @$_FILES['foto'];

    $uploadFotoSukses = move_uploaded_file(
        $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
    );

        $files = $_FILES;
        $folder_upload = "./assets/uploads";

        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $nama_ayah = $_POST['nama_ayah'];
        $nama_ibu = $_POST['nama_ibu'];
        $alamat = $_POST['alamat'];

        if($uploadFotoSukses){
            $link = "{$folder_upload}/{$fileFoto->name}";
            echo "Foto : <a href='{$link}'>{$fileFoto->name}</a>";
            echo "<br>";
        }
        

        echo "Nama = $nama"."<br>";
        echo "Jurusan = $jurusan"."<br>";
        echo "Nama ayah = $nama_ayah"."<br>";
        echo "Nama ibu = $nama_ibu"."<br>";
        echo "Alamat = $alamat". "<br>";

?>