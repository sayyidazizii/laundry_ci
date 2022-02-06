<?php $this->load->view('Frontend/top')?>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php $this->load->view('Frontend/nav')?>
            <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="container ">
                    <h3 class="text-center">Pesanan <?php echo ($this->session->userdata('nama')) ?></h3>
                    <div class="container-fluid">

                <div class="container-md">
                <table class="table caption-top">
                    <div class="caption mb-3">
                    </div>

                <thead>
                        <tr class="text-center">
                            <th scope="col">Id Pesanan</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Id Paket</th>
                            <th scope="col">Berat</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Total Bayar</th>
                            <th scope="col">Status</th>
                            <th scope="col">Masuk</th>
                            <th scope="col">Kembali</th>

                            <?php if ($_SESSION['level'] == 'A'){?>
                            <th scope="col">Aksi</th>
                            <?php }?>

                        </tr>
                </thead>
                    <tbody>
                    <?php
                    $count = 0;
                    foreach ($querypesanan as $row) {
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
                                    <p class="text-light badge bg-primary"><?php echo  $row->status?></p>
                                    <?php }?>
                                    <?php if ($row->status == 'dijemput'){?>
                                    <p class="text-light badge bg-secondary">Segera <?php echo  $row->status?></p>
                                    <?php }?>
                                    <?php if ($row->status == 'proses'){?>
                                    <p class="text-light badge bg-warning"><?php echo  $row->status?></p>
                                    <?php }?>
                                    <?php if ($row->status == 'selesai'){?>
                                    <p class="text-light badge bg-success"><?php echo  $row->status?></p>
                                    <?php }?>
                            </td>
                            <td><?php echo  $row->tgl_masuk?></td>
                            <td><?php echo  $row->tgl_kembali?></td>
                        </tr>
                    <?php }?>
                    </tbody>
                    </table>
                    </div>


            </section>
        </main>
        <!-- Footer-->
        <?php $this->load->view('Frontend/footer')?>
        <!-- Bootstrap core JS-->
        <?php $this->load->view('Frontend/bottom')?>