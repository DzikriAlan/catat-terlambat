<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Update</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <?php require_once __DIR__ . "/style.php" ?>
   </head>
   <body>
      <div class="hero-section">
	 <div class="judul">Edit Pelanggar</div>
	 <form action="kelola.php?kelola=update&namaAsId=<?= $_GET['nama'] ?>" method="post">
	    <div class="form">
	       <div class="input">
		  <input name="nama" type="text" placeholder="Nama Lengkap" value="<?= $_GET['nama']; ?>" required oninvalid="return this.setCustomValidity('Nama lengakp tidak boleh kosong!')" oninput="return setCustomValidity('')"/>
	       </div>
	       <div class="input">
		  <input name="kelas" class="kelas" type="text" placeholder="Kelas" value="<?= $_GET['kelas']; ?>" required oninvalid="return this.setCustomValidity('Kelas tidak boleh kosong!')" oninput="return setCustomValidity('')"/>
	       </div>
	       <div class="input">
	       <input name="pelanggaran" type="text" placeholder="Pelanggaran" value="<?= $_GET['pelanggaran']; ?>" required oninvalid="return this.setCustomValidity('Pelanggaran tidak boleh kosong!')" oninput="return setCustomValidity('')"/>
	       </div>
	    </div>
	    <div class="submit"><button>Tambah</button></div>
	 </form>
      </div>
   </body>
</html>
