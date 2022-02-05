<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-5.1.1-dist/css/bootstrap.min.css">
    <title>Register Dasboard</title>
</head>
<body>  
    <div class="container">
    <div class="container" style="position:relative;margin-top:10%;display: flex;align-items: center;justify-content: center">
        <div class="card text">
            <div class="card-body">
            <form action="<?php echo site_url()?>/Register/Regis" method="POST">
                <h2 class="text-center" style="font-family:Lato">Registrasi</h2> 
                <?php $pesan = $this->session->flashdata('pesan');?>
                <?php if ($pesan):?>
                    <div class="alert alert-danger">
                        <strong>Registrasi Gagal!</strong>Username atau Password Sudah Ada!
                    </div>
                <?php endif?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <div class="row">
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </div>
                    <div class="col-sm-3 mt-2">
                        <a  class="text-primary" href="<?php echo site_url()?>/Login/index">Login</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url()?>assets/bootstrap-5.1.1-dist/js/bootstrap.min.js"></script>
 
</body>
</html>