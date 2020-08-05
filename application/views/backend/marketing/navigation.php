<div class="sidebar-menu">
    <header class="logo-env" >
        <!-- logo -->
        <!-- <div class="logo" style="">
            <a href="<?php  echo site_url('login'); ?>">
                <img src="<?php  echo base_url('uploads/logo.png');?>"  style="max-height:30px;"/>
            </a>
        </div> -->

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="margin-top: 0px;">
            <a href="#" class="sidebar-collapse-icon" onclick="hide_brand()">
                <i class="entypo-menu"></i>
            </a>
        </div>
        <script type="text/javascript">
            function hide_brand() {
                $('#branding_element').toggle();
            }
        </script>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>
    <ul id="main-menu" class="">

        <div style="text-align: -webkit-center;" id="branding_element">
            <img src="<?php echo base_url('uploads/logo.png');?>"  style="max-height:21px;"/>
            <h4 style="color: #a2a3b7;text-align: -webkit-center;margin-bottom: 25px;font-weight: 300;margin-top: 10px;">
                <?php echo $system_name;?>
            </h4>
        </div>

        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> " style="border-top:1px solid #232540;">
            <a href="<?php echo site_url('marketing/dashboard'); ?>">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>

        <!-- MASTER DATA -->
        <li class="<?php if ($page_name == 'elementary_school' || $page_name == 'junior_school' || $page_name == 'marketing_time') echo 'opened active';?> ">
            <a href="#">
                <i class="entypo-book"></i>
                <span><?php echo get_phrase('master_data'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'elementary_school') echo 'active'; ?> ">
                    <a href="<?php echo site_url('marketing/elementary_school'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('elementary_school_data'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'junior_school') echo 'active'; ?> ">
                    <a href="<?php echo site_url('marketing/junior_school'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('junior_high_school_data'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'marketing_time') echo 'active'; ?> ">
                    <a href="<?php echo site_url('marketing/marketing_time'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('marketing_time'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="<?php if ($page_name == 'student_information' || $page_name == 'student_marksheet') echo 'opened active'; ?> ">
            <a href="#">
                <span><i class="fa flaticon-users"></i> <?php echo get_phrase('student_information'); ?></span>
            </a>
            <ul>
                <?php
                $classes = $this->db->get('class')->result_array();
                foreach ($classes as $row):
                    ?>
                    <li class="<?php if ($page_name == 'student_information' && $class_id == $row['class_id'] || $page_name == 'student_marksheet' && $class_id == $row['class_id']) echo 'active'; ?>">
                    <!--<li class="<?php if ($page_name == 'student_information' && $page_name == 'student_marksheet' && $class_id == $row['class_id']) echo 'active'; ?>">-->
                        <a href="<?php echo site_url('marketing/student_information/' . $row['class_id']); ?>">
                            <span><?php echo get_phrase('class'); ?> <?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>

        <!-- Manage Students -->
        <li class="<?php if ($page_name == 'student_new' ||
                                $page_name == 'student_applicant' ||
                                    $page_name == 'student_profile')
                                                echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa flaticon-avatar"></i>
                <span><?php echo get_phrase('student_registration'); ?></span>
            </a>
            <ul>
                <!-- STUDENT ADMISSION -->
                <li class="<?php if ($page_name == 'student_new') echo 'active'; ?> ">
                    <a href="<?php echo site_url('marketing/student_new'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('new_student'); ?></span>
                    </a>
                </li>

                <!-- STUDENT BULK ADMISSION -->
                <li class="<?php if ($page_name == 'student_applicant') echo 'active'; ?> ">
                    <a href="<?php echo site_url('marketing/student_applicant'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('student_applicant'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- PLANNING PROMOTION -->
        <li class="<?php if ($page_name == 'plan_elementary' || $page_name == 'plan_junior' || $page_name == 'plan_elementary_view' || $page_name == 'plan_junior_view') echo 'opened active';?> ">
            <a href="#">
                <i class="flaticon-layers"></i>
                <span><?php echo get_phrase('promotion_plan'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'plan_elementary') echo 'active'; ?> ">
                    <a href="<?php echo site_url('marketing/plan_elementary'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('elementary_school_plan'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'plan_junior') echo 'active'; ?> ">
                    <a href="<?php echo site_url('marketing/plan_junior'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('junior_school_plan'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- GO TO SCHOOL -->
        <!-- <li class="<?php if ($page_name == 'elementary_school_plan' || $page_name == 'junior_school_plan') echo 'opened active';?> ">
            <a href="#">
                <i class="flaticon-layers"></i>
                <span><?php echo get_phrase('go_to_school'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'elementary_school_plan') echo 'active'; ?> ">
                    <a href="<?php echo site_url('marketing/elementary_school_plan'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('schedule_marketing'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'junior_school_plan') echo 'active'; ?> ">
                    <a href="<?php echo site_url('marketing/junior_school_plan'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('elementary_school'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'junior_school_plan') echo 'active'; ?> ">
                    <a href="<?php echo site_url('marketing/junior_school_plan'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('junior_school'); ?></span>
                    </a>
                </li>
            </ul>
        </li> -->

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="#">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>

        <li class="root-level" style="border-top: 1px solid #262a44; padding: 10px 0px;text-align: -webkit-center;">
            <?php echo form_open(site_url('admin/change_session') , array('id' => 'session_change'));?>
            <li>

                <div class="form-group">
                    <select name="running_year" class="form-control" onchange="submit()"
                         style="width: 60%;background-color: #232640;border-color: #242742;color: #a1a2b6;" disabled>
                        <?php $running_year = $this->db->get_where('settings' , array('type'=>'running_year'))->row()->description;?>
                        <?php for($i = 0; $i < 10; $i++):?>
                            <option value="<?php echo (2016+$i);?>-<?php echo (2016+$i+1);?>"
                            <?php if($running_year == (2016+$i).'-'.(2016+$i+1)) echo 'selected';?>>
                                Session : <?php echo (2016+$i);?>-<?php echo (2016+$i+1);?>
                            </option>
                      <?php endfor;?>
                    </select>
                </div>
            </li>
            <?php echo form_close();?>
        </li>

    </ul>

</div>
