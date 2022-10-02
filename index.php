<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Index</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <?php require_once __DIR__ . "/style.php" ?>
   </head>
   <body>
      <div id="hero-section-menu" class="hero-section-menu">
	 <div class="navbar">
	    <span id="tanggalWaktu" class="tanggalWaktu"></span>
	 </div>
	 <div class="catatan-pelanggaran">
	 <?php 
	       require_once __DIR__ . "/getConnection.php";

	       $connection =  getConnection();
	       $results = $connection->prepare("select * from catat_pelanggaran");
	       $results->execute();

	       $data = $results->fetchAll();

	       foreach($data as $catatanPelanggaran){ ?>
		  <div class="pelanggar">
		     <span>
			<span class="nama-pelanggar"><?= $catatanPelanggaran['nama']?></span>
			<span class="kelas-pelanggar"><?= $catatanPelanggaran['kelas']?></span>
			<div class="pelanggaran-pelanggar"><?= $catatanPelanggaran['pelanggaran']?></div>
		     </span>
		     <span class="feature">
			<button class="button-update"><a href="update.php?nama=<?= $catatanPelanggaran['nama']?>&kelas=<?= $catatanPelanggaran['kelas']?>&pelanggaran=<?= $catatanPelanggaran['pelanggaran'] ?>"><i class='bx bx-edit satu'></i></a></button>
			<button onclick="return alertBox('<?= $catatanPelanggaran['nama']; ?>')" class="button-delete"><i class='bx bx-trash dua'></i></button>
		     </span>
		  </div>
	<?php	}?>
		  <div class="container-button-bottom">
		     <div class="button-bottom">
			<a class="button-to-insert"  href="insert.php"><button>Tambah</button></a>
			<button onclick="return alertExcelBox()" class="button-to-excel">Convert ke excel</button>
		     </div>
		  </div>
		  <div id="container-alert" class="container-alert">
		     <div class="alert">
			<p>Anda yakin ingin menghapus ini?</p>
			<div class="pilihan">
			   <button id="cancel" class="cancel">Cancel</button>
			   <button id="ok" class="ok"><a id="ok-id">OK</a></button>
			</div>
		     </div>
		  </div>
		  <div id="container-alert-excel" class="container-alert">
		     <div class="alert">
			<p>Anda yakin ingin melakukan convert ke excel?</p>
			<div class="pilihan">
			   <button id="cancel-excel" class="cancel">Cancel</button>
			   <button id="ok-excel" class="ok"><a href="toExcel.php">OK</a></button>
			</div>
		     </div>
		  </div>
      </div>
   </body>
   <script>
      const tanggalWaktu = document.getElementById("tanggalWaktu");
      const dt = new Date();
      const hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
      const bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
      tanggalWaktu.innerHTML = hari[dt.getDay()]+ " " + dt.getDate() + " " + bulan[dt.getMonth()] + " " + dt.getFullYear();

      const cancel = document.getElementById("cancel");
      const cancelExcel = document.getElementById("cancel-excel");
      const containerAlert = document.getElementById("container-alert");
      const containerAlertExcel = document.getElementById("container-alert-excel");
      const ok = document.getElementById("ok");
      const okExcel = document.getElementById("ok-excel");

      function alertBox(nama){
	 containerAlert.style.display = "flex";
	 const okId = document.getElementById("ok-id");
	 const href = document.createAttribute("href");
	 href.value = `src/kelola.php?delete=${nama}`;
	 okId.setAttributeNode(href);
      }				

      function alertExcelBox(){
	 containerAlertExcel.style.display = "flex";
      }

      okExcel.onclick = function(){
	 containerAlertExcel.style.display = "none";
      }

      cancel.onclick = function(){
       	 containerAlert.style.display = "none";
      }

      cancelExcel.onclick = function(){
       	 containerAlertExcel.style.display = "none";
      }

   </script>
</html>
