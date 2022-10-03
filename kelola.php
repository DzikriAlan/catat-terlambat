<?php

require_once __DIR__ . "/getConnection.php";

$pdo = getConnection();

try{
   if($_SERVER['REQUEST_METHOD'] == "POST" && $_GET['kelola'] == "insert"){
      $nama = $_POST['nama'];
      $kelas = $_POST['kelas'];
      $pelanggaran = $_POST['pelanggaran'];

      $statement = $pdo->prepare("INSERT INTO catat_pelanggaran(nama, kelas, pelanggaran) VALUES(?, ?, ?)");
      $statement->execute([$nama, $kelas, $pelanggaran]);
   }

   if($_SERVER['REQUEST_METHOD'] == "POST" && $_GET['kelola'] == "update"){
      $namaAsId = $_GET['namaAsId'];
      $nama = $_POST['nama'];
      $kelas = $_POST['kelas'];
      $pelanggaran = $_POST['pelanggaran'];

      $statement = $pdo->prepare("UPDATE catat_pelanggaran SET nama = ?, kelas = ?, pelanggaran = ? WHERE nama = ?");
      $statement->execute([$nama, $kelas, $pelanggaran, $namaAsId]);
   }

   if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['delete'])){
      $deleteId = $_GET['delete'];

      $statement = $pdo->prepare("DELETE from catat_pelanggaran WHERE nama = ?");
      $statement->execute([$deleteId]);
   }

   $connection = null;

   header("location: main.php");
   exit();
}catch(PDOException $exception){
   echo "Eror dengan pesan : " . $exception->getMessage();
}
