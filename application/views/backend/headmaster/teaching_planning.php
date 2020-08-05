
<!-- <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add/');?>');" 
	class="btn btn-primary pull-right">
    	<i class="entypo-plus-circled"></i>
			<?php echo get_phrase('add_teaching_planning');?>
</a> 
<br><br><br> -->

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
						<?php 
						$cek = $this->db->get_where('teaching_planning', array('teacher_id' => $teacher_id))->result_array();
						if ($cek == null) { 
							echo "";
						 } else { ?>
							<?php 
							foreach($cek as $row):
							 ?>
							<h4><b><?php echo $this->db->get_where('subject', array('subject_id' => $row['subject_id']))->row()->name; ?></b>
							</h4>
							<p><h5>class : <b><?php echo $this->db->get_where('class', array('class_id' => $row['class_id']))->row()->name; ?></b>
							section : <b><?php echo $this->db->get_where('section', array('section_id' => $row['section_id']))->row()->name; ?></b>
							<h5>
							</p>
							<table class="table table-bordered responsive">
								<tr>
									<td width="20%">Prota</td>
									<td>: 
										<?php 
											if ($row['prota'] == null) {
												# code...
												echo "Not Found";
											} else {
												# code...
												echo $row['prota'];
											}
										?>
									</td>
									<td>
										<?php 
											if ($row['prota'] == null) {
												# code... ?>
												<a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add_prota/'.$row['learning_id']);?>');" 
													class="btn btn-primary">
														<i class="entypo-plus-circled"></i>
															<?php echo get_phrase('add_prota');?>
												</a> 
											<?php } else { ?>
												<a href= "<?php echo base_url().'uploads/learning/prota/'.$row['prota']?>" class="btn btn-success btn-icon icon-left">
												<i class="entypo-download"></i>Download</a>
												<a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add_prota/'.$row['learning_id']);?>');" 
													class="btn btn-danger btn-icon icon-left">
														<i class="entypo-pencil"></i>
															<?php echo get_phrase('edit');?>
												</a>
											<?php } ?>
									</td>
								</tr>
								<tr>
									<td width="20%">Prosem</td>
									<td>: 
										<?php 
											if ($row['prosem'] == null) {
												# code...
												echo "Not Found";
											} else {
												# code...
												echo $row['prosem'];
											}
										?>
									</td>
									<td>
										<?php 
											if ($row['prosem'] == null) {
												# code... ?>
												<a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add_prosem/'.$row['learning_id']);?>');" 
													class="btn btn-primary">
														<i class="entypo-plus-circled"></i>
															<?php echo get_phrase('add_prosem');?>
												</a> 
												<?php } else { ?>
												<a href= "<?php echo base_url().'uploads/learning/prosem/'.$row['prosem']?>" class="btn btn-success btn-icon icon-left">
												<i class="entypo-download"></i>Download</a>
												<a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add_prosem/'.$row['learning_id']);?>');" 
													class="btn btn-danger btn-icon icon-left">
														<i class="entypo-pencil"></i>
															<?php echo get_phrase('edit');?>
												</a>
											<?php } ?>
									</td>
								</tr>
								<tr>
									<td width="20%">Silabus</td>
									<td>: 
										<?php 
											if ($row['silabus'] == null) {
												# code...
												echo "Not Found";
											} else {
												# code...
												echo $row['silabus'];
											}
										?>
									</td>
									<td>
										<?php 
											if ($row['silabus'] == null) {
												# code... ?>
												<a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add_silabus/'.$row['learning_id']);?>');" 
													class="btn btn-primary">
														<i class="entypo-plus-circled"></i>
															<?php echo get_phrase('add_silabus');?>
												</a> 
												<?php } else { ?>
												<a href= "<?php echo base_url().'uploads/learning/silabus/'.$row['silabus']?>" class="btn btn-success btn-icon icon-left">
												<i class="entypo-download"></i>Download</a>
												<a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add_silabus/'.$row['learning_id']);?>');" 
													class="btn btn-danger btn-icon icon-left">
														<i class="entypo-pencil"></i>
															<?php echo get_phrase('edit');?>
												</a>
											<?php } ?>
									</td>
								</tr>
								<tr>
									<td width="20%">RPP</td>
									<td>: 
										<?php 
											if ($row['rpp'] == null) {
												# code...
												echo "Not Found";
											} else {
												# code...
												echo $row['rpp'];
											}
										?>
									</td>
									<td>
										<?php 
											if ($row['rpp'] == null) {
												# code... ?>
												<a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add_rpp/'.$row['learning_id']);?>');" 
													class="btn btn-primary">
														<i class="entypo-plus-circled"></i>
															<?php echo get_phrase('add_rpp');?>
												</a> 
												<?php } else { ?>
												<a href= "<?php echo base_url().'uploads/learning/rpp/'.$row['rpp']?>" class="btn btn-success btn-icon icon-left">
												<i class="entypo-download"></i>Download</a>
												<a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add_rpp/'.$row['learning_id']);?>');" 
													class="btn btn-danger btn-icon icon-left">
														<i class="entypo-pencil"></i>
															<?php echo get_phrase('edit');?>
												</a>
											<?php } ?>
									</td>
								</tr>
								<tr>
									<td width="20%">Keterkaitan KIKD</td>
									<td>: 
										<?php 
											if ($row['kikd'] == null) {
												# code...
												echo "Not Found";
											} else {
												# code...
												echo $row['kikd'];
											}
										?>
									</td>
									<td>
										<?php 
											if ($row['kikd'] == null) {
												# code... ?>
												<a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add_kikd/'.$row['learning_id']);?>');" 
													class="btn btn-primary">
														<i class="entypo-plus-circled"></i>
															<?php echo get_phrase('add_KIKD');?>
												</a> 
												<?php } else { ?>
												<a href= "<?php echo base_url().'uploads/learning/kikd/'.$row['kikd']?>" class="btn btn-success btn-icon icon-left">
												<i class="entypo-download"></i>Download</a>
												<a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add_kikd/'.$row['learning_id']);?>');" 
													class="btn btn-danger btn-icon icon-left">
														<i class="entypo-pencil"></i>
															<?php echo get_phrase('edit');?>
												</a>
											<?php } ?>
									</td>
								</tr>
								<tr>
									<td width="20%">Learning Material</td>
									<td>: 
										<?php 
											if ($row['learn_material'] == null) {
												# code...
												echo "Not Found";
											} else {
												# code...
												echo $row['learn_material'];
											}
										?>
									</td>
									<td>
										<?php 
											if ($row['learn_material'] == null) {
												# code... ?>
												<a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add_learning_material/'.$row['learning_id']);?>');" 
													class="btn btn-primary">
														<i class="entypo-plus-circled"></i>
															<?php echo get_phrase('add_learning_material');?>
												</a> 
												<?php } else { ?>
												<a href= "<?php echo base_url().'uploads/learning/learning_material/'.$row['learn_material']?>" class="btn btn-success btn-icon icon-left">
												<i class="entypo-download"></i>Download</a>
												<a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add_learning_material/'.$row['learning_id']);?>');" 
													class="btn btn-danger btn-icon icon-left">
														<i class="entypo-pencil"></i>
															<?php echo get_phrase('edit');?>
												</a>
											<?php } ?>
									</td>
								</tr>
							</table>
							<hr />
							<?php 
							endforeach;
						}?>

						<!-- ADD TEACHING PLANNING -->
						<div class="col-md-offset-4 col-md-4" style="padding: 15px;">
							<a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/teaching_planning_add/');?>');" 
								class="btn btn-primary">
									<i class="entypo-plus-circled"></i>
										<?php echo get_phrase('add_new_teaching_planning');?>
							</a>
						</div>
					</div>

				</div>
				
			</div>	
		</div>
	</div>
</div>