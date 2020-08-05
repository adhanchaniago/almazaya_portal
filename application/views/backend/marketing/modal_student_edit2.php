<?php 
$edit_data		=	$this->db->get_where('student_applicant' , array('applicant_id' => $param2))->result_array();
foreach ($edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_student');?>
            	</div>
            </div>
			<div class="panel-body">

				<?php if ($row['department'] == NULL){?>

					<?php echo form_open(site_url('marketing/student/do_update_smp/'.$row['applicant_id']) , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="name" value="<?=$row['name'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('school_name');?></label>

						<div class="col-sm-8">
							<select name="school" class="form-control">
								<option value=""><?php echo get_phrase('select');?></option>
							<?php
						$school = $this->db->get_where('marketing_school', array('level' => 'SD'))->result_array();
						foreach ($school as $row1):?>
								<option value="<?=$row1['school_id'];?>" <?php if($row1['school_id'] == $row['school_id']) echo 'selected';?>><?=$row1['name'];?></option>
							<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('birthplace');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="birthplace" value="<?=$row['birthplace'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('birthday');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control datepicker" name="birthday" value="<?=$row['birthday'];?>" data-start-view="2">
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>

						<div class="col-sm-8">
							<select name="sex" class="form-control">
							<option value=""><?php echo get_phrase('select');?></option>
							<option value="male" <?php if($row['sex'] == 'male') echo 'selected';?>><?php echo get_phrase('male');?></option>
							<option value="female" <?php if($row['sex'] == 'female') echo 'selected';?>><?php echo get_phrase('female');?></option>
						</select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>

						<div class="col-sm-8">
							<textarea name="address" class="form-control" id="" cols="30" rows="5"><?=$row['address'];?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="phone" value="<?=$row['phone'];?>" >
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="email" value="<?=$row['email'];?>">
						</div>
					</div>

					<!-- orang tua -->
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('father_name');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="father_name" value="<?=$row['nama_ayah'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('mother_name');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="mother_name" value="<?=$row['nama_ibu'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('wali_name');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="wali_name" value="<?=$row['nama_wali'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('parents_phone');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="parentcontact" value="<?=$row['no_hp'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('note');?></label>

						<div class="col-sm-8">
							<textarea name="note" class="form-control" id="" cols="30" rows="3"><?=$row['ket'];?></textarea>
						</div>
					</div>
						
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-5">
								<button type="submit" class="btn btn-info"><?php echo get_phrase('edit_student');?></button>
							</div>
						</div>
					<?php echo form_close();?>
				<?php } else { ?>

					<?php echo form_open(site_url('marketing/student/do_update_sma/'.$row['applicant_id']) , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('department');?></label>

						<div class="col-sm-8">
							<select name="depart" class="form-control">
							<option value="-"><?php echo get_phrase('select');?></option>
							<option value="SCIENCE" <?php if($row['department'] == 'SCIENCE') echo 'selected';?>><?php echo get_phrase('SCIENCE');?></option>
							<option value="SOCIAL" <?php if($row['department'] == 'SOCIAL') echo 'selected';?>><?php echo get_phrase('SOCIAL');?></option>
						</select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="name" value="<?=$row['name'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('school_name');?></label>

						<div class="col-sm-8">
							<select name="school" class="form-control">
								<option value=""><?php echo get_phrase('select');?></option>
							<?php
						$school = $this->db->get_where('marketing_school', array('level' => 'SMP'))->result_array();
						foreach ($school as $row1):?>
								<option value="<?=$row1['school_id'];?>" <?php if($row1['school_id'] == $row['school_id']) echo 'selected';?>><?=$row1['name'];?></option>
							<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('birthplace');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="birthplace" value="<?=$row['birthplace'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('birthday');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control datepicker" name="birthday" value="<?=$row['birthday'];?>" data-start-view="2">
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>

						<div class="col-sm-8">
							<select name="sex" class="form-control">
							<option value=""><?php echo get_phrase('select');?></option>
							<option value="male" <?php if($row['sex'] == 'male') echo 'selected';?>><?php echo get_phrase('male');?></option>
							<option value="female" <?php if($row['sex'] == 'female') echo 'selected';?>><?php echo get_phrase('female');?></option>
						</select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>

						<div class="col-sm-8">
							<textarea name="address" class="form-control" id="" cols="30" rows="5"><?=$row['address'];?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="phone" value="<?=$row['phone'];?>" >
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="email" value="<?=$row['email'];?>">
						</div>
					</div>

					<!-- orang tua -->
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('father_name');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="father_name" value="<?=$row['nama_ayah'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('mother_name');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="mother_name" value="<?=$row['nama_ibu'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('wali_name');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="wali_name" value="<?=$row['nama_wali'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('parents_phone');?></label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="parentcontact" value="<?=$row['no_hp'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('note');?></label>

						<div class="col-sm-8">
							<textarea name="note" class="form-control" id="" cols="30" rows="3"><?=$row['ket'];?></textarea>
						</div>
					</div>
						
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-5">
								<button type="submit" class="btn btn-info"><?php echo get_phrase('edit_student');?></button>
							</div>
						</div>
					<?php echo form_close();?>
				<?php } ?>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>

