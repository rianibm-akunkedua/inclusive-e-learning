<?php

session_start();

if(!isset($_SESSION['username'])) {
    $_SESSION['error'] = "Silakan login terlebih dahulu";
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu Mata Pelajaran Tata Boga | E-Learning Inklusif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- accessibility -->
    <link rel="stylesheet" href="icons/fontawesome5.9.0/css/all.min.css" />
    <link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="css/asb.css" />
    <script src="js/asb.js"></script>
</head>

<body>
    <header>
        <nav class="navbar shadow-sm p-3 mb-2" style="background-color: white">
            <div class="container">
                <a class="active" href="beranda.php"><i class="fa fa-fw fa-home" style="color: #07a5a9"></i>Menu Utama</a>

                <a href="logout.php"><i class="fa fa-fw fa-user" style="color: #07a5a9"></i>Keluar</a>
            </div>
        </nav>
    </header>

    <!-- breadcrumbs -->
    <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="beranda.php">Menu Utama</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tata Boga</li>
            </ol>
        </div>
    </nav>

    <!-- navigasi tab -->
    <section class="container" id="tabs">
        <nav>
            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-materitataboga-tab" data-bs-toggle="tab" data-bs-target="#nav-materitataboga" type="button" role="tab" aria-controls="nav-materitataboga" aria-selected="true">
                    <h1>Materi</h1>
                </a>
                <a class="nav-link" id="nav-tugastataboga-tab" data-bs-toggle="tab" data-bs-target="#nav-tugastataboga" type="button" role="tab" aria-controls="nav-tugastataboga" aria-selected="false">
                    <h1>Tugas</h1>
                </a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-materitataboga" role="tabpanel" aria-labelledby="nav-materitataboga-tab" tabindex="0">
                <div class="row">
                    <div class="col-4 mt-3">
                        <div id="list-materi-tataboga" class="list-group">
                            <h2 class="fw-bold">Semua Topik</h2>
                            <a class="list-group-item list-group-item-action border-0 list-group-item-info" href="#list-materi-tataboga-1">Kue Kering</a>
                            <a class="list-group-item list-group-item-action border-0 list-group-item-info" href="#list-materi-tataboga-2">Kue Basah</a>
                            <a class="list-group-item list-group-item-action border-0 list-group-item-info" href="#list-materi-tataboga-3">Makanan Pembuka</a>
                            <a class="list-group-item list-group-item-action border-0 list-group-item-info" href="#list-materi-tataboga-4">Makanan Pokok</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div data-bs-spy="scroll" data-bs-target="#list-materi-tataboga" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                            <div class="kue-kering mb-5 mt-3">
                                <h3 id="list-materi-tataboga-1">Kue Kering</h3>
                                <hr />

                                <h4>Kue Kacang</h4>

                                <hr />
                                <h4>Nastar</h4>
                                <hr />
                                <h4>Kastangel</h4>
                                <hr />
                                <h4>Putri Salju</h4>
                            </div>
                            <div class="kue-basah mb-5">
                                <h3 id="list-materi-tataboga-2">Kue Basah</h3>
                                <hr />

                                <a href="kue-pukis.php">
                                    <h4>Kue Pukis</h4>
                                </a>

                                <hr />
                                <h4>Klepon</h4>
                                <hr />
                                <h4>Onde-onde</h4>
                                <hr />
                                <h4>Putu Ayu</h4>
                            </div>
                            <div class="makanan-pembuka mb-5">
                                <h3 id="list-materi-tataboga-3">Makanan Pembuka</h3>
                                <hr />

                                <h4>Bakwan</h4>

                                <hr />
                                <h4>Martabak Telur</h4>
                                <hr />
                                <h4>Risoles</h4>
                                <hr />
                                <h4>Tahu Isi</h4>
                            </div>
                            <div class="makanan-pokok mb-5">
                                <h3 id="list-materi-tataboga-4">Makanan Pokok</h3>
                                <hr />

                                <h4>Bubur</h4>

                                <hr />
                                <h4>Nasi Uduk</h4>
                                <hr />
                                <h4>Nasi Goreng</h4>
                                <hr />
                                <h4>Nasi Kuning</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-tugastataboga" role="tabpanel" aria-labelledby="nav-tugastataboga-tab" tabindex="0">
                <div class="row mt-4">
                    <div class="col-3">
                        <aside class="card p-3">
                            <h5 class="">Tugas Terbaru</h5>
                            <p class="text-secondary fw-bold small m-0">Tidak ada tugas</p>

                            <button type="button" class="btn shadow-sm text-black btn-sm mt-3" style="background-color: #ffddd1">Lihat Lainnya</button>
                        </aside>
                    </div>
                    <div class="col-9">
                        <div class="kue-kering mb-5">
                            <h3>Kue Kering</h3>
                            <hr />

                            <h4>Tugas Kue Kacang</h4>

                            <hr />
                            <h4>Tugas Nastar</h4>
                            <hr />
                            <h4>Tugas Kastangel</h4>
                            <hr />
                            <h4>Tugas Putri Salju</h4>
                        </div>
                        <div class="kue-basah mb-5">
                            <h3>Kue Basah</h3>
                            <hr />

                            <h4>Tugas Kue Pukis</h4>

                            <hr />
                            <h4>Tugas klepon</h4>
                            <hr />
                            <h4>Tugas Onde-onde</h4>
                            <hr />
                            <h4>Tugas Putu Ayu</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    s
    <footer class="text-lg-start">
        <div class="text-center p-3" style="background-color: #006266; color: white">Dirancang Oleh Riani BM © 2022</div>
    </footer>
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="js/asb.js"></script>
</body>

</html>

</html>