<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--my css-->
  </head>
  <style>
    body{
      mind-height: 3000px;
    }
    .jumbotron{
    padding: 6rem 1rem;
    background-color: #e2edff;
}
#projects{
  background-color: #e2edff;
}
section{
  padding-top: 5rem;
}
  </style>
  <body id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">M. Arizqy Khylmi A.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#project">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- akhir navbar -->
    <!-- jumbotron -->
    <section class="jumbotron text-center">
  <h1 class="display-4">Hello, My name is M. Arizqy Khylmi Alkazhia</h1>
  <p class="lead">Student | SMK Wikrama Bogor</p>
</section>
<!-- akhir jumbotron -->

<!--about-->
<section id="about"> 
<div class ="container">
  <div class="row text-center mb-3">
    <div class="col">
    <img src="asset/img/Photo on 06-06-24 at 07.36.jpg" width="200" class="rounded-circle img-thumbnail">
      <h2>About Me</h2>
    </div>
  </div>
  <div class="row justify-content-center fs-5 text-center">
    <div class="col-md-4">
      <p>Halo, nama saya M. Arizqy Khylmi Alkazhia. Saya seorang Siswa di sekolah SMK Wikrama Bogor. Saat ini saya berada di jurusan PPLG. Saya memiliki minat yang kuat dalam Bidang Game Developer dan Cyber Security, dan selalu mencari peluang untuk belajar dan berkembang, salam kenal.</p>
    </div>
    <div class="col-md-4">
      <p>Saat ini, saya sedang berada di dalam rombel PPLG X-2. PPLG tuh apa sih?Jurusan yang mempelajari cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.</p>
    </div>
  </div>
</div>
</section>

<!--project-->
<section id="projects">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>  My Projects</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-3">
      <div class="card">
  <img src="asset/img/Image 12-06-24 at 20.02.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Project Data siswa</p>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-3">
      <div class="card">
  <img src="asset/img/Image 12-06-24 at 19.58.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Project tiket konser</p>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-3">
      <div class="card">
  <img src="asset/img/Image 12-06-24 at 19.55.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Project Rental motor</p>
  </div>
</div>
      </div>
    </div>
  </div>
</section>


<!--contact-->
<section id="contact">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2> Contact me</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
      <form>
  <div class="mb-3">
    <label for="name" class="form-label">Nama lengkap</label>
    <input type="text" class="form-control" id="name" aria-describedby="namee">
  <div class="mb-3">
    <label for="email" class="form-label">Email </label>
    <input type="email" class="form-control" id="email" aria-describedby="email">

    <div class="mb-3">
  <label for="pesan" class="form-label">pesan</label>
  <textarea class="form-control" id="pesan" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary">kirim</button>
</form>
      </div>
    </div>
  </div>
</section>

<!--foooter-->
<footer class="bg-primary text-white text-center">
  <p>Created with tea by <a href="https://www.linkedin.com/in/m-arizqy-khylmi-8ab41b313" class="text-white fw-bold">M Arizqy Khylmi</a></p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>