<div class="row">
	<div class="col-md-4">
		<div class="panel panel-primary">
		    <div class="panel-heading">
		        <h3 class="panel-title">Data <?php echo $page_title; ?></h3>
		    </div>
		    <div class="panel-body">
                <?php echo form_open(site_url('teacher/update_kikd'), array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>

                        <div class="col-sm-12">
                            <input type="hidden" class="form-control" name="id" value="<?=$edit->id?>">
                            <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?=$edit->name?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('class');?></label>

                        <div class="col-sm-12">
                            <select name="class_id" class="form-control" data-validate="required" id="class_id"
                                data-message-required="<?php echo get_phrase('value_required');?>"
                                    onchange="return get_class_sections(this.value)">
                            <option value=""><?php echo get_phrase('select');?></option>
                            <?php
                                $classes = $this->db->get('class')->result_array();
                                foreach($classes as $row):
                                    ?>
                                    <option value="<?php echo $row['class_id'];?>"<?php if($row['class_id'] == $edit->class) echo 'selected';?>>
                                        <?php echo $row['name'];?>
                                    </option>
                                <?php
                                endforeach;
                            ?>
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('subject');?></label>

                        <div class="col-sm-12">
                            <select name="subject_id" class="form-control" data-validate="required" id="subject_id"
                                data-message-required="<?php echo get_phrase('value_required');?>">
                            <option value=""><?php echo get_phrase('select');?></option>
                            <?php
                                $subject = $this->db->get_where('subject', array('teacher_id' => $this->session->userdata('teacher_id')))->result_array();
                                foreach($subject as $row):
                                    $cls = $this->db->get_where('class', array('class_id' => $row['class_id']))->row();
                                    ?>
                                    <option value="<?php echo $row['subject_id'];?>" <?php if($row['subject_id'] == $edit->section) echo 'selected';?>>
                                        <?php echo $row['name']." - ".$cls->name;?>
                                    </option>
                                <?php
                                endforeach;
                            ?>
                        </select>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('section');?></label>
                            <div class="col-sm-12">
                                <select name="section_id" class="form-control" id="section_selector_holder">
                                    <option value=""><?php echo get_phrase('select_class_first');?></option>

                                </select>
                            </div>
                    </div> -->

					<div class="form-group">
						<label class="col-sm-3 control-label"><?php echo get_phrase('file'); ?></label>

						<div class="col-sm-5">

							<input type="file" name="kikd" class="form-control file2 inline btn btn-primary" data-label="<i class='glyphicon glyphicon-file'></i> Browse" required/>

						</div>
					</div>

                    <!-- <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('email').'/'.get_phrase('username');?></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="email" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="">
                        </div>
                    </div> -->

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info"><?php echo get_phrase('update_kikd');?></button>
                        </div>
                    </div>
                <?php echo form_close();?>
			</div>
		</div>
	</div>

    <div class ="col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Tabel <?php echo $page_title; ?></h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered datatable" id="">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $running_year 		=   $this->db->get_where('settings' , array('type'=>'running_year'))->row()->description;
						$data = $this->db->get_where('kikd', array('id_teacher' => $this->session->userdata('teacher_id'), 'year' => $running_year))->result_array();
						foreach ($data as $row) {
						$class = $this->db->get_where('class', array('class_id' => $row['class']))->row();
						$section = $this->db->get_where('subject', array('subject_id' => $row['section']))->row();
					 ?>
                        <tr>
                        <td><?=$row['name'];?></td>
                        <td><?=$class->name;?></td>
                        <td><?=$section->name;?></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                    <!-- TEACHER PROFILE LINK -->
                                    <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/view_kikd/'.$row['id']);?>');">
                                        <!-- <a href="<?php echo site_url('admin/teacher_profile/'.$row['id']);?>"> -->
                                            <i class="entypo-doc"></i>
                                                <?php echo get_phrase('view_file');?>
                                        </a>
                                    </li>

                                    <!-- teacher EDITING LINK -->
                                    <li>
                                        <a href="<?php echo site_url('teacher/edit_kikd/'.$row['id']);?>">
                                            <i class="entypo-pencil"></i>
                                                <?php echo get_phrase('edit');?>
                                            </a>
                                    </li>

                                    <li class="divider"></li>
                                    <li>
                                        <a href="#" onclick="confirm_modal('<?php echo site_url('teacher/del_kikd/'.$row['id']);?>');">
                                        <i class="entypo-trash"></i>
                                            <?php echo get_phrase('delete');?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        </tr>

						<?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function get_class_sections(class_id) {

        $.ajax({
            url: '<?php echo site_url('teacher/get_class_section/'); ?>' + class_id,
            success: function (response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>