<hr />

<?php echo form_open(site_url('administration/daily_attendance_selector')); ?>
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
                                <option value="<?php echo $row['class_id']; ?>"<?php if ($class_id == $row['class_id']) echo 'selected'; ?> ><?php echo $row['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            <?php endif; ?>

            <?php
            $query = $this->db->get_where('section', array('class_id' => $class_id));
            if ($query->num_rows() > 0):
                $sections = $query->result_array();
                ?>
                <div id="section_holder">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label" style="margin-bottom: 5px;"><?php echo get_phrase('section'); ?></label>
                            <select class="form-control selectboxit" name="section_id">
                                <?php foreach ($sections as $row): ?>
                                    <option value="<?php echo $row['section_id']; ?>"
                                            <?php if ($section_id == $row['section_id']) echo 'selected'; ?>><?php echo $row['name']; ?></option>
                                        <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-md-2" style="margin-top: 20px;">
                <button type="submit" class="btn btn-info"><?php echo get_phrase('select'); ?></button>
            </div>

        </div>
    </div>
</div>
<?php echo form_close(); ?>


<?php if ($class_id != '' && $section_id != ''): ?>

    <br>

<div class="panel panel-primary ">
    <div class="panel-heading">
        <div class="panel-title">
            <?php echo get_phrase('class') . ' ' . $classx;?> : <?php echo get_phrase('section');?> <?php echo $section; ?>
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
                            $data = array();

                            $student = $this->db->get_where('enroll', array(
                                'class_id' => $class_id,
                                'section_id' => $section_id
                            ))->result_array();

                            foreach ($student as $row): 
                            ?>
                            <tr>
                                <td style="text-align: center;">
                                    <?php echo $no++ ?>
                                </td>
                                <td>
                                    <?php echo $this->db->get_where('student', array('student_id' => $row['student_id']))->row()->name; ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        $nisn = $this->db->get_where('student', array('student_id' => $row['student_id']))->row()->nisn;
                                        echo $nisn; ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php echo $this->db->get_where('class', array('class_id' => $row['class_id']))->row()->name; ?>
                                     
                                    <?php echo $this->db->get_where('section', array('section_id' => $row['section_id']))->row()->name; ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        $coming = $this->db->limit(1)->get_where('last_attendance_0', array('nisn' => $nisn, 'date' => date('Y-m-d')))->row()->time; 
                                        if ($coming == null) {
                                            echo " - ";
                                        } else {
                                            echo $coming." WITA";
                                        }
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        $home = $this->db->limit(1)->get_where('last_attendance_1', array('nisn' => $nisn, 'date' => date('Y-m-d')))->row()->time; 
                                        if ($home == null) {
                                            echo " - ";
                                        }else{
                                            echo $home." WITA";
                                        }
                                     ?>
                                </td>
                                <td style="text-align: center;">
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
    </div>
</div>

<script type="text/javascript">

    // ajax form plugin calls at each modal loading,
    $(document).ready(function() {

        // SelectBoxIt Dropdown replacement
        if($.isFunction($.fn.selectBoxIt))
        {
            $("select.selectboxit").each(function(i, el)
            {
                var $this = $(el),
                    opts = {
                        showFirstOption: attrDefault($this, 'first-option', true),
                        'native': attrDefault($this, 'native', false),
                        defaultText: attrDefault($this, 'text', ''),
                    };

                $this.addClass('visible');
                $this.selectBoxIt(opts);
            });
        }
    });

</script>

<script type="text/javascript">

    function select_section(class_id) {

        $.ajax({
            url: '<?php echo site_url('administration/get_section/'); ?>' + class_id,
            success: function (response)
            {

                jQuery('#section_holder').html(response);
            }
        });
    }

</script>
