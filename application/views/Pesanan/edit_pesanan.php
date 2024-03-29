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
                    <h3 class="text-center">Update Pesanan</h3>
                    <form action="<?php echo base_url('/Pesanan/EditPesanan')?>" method="post">
                                <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Id Pesanan</label>
                                            <input type="text" name="id_pesanan" value="<?php echo $querypesanan->id_pesanan?>" class="form-control" id="formGroupExampleInput2" placeholder="" readonly>
                                </div>
                            <div class="mb-3">
                                <label hidden for="formGroupExampleInput" class="form-label">Id Pelanggan</label>
                                <input type="text" hidden name="id_pelanggan" value="<?php echo $querypesanan->id_pelanggan?>" class="form-control" id="formGroupExampleInput2" placeholder="" readonly>
                            </div>
                            <div class="mb-3">
                                <label hidden for="formGroupExampleInput" class="form-label">Nama Pelanggan</label>
                                <input type="text" hidden name="nama" value="<?php echo $querypesanan->nama?>" class="form-control" id="formGroupExampleInput2" placeholder="" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Paket</label>
                                <input type="text" name="id_paket" value="<?php echo $querypesanan->id_paket?>" class="form-control" id="formGroupExampleInput2" placeholder="" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Berat <span class="badge bg-danger text-light"> * Hitung Berat Jika belum isikan 0 !!</span></label>
                                    <input type="text" value="<?php echo $querypesanan->jumlah?>" name="jumlah" class="form-control" id="formGroupExampleInput2" placeholder="timbang Berat Terlebih dahulu" required>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Hitung Paket <span class="badge bg-danger text-light">* Hitung Total Bayar sesuai ID Paket!!</span></label>
                                <div class="mb-3">
                                    <input type="radio" value="3000" class="btn-check" name="harga" id="option1" autocomplete="off">
                                    <label class="btn btn-primary" for="option1">Paket 1</label>

                                    <input type="radio" value="4000" class="btn-check" name="harga" id="option2" autocomplete="off">
                                    <label class="btn btn-success" for="option2">Paket 2</label>

                                    <input type="radio" value="7000" class="btn-check" name="harga" id="option3" autocomplete="off">
                                    <label class="btn btn-warning" for="option3">Paket 3</label>

                                    <input type="radio" value="10000" class="btn-check" name="harga" id="option4" autocomplete="off">
                                    <label class="btn btn-danger" for="option4">Paket 4</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Status</label>
                                <select  name="status" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option value="terkirim">Terkirim</option>
                                    <option value="dijemput">Sudah Dijemput</option>
                                    <option value="proses">proses</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                                <span class="badge bg-danger text-light">* Ubah status Pesanan</span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Kembali</label>
                                    <input type="date" value="<?php echo $querypesanan->tgl_kembali?>" name="tgl_kembali" class="form-control" id="formGroupExampleInput2" placeholder="" >
                            </div>
                                <button type="submit" class="btn btn-primary">simpan</button>
                                <a href="<?php echo base_url('Pesanan')?>"><button type="button" class="btn btn-secondary">batal</button></a>
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