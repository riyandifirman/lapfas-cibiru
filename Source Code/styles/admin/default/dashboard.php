<div class="page-title">
    <div class="breadcrumb-env">
        <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
                </a>
            </li>
        </ul>
        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i> Beranda</a>
            </li>
        </ol>
    </div>
</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Dasbor</h3>
        <div class="panel-options">
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-pink" data-count=".num" data-from="0" data-to="<?php echo $admins ?>" data-duration="2">
                    <div class="xe-background">
                        <i class="fa fa-user-secret"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-user-secret"></i>
                        </div>
                        <div class="xe-label">
                            <span>Admin Terdaftar</span>
                            <strong class="num"><?php echo $admins ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill" data-fill-from="0" data-fill-to="10" data-fill-unit="%" data-fill-property="width" data-fill-duration="2" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span>Total Admin</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-primary" data-count=".num" data-from="0" data-to="<?php echo $normal_users ?>" data-duration="2">

                    <div class="xe-background">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span>User terdaftar</span>
                            <strong class="num"><?php echo $normal_users ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill" data-fill-from="0" data-fill-to="30" data-fill-unit="%" data-fill-property="width" data-fill-duration="2" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span>Total user </span>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-orange" data-count=".num" data-from="0" data-to="<?php echo $visitors ?>" data-suffix="" data-duration="3">

                    <div class="xe-background">
                        <i class="fa fa-eye"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-eye"></i>
                        </div>
                        <div class="xe-label">
                            <span>Pengunjung</span>
                            <strong class="num"><?php echo $visitors ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill" data-fill-from="0" data-fill-to="12" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span>Total pengunjung</span>
                    </div>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter xe-counter-block-blue" data-count=".num" data-from="0" data-to="<?php echo $categories ?>" data-suffix="" data-duration="3">

                    <div class="xe-background">
                        <i class="fa fa-sitemap"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-sitemap"></i>
                        </div>
                        <div class="xe-label">
                            <span>Jenis Pengaduan</span>
                            <strong class="num"><?php echo $categories ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill" data-fill-from="0" data-fill-to="60" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span>Total Jenis pengaduan </span>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-turquoise" data-count=".num" data-from="0" data-to="<?php echo $faqs ?>" data-suffix="" data-duration="3">

                    <div class="xe-background">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span>Topik</span>
                            <strong class="num"><?php echo $faqs ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill" data-fill-from="0" data-fill-to="5" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span>Total Topik</span>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-info" data-count=".num" data-from="0" data-to="<?php echo $tickets ?>" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span>Semua pengaduan</span>
                            <strong class="num"><?php echo $tickets ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill" data-fill-from="0" data-fill-to="0" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span>Total pengaduan</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-success" data-count=".num" data-from="0" data-to="<?php echo $open_tickets ?>" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-folder-open" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-folder-open" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span>Pengaduan Berjalan</span>
                            <strong class="num"><?php echo $open_tickets ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill" data-fill-from="0" data-fill-to="0" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span>Total pengaduan </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-danger" data-count=".num" data-from="0" data-to="<?php echo $close_tickets ?>" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span>Pengaduan Selesai</span>
                            <strong class="num"><?php echo $close_tickets ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill" data-fill-from="0" data-fill-to="0" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span>Total Pengaduan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row admin-dashboard">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading"><i></i>Pengaduan</div>
            <?php if ($tickets_open) : ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Pengaduan</th>
                            <th>Status </th>
                            <th>Dibuat Oleh</th>
                            <th>Balasan Terakhir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="middle-align">
                        <?php foreach ($tickets_open as $item) : ?>
                            <tr id="<?php echo $item->pengaduan_id ?>">
                                <td>#<?php echo $item->pengaduan_id ?>: <?php echo $item->subject ?></td>
                                <td>
                                    <?php if ($item->status == "buka") : ?>
                                        Berjalan
                                    <?php else : ?>
                                        Selesai
                                    <?php endif ?>
                                </td>
                                <td><i class="fa fa-eye"></i> By:<a href="<?php echo site_url('admin/users/manage/' . $item->user_id) ?>"> <?php echo $item->username ?></a></td>
                                <td><?php echo $item->last_reply ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/pengaduan/manage/' . $item->pengaduan_id); ?>" class="btn btn-orange btn-sm">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        Balas
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p> Belum ada pengaduan <i class="fa fa-thumbs-up"></i></p>
            <?php endif ?>
        </div>
    </div>
</div>
<script src="<?php echo STYLE_JS ?>/widgets.js"></script>

<script type="text/javascript">
    $(".remove").click(function() {
        var id = $(this).parents("tr").attr("id");
        if (confirm('<?php echo lang('global_Are_you_sure_to_remove_this_record') ?>')) {
            $.ajax({
                url: '<?php echo site_url() ?>admin/tickets/delete/' + id,
                type: 'DELETE',
                error: function() {
                    alert('<?php echo lang('global_Something_is_wrong') ?>');
                },
                success: function(data) {
                    $("#" + id).remove();
                    alert('<?php echo lang('global_Record_removed_successfully') ?>');
                }
            });
        }
    });
</script>