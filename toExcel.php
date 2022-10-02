<?php

header("content-type: application/vnd-ms-excel");
header("content-disposition: attachment; filename=laporan-pelanggaran.xls");

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();
$results = $connection->prepare("SELECT * FROM catat_pelanggaran");
$results->execute();

$data = $results->fetchAll();

?>
<table border="1px">
   <thead>
      <tr>
	 <td>Nama</td>
	 <td>Kelas</td>
	 <td>Pelanggaran</td>
	 <td>Waktu Pelanggaran</td>
      </tr>
   </thead>
   <tbody>
   <?php foreach($data as $dataPelanggaran){ ?>
	   <tr>
	    <td><?= $dataPelanggaran['nama']?></td>		
	    <td><?= $dataPelanggaran['kelas']?></td>		
	    <td><?= $dataPelanggaran['pelanggaran']?></td>		
	    <td><?= $dataPelanggaran['waktu_pelanggaran']?></td>		
	   </tr> 
   <?php } ?>
   </tbody>
</table>
