<?php $this->load->view('Frontend/top')?>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php $this->load->view('Frontend/nav')?>
            <section>            
            <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="container w-80 ">
                    <h3 class="text-center">Pilih Paket</h3>
                            <!-- card order -->
                        <div class="row row-cols-1 row-cols-md-3 g-3">
                        <?php
                            $count = 0;
                            foreach ($paket as $row) {
                                $count= $count + 1;				
                            
                            ?>
                            <div class="col">
                                <div class="card h-100">
                                <div class="card-header">
                                        <small class="text-muted"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i> Paket <?php echo $row->id_paket?></small>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row->nama_paket?></h5>
                                        <p class="card-text">Tarif Per Kg</p>
                                    <h3 class="card-text">Rp<?php echo $row->harga?>,00
                                    <?php  if($this->session->userdata('level') == 'P'){?>
                                        <span>
                                        <a href="<?php echo base_url('/Frontend/req/'.$row->id_paket)?>" class="btn btn-primary">
                                        <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Pesan
                                        </a>
                                        </span>
                                    <?php } ?>    
                                    </h3>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Estimasi Selesai <?php echo $row->estimasi?> Hari</small>
                                    </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>                  
                            <!-- end card -->
                    </div>

            </section>
        </main>
        <!-- Footer-->
        <?php $this->load->view('Frontend/footer')?>
        <!-- Bootstrap core JS-->
        <?php $this->load->view('Frontend/bottom')?>


