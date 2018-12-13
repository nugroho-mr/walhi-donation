<?php
  $loggedin = isset($_GET['login']);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Walhi - Donation Page Template</title>

    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome.all.min.css">
    <link href="css/app.css" rel="stylesheet">

  </head>

  <body>

    <section id="header">
      <div class="container">
        <div class="d-flex inner align-items-center">
          <div class="col" id="header__logo__container">
            <img src="images/logo-walhi.png" id="header__logo" />
          </div>
          <div class="col text-right" id="user-status-container">
            <?php if($loggedin) : ?>
              <div id="header__avatar__container" class="float-right">
                <div id="header__avatar" style="background-image: url('images/ava.png');" />
              </div>
            <?php else : ?>
              <div id="header__login-button__container">
                <button id="header__login-button">Masuk</button>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section id="donation">
      <div class="container">
        <div class="d-flex">
          <div class="col">
            <div class="inner d-flex flex-column-reverse flex-md-row flex-wrap align-items-center justify-content-md-between no-gutters">
          <div class="col-12 col-md-6 " id="donation__text">
            <h1>Yuk Jadi Bagian Dari WALHI!</h1>
            <p>Dalam 15 tahun terakhir, WALHI telah mencanangkan dukungan penuh atas perjuangan masyarakat untuk mendapatkan pengakuan atas wilayah kelolanya. Wilayah Kelola Rakyat (WKR) adalah unit ruang yang merupakan sumber kehidupan masyarakat di satu wilayah, bersama dengan nilai-nilai yang ada didalamnya. Sehingga pendekatan menyelamatkan hutan dan keanekaragaman hayati serta lingkungan hidup tidak mengabaikan keberadaan masyarakat adat / local. Hal ini didasari pengalaman dan pembelajaran yang didapat dari pengetahuan local tentang tata kelola sumber daya alam dan lingkungan serta perjalanan advokasi WALHI.</p>
            <p>Saat ini WALHI mengajak untuk mendukung dengan menyisihkan sumbangan dari para sahabat sekalian. Dengan dukungan donasi yang sahabat berikan, membantu upaya penyelamatan lingkungan hidup di Indonesia dan mendukung kerja-kerja advokasi WALHI. Donasi yang sahabat berikan diperuntukkan untuk kegiatan-kegiatan WALHI diantaranya adalah pendidikan, penguatan kapasitas dan pemberdayaan masyarakat, pengembangan kapasitas penggiat lingkungan hidup, dan kegiatan-kegiatan lainnya dalam upaya memastikan daya dukung lingkungan hidup terhadap kehidupan dapat berkelanjutan, bagi kita dan generasi yang akan datang.</p>
            <p>Ayo berdonasi, dan jadilah bagian dari Gerakan Lingkungan Hidup Indonesia. Bersama WALHI memastikan negara hadir di tengah-tengah masyarakat dan memberikan pengakuan dan kepastian atas Wilayah Kelola Rakyat.</p>
          </div>
          <div class="col-12 col-md-6 col-lg-5" id="donation__float">
            <div class="no-gutters" id="donation__form__container">
              <div id="donation__form__pagination-container" class="d-flex">
                <span class="col-6 donation__form__pagination-button active" id="button__one-time" data-target="0">Satu Kali</span>
                <span class="col-6 donation__form__pagination-button" id="button__monthly" data-target="1">Bulanan</span>
              </div>
              <div id="donation__form__content" >
                <div id="donation__form__page-container" class="owl-carousel">
                  <div id="one-time" class="donation__form__page">
                    <h5>Satu Kali</h5>
                    <p><small>Masukkan nominal donasi anda:</small></p>
                    <input type="text" id="field__donation__one-time" class="field__donation form-control" placeholder="Rp 0" data-post-field="one-time-donation" />
                    <input type="hidden" id="one-time-donation" value="0" />
                    <div class="d-none d-md-flex flex-wrap donation-options justify-content-between">
                      <button class="col-12 col-lg" value="150000" data-post-field="one-time-donation">Rp 150.000</button>
                      <button class="col-12 col-lg" value="250000" data-post-field="one-time-donation">Rp 250.000</button>
                      <button class="col-12 col-lg" value="500000" data-post-field="one-time-donation">Rp 500.000</button>
                    </div>
                  </div>
                  <div id="monthly" class="donation__form__page">
                    <h5>Bulanan</h5>
                    <p><small>Masukkan nominal donasi anda:</small></p>
                    <input type="text" id="field__donation__monthly" class="field__donation form-control" placeholder="Rp 0" data-post-field="monthly-donation" />
                    <input type="hidden" id="monthly-donation" value="0" />
                    <div class="d-none d-md-flex flex-wrap donation-options justify-content-between">
                      <button class="col-12 col-lg" value="150000" data-post-field="monthly-donation">Rp 150.000</button>
                      <button class="col-12 col-lg" value="250000" data-post-field="monthly-donation">Rp 250.000</button>
                      <button class="col-12 col-lg" value="500000" data-post-field="monthly-donation">Rp 500.000</button>
                    </div>
                  </div>
                </div>
                <hr />
                <div id="donator-id">

                  <form>
                    <?php if($loggedin) : ?>
                      <div id="donator-id__avatar-block" class="d-flex align-items-center">
                        <div class="flex-shrink-1 d-none d-md-block">
                          <div id="donator-id__avatar__container">
                            <div id="donator-id__avatar" style="background-image: url('images/ava.png');" /></div>
                          </div>
                        </div>
                        <div class="col">
                          <p><strong>Ophiwatihana</strong><br />
                            <span class="email">Opiwatihana@gmail.com</span>
                          </p>
                        </div>
                        <div class="flex-shrink-1">
                          <button class="btn float-right" id="id-button"><i class="fa fa-cog"></i></button>
                        </div>
                      </div>
                    <?php else: ?>
                      <div class="form-group">
                        <label for="donator-name"><span class="require-star">*</span>Nama Lengkap</label>
                        <input type="text" class="form-control" id="donator-name" placeholder="Nama kamu">
                      </div>
                      <div class="form-group">
                        <label for="donator-phone"><span class="require-star">*</span>Telepon</label>
                        <input type="text" class="form-control" id="donator-phone" placeholder="Nomor telepon">
                      </div>
                      <div class="form-group">
                        <label for="donator-email"><span class="require-star">*</span>Email</label>
                        <input type="email" class="form-control" id="donator-email" placeholder="Alamat email">
                      </div>
                    <?php endif; ?>
                    <button id="donate-submit" type="submit" class="btn btn-block">Lanjut</button>
                  </form>
                  <div class="text-center">
                    <img src="images/payment-service.png" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center" id="donation__record">
              <h5>2314</h5>
              <p>&emsp;<small>orang telah berdonasi</small>
              </p>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </section>

    <section id="other-donation">
      <div class="container">
        <div class="d-flex">
          <div class="col">
            <h4>Donasi Tematik</h4>
            <div class="d-flex flex-wrap no-gutters justify-content-between">
          <div class="other-donation__item" style="background-image: url('images/donasi-01.png');">
            <div class="inner">
              <h5>Donasi Panti Asuhan Nusantara Adi Dharma</h5>
              <p>Mari perbaiki akhlak dengan berdonasi untuk membahagiakan sekitar kita….</p>
              <hr />
              <div class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="price"><sup>Rp</sup> 171.771.468</div>
                <div class="other-donation__button">
                  <button class="btn">Donasi</button>
                </div>
              </div>
            </div>
          </div>
          <div class="other-donation__item" style="background-image: url('images/donasi-02.png');">
            <div class="inner">
              <h5>Sumbangan Masjid Darul Quran Bogor</h5>
              <p>Mari perbaiki akhlak dengan berdonasi untuk membahagiakan sekitar kita…</p>
              <hr />
              <div class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="price"><sup>Rp</sup> 171.771.468</div>
                <div class="other-donation__button">
                  <button class="btn">Donasi</button>
                </div>
              </div>
            </div>
          </div>
          <div class="other-donation__item" style="background-image: url('images/donasi-03.png');">
            <div class="inner">
              <h5>Selamatkan Tanah Kering Di Wamena Timur Papua In…</h5>
              <p>Mari perbaiki akhlak dengan berdonasi untuk membahagiakan sekitar kita….</p>
              <hr />
              <div class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="price"><sup>Rp</sup> 171.771.468</div>
                <div class="other-donation__button">
                  <button class="btn">Donasi</button>
                </div>
              </div>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </section>

    <section id="footer">
      <div class="container">
        <div class="d-flex flex-wrap">
          <div class="col-12 col-md-6">
            <ul class="quick-links">
              <li><a href="#">Kebijakan Perlindungan data</a></li>
              <li><a href="#">Bagaimana WALHI menggalang dana</a></li>
              <li><a href="#">Rekening Donasi</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-6">
            <p><strong>Hubungi kami</strong><br /><br />

              Jl. Tegal parang Utara No.14 Jakarta 12790<br />
              T. +62-21-791933 63-65, F. +62-21-794 1673<br />
              email : <a href="mailto:informasi@walhi.or.id">informasi@walhi.or.id</a><br /><br />
              Untuk pertanyaan donasi anda dapat melalui :  <a href="mailto:menyapasahabat@walhi.or.id">menyapasahabat@walhi.or.id</a>
            </p>
          </div>
        </div>
        <div class="d-flex align-items-center" id="footer__meta">
          <div class="col">
            <p class="copyright">2018 &copy; Wahana Lingkungan Hidup Indonesia</p>
          </div>
          <div class="col text-right">
            <button class="btn go-to-top"><i class="fa fa-chevron-up"></i></button>
          </div>
        </div>
      </div>
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>

  </body>

</html>
