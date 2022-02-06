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
                        <h1 class="h3 mb-0 text-gray-800">Pesanan Laundry</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                                
                    </div>
                    <!-- Content Row -->
                     
                    <div class="container-md">
                    <table class="table caption-top">
                        <div class="caption mb-3">
                            <!-- Button trigger modal tambah paket -->
                                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#ModalPetunjuk">
                                    Petunjuk Sistem
                                    <i class="fas fa-question fa-sm fa-fw mr-2 text-gray-400"></i>
                                </a>
                        </div>
                   
                    <div class="container-md">
                    <table class="table caption-top">
                        <div class="caption mb-3">
                        </div>

                    <thead>
                            <tr class="text-center">
                                <th scope="col">Id Pesanan</th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Id Paket</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Total Bayar</th>
                                <th scope="col">Status</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Masuk</th>
                                <th scope="col">Kembali</th>

                                <?php if ($_SESSION['level'] == 'A' or $_SESSION['level'] == 'K'){?>
                                <th scope="col">Aksi</th>
                                <?php }?>

                            </tr>
                    </thead>
                        <tbody>
                        <?php
                        $count = 0;
                        foreach ($pesanan as $row) {
                            $count= $count + 1;				
                        
                        ?>
                            <tr class="text-center">
                                <th scope="row"><?php echo $row->id_pesanan ?></th>
                                <td><?php echo  $row->nama?></td>
                                <td><?php echo  $row->id_paket?></td>
                                <td><?php echo  $row->jumlah?> Kg</td>
                                <td><?php echo  $row->harga?> /Kg</td>
                                <td>Rp.<?php echo  $row->harga * $row->jumlah?></td>
                                <td>
                                    <?php if ($row->status == 'terkirim'){?>
                                    <p class="text-light badge bg-secondary"><?php echo  $row->status?></p>
                                    <?php }?>
                                    <?php if ($row->status == 'dijemput'){?>
                                    <p class="text-light badge bg-primary"><?php echo  $row->status?></p>
                                    <?php }?>
                                    <?php if ($row->status == 'proses'){?>
                                    <p class="text-light badge bg-warning"><?php echo  $row->status?></p>
                                    <?php }?>
                                    <?php if ($row->status == 'selesai'){?>
                                    <p class="text-light badge bg-success"><?php echo  $row->status?></p>
                                    <?php }?>
                                </td>
                                <td><?php echo  $row->alamat?></td>
                                <td><?php echo  $row->tgl_masuk?></td>
                                <td><?php echo  $row->tgl_kembali?></td>


                            <?php if ($_SESSION['level'] == 'A' or $_SESSION['level'] == 'K'){?>
                                <?php if ($row->status == 'terkirim'){?>
                                <td><a href="<?php echo base_url('/Pesanan/halaman_edit') ?>/<?php echo $row->id_pesanan ?>"><button type="button" class="btn btn-secondary"><i
                                class="fas fa-motorcycle  fa-sm text-white-50"></i></button></a>
                                <?php }?>
                                <?php if ($row->status == 'proses'){?>
                                <td><a href="<?php echo base_url('/Pesanan/halaman_edit') ?>/<?php echo $row->id_pesanan ?>"><button type="button" class="btn btn-success"><i
                                class="fas fa-dollar-sign  fa-sm text-white-50"></i></button></a>
                                <?php }?>
                                <?php if ($row->status == 'dijemput'){?>
                                <td><a href="<?php echo base_url('/Pesanan/halaman_edit') ?>/<?php echo $row->id_pesanan ?>"><button type="button" class="btn btn-warning"><i
                                class="fas fa-pen fa-sm text-white-50"></i></button></a>
                                <?php }?>
                                <?php if ($row->status == 'selesai'){?>
                                <td><a href="<?php echo base_url('/Pesanan/index') ?>"><button type="button" class="btn btn-primary"><i
                                class="fas fa-box fa-sm text-white-50"></i></button></a>
                                <?php }?>
                            <?php }?>
                            <?php if ($_SESSION['level'] == 'A'){?>
                                    <a href="<?php echo base_url('Pesanan/fungsiDelete') ?>/<?php echo $row->id_pesanan ?>"><button type="button" class="btn btn-danger"><i
                                class="fas fa-trash fa-sm text-white-50"></i></button></a>
                            <?php }?>        
                                </td>
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
         <div class="modal fade" id="ModalPetunjuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Petunjuk Peggunaan Sistem</h5>
            </div>
                    <div class="modal-body">
                          <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label"><span class="text-danger">1.</span>Ketika Pesanan Pelanggan berhasil masuk kedalam sistem maka status nya adalah <span  class="text-light badge bg-primary">terkirim</span></label>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label"><span class="text-danger">2.</span>jika status pesanan nya adalah <span  class="text-light badge bg-primary">terkirim</span>,silahkan cek barang apakah barang dijemput atau belum,jika sudah di jemput ubah status menjadi <span  class="text-light badge bg-secondary">di jemput</span></label>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label"><span class="text-danger">3.</span>Saat Status Pesanan <span  class="text-light badge bg-secondary">di jemput</span>,ubah lah pesanan menjadi di <span  class="text-light badge bg-warning">proses</span></label>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label"><span class="text-danger">4.</span>Ketika Proses sudah selesai,Timbang Berat pesanan dengan timbangan,Setelah itu edit pesanan dan masukan berat timbangan serta samakan id paket dan tanggal kembali</label>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label"><span class="text-danger">5.</span>Setelah Proses selesai dan pesanan telah dibayar,ubahlah status menjadi <span  class="text-light badge bg-success">selesai</span></label>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-secondary"><i
                                class="fas fa-motorcycle  fa-sm text-white-50"></i>jemput</button></a>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-warning"><i
                                class="fas fa-pen fa-sm text-white-50"></i>Proses</button></a>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-success"><i
                                class="fas fa-dollar-sign  fa-sm text-white-50"></i>Hitung</button></a>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary"><i
                                class="fas fa-box fa-sm text-white-50"></i>Selesai</button></a>
                                </div>
                                <?php if ($_SESSION['level'] == 'A'){?>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-danger"><i
                                class="fas fa-trash fa-sm text-white-50"></i>Delete</button></a>
                                </div>
                                <?php } ?>
                            </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>