<?php

$host="sql101.infinityfree.com";
$user="if0_37294131";
$password="NrgW8ILRnKek";
$db="if0_37294131_crud";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>