<hr>
<div class="row">
    <div class="col-md-12">
        <a href="<?php echo site_url('marketing/plan_primary');?>" class="btn btn-<?php echo $status == 'active' ? 'primary' : 'white'; ?>">
            <?php echo get_phrase('all_data');?>
        </a>
        <a href="<?php echo site_url('marketing/plan_primary/visited');?>" class="btn btn-<?php echo $status == 'visited' ? 'primary' : 'white'; ?>">
            <?php echo get_phrase('visited');?>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table  class="table table-bordered datatable" id="table_export">
            <thead>
                <tr>
                    <th><div><?php echo get_phrase('#');?></div></th>
                    <th><div><?php echo get_phrase('school_name');?></div></th>
                    <th><div><?php echo get_phrase('permission_status');?></div></th>
                    <th><div><?php echo get_phrase('result');?></div></th>
                    <th><div><?php echo get_phrase('action');?></div></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = '1';
                foreach($school as $row):?>
                <tr>
                    <td>
                            <?php echo $no++;?>
                    </td>
                    <td>
                        <?php
                            echo $row['name'];
                        ?>
                    </td>
                    <td style="text-align: center;">
                        <button class="btn btn-white btn-xs">
                            <?php echo get_phrase('no_action');?>
                        </button>
                    </td>
                    <td>
                        <?php
                            echo $row['address'];
                         ?>
                    </td>
                    <td style="text-align: center;">
                        <?php if ($row['status'] == 'pending'): ?>
                            <a href="#" onclick="confirm_modal('<?php echo site_url('marketing/manage_online_exam_status/'.$row['online_exam_id'].'/published'); ?>', 'generic_confirmation');" type="button" class = "btn btn-success btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i> <?php echo get_phrase('publish_now'); ?></a>
                        <?php elseif ($row['status'] == 'published'): ?>
                            <a href="#" onclick="confirm_modal('<?php echo site_url('marketing/manage_online_exam_status/'.$row['online_exam_id'].'/expired'); ?>', 'generic_confirmation');" type="button" class = "btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i> <?php echo get_phrase('cancel_now'); ?></a>
                        <?php elseif($row['status'] == 'expired'): ?>
                            <a href="#" type="button" class = "btn btn-primary btn-sm"><i class="fa fa-ban" aria-hidden="true"></i> <?php echo get_phrase('expired'); ?></a>
                        <?php endif; ?>

                        <a href="<?php echo site_url('marketing/view_online_exam_result/'.$row['online_exam_id']); ?>" type="button" class = "btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo get_phrase('view_result'); ?></a>
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
