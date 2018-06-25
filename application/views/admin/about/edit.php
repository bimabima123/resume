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
          <a href="<?php echo base_url('About'); ?>">About</a>
        </li>
        <li class="breadcrumb-item active">Edit Data</li>
      </ol>
</div>
<!-- form -->
<div class="container">
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data About</div>
        <div class="card-body">
          <form action="<?php echo base_url('About/proses_edit'); ?>" method="post">
        <div class="form-group">
        <input type="hidden" name="id_tentang" class="form-control" value="<?php echo $id_tentang; ?>"><br>
        <textarea type="text" name="alamat" class="form-control" value=""><?php echo $alamat ?></textarea><br>
        <input type="text" name="status" class="form-control" value="<?php echo $status ?>"><br>
        <input type="text" name="agama" class="form-control" value="<?php echo $agama ?>"><br>
        <input type="text" name="no_hp" class="form-control" value="<?php echo $no_hp ?>"><br>
        </div>            
        <input type="text" name="email" class="form-control" value="<?php echo $email; ?>"><br>
        <input type="text" name="kewarganegaraan" class="form-control" value="<?php echo $kewarganegaraan; ?>"><br>
          <button name="submit" class="btn btn-primary btn-sm"><i class="fa fa-send"></i> Kirim</button>
          </form>
        </div>
    </div>
</div>
 <?php include "konten/footer_admin.php"; ?>
</div>
</body>
</html>