<?php
$conn = mysqli_connect('localhost','root','','inventory_mochamadalham_xi4');

if(!$conn){
    die("Koneksi Gagal : " . mysqli_connect_error());
}