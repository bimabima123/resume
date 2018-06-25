<?php 
	include "konten/header_admin.php";
 	include "konten/sidebar_admin.php";
 ?>
 <div class="content-wrapper">
 <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('Dashboard'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('Education'); ?>">Education</a>
        </li>
        <li class="breadcrumb-item active">Tambah Data</li>
      </ol>
</div>
<!-- form -->
<div class="container">
	<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Education</div>
        <div class="card-body">
        	<form action="<?php echo base_url('education/proses_tambah'); ?>" method="post">
				<div class="form-group">
				<input type="text" name="nama" class="form-control" placeholder="Masukan Nama Sekolah"><br>
				<input type="text" name="tempat" class="form-control" placeholder="Masukan Nama tempat"><br>
				<input type="text" name="tahun" class="form-control" placeholder="Masukan Nama tahun"><br>
				<input type="text" name="jurusan" class="form-control" placeholder="Masukan Nama jurusan">
				</div>        		
        	<button name="submit" class="btn btn-primary btn-sm"><i class="fa fa-send"></i> Kirim</button>
        	</form>
        </div>
  	</div>
</div>
 <?php include "konten/footer_admin.php"; ?>
</div>
</body>
</html>