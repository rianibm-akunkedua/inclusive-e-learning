<?php

session_start();

if(!isset($_SESSION['username'])) {
    $_SESSION['error'] = "Silakan login terlebih dahulu";
    header("Location: index.php");
}

?>

<?php include "komponen/head.php"; ?>

<body>
    <?php include "komponen/header.php"; ?>

    <!-- isi -->
    <section>
        <div class="container mt-5">
            <h1>Hai, <?php echo $_SESSION['username']; ?>! Mau belajar apa hari ini?</h1>
            <!-- matpel utama -->
            <br>
            <div class="row mb-5 mt-3">
                <h2 class="mb-4">Mata Pelajaran Utama</h2>
                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none card-target">
                        <div class="card">
                            <img src="img/math.svg" class="card-img-top" alt="Menu Mata Pelajaran Matematika" />
                            <div class="card-body">
                                <span>Matematika</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none card-target">
                        <div class="card">
                            <img src="img/bindo.svg" class="card-img-top" alt="Menu Mata Pelajaran Bahasa Indonesia" />
                            <div class="card-body">
                                <span>Bahasa Indonesia</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="ipa.php" class="text-decoration-none card-target">
                        <div class="card">
                            <img src="img/ipa.svg" class="card-img-top" alt="Menu Mata Pelajaran IPA" />
                            <div class="card-body">
                                <span>IPA</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none card-target">
                        <div class="card">
                            <img src="img/bing.svg" class="card-img-top" alt="Menu Mata Pelajaran Bahasa Inggris" />
                            <div class="card-body">
                                <span>Bahasa Inggris</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- matpel keterampilan -->
            <div class="row mb-5">
                <h2 class="mb-4">Mata Pelajaran Keterampilan</h2>
                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none card-target">
                        <div class="card">
                            <img src="img/pijat.svg" class="card-img-top" alt="Menu Mata Pelajaran Pijat" />
                            <div class="card-body">
                                <span>Pijat</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none card-target">
                        <div class="card">
                            <img src="img/musik.svg" class="card-img-top" alt="Menu Mata Pelajaran Musik" />
                            <div class="card-body">
                                <span>Musik</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none card-target">
                        <div class="card">
                            <img src="img/tata-boga.svg" class="card-img-top" alt="Menu Mata Pelajaran Tata Boga" />
                            <div class="card-body">
                                <span>Tata Boga</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="#" class="text-decoration-none card-target">
                        <div class="card">
                            <img src="img/lari.svg" class="card-img-top" alt="Menu Mata Pelajaran Olahraga Lari" />
                            <div class="card-body">
                                <span>Olahraga Lari</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- isi -->

    <?php include "komponen/footer.php"; ?>
    
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="js/asb.js"></script>
</body>

</html>