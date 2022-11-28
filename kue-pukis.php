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
    <title>Materi Kue Pukis di E-Learning Inklusif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- accessibility -->
    <link rel="stylesheet" href="/icons/fontawesome5.9.0/css/fontawesome.min.cssS" />
    <link rel="stylesheet" href="/css/default.css" />
    <link rel="stylesheet" href="/css/asb.css" />
    <script src="/js/asb.js"></script>

    <!-- baca materi -->
    <script src="https://code.responsivevoice.org/responsivevoice.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=GGk26m4X"></script>
    <script src="/js/script-materi-tugas.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>

<body>
    <!-- navbar -->
    <header>
        <nav class="navbar shadow-sm p-3 mb-2" style="background-color: white">
            <div class="container">
                <a class="" href="beranda.php"><i class="fa fa-fw fa-home" style="color: #07a5a9"></i> Menu Utama</a>

                <a href="logout.php"><i class="fa fa-fw fa-user" style="color: #07a5a9"></i>Keluar</a>
            </div>
        </nav>
    </header>

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
        <a href="tata-boga.php"><button type="button" class="btn shadow-sm text-light" style="background-color: #13699f"><i class="fa-solid fa-arrow-left-long"></i> Kembali</button></a
      >
      <!-- judul materi -->
      <h1 class="fw-bold">Kue Pukis</h1>
      <hr />
      <div class="video-kue-pukis mb-2">
        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/vR0XO9o6IKQ"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>

      <!-- article -->
      <article>
        <!-- <button class="btn btn-primary" onclick="manspeak('article')">Play</button> -->
        <button type="button" value="Play" class="btn shadow-sm text-black mb-3" style="background-color: #ffddd1" onclick="manspeak('article')"><i class="fa-solid fa-volume-high"></i> Dengar Isi Materi</button>

        <!-- <div id="text-speak">Tes tes satu dua</div> -->
        <div id="text-speak" class="p-3 rounded-4 mb-4 shadow">
          <p>Bahan yang diperlukan</p>
          <p>2 butir telur ayam, 150 gram gula pasir, 250 gram terigu protein sedang, 300 ml santan, setengah sendok teh ragi instan, 3 sendok makan kental manis putih, secukupnya vanili</p>
        </div>
      </article>
    </main>

    <!-- footer -->
    <footer class="text-lg-start">
      <div class="text-center p-3" style="background-color: #006266; color: white">Dirancang Oleh Riani BM © 2022</div>
    </footer>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- <script src="js/script.js"></script> -->
    <!-- script aksesibilitas -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="/js/asb.js"></script>
  </body>
</html>