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
        <li class="breadcrumb-item active">Edit Data</li>
      </ol>
</div>
<!-- form -->
<div class="container">
	<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Edit Data Education</div>
        <div class="card-body">
        	<form action="<?php echo base_url('education/proses_edit'); ?>" method="post">
				<div class="form-group">
			<input type="hidden" name="id_sekolah" class="form-control" value="<?php echo $id_sekolah ?>"><br>
				<input type="text" name="nama" class="form-control" value="<?php echo $nama ?>"><br>
				<input type="text" name="tempat" class="form-control" value="<?php echo $tempat ?>"><br>
				<input type="text" name="tahun" class="form-control" value="<?php echo $tahun ?>"><br>
				<input type="text" name="jurusan" class="form-control" value="<?php echo $jurusan ?>">
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