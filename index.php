<?php

include 'config.php';

error_reporting(0);

session_start();

if(isset($_SESSION['username'])) {
    header("Location: beranda.php");
}

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: beranda.php");
    } else {
        echo "<script>alert('Username atau password Anda salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | E-Learning Inklusif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- accessibility -->
    <link rel="stylesheet" href="icons/fontawesome5.9.0/css/all.min.css" />
    <link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="css/asb.css" />
    <link rel="stylesheet" href="css/adjustment-login.css" />
    <script src="js/asb.js"></script>
</head>

<body>
    <header>
        <nav class="navbar fixed-top p-3 mb-5">
            <div class="container">
                <h1 class="navbar-brand mb-0 fw-bold" style="color: #2447f9">#BelajarTanpaBatas</h1>
            </div>
        </nav>
    </header>
    <!-- Login -->
    <sectio class="mt-5">
        <div class="container mt-5 pt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card border-0 rounded">
                        <div class="card-body p-5">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <svg class="mx-auto my-3 pl-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" style="color: #2447f9" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg>
                            </div>
                            <form action="" class="login-form" method="post">
                                <?php if(isset($_SESSION['error'])){ ?>
                                    <script>
                                        alert('<?php echo $_SESSION['error']; session_destroy(); ?>');
                                    </script>
                                <?php } ?>
                                    <div class="form-group">
                                        <label for="name" class="form-label">Username</label>
                                        <input type="text" name="username" id="username" class="form-control mb-2" placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control mb-2" placeholder="" />
                                    </div>

                                    <div class="text-center mt-3 mb-4">
                                        <button class="form-control btn" name="submit" >Masuk</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </sectio>
    <!-- Login -->
    <footer class="text-lg-start">
        <!-- Grid container -->
        <div class="container">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-7 col-md-12 mb-4 mb-md-0 p-5">
                    <h3 class="fw-bold">Sekilas Info</h3>

                    <p>
                        Situs ini merupakan rancangan desain inklusif dari penelitian skripsi/tugas akhir. <br />Sesuai dengan namanya, rancangan situs ini diharapkan dapat bersifat inklusif yaitu, dapat digunakan oleh anak dengan kebutuhan khusus dan
                        anak non berkebutuhan khusus. Pengguna dapat mengatur kontras, memperbesar tampilan, mendengarkan materi/soal, serta merekam jawaban soal.
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-5 col-md-12 mb-4 mb-md-0 p-5">
                    <h3 class="fw-bold">Kontak</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="mailto:rianimatialu@gmail.com">rianimatialu@gmail.com</a>
                        </li>
                        <li>
                            <a href="mailto:riani.bernadet@ti.ukdw.ac.id">riani.bernadet@ti.ukdw.ac.id</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <div class="text-center p-3" style="background-color: #2447f9; color: white">Dirancang Oleh Riani BM © 2022</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="js/asb.js"></script>
</body>

</html>