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
    <title>Beranda | E-Learning Inklusif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- accessibility -->
    <link rel="stylesheet" href="icons/fontawesome5.9.0/css/all.min.css" />
    <link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="css/asb.css" />
    <script src="js/asb.js"></script>
</head>

<body>
    <header>
        <nav class="navbar shadow-sm p-3 mb-4" style="background-color: white">
            <div class="container">
                <a class="active text-decoration-none text-black" href="beranda.php"><i class="fa fa-fw fa-home fa-xl" style="color: #07a5a9"></i>Menu Utama</a>

                <a class="text-decoration-none text-black" href="logout.php"><i class="fa fa-fw fa-user fa-xl" style="color: #07a5a9"></i>Keluar</a>
            </div>
        </nav>
    </header>

    <!-- isi -->
    <section>
        <div class="container">
            <h1 style="font-size: 32px">Hai! Mau belajar apa hari ini?</h1>
            <!-- matpel utama -->
            <div class="row mb-4 mt-3">
                <h2 class="fw-bold">Mata Pelajaran utama</h2>

                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card">
                            <img src="img/1-1-math.jpg" class="card-img-top" alt="Menu Mata Pelajaran Matematika" />
                            <div class="card-body">
                                <h3 class="card-title text-black fw-bold text-center">Matematika</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card">
                            <img src="img/1-2-bindo.jpg" class="card-img-top" alt="Menu Mata Pelajaran Bahasa Indonesia" />
                            <div class="card-body">
                                <h3 class="card-title text-black fw-bold text-center">Bahasa Indonesia</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="/ipa.html" class="text-decoration-none">
                        <div class="card">
                            <img src="img/1-3-ipa.jpg" class="card-img-top" alt="Menu Mata Pelajaran IPA" />
                            <div class="card-body">
                                <h3 class="card-title text-black fw-bold text-center">IPA</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card">
                            <img src="img/1-4-bing.jpg" class="card-img-top" alt="Menu Mata Pelajaran Bahasa Inggris" />
                            <div class="card-body">
                                <h3 class="card-title text-black fw-bold text-center">Bahasa Inggris</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- matpel keterampilan -->
            <div class="row mb-5">
                <h2 class="fw-bold">Mata Pelajaran Keterampilan</h2>

                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card">
                            <img src="img/1-5-pijat.jpg" class="card-img-top" alt="Menu Mata Pelajaran Pijat" />
                            <div class="card-body">
                                <h3 class="card-title text-black fw-bold text-center">Pijat</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card">
                            <img src="img/1-6-musik.jpg" class="card-img-top" alt="Menu Mata Pelajaran Musik" />
                            <div class="card-body">
                                <h3 class="card-title text-black fw-bold text-center">Musik</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card">
                            <img src="img/1-7-tata boga.jpg" class="card-img-top" alt="Menu Mata Pelajaran Tata Boga" />
                            <div class="card-body">
                                <h3 class="card-title text-black fw-bold text-center">Tata Boga</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card">
                            <img src="img/1-8-lari.jpg" class="card-img-top" alt="Menu Mata Pelajaran Olahraga Lari" />
                            <div class="card-body">
                                <h3 class="card-title text-black fw-bold text-center">Olahraga Lari</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- isi -->

    <footer class="text-lg-start">
        <div class="text-center p-3" style="background-color: #006266; color: white">Dirancang Oleh Riani BM © 2022</div>
    </footer>
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="js/asb.js"></script>
</body>

</html>