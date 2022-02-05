<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laundry[frontend]</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url()?>assets/frontend/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url()?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url()?>assets/frontend/css/styles.css" rel="stylesheet" />
    </head>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url()?>assets/frontend/js/scripts.js"></script>
</body>
</html>