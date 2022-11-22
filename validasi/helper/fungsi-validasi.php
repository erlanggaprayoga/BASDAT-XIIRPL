<?php 

require_once 'fungsi-pesan-error.php';


function validasi(array $listinput) {
    // variabel berisi inputan form 
    $request = $_REQUEST;

    // memanggil semua variabel error
    $errors = [];

    // mengakses variabel $listpesanerror
    global $listpesanerror;

    // perulangan untuk array  terluar (berisi nama input)
    foreach ($listinput as $input => $listrules){
        echo "Periksa input <strong>($input)</strong><br>";

        // menggunakan foreach untuk memamnggil semua fungsi yang bernama 'lolos'
        foreach($listrules as $rules) {
            echo "->rules<strong>($rules)</strong><br>";
            // panggil fungsi yang ada nama lolosnya
            $namafungsi = 'lolos'.ucfirst($rules);
            // validasi sesuai input formnya
            $lolos = $namafungsi($request[$input]);
            // buatlah bool (lolos atau tidak lolos)

            // jika tidak lolos maka muncul pesan error
            if (!$lolos){
                if(!is_array($errors[$input])){
                    $errors += [$input => []];
                }
                array_push($errors[$input], $listpesanerror[$rules]($input));
            }
            echo "<br>";
        }

        echo "<br>";
    }
    return $errors;
}

function lolosrequired($nilai){
    return(bool)$nilai;
}

// fungsi validasi email 
function lolosemail($nilai){
    return filter_var($nilai,FILTER_VALIDATE_EMAIL);
}

// fungsi validasi username
function lolosusername($nilai) {
    preg_match("/^[a-zA-Z0-9_]+/",$nilai,$output);
    if (count($output)){
        return $output[0] === $nilai;
    }
    return false;
}

// fungsi validasi usia
function lolosnumeric($nilai){
    return is_numeric($nilai);
}

?>