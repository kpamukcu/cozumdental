<?php require_once('header.php'); ?>

<!-- Banner Section Start -->
<section id="altSayfaBanner" class="py-15">
    <div class="container">
        <div class="row">
            <div class="col-12 text-white text-center">
                <h2 class="lead display-4">İletişim</h2>
                <a href="index.php" class="text-white">Ana Sayfa</a> / <a href="kurumsal.php" class="text-white">İletişim</a> / Bize Ulaşın
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- İletişim Bar Section Start -->
<section id="iletisimBar" class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Çözüm Dental İletişim Bilgileri</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <i class="bi bi-geo-alt"></i> Lorem Ipsum Dolor Sit Amet
            </div>
            <div class="col-md-3">
                <i class="bi bi-telephone"></i> 0123 456 78 96
            </div>
            <div class="col-md-3">
                <i class="bi bi-telephone"></i> 0123 456 78 96
            </div>
            <div class="col-md-3">
                <i class="bi bi-envelope-open"></i> info@cozumdental.com
            </div>
        </div>
    </div>
</section>
<!-- İletişim Bar Section End -->

<!-- Harita & Form Section Start -->
<section id="haritaForm" class="bg-light mb-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99746.79768065726!2d27.323615990735412!3d38.62386974032935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b99c89950e89d5%3A0x88eb6a1c97102924!2sManisa%2C%20Yunusemre%2FManisa!5e0!3m2!1str!2str!4v1635458881884!5m2!1str!2str" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-6 my-auto">
                <form action="" method="post" class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="adsoyad" class="form-control" placeholder="Adınız Soyadınız">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="tel" name="telefon" class="form-control" placeholder="Telefon Numaranız">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="E-Posta Adresiniz">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="konu" class="form-control" placeholder="Konu">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="mesaj" rows="8" class="form-control" placeholder="Mesajınız"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success w-100">Gönder</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Harita & Form Section End -->

<?php require_once('footer.php') ?>