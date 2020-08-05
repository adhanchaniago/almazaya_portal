<?php
$edit_data		=	$this->db->get_where('marketing_school' , array('school_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_school');?>
            	</div>
            </div>
			<div class="panel-body">
                <?php echo form_open(site_url('marketing/junior_school/edit/'.$row['school_id']) , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>

                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                    <div class="col-sm-5">
                        <input type="hidden" class="form-control" name="school_id" value="<?php echo $row['school_id'];?>"/>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" data-validate="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                    <div class="col-sm-5">
                        <textarea name="address" class="form-control" cols="30" rows="10"><?php echo $row['address'];?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('contact');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="contact" value="<?php echo $row['contact'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-info"><?php echo get_phrase('edit_school');?></button>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>
