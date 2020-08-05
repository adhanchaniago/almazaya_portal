<?php $class_info = $this->db->get('class')->result_array(); ?>
<?php $section_info = $this->db->get('section')->result_array(); ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo get_phrase('new_teaching_planning'); ?>
                </div>
            </div>
            <div class="panel-body">

                <?php
                echo form_open(site_url('headmaster/teaching_planning/create'), array(
                    'class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top', 'enctype' => 'multipart/form-data'
                ));
                ?>
                <!-- CLASS -->
                <div class="form-group">
                    <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('class'); ?></label>

                    <div class="col-sm-5">
                        <select name="class_id" class="form-control selectboxit" id="class_id" onchange="return get_class_subject(this.value)" required="">
                        <option value=""><?php echo get_phrase('select_class'); ?></option>
                            <?php foreach ($class_info as $row) { ?>
                                <option value="<?php echo $row['class_id']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <!-- SECTION -->
                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('section'); ?></label>
                    <div class="col-sm-5">
                        <select name="section_id" class="form-control">
                            <option value=""><?php echo get_phrase('select_section'); ?></option>
                            <?php foreach ($section_info as $rows) { ?>
                                <option value="<?php echo $rows['section_id']; ?>"><?php echo $rows['name']; ?></option>
                            <?php } ?>
                        </select>
                        <p></p>
                    </div>
                </div>

                <!-- SUBJECT -->
                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('subject'); ?></label>
                    <div class="col-sm-5">
                        <select name="subject_id" class="form-control" id="subject_selector_holder" required="required">
                            <option value="" disabled="true"><?php echo get_phrase('select_class_first'); ?></option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" id = 'submit' class="btn btn-info">
                            <i class="entypo-plus"></i> <?php echo get_phrase('teaching_planning'); ?>
                        </button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<script type = 'text/javascript'>
                var class_id = '';
                jQuery(document).ready(function($) {
                    $("#submit").attr('disabled', 'disabled');
                });

                function check_validation(){
                    if(class_id !== ''){
                        $('#submit').removeAttr('disabled');
                    }
                    else{
                        $("#submit").attr('disabled', 'disabled');
                    }
                }
                $('#class_id').change(function(){
                    class_id = $('#class_id').val();
                    check_validation();
                });
</script>
<script type="text/javascript">

function get_class_subject(class_id) {
    if (class_id !== '') {

    $.ajax({
        url: '<?php echo site_url('headmaster/get_class_subject/'); ?>' + class_id,
        success: function (response)
        {
            jQuery('#subject_selector_holder').html(response);
        }
    });
}
}

</script>