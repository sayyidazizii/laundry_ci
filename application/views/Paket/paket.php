<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Petugas Laundry- Dashboard</title>

        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url()?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?php echo base_url()?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">


    </head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('layout/navbar')?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <?php $this->load->view('layout/header')?>
                     <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Paket Laundry</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <!-- Content Row -->
                   
                    <div class="container-md">
                    <table class="table caption-top">
                        <div class="caption mb-3">
                            <?php if ($_SESSION['level'] == 'A'){?>
                            <!-- Button trigger modal tambah paket -->
                                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#ModalPaket">
                                    <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Tambah Paket
                                </a>

                            
                            <?php }?>
                        </div>

                    <thead>
                            <tr class="text-center">
                                <th scope="col">Id Paket</th>
                                <th scope="col">Jenis Paket</th>
                                <th scope="col">harga</th>
                                <th scope="col">Estimasi</th>

                                <?php if ($_SESSION['level'] == 'A'){?>
                                <th scope="col">Aksi</th>
                                <?php }?>

                            </tr>
                    </thead>
                        <tbody>
                        <?php
                        $count = 0;
                        foreach ($paket as $row) {
                            $count= $count + 1;				
                        
                        ?>
                            <tr class="text-center">
                                <th scope="row"><?php echo $row->id_paket ?></th>
                                <td><?php echo  $row->nama_paket?></td>
                                <td><?php echo  $row->harga?></td>
                                <td><?php echo  $row->estimasi?> Hari</td>

                                <?php if ($_SESSION['level'] == 'A'){?>
                                <td><a href="<?php echo base_url('/Paket/halaman_edit') ?>/<?php echo $row->id_paket ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="<?php echo base_url('Paket/fungsiDelete') ?>/<?php echo $row->id_paket ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                                <?php }?>

                            </tr>
                        <?php }?>
                        </tbody>
                        </table>
                        </div>
                    <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('layout/footer')?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="<?php echo site_url()?>/Login/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>assets/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url()?>assets/admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url()?>assets/admin/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url()?>assets/admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>
  

         <!-- Modal tambah Paket -->
<div class="modal fade" id="ModalPaket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Paket</h5>
            </div>
                    <div class="modal-body">
                          <div class="mb-3">
                            <form action="<?php echo base_url('/Paket/TambahPaket')?>" method="post">
                                <label for="formGroupExampleInput" class="form-label">Nama Paket</label>
                                    <input type="text" name="nama_paket" class="form-control" id="formGroupExampleInput" placeholder="input nama paket" require>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Harga</label>
                                    <input type="text" name="harga" class="form-control" id="formGroupExampleInput2" placeholder="input harga per kilo" require>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Estimasi</label>
                                    <input type="text" name="estimasi" class="form-control" id="formGroupExampleInput2" placeholder="estimasi dalam hari" require>
                            </div>
                                <button type="submit" class="btn btn-primary">simpan</button>
                            </form>
                            </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>