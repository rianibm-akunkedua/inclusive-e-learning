<?php

session_start();

if(!isset($_SESSION['username'])) {
    $_SESSION['error'] = "Silakan login terlebih dahulu";
    header("Location: index.php");
}

?>

<?php 
$title = "IPA";
include "komponen/head.php"; 
?>

<body>
    <?php include "komponen/header.php"; ?>

    <!-- breadcrumbs -->
    <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="beranda.php">Menu Utama</a></li>
                <li class="breadcrumb-item active" aria-current="page">IPA</li>
            </ol>
        </div>
    </nav>

    <!-- navigasi tab -->
    <section class="container" id="tabs">
        <nav>
            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-materiipa-tab" data-bs-toggle="tab" data-bs-target="#nav-materiipa" type="button" role="tab" aria-controls="nav-materiipa" aria-selected="true">
                    <h2>Materi</h2>
                </a>
                <a class="nav-link" id="nav-tugasipa-tab" data-bs-toggle="tab" data-bs-target="#nav-tugasipa" type="button" role="tab" aria-controls="nav-tugasipa" aria-selected="false">
                    <h2>Tugas</h2>
                </a>
            </div>
        </nav>
        <div class="tab-content mt-4" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-materiipa" role="tabpanel" aria-labelledby="nav-materiipa-tab" tabindex="0">
                <div class="row mobile mb-5">
                    <div class="accordion mobile" >
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-materi-ipa-1" aria-expanded="false" aria-controls="accordion-materi-ipa-1">
                                Sistem Gerak
                            </button>
                            </h2>
                            <div id="accordion-materi-ipa-1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <a href="rangka.php" class="text-decoration-none text-black">
                                    <h4>Rangka</h4>
                                </a>
                                <hr />
                                <h4>Sendi</h4>
                                <hr />
                                <h4>Otot</h4>
                                <hr />
                                <h4>Gangguan dan Kelainan Pada Sistem Gerak</h4>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-materi-ipa-2" aria-expanded="false" aria-controls="accordion-materi-ipa-2">
                                Sistem Pencernaan
                            </button>
                            </h2>
                            <div id="accordion-materi-ipa-2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h4>Nutrisi</h4>
                                <hr />
                                <h4>Struktur dan Fungsi Sistem Pencernaan Pada Manusia</h4>
                                <hr />
                                <h4>Gangguan Pada Sistem Pencernaan</h4>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-materi-ipa-3" aria-expanded="false" aria-controls="accordion-materi-ipa-3">
                                Sistem Peredaran Darah
                            </button>
                            </h2>
                            <div id="accordion-materi-ipa-3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h4>Struktur dan Fungsi Sistem Peredaran Darah</h4>
                                <hr />
                                <h4>Gangguan atau Kelainan Pada Sistem Peredaran Darah</h4>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-materi-ipa-4" aria-expanded="false" aria-controls="accordion-materi-ipa-4">
                                Struktur & Fungsi Tumbuhan
                            </button>
                            </h2>
                            <div id="accordion-materi-ipa-4" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h4>Akar, Batang, Daun dan Bunga</h4>
                                <hr />
                                <h4>Jaringan Pada Tumbuhan</h4>
                                <hr />
                                <h4>Teknologi</h4>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-materi-ipa-5" aria-expanded="false" aria-controls="accordion-materi-ipa-5">
                            Fotosintesis
                            </button>
                            </h2>
                            <div id="accordion-materi-ipa-5" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <h4>Konsep Fotosintesis</h4>
                                <hr />
                                <h4>Percobaan Fotosintesis</h4>
                                <hr />
                                <h4>Faktor-Faktor Yang Mempengaruhi Fotosintesis</h4>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row desktop mt-5">
                    <div class="col-4">
                        <div id="list-materi-ipa" class="list-group">
                            <h2 class="fw-bold">Semua Topik</h2>
                            <a class="list-group-item list-group-item-action border-0 list-group-item-info" href="#list-materi-ipa-1">Sistem Gerak</a>
                            <a class="list-group-item list-group-item-action border-0 list-group-item-info" href="#list-materi-ipa-2">Sistem Pencernaan</a>
                            <a class="list-group-item list-group-item-action border-0 list-group-item-info" href="#list-materi-ipa-3">Sistem Peredaran Darah</a>
                            <a class="list-group-item list-group-item-action border-0 list-group-item-info" href="#list-materi-ipa-4">Struktur dan Fungsi Tumbuhan</a>
                            <a class="list-group-item list-group-item-action border-0 list-group-item-info" href="#list-materi-ipa-5">Fotosintesis</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div data-bs-spy="scroll" data-bs-target="#list-materi-ipa" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                            <div class="sistem-gerak mb-5">
                                <h3 id="list-materi-ipa-1">Sistem Gerak</h3>
                                <hr />
                                <a href="rangka.php" class="text-decoration-none text-black">
                                    <h4>Rangka</h4>
                                </a>
                                <hr />
                                <h4>Sendi</h4>
                                <hr />
                                <h4>Otot</h4>
                                <hr />
                                <h4>Gangguan dan Kelainan Pada Sistem Gerak</h4>
                            </div>
                            <div class="sistem-pencernaan mb-5">
                                <h3 id="list-materi-ipa-2">Sistem Pencernaan</h3>
                                <hr />
                                <h4>Nutrisi</h4>
                                <hr />
                                <h4>Struktur dan Fungsi Sistem Pencernaan Pada Manusia</h4>
                                <hr />
                                <h4>Gangguan Pada Sistem Pencernaan</h4>
                            </div>
                            <div class="sistem-peredaran-darah mb-5">
                                <h3 id="list-materi-ipa-3">Sistem Peredaran Darah</h3>
                                <hr />
                                <h4>Struktur dan Fungsi Sistem Peredaran Darah</h4>
                                <hr />
                                <h4>Gangguan atau Kelainan Pada Sistem Peredaran Darah</h4>
                            </div>
                            <div class="struktur-fungsi-tumbuhan mb-5">
                                <h3 id="list-materi-ipa-4">Struktur & Fungsi Tumbuhan</h3>
                                <hr />
                                <h4>Akar, Batang, Daun dan Bunga</h4>
                                <hr />
                                <h4>Jaringan Pada Tumbuhan</h4>
                                <hr />
                                <h4>Teknologi</h4>
                            </div>
                            <div class="fotosintesis mb-5">
                                <h3 id="list-materi-ipa-5">Fotosintesis</h3>
                                <hr />
                                <h4>Konsep Fotosintesis</h4>
                                <hr />
                                <h4>Percobaan Fotosintesis</h4>
                                <hr />
                                <h4>Faktor-Faktor Yang Mempengaruhi Fotosintesis</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-tugasipa" role="tabpanel" aria-labelledby="nav-tugasipa-tab" tabindex="0">
                <div class="row mobile mb-5">
                    <div class="accordion mobile" >
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-materi-ipa-1" aria-expanded="false" aria-controls="accordion-materi-ipa-1">
                                Sistem Gerak
                            </button>
                            </h2>
                            <div id="accordion-materi-ipa-1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h4>Tugas Rangka</h4>
                                <hr />
                                <h4>Tugas Sendi</h4>
                                <hr />
                                <h4>Tugas Otot</h4>
                                <hr />
                                <h4>Tugas Gangguan dan Kelainan Pada Sistem Gerak</h4>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-materi-ipa-2" aria-expanded="false" aria-controls="accordion-materi-ipa-2">
                                Nutrisi
                            </button>
                            </h2>
                            <div id="accordion-materi-ipa-2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h4>Tugas Struktur dan Fungsi Sistem Pencernaan Pada Manusia</h4>
                                <hr />
                                <a href="tugas-gangguan-pencernaan.php" class="text-decoration-none text-black">
                                    <h4>Tugas Gangguan Pada Sistem Pencernaan</h4>
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-materi-ipa-3" aria-expanded="false" aria-controls="accordion-materi-ipa-3">
                                Sistem Peredaran Darah
                            </button>
                            </h2>
                            <div id="accordion-materi-ipa-3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h4>Tugas Struktur dan Fungsi Sistem Peredaran Darah</h4>
                                <hr />
                                <h4>Tugas Gangguan atau Kelainan Pada Sistem Peredaran Darah</h4>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-materi-ipa-4" aria-expanded="false" aria-controls="accordion-materi-ipa-4">
                                Tugas Struktur & Fungsi Tumbuhan
                            </button>
                            </h2>
                            <div id="accordion-materi-ipa-4" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h4>Tugas Akar, Batang, Daun dan Bunga</h4>
                                <hr />
                                <h4>Tugas Jaringan Pada Tumbuhan</h4>
                                <hr />
                                <h4>Tugas Teknologi</h4>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-materi-ipa-5" aria-expanded="false" aria-controls="accordion-materi-ipa-5">
                            Fotosintesis
                            </button>
                            </h2>
                            <div id="accordion-materi-ipa-5" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h4>Tugas Konsep Fotosintesis</h4>
                                <hr />
                                <h4>Tugas Percobaan Fotosintesis</h4>
                                <hr />
                                <h4>Tugas Faktor-Faktor Yang Mempengaruhi Fotosintesis</h4>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row desktop mt-5">
                    <div class="col-4">
                        <aside class="card p-3" style="text-align: left;">
                            <h3 class="">Tugas Terbaru</h3>
                            <p class="text-secondary fw-bold small m-0">Batas waktu besok</p>
                            <a class="text-decoration-none text-black small" href="tugas-gangguan-pencernaan.php">Tugas Gangguan Pada Sistem Pencernaan</a>
                            <hr />
                            <p class="text-secondary fw-bold small m-0">Tenggat: Kamis</p>
                            <a class="text-decoration-none text-black small" href="#">Tugas Rangka</a>
                        </aside>
                        <div class="d-grid mt-2">
                            <button type="button" class="btn shadow-sm btn-bg">Lihat Lainnya</button>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="sistem-gerak mb-5">
                            <h3>Sistem Gerak</h3>
                            <hr />

                            <h4>Tugas Rangka</h4>

                            <hr />
                            <h4>Tugas Sendi</h4>
                            <hr />
                            <h4>Tugas Otot</h4>
                            <hr />
                            <h4>Tugas Gangguan dan Kelainan Pada Sistem Gerak</h4>
                        </div>
                        <div class="sistem-pencernaan mb-5">
                            <h3>Nutrisi</h3>
                            <hr />
                            <h4>Tugas Struktur dan Fungsi Sistem Pencernaan Pada Manusia</h4>
                            <hr />
                            <a href="tugas-gangguan-pencernaan.php" class="text-decoration-none text-black">
                                <h4>Tugas Gangguan Pada Sistem Pencernaan</h4>
                            </a>
                        </div>
                        <div class="sistem-peredaran-darah mb-5">
                            <h3>Sistem Peredaran Darah</h3>
                            <hr />
                            <h4>Tugas Struktur dan Fungsi Sistem Peredaran Darah</h4>
                            <hr />
                            <h4>Tugas Gangguan atau Kelainan Pada Sistem Peredaran Darah</h4>
                        </div>
                        <div class="struktur-fungsi-tumbuhan mb-5">
                            <h3>Struktur & Fungsi Tumbuhan</h3>
                            <hr />
                            <h4>Tugas Akar, Batang, Daun dan Bunga</h4>
                            <hr />
                            <h4>Tugas Jaringan Pada Tumbuhan</h4>
                            <hr />
                            <h4>Tugas Teknologi</h4>
                        </div>
                        <div class="fotosintesis mb-5">
                            <h3>Fotosintesis</h3>
                            <hr />
                            <h4>Tugas Konsep Fotosintesis</h4>
                            <hr />
                            <h4>Tugas Percobaan Fotosintesis</h4>
                            <hr />
                            <h4>Tugas Faktor-Faktor Yang Mempengaruhi Fotosintesis</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "komponen/footer.php"; ?>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="js/asb.js"></script>
</body>

</html>

</html>