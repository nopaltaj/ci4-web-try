<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.0/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.0/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.0/css/buttons.bootstrap5.css">
</head>

<body>
<nav class="navbar " data-bs-theme="dark" style="box-shadow: 0px 4px 11px 0px rgb(0 0 0 / 53%);
-webkit-box-shadow: 0px 4px 11px 0px rgb(0 0 0 / 53%);
-moz-box-shadow: 0px 4px 11px 0px rgb(0 0 0 / 53%); ">
        <img src="/assets/logo-dess.png" alt="" class="ms-3" width="143px">
        <img src="/assets/avatar.png" alt="" class=" me-4" height="49px">
    </nav>

    <div class="row " style="width: auto;">
        <div class="d-flex flex-column flex-shrink-0 p-3 " style="width: 280px;  background-color: #274FC7 ; ">
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="<?php echo  base_url() . 'dashboard' ?>" class="nav-link " aria-current="page" style="color: white;">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?php echo  base_url() . 'barang-create' ?>" class="nav-link " style="color:white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2" />
                        </svg>
                        Input Penerimaan Barang
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link  " style="color:white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table" />
                        </svg>
                        Input Penerimaan Surat
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() . 'data-barang' ?>" class="nav-link active " style="color:white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid" />
                        </svg>
                        Penngelolaan Data
                    </a>
                </li>
                
            </ul>
            <hr>
        </div>

        <div class="m-5 col">
            <h1 style="font-size: 30px;">Edit Status</h1>
            <form action="<?= base_url('dataSuratEditProses') ?>" method="POST">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= esc($data_surat['id']); ?>">
                <div class="input-group mb-3">
                    <select class="form-select" name="status" id="">
                        <option value="PENDING" <?= esc($data_surat['status']) == 'PENDING' ? 'selected' : '' ?>>Pending
                        </option>
                        <option value="SUCCESS" <?= esc($data_surat['status']) == 'SUCCESS' ? 'selected' : '' ?>>Success
                        </option>
                    </select>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="http://cdn.datatables.net/2.1.0/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.bootstrap5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.print.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>