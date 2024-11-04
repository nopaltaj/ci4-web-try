<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="position-absolute top-0 start-0"><img src="/assets/Ellipse.png" alt=""></div>

    <div class="mb-5 position-absolute top-50 start-50 translate-middle">
        <div class="text-center">
            <h1>Login</h1>
            <div class="logindesc">Please enter you Login and your Password</div>
        </div>

        <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                         <button type="submit" class="btn btn-success">Submit</button>
                    </div>     
                </form>
    </div>

    <div class="position-absolute bottom-0 start-0">
        <img src="/assets/Ellipse2.png" alt="">
    </div>

    <div class="position-absolute bottom-0 end-0">
        <img src="/assets/Vector 1.png" alt="">
    </div>

</body>

</html>