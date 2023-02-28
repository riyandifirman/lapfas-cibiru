<!-- Titlebar
================================================== -->
<section class="page-crumb">
    <div class="container">
        <div class="page-crumb-block">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1>Laporan Pengaduan</h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> Beranda</a></li>
                            <li><a href="<?php echo site_url('dashboard/tickets') ?>">Pengaduan</a></li>
                            <li class="active">Tiket Pengaduan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white section">
    <div class="container">
        <?php if ($items) : ?>
            <div class="list-replies">
                <?php if ($item->subject) : ?><h1><b>Nama Pengaduan : </b><?php echo $item->subject ?></h1><?php endif ?>
                <?php foreach ($items as $item) : ?>
                    <div class="reply-block">
                        <div class="ticket-user">
                            <?php if ($item->image) : ?>
                                <img id="<?php echo $item->ticket_id ?>" class="img-circle img-responsive" alt="<?php echo $item->username ?>" src="<?php echo base_url() ?>/cdn/users/<?php echo $item->image ?>" />
                            <?php else : ?>
                                <img id="<?php echo $item->ticket_id ?>" class="img-circle img-responsive" alt="<?php echo $item->username ?>" src="<?php echo base_url() ?>/cdn/users/default.png" />
                            <?php endif ?>
                        </div>
                        <div class="ticket-msg">
                            <div class="ticket-user-det">
                                <?php echo $item->username ?> <b>terkirim</b> pada <b><?php echo $item->created ?></b>
                            </div>
                            <p>
                                <?php echo $item->message ?>
                            </p>
                            <?php if ($item->attachment) : ?>
                                <a class='file-attachet' href="<?php echo base_url() ?>/cdn/pengaduan/<?php echo $item->attachment ?>" target="_blank"> <i class="fa fa-paperclip"></i> Lampiran</a>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="clearfix"></div>
            </div>
            <?php if (config("display_tickets") == 1) : ?>
                <div class="list-replies reply-form">
                    <form method="post" autocomplete="off" enctype="multipart/form-data">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger"><?php echo validation_errors() ?></div>
                        <?php endif ?>
                        <?php if (isset($success)) : ?>
                            <div class="alert alert-success">Sukses</div>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="message">Deskripsi Pengaduan<span class="required-field">*</span></label>
                            <textarea class="form-control" name="message" value="<?php echo set_value('message') ?>" placeholder="Deskripsikan pengaduan anda secara rinci menggunakan tata bahasa yang sopan dan jelas"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="attachement"> Lampiran File Bukti</label>
                            <button class="btn btn-attached">
                                <i class="fa fa-paperclip" aria-hidden="true"></i>
                                <input name="attachment" type="file">
                                Tambahkan file berformat .zip/.pdf/.png/.jpg/.jpeg
                            </button>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="button" value="Kirim">
                        </div>

                    </form>
                </div>
            <?php else : ?>
                <div class="alert alert-warning ticket-off-msg">
                    <?php echo config("ticket_off_replies") ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <?php if (!$items) : ?>
            <?php if (config("display_tickets") == 1) : ?>
                <div class="col-md-8 col-md-offset-2">
                    <form method="post" autocomplete="off" enctype="multipart/form-data" class="add-new-ticket">
                        <h4>Buat Pengaduan Baru</h4>
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger"><?php echo validation_errors() ?></div>
                        <?php endif ?>
                        <?php if (isset($success)) : ?>
                            <div class="alert alert-success">Pengaduan Berhasil dikirim!</div>
                        <?php endif ?>

                        <div class="form-group">
                            <label for="subject">Judul Pengaduan<span class="required-field">*</span></label>
                            <input class="form-control" type="text" name="subject" value="<?php echo set_value('subject') ?>">
                        </div>
                        <div class="form-group">
                            <label for="category">Jenis Pengaduan <span class="required-field">*</span></label>
                            <?php echo form_dropdown('category_id', dd2menu('categories', array('category_id' => 'title')), set_value('category_id'), 'class="form-control"') ?>
                        </div>
                        <div class="form-group">
                            <label for="message">Deskripsi Pengaduan <span class="required-field">*</span></label>
                            <textarea class="form-control" name="message" value="<?php echo set_value('message') ?>" placeholder="Deskripsikan pengaduan anda secara rinci menggunakan tata bahasa yang sopan dan jelas"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="attachement">Lampiran File Bukti</label>
                            <button class="btn btn-attached">
                                <i class="fa fa-paperclip" aria-hidden="true"></i>
                                <input name="attachment" type="file">
                                Tambahkan file berformat .zip/.pdf/.png/.jpg/.jpeg
                            </button>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="button" value="Kirim">
                        </div>
                    </form>
                </div>
            <?php else : ?>
                <div class="alert alert-warning ticket-off-msg">
                    <?php echo config("tickets_off_message") ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="clearfix"></div>
</section>