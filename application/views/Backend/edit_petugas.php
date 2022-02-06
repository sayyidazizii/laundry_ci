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
                    <h3 class="text-center">Update Petugas</h3>
                        <form action="<?php echo base_url('/Petugas/EditPetugas')?>" method="post">
                                    <label for="formGroupExampleInput" class="form-label">Id Petugas <span class="badge bg-danger text-light">* Tidak dapat diubah</span></label>
                                        <input type="text" name="id" value="<?php echo $querypetugas->id ?>"  class="form-control"  id="formGroupExampleInput" readonly>
                                    <label for="formGroupExampleInput" class="form-label">Username</label>
                                        <input type="text" name="username" value="<?php echo $querypetugas->username ?>" class="form-control" id="formGroupExampleInput" placeholder="input nama petugas">
                                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                                        <input type="text" name="email" value="<?php echo $querypetugas->email ?>" class="form-control" id="formGroupExampleInput2" placeholder="input email">
                                    <label for="formGroupExampleInput2" class="form-label">Password</label>
                                        <input type="password" name="password" value="<?php echo $querypetugas->password ?>" class="form-control" id="formGroupExampleInput2" placeholder="input password">
                                    <label for="formGroupExampleInput2" class="form-label">Level</label>
                                    <div class="md-3">
                                        <select name="level" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                            <option value="A">Admin</option>
                                            <option value="O">Owner</option>
                                            <option value="K">Kasir</option>
                                        </select>
                                    </div>
                                <div class="container mt-3">
                                    <a href="<?php echo site_url()?>/Petugas/index"><button type="button"class="btn btn-secondary">Batal</button></a>
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