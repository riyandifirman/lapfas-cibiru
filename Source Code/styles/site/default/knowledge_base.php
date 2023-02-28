<!-- Titlebar
================================================== -->
<section class="page-crumb">
    <div class="container">
        <div class="page-crumb-block">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1>Topik Pengaduan</h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> Beranda</a></li>
                            <li class="active">Topik Pengaduan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="home-search clearfix hero">
    <div class="container">
        <div class="hero-inner">
            <h1 class="help-center-name">Cari topik pengaduan / masalah yang sudah dilaporkan</h1>
            <form class="search search-full" action="<?php echo site_url('home/search') ?>" method="get">
                <input class="form-control" type="search" placeholder="Jalan Berlubang" name="question" value="<?php echo set_value('question') ?>">
            </form>
        </div>
    </div>
</section>

<section class="frequently_asked_question section_padding_100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="heading_text">
                    <h2>Jenis Pengaduan</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>

        <div class="faqs-categories">
            <div class="row">
                <?php foreach ($categories as $item) : ?>
                    <div class="col-md-4 text-center">
                        <a href="<?php echo site_url('department/' . $item->category_id . '-' . permalink($item->title)) ?>" class="category-block">
                            <img src="<?php echo base_url() ?>/cdn/icons/<?php echo $item->icon ?>" alt="<?php echo $item->title ?>">
                            <h3><?php echo $item->title ?></h3>
                            <p>
                                <?php if (strlen($item->description) > 40) : ?>
                                    <?php echo substr($item->description, 0, 100) . ".."; ?>
                                <?php else : ?>
                                    <?php echo $item->description; ?>
                                <?php endif ?>
                            </p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
        <div class="random-faqs">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="heading_text">
                        <h2>Diskusi Topik Pilihan</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
                <?php foreach ($faqs as $item) : ?>
                    <div class="col-md-6">
                        <a href="<?php echo site_url('topic/' . $item->faq_id . '-' . permalink($item->question)) ?>" class="single_faq">
                            <h5>
                                <i class="pe-7s-comment"></i>
                                <?php if (strlen($item->question) > 70) : ?>
                                    <?php echo substr($item->question, 0, 70) . ".."; ?>
                                <?php else : ?>
                                    <?php echo $item->question; ?>
                                <?php endif ?>
                            </h5>
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </diV>

    </div>
</section>