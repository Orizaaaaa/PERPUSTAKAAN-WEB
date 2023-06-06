<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda</title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Style/halaman-utama.css" />



  <!-- slick -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- slick end-->


  <!-- bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!-- bootsrap end -->
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid ">
      <a class="navbar-brand fw-bold" href="<?php echo site_url('halaman_utama') ?>">Noobies Book</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex fw-semibold">
          <li class="nav-item me-4">
            <a class="nav-link active" aria-current="page" href="<?php echo site_url('halaman_utama') ?>">Home</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="#rekomended">Recomended</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('halaman_buku') ?>">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('history') ?>"> History</a>
          </li>
        </ul>
        <a href="<?php echo site_url('login/logout') ?>"style="color: white;" onclick="return confirm('Apakah Anda yakin akan Logout?');">
        <button class="btn">Log Out</button>
        </a> 
      </div>
    </div>
  </nav>
  <!-- Navbar End-->

  <!-- Hero 1 -->
  <section class="container-hero-1 mt-5 mx-auto">
    <div class="row d-flex align-items-center row-cols-lg-2 row-cols-1 ">
      <div class="col mt-4 ">
        <h2>New Releases This Week</h2>
        <p class="w-100 mt-4">
          The new releases this week offer a variety of literary adventures. Whether you're looking for an escape
          into the world of fantasy, delving into thought-provoking topics, or exploring the history of IT, we have
          something that will captivate every reader's interest.
        </p>
        <a href="<?php echo site_url('halaman_buku') ?>"> <button class="btn mt-4">Booking Now </button></a>
      </div>
      <div class="col">
        <img src="<?php echo base_url();?>assets/Animation.svg" alt="" />
      </div>
    </div>
  </section>
  <!-- Hero 1 -->

  <!-- hero 2 -->
  <section class="container-hero-2" id="rekomended">
    <h4 class="fw-semibold ">Recomended For You </h4>
    <div class="caraosel d-flex ">

      <div class="buku1 d-flex mt-2 gap-3 ">
        <div class="cover">
          <img src="<?php echo base_url();?>assets/Product photo.svg">
        </div>
        <div class="caption-button ">
          <h6>The Time Has Come</h6>
          <p>Lindbergh's Pharmacy is an Athens...</p>
          <button class="btn fw-semibold mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Choose
            Book</button>
        </div>
      </div>

      <div class="buku1 d-flex mt-2 gap-3">
        <div class="cover">
          <img src="<?php echo base_url();?>assets/Product photo (1).svg">
        </div>
        <div class="caption-button  ">
          <h6>I Want a Catastsrope</h6>
          <p>With global warming projected ...</p>
          <button class="btn fw-semibold mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Choose
            Book</button>
        </div>
      </div>

      <div class="buku1 d-flex mt-2 gap-3">
        <div class="cover">
          <img src="<?php echo base_url();?>assets/Product photo (2).svg">
        </div>
        <div class="caption-button  ">
          <h6>My Goverment</h6>
          <p>Pharmacy is an Athens, institution...</p>
          <button class="btn fw-semibold mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Choose
            Book</button>
        </div>
      </div>

      <div class="buku1 d-flex mt-2 gap-3">
        <div class="cover">
          <img src="<?php echo base_url();?>assets/buku3.svg">
        </div>
        <div class="caption-button  ">
          <h6>Forget a Mentor</h6>
          <p>In this powerful yet practical and...</p>
          <button class="btn fw-semibold mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Choose
            Book</button>
        </div>
      </div>

      <div class="buku1 d-flex mt-2 gap-3">
        <div class="cover">
          <img src="<?php echo base_url();?>assets/buku4.svg">
        </div>
        <div class="caption-button  ">
          <h6>Pride and Protest</h6>
          <p>A woman goes head-to-head CEO of...</p>
          <button class="btn fw-semibold mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Choose
            Book</button>
        </div>
      </div>


    </div>

    <div class="button-move d-flex justify-content-center mt-5">
      <a href="<?php echo site_url('halaman_buku') ?>" style="color: white;"><button class="btn fw-semibold w-25 "> Show More <img src="<?php echo base_url();?>assets/arrow-right.png"></a>
      </button>
    </div>
  </section>
  <!-- hero 2 end -->

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
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Masukan Nama">
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

  <!-- hero 3 -->
  <section class="container-hero-3">
    <div class="row p-3 rounded-3 mb-4 d-flex justify-content-between">
      <div class="col ">
        <h3 class="fw-bold mb-4">Noobies Book.</h3>
        <p>Our library book booking system provides convenient and efficient access, ensuring you get the
          desired books without having to wait. Together, let's explore the world of knowledge through the
          books available in our library.</p>
      </div>

      <div class="col d-flex flex-column gap-2 col-lg-2 col-12">
        <h5 class="fw-bold mb-4">Menu</h5>
        <a href="#">Home</a>
        <a href="#">About Us</a>
      </div>

      <div class="col d-flex flex-column gap-2  ">
        <h5 class="fw-bold mb-4 ">Follow Me</h5>
        <a href="https://instagram.com/noobies.io?igshid=MmJiY2I4NDBkZg==" target="_blank">Instagram </a>
        <a href="https://github.com/Orizaaaaa" target="_blank">Github</a>
      </div>
    </div>
  </section>
  <!-- hero 3 end-->







  <!-- slick -->
  </script>
  <!-- initialize jQuery Library -->
  <script src="<?php echo base_url();?>assets/slick/jquery/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/slick/slick-carousel/slick.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>
  </script>
  <!-- slick end -->

  <!-- bootsrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <!-- bootsrap js end-->
</body>

</html>