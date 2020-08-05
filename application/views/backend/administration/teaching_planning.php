<hr />
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
		    <div class="panel-heading">
		        <h3 class="panel-title"><?php echo get_phrase('teaching_planning') ?></h3>
		    </div>
		    <div class="panel-body">
			<div class="tabs-vertical-env">
            
				<div class="tab-content">

					<div class="tab-pane active">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
                                    <th><?php echo get_phrase('teacher');?></th>
                                    <th><?php echo get_phrase('class') ?></th>
									<th><?php echo get_phrase('subject');?></th>
									<th><?php echo get_phrase('prota');?></th>
	                                <th><?php echo get_phrase('prosem');?></th>
									<th><?php echo get_phrase('silabus');?></th>
									<th><?php echo get_phrase('rpp');?></th>
									<th><?php echo get_phrase('kikd');?></th>
                                    <th><?php echo get_phrase('learn_material');?></th>
									<th></th>
								</tr>
							</thead>
							<tbody>

							<?php
								$count    = 1;
								$teacher = $this->db->get('teacher')->result_array();
                                
                                foreach ($teacher as $row):
                                $info = $this->db->get_where('teaching_planning', array('teacher_id' => $row['teacher_id']))->result_array();
							?>
								<tr>
									<td><?php echo $count++;?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td>
                                        <?php 
                                        foreach ($info as $c) {
                                            $k = $this->db->get_where('class', array('class_id' => $c['class_id']))->row()->name;
                                            $j = $this->db->get_where('section', array('section_id' => $c['section_id']))->row()->name;
                                            echo $k;
                                            if ($j == null) {
                                                echo "";
                                            }else{
                                            echo " - ";
                                            echo $j;
                                            }
                                            echo "<br>";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                    <?php 
                                        foreach ($info as $s) {
                                            echo $this->db->get_where('subject', array('subject_id' => $s['subject_id']))->row()->name;
                                            echo "<br>";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        foreach ($info as $plan) {
                                            if ($plan['prota'] == "") {
                                                echo 'Not Found';
                                                echo '<br>';
                                            } else {
                                                echo '<a href= '.base_url().'uploads/teaching_planning/prota/'.$plan['prota'].' class="btn btn-blue btn-icon icon-left">
                                                <i class="entypo-download"></i>Down..</a>';
                                                echo '<br>';
                                            }
                                        }
                                        ?>
                                    </td>
									<td>
                                    <?php
                                        foreach ($info as $plan) {
                                            if ($plan['prosem'] == "") {
                                                echo 'Not Found';
                                                echo '<br>';
                                            } else {
                                                echo '<a href= '.base_url().'uploads/teaching_planning/prosem/'.$plan['prosem'].' class="btn btn-blue btn-icon icon-left">
                                                <i class="entypo-download"></i>Down..</a>';
                                                echo '<br>';
                                            }
                                        }
                                        ?>
                                    </td>
	                                <td>
                                    <?php
                                        foreach ($info as $plan) {
                                            if ($plan['silabus'] == "") {
                                                echo 'Not Found';
                                                echo '<br>';
                                            } else {
                                                echo '<a href= '.base_url().'uploads/teaching_planning/silabus/'.$plan['silabus'].' class="btn btn-blue btn-icon icon-left">
                                                <i class="entypo-download"></i>Down..</a>';
                                                echo '<br>';
                                            }
                                        }
                                        ?>
									</td>
									<td>
                                    <?php
                                        foreach ($info as $plan) {
                                            if ($plan['rpp'] == "") {
                                                echo 'Not Found';
                                                echo '<br>';
                                            } else {
                                                echo '<a href= '.base_url().'uploads/teaching_planning/rpp/'.$plan['rpp'].' class="btn btn-blue btn-icon icon-left">
                                                <i class="entypo-download"></i>Down..</a>';
                                                echo '<br>';
                                            }
                                        }
                                        ?>
									</td>
                                    <td>
                                    <?php
                                        foreach ($info as $plan) {
                                            if ($plan['kikd'] == "") {
                                                echo 'Not Found';
                                                echo '<br>';
                                            } else {
                                                echo '<a href= '.base_url().'uploads/teaching_planning/kikd/'.$plan['kikd'].' class="btn btn-blue btn-icon icon-left">
                                                <i class="entypo-download"></i>Down..</a>';
                                                echo '<br>';
                                            }
                                        }
                                        ?>
                                    </td>
									<td>
                                    <?php
                                        foreach ($info as $plan) {
                                            if ($plan['learn_material'] == "") {
                                                echo 'Not Found';
                                                echo '<br>';
                                            } else {
                                                echo '<a href= '.base_url().'uploads/teaching_planning/learn_material/'.$plan['learn_material'].' class="btn btn-blue btn-icon icon-left">
                                                <i class="entypo-download"></i>Down..</a>';
                                                echo '<br>';
                                            }
                                        }
                                        ?>
									</td>
                                    <td></td>
								</tr>
							<?php endforeach;?>
								
							</tbody>
						</table>
					</div>

				</div>
				
			</div>	
		</div>
	</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.datatable').DataTable();
    });
</script>