<?php
include ('Layout/_header.php');
?>
<!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-info btn-lg toggle"><i class="icon-reorder"></i></a>
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="icon-remove"></i></a>
        <li class="sidebar-brand"><a href="#">Yıllık</a></li>
        <li><a href="#top">Ana Sayfa</a></li>
        <li><a href="#portfolio">E-Resim</a></li>
        <li><a href="#services">Katalog</a></li>
        <li><a href="#">Hakkımız</a></li>
        <li><a href="#">İletişim</a></li>
      </ul>
    </div>
    <!-- /Side Menu -->
  
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
        <h1>Mezuniyet Yıllığı</h1>
        <h3><em>Omu Mühendislik Fakültesi Yıllık Projesi</em></h3>
		    <div class="container" style="position: relative">
          <div class="row">
            <div class="col-md-10">
              <div class="responsive">
                <center>
                    <button class="demo btn btn-success bt btn-lg" data-toggle="modal" href="#static">Yıllık Başvuru Formu</button>
                  </center>
              </div>
              <br>
              <div class="static" style="position: relative; overflow: hidden">
                <div class="text-center">
                  <button class="demo btn btn-info bt btn-lg" data-toggle="modal" href="#responsive">Giriş Yapınız </button><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include('login.php');?>
        <!-- Intro -->
    <div id="intro" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2>Omu Mühendislik Fakültesi Yıllık Projesi!</h2>
            <p class="lead">Amacımızı Buraya yazabiliriz <a target="_blank" href="#">Burayada Openshiftte Yukledigimizde link veririz</a>.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->
  
    <!-- Services -->
 <div id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Katalog - Resim - İletişim</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-md-offset-2 text-center">
            <div class="service-item">
              <a href="#portfolio">
              <img class="img-circle" src="Bootstrap/img/1.png"></a>
              <h4>Katalog</h4>
              <p>Buralar Birşeyler Ekleyelim</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <a href="#portfolio">
              <img class="img-circle" src="Bootstrap/img/4.png"></a>
              <h4>Resimler</h4>
              <p>Buralar Birşeyler Ekleyelim</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <a href="#portfolio">
              <img class="img-circle" src="Bootstrap/img/5.png"></a>
              <h4>İletişim</h4>
              <p>Buralar Birşeyler Ekleyelim</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
             <a href="#portfolio"> 
             <img class="img-circle" src="Bootstrap/img/chat.png"></a>
              <h4>Şikayet</h4>
              <p>Buralar Birşeyler Ekleyelim</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Services -->

    <!-- Callout -->
    <div class="callout">
      <div class="vert-text">
        <h1>Omu Yıllık Hoşgeldiniz</h1>
      </div>
    </div>
    <!-- /Callout -->

    <!-- Portfolio -->
    <div id ="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
              <h3>Mezuniyet Fotoğrafları</h3>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2 text-center">
            <div class="portfolio-item">
              <a href="#top"><img class="img-portfolio img-responsive" src="Bootstrap/img/4.jpg"></a>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="portfolio-item">
              <a href="#top"><img class="img-portfolio img-responsive" src="Bootstrap/img/8.jpg"></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2 text-center">
            <div class="portfolio-item">
              <a href="#top"><img class="img-portfolio img-responsive" src="Bootstrap/img/one.jpg"></a>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="portfolio-item">
              <a href="#top"><img class="img-portfolio img-responsive" src="Bootstrap/img/two.jpg"></a>

            </div>
          </div>
        </div>
      </div>
    </div>
 
    <!-- /Portfolio -->

    <!-- Call to Action -->
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h3>Butonlara da twitter ve facebook takip sayfalarının linklerini verelim.</h3>
            <a href="#top" class="btn btn-lg btn-info">twitter !</a>
            <a href="#top" class="btn btn-lg btn-primary">Facebook !</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Call to Action -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <ul class="list-inline">
              <li><i class="icon-facebook icon-2x"></i></li>
              <li><i class="icon-twitter icon-2x"></i></li>
              <!--<li><i class="icon-dribbble icon-2x"></i></li> -->
            </ul>
            <hr>
            <p>Copyright &copy; mekomu (2013)</p>
          </div>
        </div>
      </div>
    </footer>



<?php
include ('Layout/_footer.php');
?>
