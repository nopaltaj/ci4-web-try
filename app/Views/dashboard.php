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
        <div class="">
            <img src="/assets/logo-dess.png" alt="" class="ms-3" width="143px">
        </div>
        <div>
            <a href="/" style="text-decoration: none;">
                <button type="button" class="btn btn-danger me-3 ">Logout</button>
            </a>
            <img src="/assets/avatar.png" alt="" class=" me-4" height="49px">
        </div>

    </nav>

    <div class="row " style="width: auto;">
        <div class="d-flex flex-column flex-shrink-0 p-3 " style="width: 280px;  background-color: #274FC7 ; ">
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
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
                    <a href="<?php echo  base_url() . 'surat-create' ?>" class="nav-link  " style="color:white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table" />
                        </svg>
                        Input Penerimaan Surat
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() . 'data-barang' ?>" class="nav-link  " style="color:white">
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
            <h1 style="font-size: 30px;">Dashboard</h1>
            <h2 style="font-size: 18px; font-weight:bold;" class="mt-4 mb-3">Daftar Penerimaan Barang</h2>

            <table id="barangTable">
                <thead>
                    <tr>
                        <th>Created at</th>
                        <th>No Resi</th>
                        <th>Nama Barang</th>
                        <th>Penerima</th>
                        <th>deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($barang)): ?>
                        <?php foreach ($barang as $item): ?>
                            <tr>
                                <td><?= esc($item['created_at']); ?></td>
                                <td><?= esc($item['resi']); ?></td>
                                <td><?= esc($item['nama_barang']); ?></td>
                                <td><?= esc($item['penerima']); ?></td>
                                <td><?= esc($item['description']); ?></td>
                                <td> <a href="<?php echo base_url('barangedit') . '/' . esc($item['id']); ?>" class="btn btn-info btn-sm">edit</a>
                                    <a href="<?php echo base_url('barangdelete') . '/' . esc($item['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">Tidak ada barang yang tersedia.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <h2 style="font-size: 18px; font-weight:bold;" class="mt-5 mb-3">Daftar Penerimaan Surat</h2>

            <table id="suratTable">
                <thead>
                    <tr>
                        <th>Created at</th>
                        <th>No Surat</th>
                        <th>Penerima</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($surat)): ?>
                        <?php foreach ($surat as $item): ?>
                            <tr>
                                <td><?= esc($item['created_at']); ?></td>
                                <td><?= esc($item['no_surat']); ?></td>
                                <td><?= esc($item['penerima']); ?></td>
                                <td><a href="<?php echo base_url('suratedit') . '/' . esc($item['id']); ?>" class="btn btn-info btn-sm">edit</a>
                                    <a href="<?php echo base_url('suratdelete') . '/' . esc($item['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">Tidak ada surat yang tersedia.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

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
    <script>
        $('#barangTable').DataTable({

        });
    </script>
    <script>
        $('#suratTable').DataTable({

        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>