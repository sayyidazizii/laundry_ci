<?php $this->load->view('Frontend/top')?>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php $this->load->view('Frontend/nav')?>
            <section>            
            <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="container w-50" style="position:relative;margin-top:5%;">
                            <div class="card text">
                                <div class="card-header">
                                    Buat Pesanan
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo base_url('/Home/TambahPesanan')?>" method="post">
                            <div class="mb-3">
                                <label hidden for="formGroupExampleInput" class="form-label">id pesanan</label>
                                <input type="text" hidden name="id_pesanan"   class="form-control" id="formGroupExampleInput2" placeholder="" readonly>
                            </div>
                            <div class="mb-3">
                                <label hidden for="formGroupExampleInput" class="form-label">ID Pelanggan</label>
                                <input type="text" hidden name="id_pelanggan" value="<?php echo($this->session->userdata('id_pelanggan'))?>"  class="form-control" id="formGroupExampleInput2" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label hidden for="formGroupExampleInput" class="form-label">Nama Pelanggan</label>
                                <input type="text" hidden name="nama" value="<?php echo($this->session->userdata('nama'))?>"  class="form-control" id="formGroupExampleInput2" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Id Paket</label>
                                <div class="mb-3">
                                <input type="text" name="id_paket" value="<?php echo $querypaket->id_paket?>"  class="form-control" id="formGroupExampleInput2" placeholder="" readonly>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label hidden for="formGroupExampleInput2" class="form-label">Berat <span class="badge bg-danger text-light">*Kosongi Jika Barang Diambil</span></label>
                                    <input hidden type="text" name="jumlah" class="form-control" id="formGroupExampleInput2" placeholder="dalam Kg">
                            </div>
                            <div class="mb-3">
                                <label hidden for="formGroupExampleInput2" class="form-label">Harga Perkilo</label>
                                <input hidden type="text" name="harga"  class="form-control" id="formGroupExampleInput2" placeholder="" readonly>
                            </div>
                            <div class="mb-3">
                                <label  for="formGroupExampleInput2" class="form-label">Jemput Barang ?</label>
                                <select  name="status" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option value="terkirim">tidak</option>
                                    <option value="terkirim">Ya</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Alamat </label>
                                <input type="text"  name="alamat" value="<?php echo($this->session->userdata('alamat'))?>" class="form-control" id="formGroupExampleInput2" placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label hidden for="formGroupExampleInput2" class="form-label">Kembali</label>
                                    <input hidden type="text"  name="tgl_kembali" class="form-control" id="formGroupExampleInput2" placeholder="" readonly>
                            </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-primary">Pesan</button>
                                        </div>
                                        <div class="col-sm-3 mt-2">
                                        <a class="text-primary" href="<?php echo site_url()?>/Frontend/paket">Batal</a>
                                    </div>
                                </div>
                            </form>
                                </div>
                                <div class="card-footer text-muted">
                                    *silahkan isi data dengan benar,segera hubungi admin jika ada kesalahan
                                </div>
                            </div>
                   
                    </div>

            </section>
        </main>
        <!-- Footer-->
        <?php $this->load->view('Frontend/footer')?>
        <!-- Bootstrap core JS-->
        <?php $this->load->view('Frontend/bottom')?>


