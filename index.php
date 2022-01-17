<?php require_once('header.php'); ?>

<!-- Slider Section Start -->
<section id="slider">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active"> 
                <img src="img/slide1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slide3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- Slider Section End -->

<!-- Ürünler Section Start -->
<section id="urunler" class="py-5">
    <div class="container">
        <div class="row border-bottom">
            <div class="col-6">
                <h2>Ürünlerimiz</h2>
            </div>
            <div class="col-6 text-right my-auto">
                <a href="">Tüm Ürünlerimiz</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card border-0">
                    <img src="img/ornek.jpg" alt="">
                    <button class="btn btn-primary w-50">İnceleyin</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <img src="img/ornek.jpg" alt="">
                    <button class="btn btn-primary w-50">İnceleyin</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <img src="img/ornek.jpg" alt="">
                    <button class="btn btn-primary w-50">İnceleyin</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <img src="img/ornek.jpg" alt="">
                    <button class="btn btn-primary w-50">İnceleyin</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ürünler Section End -->

<!-- Hakkımızda Section Start -->
<section id="hakkimizda" class="py-5">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6 ml-auto py-5">
                <h2>Hakkımızda</h2>
                <p>Firmamız 04.02.2020 tarihinde Muğla merkezde faaliyete gecmistir. Firmamiz dental sektorde demirbaş satışı , satış sonrası hizmet ve bakim-onarım üzerine çözüm ortağı olarak faaliyet göstermekteyiz.</p>

                <p>Amacımız; siz değerli hekimlerimize deneyimli personelimiz ile birlikte hızlı, güvenilir ve en doğru hizmeti sağmaktır.</p>
                <a href="#"><button class="btn btn-primary">Bize Ulaşın</button></a>
            </div>
        </div>
    </div>
</section>
<!-- Hakkımızda Section End -->

<?php require_once('footer.php') ?>