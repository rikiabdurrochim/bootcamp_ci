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

    <title>Nilai Mahasiswa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Aplikasi Nilai Mahasiswa</a>
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
    $nama1 = "Ahmad";
    $nama2 = "Ikram";
    $nama3 = "Rudi";
    $nama4 = "Andi";
    $nama5 = "Aldi";
    $nama6 = "Badrun";
    $nama7 = "Cerry";
    $nama8 = "Elis";
    $nama9 = "Fira";
    $nama10 = "Haikal";
    $nilai1 = 90;
    $nilai2 = 50;
    $nilai3 = 70;
    $nilai4 = 77;
    $nilai5 = 90;
    $nilai6 = 88;
    $nilai7 = 54;
    $nilai8 = 23;
    $nilai9 = 0;
    $nilai10 = 98;
    ?>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <h2 style="text-align:center;">DAFTAR NILAI MAHASISWA</h2>
                        <table class="table table-bordered" style="text-align:center;">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA</th>
                                    <th>NILAI</th>
                                    <th>PREDIKAT</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><?= $nama1 ?></td>
                                    <td><?= $nilai1 ?></td>
                                    <td>
                                        <?php
                                        if ($nilai1 > 80) {
                                            $predikat = "A";
                                        } elseif ($nilai1 >= 70) {
                                            $predikat = "B";
                                        } elseif ($nilai1 >= 50) {
                                            $predikat = "C";
                                        } elseif ($nilai1 >= 40) {
                                            $predikat = "D";
                                        } else {
                                            $predikat = "E";
                                        }
                                        ?>
                                        <?= $predikat ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($nilai1 >= 70) {
                                            $status = "LULUS";
                                        } else {
                                            $status = "TIDAK LULUS";
                                        }
                                        ?>
                                        <?= $status ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><?= $nama2 ?></td>
                                    <td><?= $nilai2 ?></td>
                                    <td>
                                        <?php
                                        if ($nilai2 > 80) {
                                            $predikat = "A";
                                        } elseif ($nilai2 >= 70) {
                                            $predikat = "B";
                                        } elseif ($nilai2 >= 50) {
                                            $predikat = "C";
                                        } elseif ($nilai2 >= 40) {
                                            $predikat = "D";
                                        } else {
                                            $predikat = "E";
                                        }
                                        ?>
                                        <?= $predikat ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($nilai2 >= 70) {
                                            $status = "LULUS";
                                        } else {
                                            $status = "TIDAK LULUS";
                                        }
                                        ?>
                                        <?= $status ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><?= $nama3 ?></td>
                                    <td><?= $nilai3 ?></td>
                                    <td> <?php if ($nilai3 > 80) {
                                                $predikat = "A";
                                            } elseif ($nilai3 >= 70) {
                                                $predikat = "B";
                                            } elseif ($nilai3 >= 50) {
                                                $predikat = "C";
                                            } elseif ($nilai3 >= 40) {
                                                $predikat = "D";
                                            } else {
                                                $predikat = "E";
                                            } ?>
                                        <?= $predikat ?>
                                    </td>
                                    <td><?php if ($nilai3 >= 70) {
                                            $status = "LULUS";
                                        } else {
                                            $status = "TIDAK LULUS";
                                        } ?>
                                        <?= $status ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><?= $nama4 ?></td>
                                    <td><?= $nilai4 ?></td>
                                    <td> <?php if ($nilai4 > 80) {
                                                $predikat = "A";
                                            } elseif ($nilai4 >= 70) {
                                                $predikat = "B";
                                            } elseif ($nilai4 >= 50) {
                                                $predikat = "C";
                                            } elseif ($nilai4 >= 40) {
                                                $predikat = "D";
                                            } else {
                                                $predikat = "E";
                                            } ?>
                                        <?= $predikat ?>
                                    </td>
                                    <td><?php if ($nilai4 >= 70) {
                                            $status = "LULUS";
                                        } else {
                                            $status = "TIDAK LULUS";
                                        } ?>
                                        <?= $status ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><?= $nama5 ?></td>
                                    <td><?= $nilai5 ?></td>
                                    <td> <?php if ($nilai5 > 80) {
                                                $predikat = "A";
                                            } elseif ($nilai5 >= 70) {
                                                $predikat = "B";
                                            } elseif ($nilai5 >= 50) {
                                                $predikat = "C";
                                            } elseif ($nilai5 >= 40) {
                                                $predikat = "D";
                                            } else {
                                                $predikat = "E";
                                            } ?>
                                        <?= $predikat ?>
                                    </td>
                                    <td><?php if ($nilai5 >= 70) {
                                            $status = "LULUS";
                                        } else {
                                            $status = "TIDAK LULUS";
                                        } ?>
                                        <?= $status ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><?= $nama6 ?></td>
                                    <td><?= $nilai6 ?></td>
                                    <td> <?php if ($nilai6 > 80) {
                                                $predikat = "A";
                                            } elseif ($nilai6 >= 70) {
                                                $predikat = "B";
                                            } elseif ($nilai6 >= 50) {
                                                $predikat = "C";
                                            } elseif ($nilai6 >= 40) {
                                                $predikat = "D";
                                            } else {
                                                $predikat = "E";
                                            } ?>
                                        <?= $predikat ?>
                                    </td>
                                    <td><?php if ($nilai6 >= 70) {
                                            $status = "LULUS";
                                        } else {
                                            $status = "TIDAK LULUS";
                                        } ?>
                                        <?= $status ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><?= $nama7 ?></td>
                                    <td><?= $nilai7 ?></td>
                                    <td> <?php if ($nilai7 > 80) {
                                                $predikat = "A";
                                            } elseif ($nilai7 >= 70) {
                                                $predikat = "B";
                                            } elseif ($nilai7 >= 50) {
                                                $predikat = "C";
                                            } elseif ($nilai7 >= 40) {
                                                $predikat = "D";
                                            } else {
                                                $predikat = "E";
                                            } ?>
                                        <?= $predikat ?>
                                    </td>
                                    <td><?php if ($nilai7 >= 70) {
                                            $status = "LULUS";
                                        } else {
                                            $status = "TIDAK LULUS";
                                        } ?>
                                        <?= $status ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><?= $nama8 ?></td>
                                    <td><?= $nilai8 ?></td>
                                    <td> <?php if ($nilai8 > 80) {
                                                $predikat = "A";
                                            } elseif ($nilai8 >= 70) {
                                                $predikat = "B";
                                            } elseif ($nilai8 >= 50) {
                                                $predikat = "C";
                                            } elseif ($nilai8 >= 40) {
                                                $predikat = "D";
                                            } else {
                                                $predikat = "E";
                                            } ?>
                                        <?= $predikat ?>
                                    </td>
                                    <td><?php if ($nilai8 >= 70) {
                                            $status = "LULUS";
                                        } else {
                                            $status = "TIDAK LULUS";
                                        } ?>
                                        <?= $status ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><?= $nama9 ?></td>
                                    <td><?= $nilai9 ?></td>
                                    <td> <?php if ($nilai9 > 80) {
                                                $predikat = "A";
                                            } elseif ($nilai9 >= 70) {
                                                $predikat = "B";
                                            } elseif ($nilai9 >= 50) {
                                                $predikat = "C";
                                            } elseif ($nilai9 >= 40) {
                                                $predikat = "D";
                                            } else {
                                                $predikat = "E";
                                            } ?>
                                        <?= $predikat ?>
                                    </td>
                                    <td><?php if ($nilai9 >= 70) {
                                            $status = "LULUS";
                                        } else {
                                            $status = "TIDAK LULUS";
                                        } ?>
                                        <?= $status ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td><?= $nama10 ?></td>
                                    <td><?= $nilai10 ?></td>
                                    <td> <?php if ($nilai10 > 80) {
                                                $predikat = "A";
                                            } elseif ($nilai10 >= 70) {
                                                $predikat = "B";
                                            } elseif ($nilai10 >= 50) {
                                                $predikat = "C";
                                            } elseif ($nilai10 >= 40) {
                                                $predikat = "D";
                                            } else {
                                                $predikat = "E";
                                            } ?>
                                        <?= $predikat ?>
                                    </td>
                                    <td><?php if ($nilai10 >= 70) {
                                            $status = "LULUS";
                                        } else {
                                            $status = "TIDAK LULUS";
                                        } ?>
                                        <?= $status ?>
                                    </td>
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