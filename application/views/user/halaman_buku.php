<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buku</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style/halaman-buku.css">
    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- bootsrap end -->
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="<?php echo site_url('halaman_utama') ?>">Noobies Book.</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex fw-semibold">
                    <li class="nav-item me-4">
                        <a class="nav-link " aria-current="page" href="<?php echo site_url('halaman_utama') ?>">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link " href="#recomended">Recomended</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link active" href="<?php echo site_url('halaman_buku') ?>">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('history') ?>">History</a>
                    </li>
                </ul>
                <a href="<?php echo site_url('login/logout') ?>"style="color: white;" onclick="return confirm('Apakah Anda yakin akan Logout?');">
                <button class="btn">Log Out</button>
                </a> 
            </div>
        </div>
    </nav>

    <!-- navbar end -->

    <!-- halaman buku -->

    <section class="halaman-buku min-vh-100 d-flex align-items-center">
        <div class="container">
            <lottie-player class=" lottiefiles mx-auto"
                src="https://assets1.lottiefiles.com/packages/lf20_eq9hnyso.json" background="transparent" speed="1"
                loop autoplay></lottie-player>
            <input type="text" id="recomended" class=" input form-control form-control-lg shadow-none"
                placeholder="Search Book...">


            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 g-4 mt-5 ">
                <div class="col " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="<?php echo base_url();?>assets/Dilan_ Dia Adalah Dilanku Tahun 1990.jpeg " alt="" srcset=""
                        class="  mb-3 rounded-3">
                    <h5 class="fw-bold">Dilan 1990</h5>
                    <p>Dia adalah dilanku tahun 1990</p>
                </div>
                <div class="col" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="<?php echo base_url();?>assets/Milea_ Suara dari Dilan.jpeg" alt="" srcset="" class="  mb-3 rounded-3">
                    <h5 class="fw-bold">Milea Suara Dari Dilan</h5>
                    <p>Perpisahan adalah upara menyambut hari hari penuh rindu</p>
                </div>
                <div class="col" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="<?php echo base_url();?>assets/filosoi teras.jpg" alt="" srcset="" class="  mb-3 rounded-3">
                    <h5 class="fw-bold">Filosofi Teras</h5>
                    <p>Filsafat yunani untuk mental tanggguh masa kini</p>
                </div>
                <div class="col" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="<?php echo base_url();?>assets/Jalan-Pintas-Menjadi-Master-Reactjs.jpg" alt="" srcset=""
                        class="  mb-3 rounded-3">
                    <h5 class="fw-bold">React.js</h5>
                    <p>Jalan pintas menjadi master React.js</p>
                </div>
                <div class="col" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="<?php echo base_url();?>assets/Uncle Bob's Clean Code_ Irrelevant in the Age of Full-Stack JavaScript_.jpeg"
                        alt="" srcset="" class="  mb-3 rounded-3">
                    <h5 class="fw-bold">Clean Code</h5>
                    <p>A handbook of agile software craftsmanship</p>
                </div>
                <div class="col" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="<?php echo base_url();?>assets/musa.jpg" alt="" srcset="" class="  mb-3 rounded-3">
                    <h5 class="fw-bold">Nabi Musa AS</h5>
                    <p>Membebaskan Bani Israil dan Tenggelamnya Firaun yang Sombong</p>
                </div>
                <div class="col" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="<?php echo base_url();?>assets/A-Z_KONSELING_KRISTEN.jpg" alt="" srcset="" class="  mb-3 rounded-3">
                    <h5 class="fw-bold">A-Z Konseling kristen</h5>
                    <p>konseling merupakan pelayanan yang tidak pernah hilang</p>
                </div>
            </div>
        </div>


    </section>

    <!-- Popup -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <label for="exampleDataList" class="form-label">Masukan data kamu </label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList"
                            placeholder="Masukan Nama">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Confirm Book</button>
                </div>
            </div>
        </div>
    </div>
    <!--popup end  -->
    <!-- halaman buku end -->


    <!-- bootsrap js -->
    <script src="<?php echo base_url();?>assets/Scripts/search.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- bootsrap js end-->

    <script>
        let columns = document.querySelectorAll('.col[data-bs-toggle="modal"]');

        // Loop melalui setiap elemen col
        columns.forEach(function (column) {
            // Tambahkan event listener untuk menghandle klik pada setiap elemen col
            column.addEventListener('click', function () {
                // Dapatkan judul dari elemen "h5" yang ada di dalam elemen col terkait
                let bookTitle = this.querySelector('h5').innerText;

                // Temukan elemen modal title
                let modalTitle = document.querySelector('.modal-title');

                // Perbarui judul modal dengan judul buku yang dipilih
                modalTitle.innerText = bookTitle;
            });
        });
    </script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>