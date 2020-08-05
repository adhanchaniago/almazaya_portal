<?php
$edit_data		=	$this->db->get_where('fingerprint_options' , array('id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_subject');?>
            	</div>
            </div>
			<div class="panel-body">
                <?php echo form_open(site_url('admin/fingerprint_setting/do_update/'.$row['id']) , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('class');?></label>
                    <div class="col-sm-5 controls">
                        <select id="class_id" name="class_id" class="form-control">
                            <?php
                            $classes = $this->db->get('class')->result_array();
                            foreach($classes as $row2):
                            ?>
                                <option value="<?php echo $row2['class_id'];?>"
                                    <?php if($row['class_id'] == $row2['class_id'])echo 'selected';?>>
                                        <?php echo $row2['name'];?>
                                            </option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('section');?></label>
                    <div class="col-sm-5 controls">
                        <select id="fingerprint_section" name="section_id" class="form-control">
                        <?php 
                        $section = $this->db->get('section')->result_array();
                        foreach($section as $row3):
                        ?>
                                    <option value="<?php echo $row3['section_id'];?>" 
                                        <?php if ($row['class_id'] == $row3['class_id'])echo 'selected';?>>
                                        <?php echo $row3['name'] ?>
                                    </option>
                        <?php 
                        endforeach;
                        ?>
                                    </select>
                                </div>
                            </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('ip');?></label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="ip" value="<?php echo $row['ip'];?>" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('password');?></label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="password" value="<?php echo $row['password'];?>" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('machine_name');?></label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="machin" value="<?php echo $row['nama_mesin'];?>" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-info"><?php echo get_phrase('edit_subject');?></button>
                    </div>
                 </div>
        		</form>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>

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
    function get_fingerprint_sections(class_id) {
        $.ajax({
            url: '<?php echo site_url('admin/get_fingerprint_section/'); ?>' + class_id ,
            success: function(response)
            {
                jQuery('#fingerprint_section').html(response);
            }
        });
    }
</script>