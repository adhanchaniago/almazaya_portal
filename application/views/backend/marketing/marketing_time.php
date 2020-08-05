<?php if($time->num_rows() > 0){ ?>
<div class="row" style="text-align: center;">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="tile-stats tile-white">
            <div class="icon"><i class="entypo-chart-area"></i></div>
            <h3 style="color: #696969;">
                <?php 
                $start = $time->row()->start_at;
                $end = $time->row()->end_at;
                    echo date("d M Y", $start)." - ".date("d M Y", $end);
                ?>
            </h3>
            <h3 style="color: #696969;">
                <?php 
                echo $time->row()->running_year;
                ?>
            </h3>
        </div>
    </div>
    <div class="col-sm-4"></div>
</div>
<?php }else { ?>
<div class="row">
    <div class="col-md-4">
		<div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title"><?php echo get_phrase('execution_time') ?></h4>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open(site_url('marketing/marketing_time/create/') , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                        <div class="form-group">
                            <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('start_at');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control datepicker" name="start_at" value="" data-start-view="2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('end_at');?></label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control datepicker" name="end_at" value="" data-start-view="2">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo get_phrase('add_time');?></button>
                            </div>
                        </div>
                        <?php echo form_close();?>

                    </div>
                </div>
            </div>
    	</div>
    </div>
</div>
<?php } ?>