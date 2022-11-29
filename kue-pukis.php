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

    <main class="container">
        <!-- breadcrumbs -->
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="beranda.php">Menu Utama</a></li>
                <li class="breadcrumb-item" aria-current=""><a href="tata-boga.php">Tata Boga</a></li>
                <li class="breadcrumb-item" aria-current="">Materi</li>
                <li class="breadcrumb-item active" aria-current="page">Kue Pukis</li>
            </ol>
        </nav>

        <!-- button kembali -->
        <a href="tata-boga.php"><button type="button" class="btn shadow-sm text-light"><i class="fa-solid fa-arrow-left-long"></i> Kembali</button></a
      >
      <!-- judul materi -->
      <h1 class="fw-bold mt-4">Kue Pukis</h1>
      <hr />
      <div class="video-kue-pukis mb-2 col-12">
        <iframe width="560" height="315" style="max-width:100%;" src="https://www.youtube.com/embed/vR0XO9o6IKQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; " allowfullscreen></iframe>
      </div>

      <!-- article -->
      <article style="max-width: 90vw">
        <!-- <button class="btn btn-primary" onclick="manspeak('article')">Play</button> -->
        <button type="button" value="Play" class="btn shadow-sm mb-3" onclick="manspeak('article')"><i class="fa-solid fa-volume-high"></i> Dengar Isi Materi</button>

        <!-- <div id="text-speak">Tes tes satu dua</div> -->
        <div id="text-speak" class="rounded-4 mb-5">
          <p>Bahan yang diperlukan</p>
          <p>2 butir telur ayam, 150 gram gula pasir, 250 gram terigu protein sedang, 300 ml santan, setengah sendok teh ragi instan, 3 sendok makan kental manis putih, secukupnya vanili</p>
        </div>
      </article>
    </main>

    <!-- footer -->
    <?php include "komponen/footer.php"; ?>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- <script src="js/script.js"></script> -->
    <!-- script aksesibilitas -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="/js/asb.js"></script>
  </body>
</html>