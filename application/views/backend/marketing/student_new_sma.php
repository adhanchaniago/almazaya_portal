
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
      	<div class="panel-heading">
          	<div class="panel-title" >
          		<i class="entypo-plus-circled"></i><?php echo get_phrase('addmission_form');?>
          	</div>
				</div>

        <div class="panel-body">
            <?php echo form_open(site_url('marketing/student/create') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>

            <div class="form-group">
            	<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('department');?></label>

            	<div class="col-sm-8">
            		<select name="depart" class="form-control">
                    <option value="-"><?php echo get_phrase('select');?></option>
                    <option value="SCIENCE"><?php echo get_phrase('SCIENCE');?></option>
                    <option value="SOCIAL"><?php echo get_phrase('SOCIAL');?></option>
                </select>
            	</div>
            </div>

            <input type="hidden" name="school" value="<?php echo $school_type;?>">

            <div class="form-group">
            	<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>

            	<div class="col-sm-8">
            		<input type="text" class="form-control" name="name">
            	</div>
            </div>

            <div class="form-group">
            	<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('school_name');?></label>

              <div class="col-sm-8">
            		<select name="school" class="form-control">
            			<option value=""><?php echo get_phrase('select');?></option>
            		<?php
                  $school = $this->db->get_where('marketing_school', array('level' => 'SMP'))->result_array();
                  foreach ($school as $row):?>
            			<option value="<?=$row['school_id'];?>"><?=$row['name'];?></option>
            		<?php endforeach; ?>
            		</select>
            	</div>
            </div>

            <div class="form-group">
            	<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('birthplace');?></label>

            	<div class="col-sm-8">
            		<input type="text" class="form-control" name="birthplace" value="">
            	</div>
            </div>

            <div class="form-group">
            	<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('birthday');?></label>

            	<div class="col-sm-8">
            		<input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
            	</div>
            </div>

            <div class="form-group">
            	<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>

            	<div class="col-sm-8">
            		<select name="sex" class="form-control">
                    <option value=""><?php echo get_phrase('select');?></option>
                    <option value="male"><?php echo get_phrase('male');?></option>
                    <option value="female"><?php echo get_phrase('female');?></option>
                </select>
            	</div>
            </div>

            <div class="form-group">
            	<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>

            	<div class="col-sm-8">
            		<textarea name="address" class="form-control" id="" cols="30" rows="5"></textarea>
            	</div>
            </div>

            <div class="form-group">
            	<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>

            	<div class="col-sm-8">
            		<input type="text" class="form-control" name="phone" value="" >
            	</div>
            </div>

            <div class="form-group">
            	<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>

            	<div class="col-sm-8">
            		<input type="text" class="form-control" name="email" value="" >
            	</div>
            </div>

            <!-- orang tua -->
            <div class="form-group">
            	<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('father_name');?></label>

            	<div class="col-sm-8">
            		<input type="text" class="form-control" name="father_name" value="">
            	</div>
            </div>

            <div class="form-group">
            	<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('mother_name');?></label>

            	<div class="col-sm-8">
            		<input type="text" class="form-control" name="mother_name" value="">
            	</div>
            </div>

            <div class="form-group">
            	<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('wali_name');?></label>

            	<div class="col-sm-8">
            		<input type="text" class="form-control" name="wali_name" value="">
            	</div>
            </div>

            <div class="form-group">
            	<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('parents_phone');?></label>

            	<div class="col-sm-8">
            		<input type="text" class="form-control" name="parentcontact" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="">
            	</div>
            </div>

            <div class="form-group">
            	<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('note');?></label>

            	<div class="col-sm-8">
            		<textarea name="note" class="form-control" id="" cols="30" rows="3"></textarea>
            	</div>
            </div>

            <div class="form-group">
            		<div class="col-sm-offset-3 col-sm-5">
            			<button type="submit" class="btn btn-info"><?php echo get_phrase('add_student');?></button>
            		</div>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
