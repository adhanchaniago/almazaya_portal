<hr>
<div class="row">
    <div class="col-md-12">
        <a href="<?php echo site_url('admin/manage_daily_activity');?>" class="btn btn-<?php echo $status == 'active' ? 'primary' : 'white'; ?>">
            <?php echo get_phrase('active_exams');?>
        </a>
        <a href="<?php echo site_url('admin/manage_daily_activity/expired');?>" class="btn btn-<?php echo $status == 'expired' ? 'primary' : 'white'; ?>">
            <?php echo get_phrase('expired_exams');?>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table  class="table table-bordered datatable" id="table_export">
            <thead>
                <tr>
                    <th><div><?php echo get_phrase('title');?></div></th>
                    <th><div><?php echo get_phrase('user');?></div></th>
                    <th><div><?php echo get_phrase('exam_date');?></div></th>
                    <th><div><?php echo get_phrase('duration');?></div></th>
                    <th><div><?php echo get_phrase('status');?></div></th>
                    <th><div><?php echo get_phrase('options');?></div></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($daily_activity as $row):?>
                <tr>
                    <td>
                        <a href="<?php echo site_url('admin/manage_daily_activity_detail/').$row['activity_id']; ?>">
                            <?php echo $row['title'];?>
                        </a>
                    </td>
                    <td>
                        <?php echo $row['user']; ?>
                    </td>
                    <td>
                        <?php
                            echo '<b>'.get_phrase('date_start').':</b> '.date('M d, Y', $row['start_date']).'<br>'.'<b>'.get_phrase('date_end').':</b> '.date('M d, Y', $row['end_date']);
                        ?>
                    </td>
                    <td>
                        <?php
                            echo '30 Day';
                        ?>
                    </td>
                    <td>
                        <button class="btn btn-<?php echo $row['status'] == 'published' ? 'success' : 'warning'; ?> btn-xs">
                            <?php echo get_phrase($row['status']);?>
                        </button>
                    </td>
                    <td style="text-align: center;">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                            Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                            <li>
                                <a href="<?php echo site_url('admin/manage_daily_activity_detail/').$row['activity_id']; ?>">
                                    <i class="entypo-cog"></i>
                                    <?php echo get_phrase('manage_detail');?>
                                </a>
                            </li>
                            <!-- EDITING LINK -->
                            <li>
                                <a href="<?php echo site_url('admin/update_daily_activity/').$row['activity_id']; ?>" >
                                    <i class="entypo-pencil"></i>
                                    <?php echo get_phrase('edit_daily_activity');?>
                                </a>
                            </li>
                            <li class="divider"></li>

                            <!-- DELETION LINK -->
                            <li>
                                <a href="#" onclick="confirm_modal('<?php echo site_url('admin/manage_daily_activity/delete/'.$row['activity_id']);?>');">
                                    <i class="entypo-trash"></i>
                                    <?php echo get_phrase('delete');?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <?php if ($row['status'] == 'pending'): ?>
                        <a href="#" onclick="confirm_modal('<?php echo site_url('admin/manage_daily_activity_status/'.$row['activity_id'].'/published'); ?>', 'generic_confirmation');" type="button" class = "btn btn-success btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i> <?php echo get_phrase('publish_now'); ?></a>
                    <?php elseif ($row['status'] == 'published'): ?>
                        <a href="#" onclick="confirm_modal('<?php echo site_url('admin/manage_daily_activity_status/'.$row['activity_id'].'/expired'); ?>', 'generic_confirmation');" type="button" class = "btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i> <?php echo get_phrase('cancel_now'); ?></a>
                    <?php elseif($row['status'] == 'expired'): ?>
                        <a href="#" type="button" class = "btn btn-primary btn-sm"><i class="fa fa-ban" aria-hidden="true"></i> <?php echo get_phrase('expired'); ?></a>
                    <?php endif; ?>

                    <a href="<?php echo site_url('admin/view_daily_activity_result/'.$row['activity_id']); ?>" type="button" class = "btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo get_phrase('view_result'); ?></a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>

<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

	jQuery(document).ready(function($)
    {
        $('#table_export').dataTable();
    });

</script>
