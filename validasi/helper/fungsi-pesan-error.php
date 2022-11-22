<?php 

$listpesanerror = [
    'required' => function($field){
        return "field ($field) harus di isi";
        // pesan error jika tidak di isi
    },
    'email' => function($field){
        return "field ($field) harus berupa email yang valid";
        // pesan error jika isinya belum ada a keong
    },
    'username' => function($field){
        return "field ($field) hanya boleng angka, huruf dan underscore";
        // pesan erroe jika isinya regek
    },
    'numeric' => function($field){
        return "field ($field) harus berupa angka";
        // muncul pesan error jika isinya huruf
    }
]

?>