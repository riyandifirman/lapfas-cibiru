<?php include 'header.php'; ?>
<style>
    <?php include 'styles/site/default/assets/css/about-us.css'; ?><?php include 'styles/site/default/assets/css/bootstrap-icons.css'; ?>
</style>

<!-- Titlebar
================================================== -->
<section class="page-crumb">
    <div class="container">
        <div class="page-crumb-block">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1>Tentang Kami</h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> Beranda</a></li>
                            <li class="active">Tentang Kami</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer_contact_with_us_area section_padding_100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading_text">
                    <h2>RANS Squad</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-14">
                <div class="about_box_plus_text">
                    <!-- ======= Team Section ======= -->
                    <section id="team" class="team">
                        <div class="container">

                            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                                <p>Berawal dari keresahan dan keluhan yang seringkali kami alami terkait kondisi fasilitas umum yang tidak sesuai dengan ekspektasi. LAPFAS hadir untuk menjadi solusi dalam mengatasi keresahan yang dialami selama ini. Kami berdedikasi untuk menyediakan sarana pengaduan layanan fasilitas yang tidak dapat menjalankan fungsinya dengan baik ataupun yang tidak layak digunakan lagi agar segera diproses oleh pihak yang berwenang. Besar harapan kami agar aplikasi ini dapat bermanfaat bagi banyak pihak dan dapat dikembangkan lebih lanjut lagi.</p>
                            </div>

                            <div class="row">
                                <div class="row center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="member" data-aos="fade-up">
                                            <div class="pic"><img src="<?php echo STYLE_IMAGES ?>/arfi.png" class="img-fluid" alt="Team 1" /> </div>
                                            <div class="member-info">
                                                <h4>Arfi Triawan</h4>
                                                <span>Project Manager</span>
                                                <div class="social">
                                                    <?php if (config('linkedin')) : ?><a href="<?php echo config('linkedin1') ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif ?>
                                                    <?php if (config('github')) : ?><a href="<?php echo config('github1') ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif ?>
                                                    <?php if (config('instagram')) : ?><a href="<?php echo config('instagram1') ?>"> <i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="member" data-aos="fade-up" data-aos-delay="150">
                                            <div class="pic"><img src="<?php echo STYLE_IMAGES ?>/nika.png" class="img-fluid" alt="Team 2" /> </div>
                                            <div class="member-info">
                                                <h4>Nika Qisty</h4>
                                                <span>Frontend Developer</span>
                                                <div class="social">
                                                    <?php if (config('linkedin')) : ?><a href="<?php echo config('nika-linkedin') ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif ?>
                                                    <?php if (config('github')) : ?><a href="<?php echo config('github2') ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif ?>
                                                    <?php if (config('instagram')) : ?><a href="<?php echo config('instagram2') ?>"> <i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                                            <div class="pic"><img src="<?php echo STYLE_IMAGES ?>/riyandi.png" class="img-fluid" alt="Team 3" /> </div>
                                            <div class="member-info">
                                                <h4>Riyandi Firman Pratama</h4>
                                                <span>Backend Developer</span>
                                                <div class="social">
                                                    <?php if (config('linkedin')) : ?><a href="<?php echo config('linkedin3') ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif ?>
                                                    <?php if (config('github')) : ?><a href="<?php echo config('github3') ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif ?>
                                                    <?php if (config('instagram')) : ?><a href="<?php echo config('instagram3') ?>"> <i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                                            <div class="pic"><img src="<?php echo STYLE_IMAGES ?>/suci.png" class="img-fluid" alt="Team 4" /> </div>
                                            <div class="member-info">
                                                <h4>Suci Sukmawati</h4>
                                                <span>Dokumenter</span>
                                                <div class="social">
                                                    <?php if (config('linkedin')) : ?><a href="<?php echo config('suci-linkedin') ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif ?>
                                                    <?php if (config('github')) : ?><a href="<?php echo config('github4') ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif ?>
                                                    <?php if (config('instagram')) : ?><a href="<?php echo config('instagram4') ?>"> <i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </section><!-- End Team Section -->
                </div>
            </div>
        </div>
    </div>
</section>