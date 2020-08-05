<?php
    $running_year = $this->db->get_where('settings' , array('type'=>'running_year'))->row()->description;
    $start = $this->db->get_where('marketing_time', array('running_year' => $running_year))->row()->start_at;
    $end = $this->db->get_where('marketing_time', array('running_year' => $running_year))->row()->end_at;
?>
<hr>

<div class="row" style="text-align: center;">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="tile-stats tile-white">
            <div class="icon"><i class="entypo-chart-area"></i></div>

            <h3 style="color: #696969;"><?php echo get_phrase('promotion_plan_for'); ?></h3>
            <strong><h3 style="color: #696969;">"<?php echo get_phrase('primary_school'); ?>"</h3></strong>
            <h4 style="color: #696969;">
                <?php
                    echo date("d M Y", $start)." - ".date("d M Y", $end);
                ?>
            </h4>
        </div>
    </div>
    <div class="col-sm-4"></div>
</div>
<div class="row">
    <div class="col-md-12">
        <a href="<?php echo site_url('marketing/plan_primary');?>" class="btn btn-<?php echo $status == 'active' ? 'primary' : 'white'; ?>">
            <?php echo get_phrase('all_data');?>
        </a>
        <a href="<?php echo site_url('marketing/plan_primary/permission');?>" class="btn btn-<?php echo $status == 'permission' ? 'primary' : 'white'; ?>">
            <?php echo get_phrase('permission');?>
        </a>
        <a href="<?php echo site_url('marketing/plan_primary/waiting');?>" class="btn btn-<?php echo $status == 'waiting' ? 'primary' : 'white'; ?>">
            <?php echo get_phrase('waiting');?>
        </a>
        <a href="<?php echo site_url('marketing/plan_primary/approved');?>" class="btn btn-<?php echo $status == 'approved' ? 'primary' : 'white'; ?>">
            <?php echo get_phrase('approved');?>
        </a>
        <a href="<?php echo site_url('marketing/plan_primary/rejected');?>" class="btn btn-<?php echo $status == 'rejected' ? 'primary' : 'white'; ?>">
            <?php echo get_phrase('rejected');?>
        </a>
        <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/select_primary');?>');" class="btn btn-success pull-right">
            <i class="entypo-plus-circled"></i>
            <?php echo get_phrase('select_school');?>
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

                        <a href="<?php echo site_url('marketing/plan_primary_view/'.$row['plan_id']); ?>" type="button" class = "btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo get_phrase('view_result'); ?></a>
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
