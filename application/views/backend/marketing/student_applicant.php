
<a href="<?php echo site_url('marketing/student_new');?>"
    class="btn btn-primary pull-right">
        <i class="entypo-plus-circled"></i>
        <?php echo get_phrase('add_student_new');?>
    </a>
<br>
<br>

<div class="row">
    <div class="col-md-12">

        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#all" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo get_phrase('all_data'); ?>
                </a></li>
            <li>
                <a href="#smp" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo get_phrase('SMP_list'); ?>
                </a></li>
            <li>
                <a href="#sma" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo get_phrase('SMA_list'); ?>
                </a></li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="all">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th width="10"><div><?php echo get_phrase('#');?></div></th>
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('address');?></div></th>
                            <th><div><?php echo get_phrase('phone');?></div></th>
                            <th><div><?php echo get_phrase('school_name');?></div></th>
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach($student as $row):?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$row['name'];?></td>
                            <td><?=$row['address'];?></td>
                            <td><?=$row['phone'];?></td>
                            <td><?=$this->db->get_where('marketing_school', array('school_id' => $row['school_id']))->row()->name;?></td>
                            <td>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                        <!-- STUDENT PROFILE LINK -->
                                        <li>
                                            <!-- <a href="<?php echo site_url('admin/student_profile/'.$row['applicant_id']);?>"> -->
                                            <a href="#">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('profile');?>
                                                </a>
                                        </li>

                                        <!-- STUDENT EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_student_edit/'.$row['applicant_id']);?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('edit');?>
                                                </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                          <a href="#" onclick="confirm_modal('<?php echo site_url('marketing/delete_student/'.$row['applicant_id']);?>');">
                                            <i class="entypo-trash"></i>
                                              <?php echo get_phrase('delete');?>
                                          </a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>

            <div class="tab-pane" id="smp">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th width="10"><div><?php echo get_phrase('#');?></div></th>
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('address');?></div></th>
                            <th><div><?php echo get_phrase('phone');?></div></th>
                            <th><div><?php echo get_phrase('school_name');?></div></th>
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $this->db->select('s.name as name_s, s.phone as phone_s, s.address as address_s, sc.name as name_sc');
                            $this->db->from('student_applicant s');
                            $this->db->join('marketing_school sc', 'sc.school_id=s.school_id');
                            $this->db->where('sc.level','SD');
                            $smp = $this->db->get()->result_array();
                            foreach($smp as $row1):?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$row1['name_s'];?></td>
                            <td><?=$row1['address_s'];?></td>
                            <td><?=$row1['phone_s'];?></td>
                            <td><?=$row1['name_sc'];?></td>
                            <td>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                        <!-- STUDENT PROFILE LINK -->
                                        <li>
                                            <!-- <a href="<?php echo site_url('admin/student_profile/'.$row1['applicant_id']);?>"> -->
                                            <a href="#">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('profile');?>
                                                </a>
                                        </li>

                                        <!-- STUDENT EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_student_edit1/'.$row1['applicant_id']);?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('edit');?>
                                                </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                          <a href="#" onclick="confirm_modal('<?php echo site_url('marketing/delete_student/'.$row1['applicant_id']);?>');">
                                            <i class="entypo-trash"></i>
                                              <?php echo get_phrase('delete');?>
                                          </a>
                                        </li>
                                    </ul>
                                </div>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>

            <div class="tab-pane" id="sma">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th width="10"><div><?php echo get_phrase('#');?></div></th>
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('address');?></div></th>
                            <th><div><?php echo get_phrase('phone');?></div></th>
                            <th><div><?php echo get_phrase('school_name');?></div></th>
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $this->db->select('s.name as name_s, s.phone as phone_s, s.address as address_s, sc.name as name_sc');
                            $this->db->from('student_applicant s');
                            $this->db->join('marketing_school sc', 'sc.school_id=s.school_id');
                            $this->db->where('sc.level','SMP');
                            $sma = $this->db->get()->result_array();
                            foreach($sma as $row2):?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$row2['name_s'];?></td>
                            <td><?=$row2['address_s'];?></td>
                            <td><?=$row2['phone_s'];?></td>
                            <td><?=$row2['name_sc'];?></td>
                            <td>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                        <!-- STUDENT PROFILE LINK -->
                                        <li>
                                            <!-- <a href="<?php echo site_url('admin/student_profile/'.$row2['applicant_id']);?>"> -->
                                            <a href="#">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('profile');?>
                                                </a>
                                        </li>

                                        <!-- STUDENT EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_student_edit2/'.$row2['applicant_id']);?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('edit');?>
                                                </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                          <a href="#" onclick="confirm_modal('<?php echo site_url('marketing/delete_student/'.$row2['applicant_id']);?>');">
                                            <i class="entypo-trash"></i>
                                              <?php echo get_phrase('delete');?>
                                          </a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>


<script type="text/javascript">

	jQuery(document).ready(function($) {
        $('.datatable').DataTable();
	});

</script>
