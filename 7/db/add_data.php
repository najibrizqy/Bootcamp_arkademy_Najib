<?php
    include "koneksi.php";
    $add = new Bootcamp();
    $add->connect();

    if(isset($_POST['tambah'])){
        $name = $_POST['name'];
        $id_hobi = $_POST['hobby'];
        $id_kategori = $_POST['category'];
        $add->sql("INSERT INTO  nama (name, id_hobby, id_category) VALUES ('$name' , '$id_hobi' , '$id_kategori')");
        $data = $add->collectData();

        $hasil = $add->sql("SELECT * FROM nama WHERE name='$name'");

        if($hasil){
            header("Location:../7.php");    
        }else{
            echo " GAGAL ";
        }
    }
?>