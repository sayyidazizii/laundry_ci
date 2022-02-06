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
                    <!-- Content Row -->
                    <div class="container w-50 ">
                    <h3 class="text-center">Update Pelanggan</h3>
                        <form action="<?php echo base_url('/Pelanggan/EditPelanggan')?>" method="post">
                                <label for="formGroupExampleInput" class="form-label">Id Pelanggan <span class="badge bg-danger text-light">* Tidak dapat diubah</span></label>
                                        <input type="text" name="id_pelanggan" value="<?php echo $querypelanggan->id_pelanggan ?>"  class="form-control"  id="formGroupExampleInput" readonly>
                                <label for="formGroupExampleInput" class="form-label">Nama Pelanggan</label>
                                        <input type="text" name="nama" value="<?php echo $querypelanggan->nama ?>" class="form-control" id="formGroupExampleInput" placeholder="input nama pelanggan">
                                <label for="formGroupExampleInput" class="form-label">Nama Pelanggan</label>
                                        <input type="email" name="email" value="<?php echo $querypelanggan->email ?>" class="form-control" id="formGroupExampleInput" placeholder="input email">
                                <label for="formGroupExampleInput2" class="form-label">Password</label>
                                        <input type="password" name="password" value="<?php echo $querypelanggan->password ?>" class="form-control" id="formGroupExampleInput2" placeholder="input alamat">
                                <label for="formGroupExampleInput2" class="form-label">Alamat</label>
                                        <input type="text" name="alamat" value="<?php echo $querypelanggan->alamat ?>" class="form-control" id="formGroupExampleInput2" placeholder="input alamat">
                                <label for="formGroupExampleInput2" class="form-label">No Hp</label>
                                        <input type="text" name="nohp" value="<?php echo $querypelanggan->nohp ?>" class="form-control" id="formGroupExampleInput2" placeholder="awali dengan angka">
                                <div class="container mt-3">
                                    <a href="<?php echo site_url()?>/Pelanggan/index"><button type="button"class="btn btn-secondary">Batal</button></a>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                        </form>
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