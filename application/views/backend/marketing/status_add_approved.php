<?php echo form_open(site_url('marketing/plan_elementary_status/'.$status_id.'/add/approved') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>

<input type="hidden" name="type" value="<?php echo $status_type;?>">

<div class="form-group">
    <label class="col-sm-3 control-label"><?php echo get_phrase('implementation_date');?></label>
    <div class="col-sm-8">
        <input type="text" class="datepicker form-control" name="result_date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label"><?php echo get_phrase('time');?></label>
    <div class="col-sm-4">
        <div class="input-group">
            <input type="text" class="form-control timepicker" name="result_time" id="time_start" data-template="dropdown" data-show-seconds="true" data-default-time="11:00" data-show-meridian="false" data-minute-step="5" data-second-step="5" value=""/>
            <div class="input-group-addon">
                <a href="#"><i class="entypo-clock"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label"><?php echo get_phrase('note');?></label>
    <div class="col-sm-8">
        <textarea onkeyup="changeTheBlankColor()" name="result" class="form-control" id="result" rows="8" cols="80"></textarea>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-12">
        <button type="submit" class="btn btn-info btn-block"><?php echo get_phrase('add_result');?></button>
    </div>
</div>
<?php echo form_close();?>