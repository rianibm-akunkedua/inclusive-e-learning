<?php

session_start();

if(!isset($_SESSION['username'])) {
    $_SESSION['error'] = "Silakan login terlebih dahulu";
    header("Location: index.php");
}

?>

<?php 
$title = "Tugas Gangguan Pencernaan";
include "komponen/head.php"; 
?>

<body>
    <?php include "komponen/header.php"; ?>

    <div class="container">
        <!-- breadcrumbs -->
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="beranda.php">Menu Utama</a></li>
                <li class="breadcrumb-item" aria-current=""><a href="ipa.php">IPA</a></li>
                <li class="breadcrumb-item" aria-current="">Tugas</li>
                <li class="breadcrumb-item active" aria-current="page">Tugas Gangguan Pencernaan</li>
            </ol>
        </nav>

        <a href="ipa.php"><button type="button" class="btn shadow-sm text-light"><i class="fa-solid fa-arrow-left-long"></i> Kembali</button></a
      >
    </div>
    <!-- isi -->
    <div class="container mt-4 mb-2">
      <div class="row desktop">
        <!-- instruksi tugas -->
        <article class="col-9" style="max-width: 90vw">
          <h1 class="fw-bold">Tugas Gangguan Pencernaan</h1>
          <div class="d-flex w-100 justify-content-between">
            <p>100 Poin</p>
            <p>Tenggat: 21 Nov 23.59</p>
          </div>
          <hr class="m-0" />
          <button type="button" value="Play" class="btn mt-3 shadow-sm mb-3" onclick="manspeak('article')"><i class="fa-solid fa-volume-high"></i> Dengar Isi Materi</button>

          <!-- <div id="text-speak">Tes tes satu dua</div> -->
          <div id="text-speak" class="materi-pertama rounded-4">
            <p>Sebutkan dan jelaskan 3 contoh dari gangguan pencernaan pada manusia!</p>
          </div>

          <br />
        </article>

        <!-- tempat kumpul tugas -->
        <aside class="col-3">
          <div class="card" style="width: 12 rem">
            <div class="card-body">
              <h2 class="card-title mt-2" style="font-size: 24px">Kumpul Tugas Anda</h2>
              <hr />
              <div class="justify-content-center">
                <button type="button" class="btn shadow-sm mb-3"><i class="fa-solid fa-plus"></i> Tambah Tugas</button>
                <button type="button" class="btn shadow-sm mb-3"><i class="fa-solid fa-microphone"></i> Rekam Jawaban</button>
              </div>
            </div>
          </div>
        </aside>
      </div>

      <div class="row mobile">
        <!-- instruksi tugas -->
        <article class="col" style="max-width: 90vw">
          <h1 class="fw-bold">Tugas Gangguan Pencernaan</h1>
          <div class="d-flex w-100 justify-content-between">
            <p>100 Poin</p>
            <p>Tenggat: 21 Nov 23.59</p>
          </div>
          <hr class="m-0" />
          <button type="button" value="Play" class="btn mt-3 shadow-sm mb-3" onclick="manspeak('article')"><i class="fa-solid fa-volume-high"></i> Dengar Isi Materi</button>

          <!-- <div id="text-speak">Tes tes satu dua</div> -->
          <div id="text-speak" class="materi-pertama rounded-4">
            <p>Sebutkan dan jelaskan 3 contoh dari gangguan pencernaan pada manusia!</p>
          </div>

          <br />
        </article>

        <!-- tempat kumpul tugas -->
        <aside class="col">
          <div class="card" style="width: 12 rem">
            <div class="card-body">
              <h2 class="card-title mt-2" style="font-size: 24px">Kumpul Tugas Anda</h2>
              <hr />
              <div class="justify-content-center">
                <button type="button" class="btn shadow-sm mb-3"><i class="fa-solid fa-plus"></i> Tambah Tugas</button>
                <button type="button" class="btn shadow-sm mb-3"><i class="fa-solid fa-microphone"></i> Rekam Jawaban</button>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>

    <?php include "komponen/footer.php"; ?>
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <!-- script aksesibilitas -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="js/asb.js"></script>
    <script type="text/javascript" src="js/script-materi-tugas.js"></script>
  </body>
</html>