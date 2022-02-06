<?php $this->load->view('layout/top')?>

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
                                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#ModalPelanggan">
                                    <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Tambah Pelanggan
                                </a>

                            
                            <?php }?>
                        </div>

                    <thead>
                            <tr class="text-center">
                                <th scope="col">Id Pelanggan</th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No Hp</th>

                                <?php if ($_SESSION['level'] == 'A'){?>
                                <th scope="col">Aksi</th>
                                <?php }?>

                            </tr>
                    </thead>
                        <tbody>
                        <?php
                        $count = 0;
                        foreach ($pelanggan as $row) {
                            $count= $count + 1;				
                        
                        ?>
                            <tr class="text-center">
                                <th scope="row"><?php echo $row->id_pelanggan ?></th>
                                <td><?php echo  $row->nama?></td>
                                <td><?php echo  $row->alamat?></td>
                                <td><?php echo  $row->nohp?></td>

                                <?php if ($_SESSION['level'] == 'A'){?>
                                <td><a href="<?php echo base_url('/Pelanggan/halaman_edit') ?>/<?php echo $row->id_pelanggan ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="<?php echo base_url('Pelanggan/fungsiDelete') ?>/<?php echo $row->id_pelanggan ?>"><button type="button" class="btn btn-danger">Delete</button></a>
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
    <?php $this->load->view('layout/bottom')?>
  

         <!-- Modal tambah Paket -->
<div class="modal fade" id="ModalPelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan Baru</h5>
            </div>
                    <div class="modal-body">
                          <div class="mb-3">
                            <form action="<?php echo base_url('/Pelanggan/TambahPelanggan')?>" method="post">
                                <label for="formGroupExampleInput" class="form-label">Nama Pendek</label>
                                    <input type="text" name="nama" class="form-control" id="formGroupExampleInput" placeholder="input nama Pelanggan" require>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">email</label>
                                    <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="input email" require>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="input password" require>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="formGroupExampleInput2" placeholder="input alamat" require>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">No Hp</label>
                                    <input type="text" name="nohp" class="form-control" id="formGroupExampleInput2" placeholder="Input No HP " require>
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