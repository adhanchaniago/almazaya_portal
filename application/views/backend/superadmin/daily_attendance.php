<hr />

<?php echo form_open(site_url('admin/daily_attendance_selector/')); ?>
<div class="panel panel-primary ">
    <div class="panel-heading">
        <div class="panel-title">
            <?php echo get_phrase('daily_attendance');?>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">

            <?php
            $query = $this->db->get('class');
            if ($query->num_rows() > 0):
                $class = $query->result_array();

                ?>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="margin-bottom: 5px;"><?php echo get_phrase('class'); ?></label>
                        <select class="form-control selectboxit" name="class_id" onchange="select_section(this.value)">
                            <option value=""><?php echo get_phrase('select_class'); ?></option>
                            <?php foreach ($class as $row): ?>
                            <option value="<?php echo $row['class_id']; ?>" ><?php echo $row['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            <?php endif; ?>

            <div id="section_holder">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="margin-bottom: 5px;"><?php echo get_phrase('section'); ?></label>
                        <select class="form-control selectboxit" name="section_id">
                            <option value=""><?php echo get_phrase('select_section') ?></option>

                        </select>
                    </div>
                </div>
            </div>

        	<div class="col-md-2" style="margin-top: 20px;">
        		<button type="submit" class="btn btn-info"><?php echo get_phrase('select');?></button>
        	</div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title">
            <?php echo get_phrase('last_update')?>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <h4>Date : <b><?php echo date('d-m-Y') ?></b></h4>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered" id="my_table">
                    <thead>
                        <tr>
                            <td style="text-align: center;" rowspan="2">
                                <?php echo get_phrase('no'); ?>
                            </td>
                            <td style="text-align: center;" rowspan="2">
                                <?php echo get_phrase('student'); ?>
                            </td>
                            <td style="text-align: center;" rowspan="2">
                                <?php echo get_phrase('nisn'); ?>
                            </td>
                            <td style="text-align: center;" rowspan="2">
                                <?php echo get_phrase('class'); ?>
                            </td>
                            <td style="text-align: center;" colspan="3">
                                <?php echo get_phrase('attendance'); ?>
                            </td>
                            <td style="text-align: center;" rowspan="2">
                                <?php echo get_phrase(' '); ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">
                                <?php echo get_phrase('coming'); ?>
                            </td>
                            <td style="text-align: center;">
                                <?php echo get_phrase('late'); ?>
                            </td>
                            <td style="text-align: center;">
                                <?php echo get_phrase('home'); ?>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                            foreach ($attendance as $attend): 
                            ?>
                            <tr>
                                <td style="text-align: center;">
                                    <?php echo $no++ ?>
                                </td>
                                <td>
                                    <?php echo $attend['name'] ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php echo $attend['nisn'] ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php echo $attend['class']." ".$attend['section'] ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php echo $attend['time']." WITA" ?>
                                </td>
                                <td style="text-align: center;">
                                    
                                </td>
                                <td style="text-align: center;">
                                    
                                </td>
                                <td style="text-align: center;">
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function select_section(class_id) {

        $.ajax({
            url: '<?php echo site_url('admin/get_section/'); ?>' + class_id,
            success: function (response)
            {

                jQuery('#section_holder').html(response);
            }
        });
    }
</script>
