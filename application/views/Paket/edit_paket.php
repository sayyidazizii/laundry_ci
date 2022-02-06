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
                    <h3 class="text-center">Update Paket</h3>
                        <form action="<?php echo base_url('/Paket/EditPaket')?>" method="post">
                                <label for="formGroupExampleInput" class="form-label">Id Paket <span class="badge bg-danger text-light">* Tidak dapat diubah</span></label>
                                        <input type="text" name="id_paket" value="<?php echo $querypaket->id_paket ?>"  class="form-control"  id="formGroupExampleInput" readonly>
                                <label for="formGroupExampleInput" class="form-label">Nama Paket</label>
                                        <input type="text" name="nama_paket" value="<?php echo $querypaket->nama_paket ?>" class="form-control" id="formGroupExampleInput" placeholder="input nama paket">
                                    <label for="formGroupExampleInput2" class="form-label">Harga</label>
                                        <input type="text" name="harga" value="<?php echo $querypaket->harga ?>" class="form-control" id="formGroupExampleInput2" placeholder="input harga per kilo">
                                    <label for="formGroupExampleInput2" class="form-label">Estimasi</label>
                                        <input type="text" name="estimasi" value="<?php echo $querypaket->estimasi ?>" class="form-control" id="formGroupExampleInput2" placeholder="estimasi dalam hari">
                                <div class="container mt-3">
                                    <a href="<?php echo site_url()?>/Paket/index"><button type="button"class="btn btn-secondary">Batal</button></a>
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