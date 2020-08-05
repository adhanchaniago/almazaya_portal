<?php
    $sch_name = $this->db->get_where('marketing_school', array('school_id' => $school_id))->row()->name;
    $address = $this->db->get_where('marketing_school', array('school_id' => $school_id))->row()->address;
    $contact = $this->db->get_where('marketing_school', array('school_id' => $school_id))->row()->contact;
    $phone = $this->db->get_where('marketing_school', array('school_id' => $school_id))->row()->phone;
    $query = $this->db->select('*')->from('marketing_plan_status')->where('plan_id',$plan_id)->order_by('status_id','desc')->limit(1)->get();
    $sql = $query->row();
    $status_id = $sql->status_id;
?>
<hr>

<div class="row" style="text-align: center;">
    <div class="col-sm-12">
        <div class="tile-stats tile-white">
            <div class="col-sm-6">
                <b><h3 style="color: #696969;">"<?php echo $sch_name; ?>"</h3></b>
                <h4 style="color: #696969;">
                    <?php echo $address; ?>
                </h4>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <table class="table table-bordered">
                <tr>
                    <td>Contact Name</td>
                    <td><?php echo $contact; ?></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><?php echo $phone; ?></td>
                </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
		    <div class="panel-heading">
		        <h3 class="panel-title"><?php echo get_phrase('activity_promotion') ?></h3>
		    </div>
		    <div class="panel-body">

            <?php if ($plan_status->num_rows() > 0) {?>
                <table class="table table-bordered">
                    <thead>
                        <th>Process</th>
                        <th>Topick/Remark</th>
                        <th>Status</th>
                        <th>Result</th>
                        <th>Other Info</th>
                    </thead>
                    <tbody>
                        <?php foreach ($plan_status->result_array() as $row) { ?>
                            <tr>
                                <td><?=$row['status_plan'];?></td>
                                <td><?=$row['topick'];?></td>
                                <td>
                                    <?php if ($row['status_result'] == NULL) {
                                            echo "<button class='btn btn-info btn-xs'>Process</button>";
                                        } else if ($row['status_result'] == 'Waiting') {
                                            echo "<button class='btn btn-warning btn-xs'>".$row['status_result']."</button>";
                                        } else if ($row['status_result'] == 'Approved') {
                                            echo "<button class='btn btn-success btn-xs'>".$row['status_result']."</button>";
                                        } else {
                                            echo "<button class='btn btn-danger btn-xs'>".$row['status_result']."</button>";
                                        } ?>
                                </td>
                                <td><?=$row['result']."<br>at ".$row['result_date']." ".$row['result_time'];?></td>
                                <td></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php }else{?>
                <center>
                    <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/plan_status_elementary/'.$plan_id);?>');"
                         class="btn btn-success" id="submit_button" type="submit">
                        <i class="entypo-plus"></i> Create</a>
                </center>
            <?php } ?>
		    	<!-- <div class="tabs-vertical-env">
					<ul class="nav tabs-vertical">
						<li class="active">
							<a href="#">
								<i class="entypo-dot"></i>
								<?php echo get_phrase('class');?>
							</a>
						</li>
					</ul>
				</div> -->
		    </div>
		</div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
    </div>
    <div class="col-md-6">
        <?php if ($status->num_rows() > 0) {
                $row = $status->row();
                if($row->status_result == NULL) { ?>
                <div class="panel panel-primary" data-collapsed="0">
                    <div class="panel-heading">
                        <div class="panel-title" >
                            <i class="entypo-plus-circled"></i>
                            <?php echo get_phrase('add_result');?>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo get_phrase('result_status');?></label>
                            <div class="col-sm-8">
                                <select class="selectboxit" name="status_type" id="status_type">
                                    <option value=""><?php echo get_phrase('select_status_type');?></option>
                                    <option value="waiting"><?php echo get_phrase('waiting');?></option>
                                    <option value="approved"><?php echo get_phrase('approved');?></option>
                                    <option value="rejected"><?php echo get_phrase('rejected');?></option>
                                </select>
                            </div>
                        </div>
                        <br><br>
                        <div id="status_holder"></div>
                    </div>
                </div>
                <?php } else if($row->status_result == 'Waiting') {?>
                    <center>
                    <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/plan_reconfirm_elementary/'.$plan_id);?>');"
                         class="btn btn-info" id="submit_button" type="submit">
                        <i class="entypo-plus"></i> Re-confirm permission</a>
                    </center>
                <?php }else{}?>
        <?php }else{?>

        <?php } ?>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
        $('#status_type').on('change', function() {
            var status_type = $(this).val();
            if (status_type == '') {
                $('#status_holder').html('<div class="alert alert-danger">Please select a status type</div>');
                return;
            }
            var status_id = '<?php echo $status_id;?>';
            $.ajax({
                url: '<?php echo site_url('marketing/load_result_type/');?>' + status_type + '/' + status_id
            }).done(function(response) {
                $('#status_holder').html(response);
            });
        });
    });

</script>
