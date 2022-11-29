<?php

session_start();

if(!isset($_SESSION['username'])) {
    $_SESSION['error'] = "Silakan login terlebih dahulu";
    header("Location: index.php");
}

?>

<?php include "komponen/head.php"; ?>

<body>
    <!-- navbar -->
    <?php include "komponen/header.php"; ?>

    <main class="container">
        <!-- breadcrumbs -->
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="beranda.php">Menu Utama</a></li>
                <li class="breadcrumb-item" aria-current=""><a href="ipa.php">IPA</a></li>
                <li class="breadcrumb-item" aria-current="">Materi</li>
                <li class="breadcrumb-item active" aria-current="page">Sistem Gerak</li>
            </ol>
        </nav>
        <!-- button kembali -->
        <a href="ipa.php"><button type="button" class="btn shadow-sm text-light"><i class="fa-solid fa-arrow-left-long"></i> Kembali</button></a
      >
      <!-- judul materi -->
      <h1 class="fw-bold mt-4">Rangka</h1>
      <hr />
      <div class="video-ipa mb-2 col-12">
        <iframe width="560" height="315" style="max-width:100%;" src="https://www.youtube.com/embed/yfYlmCyz56w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; " allowfullscreen></iframe>
      </div>
      
      <!-- article -->
      <article style="max-width: 90vw">
        <!-- <button class="btn btn-primary" onclick="manspeak('article')">Play</button> -->
        <button type="button" value="Play" class="btn shadow-sm mb-3" onclick="manspeak('article')"><i class="fa-solid fa-volume-high"></i> Dengar Isi Materi </button>

        <!-- <div id="text-speak">Tes tes satu dua</div> -->
        <div id="text-speak" class="materi-pertama rounded-4 mb-4">
            <p>Rangka merupakan alat gerak pasif dalam tubuh manusia, karena sifatnya hanya sebagai tempat melekatnya otot. Fungsi rangka diantaranya memberi postur tubuh, melekatnya otot, pelindung organ-organ bagian dalam yang lunak, bekerja secara simultan dengan otot dan sistem saraf. Tulang sendiri memiliki beberapa lapisan dari arah luar ke dalam yang secara berturut-turut, ialah periosteum, tulang kompak, tulang spons, endosteum, dan sumsum tulang. Sementara 5 bentuk tulang diantaranya tulang pipa, tulang pipih, tulang pendek, tulak tidak beraturan, dan tulang sesamoid. Rangka aksial sendiri tersusun dari: tulang tengkorak, tulang telinga dan hioid, tulang belakang, tulang dada, dan tulang rusuk. Sedangkan rangka apendikuler tersusun dari: alat gerak atas, gelang bahu, alat gerak bawah, dan gelang panggul.
                
            </p>
        </div>

        <div id="text-speak" class="materi-kedua rounded-4 mb-5">
            <P>Secara keseluruhan, rangka manusia dibedakan menjadi tiga kelompok yaitu:
           
                
                <ul>
                    <li>
                        Rangka tengkorak – Rangka badan yang melindungi organ-organ penting pada tubuh. Rangka badan tersusun atas 33 ruang tulang belakang, tulang rusuk dan tulang dada.
                    </li>
                    <li>
                        Rangka anggota gerak seperti untuk berjalan, lari, memegang benda dan lain-lain. Untuk rangka anggota gerak tersusun atas anggota gerak atas yang meliputi tulang pengumpil, lengan atas, hasta, pergelangan tangan, telapak tangan dan ruas jari tangan. Susunan
                        anggota gerak bawah meliputi tulang paha, tempurung lutut, kering, betis, pergelangan kaki, telapak kaki dan ruas kaki.
                    </li>
                    <li>
                        Rangka kepala yang tersusun atas tulang-tulang seperti tulang dahi, tulang ubun-ubun, tulang pelipis, tulang tengkorak, tulang baji, tulang air mata, tulang pipi, tulang hidung, rahang atas dan bawah dan tulang lidah.
                    </li>
                </ul>
                </p>
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