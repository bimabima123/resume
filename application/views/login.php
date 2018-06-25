<?php 
  include "konten/header_admin.php";

 ?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="<?php echo base_url('login/proses_login'); ?>" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Masukan Username</label>
            <input class="form-control" id="exampleInputEmail1" type="text" name="username" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
      
      </div>
    </div>
  </div>


 <script src="<?php echo base_url('asset/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('asset/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('asset/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('asset/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('asset/js/sb-admin.min.js'); ?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url('asset/js/sb-admin-datatables.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/sb-admin-charts.min.js'); ?>"></script>

</body>

</html>
