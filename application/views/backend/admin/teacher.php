
<a href="<?php echo site_url('admin/teacher_import');?>"
    class="btn btn-success pull-right">
        <i class="entypo-plus-circled"></i>
        <?php echo get_phrase('import_teacher');?>
    </a>
            <a href="javascript:;" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_teacher_add/');?>');"
            	class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
            	<?php echo get_phrase('add_new_teacher');?>
            </a>

                <br><br>
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th width="10"><div><?php echo get_phrase('#');?></div></th>
                            <th width="50"><div><?php echo get_phrase('photo');?></div></th>
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('position');?></div></th>
                            <th><div><?php echo get_phrase('status');?></div></th>
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $no = 1;
                                $teacher = $this->db->get('teacher')->result_array();
                                foreach($teachers as $row):?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><img src="<?php echo $this->crud_model->get_image_url('teacher',$row['teacher_id']);?>" class="img-circle" width="40" /></td>
                            <td><?php echo $row['name']; ?>
                            </td>
                            <td><?php echo $row['position'] ?></td>
                            <td>
                                <?php 
                                    $get = $this->db->get_where('online', array('user_id' => $row['teacher_id']));
                                    if ($get->num_rows() > 0) {
                                        $status = $get->result_array();
                                        foreach ($status as $stts) {
                                            echo '<div class="badge btn-success">Online <br><i>('.$stts['at'].')</i></div>';
                                        }
                                    }else {
                                        echo '<div class="badge btn-secondary"><i>Offline</i></div>';
                                    }
                                ?>
                            </td>
                            <td>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                        <!-- TEACHER PROFILE LINK -->
                                        <li>
                                            <a href="<?php echo site_url('admin/teacher_profile/'.$row['teacher_id']);?>">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('information');?>
                                                </a>
                                        </li>

                                        <!-- teacher EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_teacher_edit/'.$row['teacher_id']);?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('edit');?>
                                                </a>
                                        </li>

                                        <li class="divider"></li>
                                        <li>
                                          <a href="#" onclick="confirm_modal('<?php echo site_url('admin/teacher/delete/'.$row['teacher_id']);?>');">
                                            <i class="entypo-trash"></i>
                                              <?php echo get_phrase('delete');?>
                                          </a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

	jQuery(document).ready(function($) {
        $('.datatable').DataTable();
	});

</script>
