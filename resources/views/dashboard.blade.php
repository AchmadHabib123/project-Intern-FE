<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Graha Wisata Kita</title>
  <link rel="stylesheet" href="/assets/style/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .dropdown-menu {
      color: yellow; /* Warna font kuning */
    }
  </style>
</head>
<body>
    <header class="heading">
        <nav class="navbar">
            <div class="navbar-container"id="navbar">
                <div class="navbar-logo">
                    <img src="assets/images/Group 1.png">
                </div>
                <ul class="navbar-links">
                    <li><a href="#">Homepage</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Daftar Hotel</a></li>
                    <li><a href="#">Bantuan</a></li>
                </ul>
                <div class="navbar-head">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <img class="navbar-img" src="assets/images/flag-id.png">
                        Indonesia (ID)
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-head">
                        <li><a class="dropdown-item" href="#">Indonesia (ID)</a></li>
                        <li><a class="dropdown-item" href="#">English</a></li>
                    </ul>
                </div>
            </div>    
        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="hero-label">
                <div class="hero-line"></div>
                <h5>HOTEL OPERATOR</h5>
            </div>
            <div class="hero-content">
                <h1>Membantu Menjalankan <br> Operasi Bisnis Pariwisata Anda</h1>
                <p>GWA membantu mengoperasikan keseluruhan layanan hotel,<br> menjadikan mitra lebih percaya diri dalam menjalankan bisnis.<br><br></p>
            </div>
            <button class="hero-button">
                <h3>Konsultasikan Bisnis Saya</h3>
            </button>
            <div class="hero-img">
                <img src="{{asset('/assets/images/image 1.png')}}" alt="">
            </div>
            <div class="vector-1"><img src="{{asset('/assets/images/Vector1.png')}}" alt=""></div>
            <div class="vector-2"><img src="{{asset('/assets/images/Vector2.png')}}" alt=""></div>
            <div class="vector-3"><img src="{{asset('/assets/images/Vector3.png')}}" alt=""></div>
            <div class="vector-4"><img src="{{asset('/assets/images/Vector4.png')}}" alt=""></div>
            <div class="vector-5"><img src="{{asset('/assets/images/Vector5.png')}}" alt=""></div>
        </section>
        <section class="workflow">
            <div class="workflow-label">
                <div class="workflow-line"></div>
                <h5>OUR WORKFLOW</h5>
            </div>
            <div class="workflow-title">
                <h1>
                    Proses Kerja Kami dalam <br>Meningkatkan Kualitas Properti
                </h1>
            </div>    
            <div class="workflow-content">
                <div class="workflow-1">
                    <div class="workflow-img">
                        <img src="{{asset('assets/images/achievement 1.png')}}" alt="">
                    </div>
                    <h4>Tantangan</h4>
                    <p>Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut.</p>
                </div>
                <div class="workflow-2">
                    <div class="workflow-img">
                        <img src="{{asset('assets/images/achievement 1 (1).png')}}" alt="">
                    </div>
                    <h4>Rumusan</h4>
                    <p>Setiap tantangan akan dirumuskan menjadi sebuah hal yang harus dicari jalan keluarnya oleh kami</p>
                </div>
                <div class="workflow-3">
                    <div class="workflow-img">
                        <img src="{{asset('assets/images/achievement 1 (2).png')}}" alt="">
                    </div>
                    <h4>Goals</h4>
                    <p>Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</p>
                </div>
                <div class="workflow-4">
                    <div class="workflow-img">
                        <img src="{{asset('assets/images/achievement 1 (3).png')}}" alt="">
                    </div>
                    <h4>Ideas</h4>
                    <p>Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.</p>
                </div>
            </div>
            <div class="workflow-line-bg">
                <img src="{{asset('assets/images/Vector6.png')}}" alt="" />
            </div>
            <div class="eclipse-blue">
                <img src="{{asset('assets/images/Ellipse-blue.png')}}" alt="" />
            </div>
        </section>
        <section class="our-services">
            <div class="our-services-label">
                <div class="our-services-line"></div>
                <h5>OUR SERVICES</h5>
            </div>
            <div class="our-services-title">
                <h1>
                    Apa Saja yang Bisa Kami Bantu ?
                </h1>
            </div>
            <div class="our-services-row">
                <div class="our-services-card">
                    <h2>01</h2>
                    <img src="{{asset('assets/images/image 5.png')}}" alt="" />
                    <h3>Revenue <br>Management Service</h3>
                    <button class="arrow-button">Saya Tertarik 
                        <img src="{{asset('assets/images/arrow-right.svg')}}" alt="" />
                    </button>
                </div>
                <div class="our-services-card">
                    <h2>02</h2>
                    <img src="{{asset('assets/images/image 5 (1).png')}}" alt="" />
                    <h3>Full <br>Manage Service</h3>
                    <button class="arrow-button">Saya Tertarik 
                        <img src="{{asset('assets/images/arrow-right.svg')}}" alt="" />
                    </button>
                </div>
                <div class="our-services-card">
                    <h2>03</h2>
                    <img src="{{asset('assets/images/image 5 (2).png')}}" alt="" />
                    <h3>Asset <br>Monetize Service</h3>
                    <button class="arrow-button">Saya Tertarik 
                        <img src="{{asset('assets/images/arrow-right.svg')}}" alt="" />
                    </button>
                </div>
            </div>
        </section>
        <section class="our-latest">
            <div class="our-latest-label">
                <div class="our-latest-line"></div>
                <h5>OUR LATEST PROJECT</h5>
                <div class="our-latest--line"></div>
            </div>
            <div class="our-latest-title">
                <h1>
                    Project Terbaru Kami
                </h1>
            </div>
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                            <div class="swiper-overlay">
                                <h4>1/3 OPERATIONAL PROJECT</h4>
                                <h1>SERIES SIGNATURE BALI</h1>
                                <P>SERIES SIGNATURE BALI</P>
                            </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-overlay">
                            <h4>2/3 OPERATIONAL PROJECT</h4>
                            <h1>SERIES HOTEL KUNINGAN</h1>
                            <P>SERIES HOTEL KUNINGAN</P>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-overlay">
                            <h4>3/3 OPERATIONAL PROJECT</h4>
                            <h1>SERIES HOTEL SUDIRMAN</h1>
                            <P>SERIES HOTEL SUDIRMAN</P>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev click-prev"></div>
                <div class="swiper-button-next click-next"></div>
            
                <!-- If we need scrollbar -->
            </div>
        </section>
        <section class="our-testimoni">
            <div class="swiper double">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="our-testimoni-label">
                            <div class="our-testimoni-line"></div>
                            <h5>OUR TESTIMONIALS</h5>
                        </div>
                        <div class="our-testimoni-title">
                            <h1>
                                Yang Klien Kami Katakan
                            </h1>
                        </div>
                        <div class="testimoni">
                            <img src="{{asset('/assets/images/quotes-sign.png')}}" alt="">
                            <p>GWA Group membantu hotel saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
                        </div>
                        <div class="client">
                            <img src="{{asset('/assets/images/yello.png')}}" alt="">
                            <h4>Chaim Desmond</h4>
                            <p>CEO of Yellow Hotel</p>
                        </div>
                        <div class="pict-testimoni">
                            <img src="{{asset('/assets/images/pict-testimoni.png')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="our-testimoni-label">
                            <div class="our-testimoni-line"></div>
                            <h5>OUR TESTIMONIALS</h5>
                        </div>
                        <div class="our-testimoni-title">
                            <h1>
                                Yang Klien Kami Katakan
                            </h1>
                        </div>
                        <div class="testimoni">
                            <img src="{{asset('/assets/images/quotes-sign.png')}}" alt="">
                            <p>GWA Group membantu hotel saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
                        </div>
                        <div class="client">
                            <img src="{{asset('/assets/images/yello.png')}}" alt="">
                            <h4>Chaim Desmond</h4>
                            <p>CEO of Yellow Hotel</p>
                        </div>
                        <div class="pict-testimoni">
                            <img src="{{asset('/assets/images/pict-testimoni.png')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="our-testimoni-label">
                            <div class="our-testimoni-line"></div>
                            <h5>OUR TESTIMONIALS</h5>
                        </div>
                        <div class="our-testimoni-title">
                            <h1>
                                Yang Klien Kami Katakan
                            </h1>
                        </div>
                        <div class="testimoni">
                            <img src="{{asset('/assets/images/quotes-sign.png')}}" alt="">
                            <p>GWA Group membantu hotel saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
                        </div>
                        <div class="client">
                            <img src="{{asset('/assets/images/yello.png')}}" alt="">
                            <h4>Chaim Desmond</h4>
                            <p>CEO of Yellow Hotel</p>
                        </div>
                        <div class="pict-testimoni">
                            <img src="{{asset('/assets/images/pict-testimoni.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
        
            </div>
        </section>
        <section class="call-me">
            <div class="call-me-container">
                <div class="call-me-label">
                    <div class="call-me-line"></div>
                    <h5>HUBUNGI KAMI</h5>
                </div>
                <div class="call-me-discuss">
                    <h1>Ingin Mendiskusikan Bisnis Pariwisata Anda?</h1>
                </div>
                <div class="call-me-desc">
                    <p>
                        Ada kepentingan bisnismu yang ingin didiskusikan dengan kami, yuk segera isi form disamping, konsultasinya gratis kok !
                    </p>
                </div>
                <form action="/action_page.php">
                    <div class="row">
                        <label for="fname">Nama Lengkap</label>
                        <input type="text" id="fname" name="person-name" placeholder="Masukan Nama Lenkap">
                    </div>
                    <div class="row">
                        <label for="country">Nama Perusahaan</label>
                        <input type="text" id="country" name="cmpny-name" placeholder="Masukan Nama Perusahaan">
                    </div>
                    <div class="row">
                        <label for="number">Nomor Whatsapp Aktif</label>
                        <input type="number" id="number" name="number" placeholder="Masukkan Nomor Whatsapp">
                    </div>
                    <div class="row">
                        <button type="button">Jadwalkan Konsultasi
                            <img src="{{asset('assets/images/arrow-right.svg')}}" alt="" />
                        </button>
                    </div>
                </form>
                <div class="design-element">
                    <img class="img-element-1" src="{{asset('assets/images/Ellipse-1.png')}}" alt="" />
                    <img class="img-element-3" src="{{asset('assets/images/Ellipse-3.png')}}" alt="" />
                </div>
              </div>
        </section>
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-logo">
                    <img src="assets/images/Group 1.png">
                </div>
                <div class="footer-home">
                    <h3>Halaman Utama</h3>
                    <p><a href="#">Homepage</a></p>
                </div>
                <div class="footer-company">
                    <h3>Perusahaan</h3>
                    <p><a href="#">Tentang Kami</a></p>
                    <p><a href="#">Dafar Hotel</a></p>
                </div>
                <div class="footer-find-me">
                    <h3>Temukan Kami</h3>
                    <p><a href="#">Bantuan</a></p>
                    <p><a href="#">Hubungi Kami</a></p>
                </div>
                <div class="footer-social-media">
                    <h3>Social Media</h3>
                    <div class="link">
                        <i class="fa fa-facebook-square" style="font-size: 52px"></i>
                        <i class="fa fa-youtube-play" style="font-size: 52px"></i>
                        <i class="fa fa-instagram" style="font-size: 52px"></i>
                    </div>
                </div>
                <div class="footer-privacy">
                    <p><a href="#">Pemberitahuan Privasi</a></p>
                    <p><a href="#">Syarat dan Ketentuan</a></p>
                </div>
                <div class="footer-language-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <path d="M32.2046 17.4099H13.8576" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M23.0309 14.3208V17.4093" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M27.6263 17.3738C27.6263 25.2788 21.4493 31.6763 13.8384 31.6763" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M32.2219 31.6767C28.9128 31.6767 25.9714 29.9119 23.8572 27.136" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.515 41.3844H28.5453C37.7372 41.3844 41.414 37.7076 41.414 28.5157V17.4854C41.414 8.29347 37.7372 4.6167 28.5453 4.6167H17.515C8.32308 4.6167 4.64632 8.29347 4.64632 17.4854V28.5157C4.64632 37.7076 8.32308 41.3844 17.515 41.3844Z" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="footer-id">
                        <a class="dropdown-toggle id" data-toggle="dropdown" href="#">
                            Bahasa Indonesia
                            <span class="caret fot"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-footer">
                            <li><a class="dropdown-item" href="#">Bahasa Indonesia</a></li>
                            <li><a class="dropdown-item" href="#">English</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-1"><img src="{{asset('/assets/images/footer1.png')}}" alt=""></div>
                <div class="footer-2"><img src="{{asset('/assets/images/footer2.png')}}" alt=""></div>
                <div class="footer-3"><img src="{{asset('/assets/images/footer3.png')}}" alt=""></div>
                <div class="footer-4"><img src="{{asset('/assets/images/footer4.png')}}" alt=""></div>
                <p class="footer-copyright">&#169; 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk. </p>
            </div>
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            //loop: true,
            
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                bulletSize: 10,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            
            // And if we need scrollbar
            
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
          } else {
            document.getElementById("navbar").style.top = "-100px";
          }
          prevScrollpos = currentScrollPos;
        }
        </script>
</body>
</html>
