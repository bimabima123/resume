<?php 
  include "konten/header_admin.php";

 ?>

<?php include "konten/sidebar_admin.php"; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('Dashboard'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data About</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Agama</th>
                  <th>No.Handphone</th>
                  <th>Email</th>
                  <th>Negara</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <?php 
                  $no = 1;
                foreach ($tampil as $h) {

               ?>
              <tbody>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo substr($h['alamat'], 0,30); ?></td>
                  <td><?php echo $h['status']; ?></td>
                  <td><?php echo $h['agama']; ?></td>
                  <td><?php echo $h['no_hp']; ?></td>
                  <td><?php echo $h['email']; ?></td>
                  <td><?php echo $h['kewarganegaraan']; ?></td>
                  <td><a href="<?php echo base_url('About/delete/').$h['id_tentang']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> <a href="<?php echo base_url('About/edit/').$h['id_tentang'];  ?>" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a></td>
                 
                </tr>
              </tbody>
            <?php $no++; } ?>
       <!--  <a href="<?php //echo base_url('About/add'); ?>" class="btn btn-primary btn-sm" style="margin-bottom: 10px;"><i class="fa fa-plus"></i> Tambah Data</a> -->
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   
    <!-- Bootstrap core JavaScript-->
<?php  include "konten/footer_admin.php"; ?>
  </div>
</body>

</html>
