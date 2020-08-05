<hr>
<div class="row">
    <div class="col-md-12">
        <a href="javascript:;" onclick="showAjaxModal('<?php echo site_url('modal/popup/elementary_school_add/');?>');"
            class="btn btn-primary pull-right">
            <i class="entypo-plus-circled"></i>
            <?php echo get_phrase('add_school');?>
        </a>
        <br>
        <table  class="table table-bordered datatable" id="table_export">
            <thead>
                <tr>
                    <th><div><?php echo get_phrase('#');?></div></th>
                    <th><div><?php echo get_phrase('school_name');?></div></th>
                    <th><div><?php echo get_phrase('address');?></div></th>
                    <th><div><?php echo get_phrase('contact_person');?></div></th>
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
                    <td>
                        <?php
                            echo $row['address'];
                         ?>
                    </td>
                    <td>
                        <?php 
                            echo $row['contact']." <br> ".$row['phone'];
                        ?>
                    </td>
                    <td style="text-align: center;">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                <!-- EDITING LINK -->
                                <li>
                                    <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/elementary_school_edit/'.$row['school_id']);?>');">
                                        <i class="entypo-pencil"></i>
                                            <?php echo get_phrase('edit');?>
                                        </a>
                                </li>
                                <li class="divider"></li>

                                <!-- DELETION LINK -->
                                <li>
                                    <a href="#" onclick="confirm_modal('<?php echo site_url('marketing/elementary_school/delete/'.$row['school_id']);?>');">
                                    <i class="entypo-trash"></i>
                                        <?php echo get_phrase('delete');?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- <a href="<?php echo site_url('marketing/view_visit/'.$row['school_id']); ?>" type="button" class = "btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo get_phrase('view_visited'); ?></a> -->
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
