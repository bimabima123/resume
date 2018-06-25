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
        <li class="breadcrumb-item active">Education</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Education</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Tempat Sekolah</th>
                  <th>Tahun</th>
                  <th>Jurusan</th>
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
                  <td><?php echo $h['nama']; ?></td>
                  <td><?php echo $h['tempat']; ?></td>
                  <td><?php echo $h['tahun']; ?></td>
                  <td><?php echo $h['jurusan']; ?></td>
                  <td><a href="<?php echo base_url('Education/delete/').$h['id_sekolah']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> <a href="<?php echo base_url('Education/edit/').$h['id_sekolah'];  ?>" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a></td>
                 
                </tr>
              </tbody>
            <?php $no++; } ?>
        <a href="<?php echo base_url('Education/add'); ?>" class="btn btn-primary btn-sm" style="margin-bottom: 10px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
<?php  include "konten/footer_admin.php"; ?>
  </div>
</body>

</html>
