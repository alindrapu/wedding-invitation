<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Wedding of Peti & Syukron</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;1,300;1,700&family=Poppins:wght@300;400;500;600;700;800&family=Sacramento&family=Work+Sans:ital,wght@0,100;0,300;0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
  <!-- simplyCountdown  -->
  <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css" />
  <script src="countdown/simplyCountdown.min.js"></script>
  <script src="/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

  <script>
    function enableScroll() {
      document.body.classList.remove('unscrollable');

      var audio = new Audio('/sound/sound2.mp3');
      audio.play();
    }
  </script>
</head>


<body class="unscrollable">
  <section id="hero"
    class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
    <main>
      </h4>
      <h4>Pernikahan dari</h4>
      <h1>Peti & Syukron</h1>
      <p>Sabtu, 19 Agustus 2023</p>
      <div class="simply-countdown"></div>
      <?php
      if (isset($_GET["name"])) {
        echo "<h4 class=\"pt-5 mt-5\">Yang Terhormat, Bapak/Ibu/Saudara/i " . ucwords($_GET["name"]) . "</h4>";
      } else {
        echo "<h4 class=\"pt-5 mt-5\">Yang Terhormat, Bapak/Ibu/Saudara/i ";
      }
      ?>
      <div id="#namaundangan"></div>
      <a href="#home" class="btn btn-lg mt-4" onclick="enableScroll()">Lihat Undangan</a>
    </main>
  </section>

  <nav class="navbar navbar-expand-md sticky-top mynavbar">
    <div class="container">
      <a class="navbar-brand" href="#" style="font-weight: 400;">Peti & Syukron</a>
    </div>
  </nav>

  <section id="home" class="home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h2 class="typewrite" data-period="1000" data-type='["Pernikahan"]'></h2>
          <h3>Assalamualaikum Warahmatullahi Wabarakatuh</h3>
          <h4>Maha Suci Allah SWT yang telah menciptakan makhluk-Nya berpasang-pasangan, perkenankanlah kami:</h4>
        </div>
      </div>
      <div class="row couple mt-5">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-8 text-end">
              <p><br></p>
              <h3>Peti Ningsih</h3>
              <p>Putri dari<br> <b>Bapak Jahidin</b><br> dan <br><b>Ibu Umi</b> </p>
            </div>
            <div class="col-4">
              <img src="img/peti.png" alt="Peti Ningsih" class="img-responsive rounded-circle">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-4">
              <img src="img/ucon.png" alt="Syukron Al Azhar" class="img-responsive rounded-circle">
            </div>
            <div class="col-8">
              <p><br></p>
              <h3>Syukron Al Azhar</h3>
              <p>Putra dari<br> <b>Bapak Sandi Suwardi</b><br> dan <br><b>Ibu Tapsiah Meliyani</b> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="info" class="info">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <h2 class="typewrite" data-period="1000" data-type='["Informasi Acara"]'></h2>
          <p class="description"> Dengan memohon rahmat dan ridho Allah SWT <br>
            kami bermaksud menyelenggarakan Akad & Resepsi Pernikahan yang akan dilaksanakan pada :</p>
        </div>
        <div class="row justify-content-center mt-4">
          <div class="col-md-5 col-10">
            <div class="card text-center text-bg-light mb-5">
              <div class="card-header">
                Akad Nikah
              </div>
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-md-6">
                    <i class="bi bi-clock d-block"></i>
                    <span>10.00 WIB</span>
                  </div>
                  <div class="col-md-6">
                    <i class="bi bi-calendar d-block"></i>
                    <span>Sabtu, 19 Agustus 2023</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          <div class="col-md-5 col-10">
            <div class="card text-center text-bg-light">
              <div class="card-header">
                Resepsi Pernikahan
              </div>
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-md-6">
                    <i class="bi bi-clock d-block"></i>
                    <span>11.00 WIB - 17.00 WIB</span>
                  </div>
                  <div class="col-md-6">
                    <i class="bi bi-calendar d-block"></i>
                    <span>Sabtu, 19 Agustus 2023</span>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <p class="alamat">Tempat: Kediaman mempelai wanita, Kampung Dahu RT 001 RW 004, Cikedal, Pandeglang,
                  Banten
                </p>
                <a href="https://maps.app.goo.gl/UtaeoULpR5cdT3BJ6?g_st=iw" target="_blank"
                  class="btn btn-lg mt-0 mb-2 bg-light-subtle">Lihat pada peta</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" class="gallery">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span>Memori Kami</span>
          <h2>Galeri Foto</h2>
        </div>
      </div>

      <div class="row row-cols-md-4 row-cols-sm-3 row-cols-2">
        <div class="col mt-3">
          <a href="img/gallery/img-1.jpg" data-toggle="lightbox" data-gallery="p&s">
            <img src="img/gallery/thumbnail/img-1.jpg" alt="foto 1" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="img/gallery/img-2.jpg" data-toggle="lightbox" data-gallery="p&s">
            <img id="foto2" src="img/gallery/thumbnail/img-2.jpg" alt="foto 2"
              class="img-fluid w-100 rounded align-content-end">
          </a>
        </div>
        <!-- <div class="col mt-3">
          <a href="img/gallery/img-4.jpeg">
            <img src="img/gallery/thumbnail/img-4.jpg" alt="foto" class="img-fluid w-100 rounded">
          </a>
        </div> -->
        <div class="col mt-3">
          <a href="img/gallery/img-3.jpg" data-toggle="lightbox" data-gallery="p&s">
            <img src="img/gallery/thumbnail/img-3.jpg" alt="foto 3" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="img/gallery/img-5.jpeg" data-toggle="lightbox" data-gallery="p&s">
            <img src="img/gallery/thumbnail/img-5.jpg" alt="foto 4" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="img/gallery/img-6.jpeg" data-toggle="lightbox" data-gallery="p&s">
            <img src="img/gallery/thumbnail/img-6.jpg" alt="foto 5" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="img/gallery/img-7.jpeg" data-toggle="lightbox" data-gallery="p&s">
            <img src="img/gallery/thumbnail/img-7.jpg" alt="foto 6" class="img-fluid w-100 rounded">
          </a>
        </div>


      </div>
    </div>
  </section>

  <section id="gifts" class="gifts">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span>DOA RESTU SERTA</span>
          <h2>Hadiah Pernikahan</h2>
          <div class="card">
            <div class="card-body">
              <blockquote class="blockquote mb-1">
                <p>"<i>Dan di antara tanda-tanda kekuasaan-Nya diciptakan-Nya untukmu pasangan hidup dari jenismu
                    sendiri supaya kamu dapat ketenangan hati dan dijadikannya kasih sayang di antara kamu. <br>
                    Sesungguhnya yang demikian menjadi tanda-tanda kebesaran-Nya bagi orang-orang yang berpikir.</i>"
                </p>
                <footer class="blockquote-footer"> Q.S. AR-RUM:21
                </footer>
              </blockquote>
            </div>
          </div>
          <h4>Doa restu anda merupakan karunia yang sangat berarti bagi kami dan jika memberi adalah ungkapan tanda
            kasih anda, maka anda dapat memberi kado secara cashless.</h4>
        </div>
        <div class="row justify-content-center mt-2">
          <div class="col-md-5 col-10">
            <div class="card text-center text-bg-light mb-5">

              <div id="rekening-card" class="card-body rekening">
                <div class="row justify-content-center">
                  <div class="col-md-12">
                    <i class="bi bi-bank d-block"></i>
                    <h3 class="mt-3 mb-7">Bank Central Asia (BCA) <br> A.N Syukron Al Azhar <br>6790284150 </h3>
                    <a href="#gifts" onclick="copyToClipboard('6790284150')"
                      class="btn btn-lg mt-0 mb-2 bg-light-subtle pb-2">Salin No. Rekening</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          <div class="col-md-5 col-10">
            <div class="card text-center text-bg-light ">

              <div id="rekening-card" class="card-body">
                <div class="row justify-content-center">
                  <div class="col-md-10">
                    <i class="bi bi-bank d-block"></i>
                    <h3 class="mt-3 mb-7">Bank Central Asia (BCA) <br> A.N Peti Ningsih <br>8880447107 </h3>
                    <a href="#gifts" onclick="copyToClipboard('8880447107')"
                      class="btn btn-lg mt-0 mb-2 bg-light-subtle pb-2">Salin No. Rekening</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section id="carousel-foto" class="carousel-foto">
    <div class="container">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <img src="img/gallery/img-1.jpg" class="d-block w-100 h-75" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/gallery/img-2.jpg" class="d-block w-100 h-75" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/gallery/img-3.jpg" class="d-block w-100 h-75" alt="...">
          </div>

          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/gallery/img-5.jpeg" class="d-block w-100 h-75" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/gallery/img-6.jpg" class="d-block w-100 h-75" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/gallery/img-7.jpg" class="d-block w-100 h-75 img-fluid" alt="...">
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

  </section> -->

  <section id="close" class="close">
    <div class="container">
      <div class="row justify-content-center mt-2">
        <div class="col-md-8 col-10 text-center pb-5">
          <h2 style="font-weight: 300;">Peti & Syukron</h2>
          <p>Atas kehadiran dan doa restunya kami ucapkan terima kasih.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- <section id="closing-line">
    <div class="container d-inline-block">
      <div class="row justify-content-center"></div>
    </div>
  </section> -->


  <footer id="footer" class="bg-dark pt-5 justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <p class="text-center">Crafted by : Alindra Putra</p>
        <div class="col-1 align-items-center">
          <h3><a href="https://instagram.com/semuaindera" target="_blank"><i class="bi bi-instagram"></i></a></h3>
        </div>
        <div class="col-1 justify-content-center">
          <h3><a href="https://wa.me/6281289389920" target="_blank"><i class="bi bi-whatsapp"></i></a></h3>
        </div>
        <p class="text-light text-center">Copyright &copy; 2023 All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Boostrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <!-- End of Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

  <!-- Simply Countdown Script -->
  <script>
    simplyCountdown('.simply-countdown', {
      year: 2023, // required
      month: 8, // required
      day: 19, // required
      hours: 10, // Default is 0 [0-23] integer
      minutes: 0, // Default is 0 [0-59] integer
      seconds: 0, // Default is 0 [0-59] integer
      words: { //words displayed into the countdown
        days: {
          singular: 'hari',
          plural: 'hari'
        },
        hours: {
          singular: 'jam',
          plural: 'jam'
        },
        minutes: {
          singular: 'menit',
          plural: 'menit'
        },
        seconds: {
          singular: 'detik',
          plural: 'detik'
        }
      },
    })
  </script>
  <!-- End of Simply Countdown Script -->

  <script>
    function copyToClipboard(text) {
      var dummyInput = document.createElement('textarea');
      document.body.appendChild(dummyInput);
      dummyInput.value = text;
      dummyInput.select();
      document.execCommand('copy');
      document.body.removeChild(dummyInput);
      alert("No. Rekening berhasil disalin: " + text);
    }
  </script>

</body>

</html>