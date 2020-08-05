 <?php
    $daily_activity = $this->db->get_where('daily_activity', array('activity_id' => $activity_id))->row_array();
    $activity_bank = $this->db->get_where('activity_bank', array('activity_id' => $activity_id))->result_array();
?>
<hr>
<div class="row">
    <div class="col-md-6">
        <h4><i class="entypo-docs"></i>&nbsp; <?php echo get_phrase('question_paper');?></h4>
    </div>
    <div class="col-md-6">
        <button type="button" class="btn btn-info pull-right" id="questions_print">
            <i class="entypo-print"></i> &nbsp;<?php echo get_phrase('print');?>
        </button>
        <div id="print_options">
            <a href="#" class="btn btn-white pull-right" id="questions_print_with_answers">
                <i class="entypo-print"></i> &nbsp; <?php echo get_phrase('print_with_answers');?>
            </a>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-menu"></i>
                    <?php echo get_phrase('activity_list');?>
                </div>
            </div>
            <div class="panel-body">
                <table  class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: center;" width="5%"><div>#</div></th>
                            <th style="text-align: center;"><div><?php echo get_phrase('type');?></div></th>
                            <th style="text-align: center;" width="60%"><div><?php echo get_phrase('activity');?></div></th>
                            <th style="text-align: center;" width="10%"><div><?php echo get_phrase('time');?></div></th>
                            <th style="text-align: center;"><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (sizeof($activity_bank) == 0):?>
                            <tr>
                                <td colspan="5"><?php echo get_phrase('no_question_has_been_added_yet'); ?></td>
                            </tr>

                            <?php
                            elseif (sizeof($activity_bank) > 0):
                            $i = 0;
                            foreach ($activity_bank as $added_activity): ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo ++$i; ?></td>
                                    <td><?php echo get_phrase($added_activity['type']);?></td>
                                    <?php if ($added_activity['type'] == 'fill_in_the_blanks'): ?>
                                        <td><?php echo str_replace('^', '____', $added_activity['question_title']); ?></td>
                                    <?php else: ?>
                                        <td><?php echo $added_activity['question_title']; ?></td>
                                    <?php endif; ?>
                                    <td style="text-align: center;"><?php echo $added_activity['mark']; ?></td>
                                    <td style="text-align: center;">
                                        <!-- <a href="<?php echo site_url('admin/update_online_exam_question/'.$added_activity['question_bank_id']); ?>" class = "btn btn-primary btn-xs" data-toggle="tooltip" title="<?php echo get_phrase('edit'); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> -->
                                        <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/update_online_exam_question/'.$added_activity['question_bank_id']);?>')" class="btn btn-primary btn-xs" data-toggle="tooltip" title="<?php echo get_phrase('edit'); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href = "#" onclick="confirm_modal('<?php echo site_url('admin/delete_question_from_online_exam/'.$added_activity['question_bank_id']);?>');" class = "btn btn-danger btn-xs"  data-toggle="tooltip" title="<?php echo get_phrase('delete'); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-info-circled"></i>
                    <?php echo get_phrase('activity_title');?>
                </div>
            </div>
            <div class="panel-body">
                <table  class="table table-bordered">
                    <tbody>
                        <tr>
                            <td><b><?php echo get_phrase('title');?></b></td>
                            <td colspan="3"><?php echo $daily_activity['title']; ?></td>
                        </tr>
                        <tr>
                            <td><b><?php echo get_phrase('start_at');?></b></td>
                            <td><?php echo date('M d, Y', $daily_activity['start_date']); ?></td>
                            <td><b><?php echo get_phrase('end_at');?></b></td>
                            <td><?php echo date('M d, Y', $daily_activity['end_date']); ?></td>
                        </tr>
                        <tr>
                            <td><b><?php echo get_phrase('time');?></b></td>
                            <td><?php echo $daily_activity['end_date'] - $daily_activity['start_date']; ?></td>
                            <td><b><?php echo get_phrase('status');?></b></td>
                            <td><?php echo $daily_activity['status']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo get_phrase('add_activity');?>
                </div>
            </div>
            <div class="panel-body">   
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('question_type');?></label>
                    <div class="col-sm-8">
                        <select class="selectboxit" name="question_type" id="question_type">
                            <option value=""><?php echo get_phrase('select_question_type');?></option>
                            <option value="multiple_choice"><?php echo get_phrase('multiple_choice');?></option>
                            <option value="true_false"><?php echo get_phrase('true_or_false');?></option>
                            <option value="fill_in_the_blanks"><?php echo get_phrase('fill_in_the_blanks');?></option>
                        </select>
                    </div>
                </div>
                <br><br>
                <div id="question_holder"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    $(document).ready(function() {
        $('#print_options').hide();
        $('#questions_print').on('click', function() {
            $('#print_options').fadeIn();
        });
        $('#question_type').on('change', function() {
            var question_type = $(this).val();
            if (question_type == '') {
                $('#question_holder').html('<div class="alert alert-danger">Please select a question type</div>');
                return;
            }
            var activity_id = '<?php echo $activity_id;?>';
            $.ajax({
                url: '<?php echo site_url('admin/load_question_type/');?>' + question_type + '/' + activity_id
            }).done(function(response) {
                $('#question_holder').html(response);
            });
        });
    });
    
</script>