<div class="row">
    <?php echo form_open(site_url('admin/manage_daily_activity/create') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
        <div class="col-md-6">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title" >
                        <i class="entypo-plus-circled"></i>
                        <?php echo get_phrase('daily_activity');?>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('activity');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('user');?></label>
                        <div class="col-sm-9">
                            <select name="user" class="form-control selectboxit" data-validate="required"
                            data-message-required="<?php echo get_phrase('value_required');?>" required>
                                <option value=""><?php echo get_phrase('select_user');?></option>
                                <option value="student"><?php echo get_phrase('student');?></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title" >
                        <i class="entypo-plus-circled"></i>
                        <?php echo get_phrase('activity');?>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('start_date');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="datepicker form-control" name="start_date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('end_date');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="datepicker form-control" name="end_date" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('instruction');?></label>
                        <div class="col-sm-9">
                            <textarea name="instruction" class = "form-control" rows="8" cols="80" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required></textarea>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="text-align: center;">
                <button type="submit" class="btn btn-info"><?php echo get_phrase('add_activity');?></button>
            </div>
        </div>
    </form>
</div>
