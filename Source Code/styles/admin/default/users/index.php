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
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i>Beranda</a>
            </li>
            <li class="active">
                <strong>Pengguna</strong>
            </li>
        </ol>
    </div>
</div>

<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"> Pengguna</h3>
        <div class="panel-options">
            <a href="<?php echo site_url('admin/users/manage'); ?>" class="btn btn-secondary btn-sm" style="color:#fff"><i class="fa fa-user-plus" aria-hidden="true"></i> Tambah Pengguna</a>
        </div>
    </div>
    <div class="panel-body">

        <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
            <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Grup</th>
                        <th>Status</th>
                        <th>Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody class="middle-align">
                    <?php foreach ($items as $item) : ?>
                        <tr id="<?php echo $item->user_id ?>">
                            <td>
                                <?php if ($item->image) : ?>
                                    <img src="<?php echo base_url() ?>/cdn/users/<?php echo $item->image ?>" class="img-circle img-inline userpic-32" width="28" />
                                <?php else : ?>
                                    <img src="<?php echo base_url() ?>/cdn/users/default.png" class="img-circle img-inline userpic-32" width="28">
                                <?php endif ?>
                                <?php echo $item->username ?>
                            </td>
                            <td><?php echo $item->usergroup ?></td>

                            <?php if ($item->status == 'aktif') : ?>
                                <td><button class="btn btn-success btn-sm">Aktif</button></td>
                            <?php else : ?>
                                <td><button class="btn btn-dart btn-sm">Tidak Aktiv</button></td>
                            <?php endif ?>
                            <td><?php echo $item->created ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/users/manage/' . $item->user_id); ?>" class="btn btn-orange btn-sm">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm remove">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <?php echo $pagination ?>
    </div>
</div>
<script type="text/javascript">
    $(".remove").click(function() {
        var id = $(this).parents("tr").attr("id");
        if (confirm('<?php echo lang('global_Are_you_sure_to_remove_this_record') ?>')) {
            $.ajax({
                url: '<?php echo site_url() ?>admin/users/delete/' + id,
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