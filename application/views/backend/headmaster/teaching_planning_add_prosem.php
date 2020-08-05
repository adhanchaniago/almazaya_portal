<?php 
$prosem = $this->db->get_where('teaching_planning', array('learning_id' => $param2))->result_array();
foreach ($prosem as $row){
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo get_phrase('upload_teaching_planning'); ?>
                </div>
            </div>
            <div class="panel-body">

                <?php
                echo form_open(site_url('headmaster/teaching_planning/add_prosem/'.$row['learning_id']), array(
                    'class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top', 'enctype' => 'multipart/form-data'
                ));
                ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('prosem'); ?></label>
                    <div class="col-sm-5">
                        <input type="file" name="prosem" class="form-control file2 inline btn btn-primary" data-label="<i class='glyphicon glyphicon-file'></i> Browse"/>
                        <!-- data-validate="required" data-message-required="<?php echo get_phrase('required'); ?>" -->
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" id = 'submit' class="btn btn-info">
                            <i class="entypo-upload"></i> <?php echo get_phrase('upload'); ?>
                        </button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
            <?php } ?>