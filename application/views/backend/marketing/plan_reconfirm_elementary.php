<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('re-confirm_permission');?>
            	</div>
            </div>
			<div class="panel-body">

            <?php echo form_open(site_url('marketing/reconfirm_elementary/reconfirm/') , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('status');?></label>
						<div class="col-sm-5">
                            <input type="hidden" class="form-control" name="plan_id" value="<?=$param2?>" >
							<input type="text" class="form-control" name="status_result" value="Re-confirm" disabled>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('topick/remark');?></label>
						<div class="col-sm-5">
                            <textarea name="topick" class="form-control" cols="30" rows="10" autofocus></textarea>
						</div>
					</div>

					<!-- <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('person_incharge');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="person">
						</div>
					</div> -->

                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('create');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
