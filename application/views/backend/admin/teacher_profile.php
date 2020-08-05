<style>
  .exam_chart {
    width       : 100%;
    height      : 265px;
    font-size   : 11px;
  }
</style>

<?php
  $teacher_info = $this->db->get_where('teacher', array('teacher_id' => $teacher_id))->result_array();
  $subject_teaching = $this->db->get_where('subject', array('teacher_id' => $teacher_id))->result_array();
  foreach ($teacher_info as $row):
?>
<div class="profile-env">
	<header class="row">
		<div class="col-md-3">
            <center>
                <a href="#">
                    <img src="<?php echo $this->crud_model->get_image_url('teacher', $teacher_id) ;?>" class="img-circle" style="width: 60%;" />
                </a>
            <br>
            <h3>
            <?php echo $row['name']; ?>
            </h3>
            <br>
            <span>
            <?php echo $row['position']; ?>
            </span>
            </center>
		</div>
        <div class="col-md-9">
		    <ul class="nav nav-tabs">
			    <li class="active"><a href="#tab1" data-toggle="tab" class="btn btn-default">
					<span class="visible-xs"><i class="entypo-home"></i></span>
					<span class="hidden-xs"><?php echo get_phrase('basic_info'); ?></span>
				</a>
			    </li>
			    <li class="">
				    <a href="#tab2" data-toggle="tab" class="btn btn-default">
					<span class="visible-xs"><i class="entypo-user"></i></span>
					<span class="hidden-xs"><?php echo get_phrase('education'); ?></span>
				    </a>
			    </li>
			    <li class="">
                    <a href="#tab3" data-toggle="tab" class="btn btn-default">
                        <span class="visible-xs"><i class="entypo-cog"></i></span>
                        <span class="hidden-xs"><?php echo get_phrase('subject_teaching'); ?></span>
                    </a>
                </li>
                <li class="">
                    <a href="#tab4" data-toggle="tab" class="btn btn-default">
                        <span class="visible-xs"><i class="entypo-cog"></i></span>
                        <span class="hidden-xs"><?php echo get_phrase('attendance'); ?></span>
                    </a>
                </li>
                <li class="">
                    <a href="#tab5" data-toggle="tab" class="btn btn-default">
                        <span class="visible-xs"><i class="entypo-cog"></i></span>
                        <span class="hidden-xs"><?php echo get_phrase('teaching_history'); ?></span>
                    </a>
                </li>
                <li class="">
				    <a href="#tab6" data-toggle="tab" class="btn btn-default">
					<span class="visible-xs"><i class="entypo-mail"></i></span>
					<span class="hidden-xs"><?php echo get_phrase('emergency_contact'); ?></span>
				</a>
			    </li>
		    </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <?php
                    $basic_info_titles = ['name','nip', 'position', 'birthday', 'gender', 'blood group', 'address', 'phone', 'email'];
                    $basic_info_values = [$row['name'],$row['nip'],$row['position'],$row['birthday'],$row['sex'],$row['blood_group'],$row['address'],$row['phone'],$row['email']];
                    ?>
                    <table class="table table-bordered" style="margin-top: 20px;">
                    <tbody>
                    <?php for ($i=0; $i < count($basic_info_titles) ; $i++) { ?>
                        <tr>
                        <td width="30%">
                            <strong><?php echo get_phrase($basic_info_titles[$i]); ?></strong>
                        </td>
                        <td><?php echo $basic_info_values[$i]; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                </div>
            
                <div class="tab-pane" id="tab2">
                    
                </div>

                <div class="tab-pane" id="tab3">
                    <table class="table table-bordered" style="margin-top: 20px;">
                        <thead>
                            <tr>
                                <td><b>SUBJECT</b></td>
                                <td><b>CLASS</b></td>
                                <td><b>SECTION</b></td>
                                <td><b>SCHEDULE</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($subject_teaching as $row3): ?>
                            <tr>
                                <td><?php echo $row3['name']; ?></td>
                                <td><?php echo $this->db->get_where('class', array('class_id' => $row3['class_id']))->row()->name; ?></td>
                                <td><?php echo $this->db->get_where('section', array('section_id' => $row3['section_id']))->row()->name; ?></td>
                                <td>
                                    <?php 
                                    $s = $this->db->get_where('class_routine', array('subject_id' => $row3['subject_id']))->row();
                                    $day = $s->day;
                                    $start = $s->time_start;
                                    $start_min = $s->time_start_min;
                                    $end = $s->time_end;
                                    $end_min = $s->time_end_min;

                                    if (!empty($day)) {
                                        echo "<b>".$day."</b> at <b>".$start.":".$start_min."</b> until <b>".$end.":".$end_min."</b>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="tab-pane" id="tab4">
                </div>

                <div class="tab-pane" id="tab5">
                </div>

                <div class="tab-pane" id="tab6">
                </div>
            </div>
		    <br>
	    </div>
	</header>
</div>
<?php endforeach; ?>
