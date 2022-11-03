<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Persuratan</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">App Surat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Surat Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Surat Keluar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Monitoring
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Surat Masuk</a>
                        <a class="dropdown-item" href="#">Surat Keluar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Disposisi</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <br><br><br>

    <?php
    $no = 1;
    $nama1 = "ahmad";
    $nama2 = "badrun";
    $nama3 = "diki";
    $nim1 = "198203";
    $nim2 = "210921";
    $nim3 = "220088";
    $nilaiuts1 = 70;
    $nilaiuas1 = 70;
    $nilaiuts2 = 80;
    $nilaiuas2 = 80;
    $nilaiuts3 = 90;
    $nilaiuas3 = 90;
    ?>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <h2>DAFTAR NILAI MAHASISWA</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Total Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><?= $nama1 ?></td>
                                    <td><?= $nim1 ?></td>
                                    <td><?= $nilaiuts1 + $nilaiuas1 ?></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><?= $nama2 ?></td>
                                    <td><?= $nim2 ?></td>
                                    <td><?= $nilaiuts2 + $nilaiuas2 ?></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><?= $nama3 ?></td>
                                    <td><?= $nim3 ?></td>
                                    <td><?= $nilaiuts3 + $nilaiuas3 ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

</html>