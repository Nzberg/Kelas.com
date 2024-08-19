
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kelas.com</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link href="{{ asset('img/kelas-ico.png')}}" rel="icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="{{ asset('img/kelas.png')}}" alt="">
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Benefit</a></li>
          <li><a href="#">Paket</a></li>
          <li><a href="#">Kelas</a></li>
          <li><a href="#">Kontak Kami</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <section id="hero" class="hero section dark-background">
      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 text-center">
              <h2>Tingkatkan Performa Bisnis Anda</h2>
              <p>Semua solusi untuk mempermudah Training dan Up-skilling karyawan di perusahaan</p>
              <a href="#" class="btn-get-started">Ajukan Demo</a>
            </div>
          </div>
        </div>
      </div>

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-interval="false">
        <div class="carousel-item active">
          <img src="https://img.freepik.com/free-photo/coworker-having-meeting_1098-16495.jpg?ga=GA1.1.1983142791.1714463428&semt=ais_hybrid" alt="">
        </div>
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
      </div>

    </section>
    <section class="client">
        <div class="container" data-aos="fade-up">
            <h2 class="text-center fw-bold mb-5">Telah Dipercaya oleh 10.000+ Profesional User Dari</h2>
            <div class="row mt-1">
              <div class="col-2">
                <img src="{{ asset('img/logo1.png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-2">
                <img src="{{ asset('img/logo2.png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-2">
                <img src="{{ asset('img/logo3.png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-2">
                <img src="{{ asset('img/logo4.png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-2">
                <img src="{{ asset('img/logo5.png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-2">
                <img src="{{ asset('img/logo6.png')}}" alt="" class="img-fluid">
              </div>
            </div>
        </div>
    </section>
    <section id="features" class="features section">
      <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Bagaimana Kelas Center Membantu Anda?</h2>
            <p>Kami menghadirkan platform pembelajaran yang komprehensif untuk memberdayakan Karyawan anda. Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</p>
        </div>
        <ul class="nav nav-tabs row  g-2 d-flex" data-aos="fade-up" data-aos-delay="100" role="tablist">

          <li class="nav-item col-3" role="presentation">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1" aria-selected="true" role="tab">
              <h4>Kelas.com</h4>
            </a>
          </li>
          <li class="nav-item col-3" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" aria-selected="false" tabindex="-1" role="tab">
              <h4>Kelas.work</h4>
            </a>
          </li>
          <li class="nav-item col-3" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3" aria-selected="false" tabindex="-1" role="tab">
              <h4>Video Learning + Live Webinar</h4>
            </a>
          </li>
          <li class="nav-item col-3" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4" aria-selected="false" tabindex="-1" role="tab">
              <h4>Inquiry Learning</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
          <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h4>Optimalkan potensi karyawan Anda <br>dengan Learning Management System (LMS)</h4>
                <p>
                  Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegritas. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Issued Certified</span></li>
                  <p>Berikan Kemudahan dalam mengatur dan mendsitribusikan sertifikat kepada setiap karyawan</p>
                  <li><i class="bi bi-check2-all"></i> <span>On Boarding</span></li>
                  <p>Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung</p>
                  <li><i class="bi bi-check2-all"></i> <span>Training on-Demand</span></li>
                  <p>Training on-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda</p>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="https://img.freepik.com/free-photo/medium-shot-business-partners-reviewing-documentation-office_1098-19162.jpg?ga=GA1.1.1983142791.1714463428&semt=ais_hybrid" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h4>Optimalkan potensi karyawan Anda <br>dengan Learning Management System (LMS)</h4>
                <p>
                  Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegritas. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Issued Certified</span></li>
                  <p>Berikan Kemudahan dalam mengatur dan mendsitribusikan sertifikat kepada setiap karyawan</p>
                  <li><i class="bi bi-check2-all"></i> <span>On Boarding</span></li>
                  <p>Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung</p>
                  <li><i class="bi bi-check2-all"></i> <span>Training on-Demand</span></li>
                  <p>Training on-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda</p>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="https://img.freepik.com/free-photo/closeup-two-smiling-coworkers-using-tablet_1262-3503.jpg?ga=GA1.1.1983142791.1714463428&semt=ais_hybrid" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h4>Optimalkan potensi karyawan Anda <br>dengan Learning Management System (LMS)</h4>
                <p>
                  Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegritas. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Issued Certified</span></li>
                  <p>Berikan Kemudahan dalam mengatur dan mendsitribusikan sertifikat kepada setiap karyawan</p>
                  <li><i class="bi bi-check2-all"></i> <span>On Boarding</span></li>
                  <p>Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung</p>
                  <li><i class="bi bi-check2-all"></i> <span>Training on-Demand</span></li>
                  <p>Training on-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda</p>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="https://img.freepik.com/free-photo/auditor-explaining-results-audit-client_1163-5275.jpg?ga=GA1.1.1983142791.1714463428&semt=ais_hybrid" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="features-tab-4" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h4>Optimalkan potensi karyawan Anda <br>dengan Learning Management System (LMS)</h4>
                <p>
                  Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegritas. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Issued Certified</span></li>
                  <p>Berikan Kemudahan dalam mengatur dan mendsitribusikan sertifikat kepada setiap karyawan</p>
                  <li><i class="bi bi-check2-all"></i> <span>On Boarding</span></li>
                  <p>Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung</p>
                  <li><i class="bi bi-check2-all"></i> <span>Training on-Demand</span></li>
                  <p>Training on-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda</p>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="https://img.freepik.com/free-photo/business-meeting_53876-89022.jpg?ga=GA1.1.1983142791.1714463428&semt=ais_hybrid" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section id="recent-blog-posts" class="recent-blog-posts section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Lebih dari 2000+ Learning Video</h2>
        <p>Kami juga menyediakan banyak pelatihan yang beragam, pelatihan disusun dan dibuat oleh tim kurikulum
            professional bersama tim video professional untuk menghasilkan video dengan kualitas tinggi</p>
        </div>
      <div class="container">
        <div class="row gy-5">
          <div class="col-xl-3 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('img/blog/blog-1.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Public Speaking : Merdeka Dalam Bicara</h3>
                <div class="meta d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Pandji Pragiwaksono</span>
                  <div class="d-flex align-items-center">
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Presenter Televisi & Komika</span>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('img/blog/blog-1.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Public Speaking : Merdeka Dalam Bicara</h3>
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Pandji Pragiwaksono</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Presenter Televisi & Komika</span>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('img/blog/blog-1.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Public Speaking : Merdeka Dalam Bicara</h3>
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Pandji Pragiwaksono</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Presenter Televisi & Komika</span>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('img/blog/blog-1.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Public Speaking : Merdeka Dalam Bicara</h3>
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Pandji Pragiwaksono</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Presenter Televisi & Komika</span>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="#" class="logo d-flex align-items-center">
            <img src="{{ asset('img/footer.png')}}" class="img-fluid" alt="">
          </a>
          <p>&#169; 2021 Landify UI Kit. All rights reserved</p>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Company</h4>
          <ul>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Ajukan Demo</a></li>
            <li><a href="#">Kelas.Work</a></li>
            <li><a href="#">Kelas.Com</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Kebijakan</h4>
          <ul>
            <li><a href="#">Kebijakan Privasi</a></li>
            <li><a href="#">Syarat & Ketentuan</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hubungi Kami</h4>
          <ul>
            <li><a href="#"><i class="bi-envelope"></i> Nabilla.Anggraini@kelas.com</a></li>
            <li><a href="#"><i class="bi-phone"> +62 811 3366 763 (Nabilla Anggraini)</i></a></li>
          </ul>
        </div>
      </div>
    </div>

  </footer>
  <script>
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>

  <script src="{{ asset('js/main.js')}}"></script>

</body>

</html>