<div class="sidebar-menu">
    <header class="logo-env" >
        <!-- logo -->
        <!-- <div class="logo" style="">
            <a href="<?php echo site_url('login'); ?>">
                <img src="<?php echo base_url('uploads/logo.png');?>"  style="max-height:30px;"/>
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
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <!-- <li id="search">
			<form class="" action="<?php echo site_url($account_type . '/student_details'); ?>" method="post">
				<input type="text" class="search-input" name="student_identifier" placeholder="<?php echo get_phrase('student_name').' / '.get_phrase('code').'...'; ?>" value="" required style="font-family: 'Poppins', sans-serif !important; background-color: #2C2E3E !important; color: #868AA8; border-bottom: 1px solid #3F3E5F;">
				<button type="submit">
					<i class="entypo-search"></i>
				</button>
			</form>
	    </li> -->
        <div style="text-align: -webkit-center;" id="branding_element">
            <img src="<?php echo base_url('uploads/logo.png');?>"  style="max-height:50px;"/>
            <h4 style="color: #a2a3b7;text-align: -webkit-center;margin-bottom: 25px;font-weight: 300;margin-top: 10px;">
                <?php echo $system_name;?>
            </h4>
        </div>

        <!-- Home -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> " style="border-top:1px solid #232540;">
            <a href="<?php echo site_url('administration/dashboard'); ?>">
                <i class="flaticon-home-2"></i>
                <span><?php echo get_phrase('home'); ?></span>
            </a>
        </li>

        <!-- Manage Students -->
        <li class="<?php if ($page_name == 'student_add' ||
                                $page_name == 'student_bulk_add' ||
                                    $page_name == 'student_information' ||
                                        $page_name == 'student_marksheet' ||
                                            $page_name == 'student_promotion' ||
                                              $page_name == 'student_profile')
                                                echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa flaticon-avatar"></i>
                <span><?php echo get_phrase('manage_students'); ?></span>
            </a>
            <ul>
                <!-- STUDENT ADMISSION -->
                <li class="<?php if ($page_name == 'student_add') echo 'active'; ?> ">
                    <a href="<?php echo site_url('administration/student_add'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('add_student'); ?></span>
                    </a>
                </li>

                <!-- STUDENT BULK ADMISSION -->
                <li class="<?php if ($page_name == 'student_bulk_add') echo 'active'; ?> ">
                    <a href="<?php echo site_url('administration/student_bulk_add'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('import_student'); ?></span>
                    </a>
                </li>

                <!-- STUDENT INFORMATION -->
                <li class="<?php if ($page_name == 'student_information' || $page_name == 'student_marksheet') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('student_information'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'student_information' && $class_id == $row['class_id'] || $page_name == 'student_marksheet' && $class_id == $row['class_id']) echo 'active'; ?>">
                            <!--<li class="<?php if ($page_name == 'student_information' && $page_name == 'student_marksheet' && $class_id == $row['class_id']) echo 'active'; ?>">-->
                                <a href="<?php echo site_url('administration/student_information/' . $row['class_id']); ?>">
                                    <span><?php echo get_phrase('class'); ?> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

            </ul>
        </li>

        <!-- manage teachers -->
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
                    <a href="<?php echo site_url('administration/teacher'); ?>">
                        <i class="fa flaticon-avatar"></i>
                        <span><?php echo get_phrase('teacher'); ?></span>
                    </a>
                </li>

        <!-- CLASS -->
        <li class="<?php
        if ($page_name == 'class' ||
                $page_name == 'section' ||
                    $page_name == 'academic_syllabus' ||
                        $page_name == 'study_material')
            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="flaticon-layers"></i>
                <span><?php echo get_phrase('academic_&_classes'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'class') echo 'active'; ?> ">
                    <a href="<?php echo site_url('administration/classes'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_classes'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                    <a href="<?php echo site_url('administration/section'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_sections'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'academic_syllabus') echo 'active'; ?> ">
                    <a href="<?php echo site_url('administration/academic_syllabus'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('academic_syllabus'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'study_material') echo 'active'; ?> ">
                    <a href="<?php echo site_url('administration/study_material'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('study_material'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'teaching_planning') echo 'active'; ?> ">
                    <a href="<?php echo site_url('administration/teaching_planning'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('teaching_planning'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- SUBJECT -->
        <li class="<?php if ($page_name == 'subject') echo 'opened active'; ?> ">
            <a href="#">
                <i class="flaticon-list-3"></i>
                <span><?php echo get_phrase('subject'); ?></span>
            </a>
            <ul>
                <?php
                $classes = $this->db->get('class')->result_array();
                foreach ($classes as $row):
                    ?>
                    <li class="<?php if ($page_name == 'subject' && $class_id == $row['class_id']) echo 'active'; ?>">
                        <a href="<?php echo site_url('administration/subject/' . $row['class_id']); ?>">
                            <span><?php echo get_phrase('class'); ?> <?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>

        <!-- CLASS ROUTINE -->
        <li class="<?php if ($page_name == 'class_routine_view' ||
                                $page_name == 'class_routine_add')
                                    echo 'opened active'; ?> ">
            <a href="#">
                <i class="flaticon-calendar-3"></i>
                <span><?php echo get_phrase('schedule'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'class_routine_add') echo 'active'; ?> ">
                    <a href="<?php echo site_url('administration/class_routine_add'); ?>">
                        <span><i class="entypo-dot"></i> 
                            <?php echo get_phrase('add_schedule'); ?></span>
                    </a>
                </li>
                <?php
                $classes = $this->db->get('class')->result_array();
                foreach ($classes as $row):
                    ?>
                    <li class="<?php if ($page_name == 'class_routine_view' && $class_id == $row['class_id']) echo 'active'; ?>">
                        <a href="<?php echo site_url('administration/class_routine_view/' . $row['class_id']); ?>">
                            <span><i class="entypo-dot"></i> 
                                <?php echo get_phrase('class'); ?> 
                                    <?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>

        <!-- DAILY ATTENDANCE -->
        <li class="<?php if ($page_name == 'manage_attendance' ||
                                $page_name == 'manage_attendance_view' || $page_name == 'attendance_report' || $page_name == 'attendance_report_view')
                                    echo 'opened active'; ?> ">
            <a href="#">
                <i class="flaticon-clipboard"></i>
                <span><?php echo get_phrase('attendance'); ?></span>
            </a>
            <ul>

                    <li class="<?php if (($page_name == 'daily_attendance' || $page_name == 'daily_attendance_view')) echo 'active'; ?>">
                        <a href="<?php echo site_url('administration/daily_attendance'); ?>">
                            <span><i class="entypo-dot"></i><?php echo get_phrase('daily_atendance'); ?></span>
                        </a>
                    </li>

            </ul>
            <ul>

                    <li class="<?php if (($page_name == 'manage_attendance' || $page_name == 'manage_attendance_view')) echo 'active'; ?>">
                        <a href="<?php echo site_url('administration/manage_attendance'); ?>">
                            <span><i class="entypo-dot"></i><?php echo get_phrase('manage_atesndance'); ?></span>
                        </a>
                    </li>

            </ul>
            <ul>

                    <li class="<?php if (( $page_name == 'attendance_report' || $page_name == 'attendance_report_view')) echo 'active'; ?>">
                        <a href="<?php echo site_url('administration/attendance_report'); ?>">
                            <span><i class="entypo-dot"></i><?php echo get_phrase('attendance_report'); ?></span>
                        </a>
                    </li>

            </ul>
            <ul>

                    <li class="<?php if (( $page_name == 'setting' || $page_name == 'fingerprint_setting')) echo 'active'; ?>">
                        <a href="<?php echo site_url('administration/fingerprint_setting'); ?>">
                            <span><i class="entypo-dot"></i><?php echo get_phrase('setting'); ?></span>
                        </a>
                    </li>

            </ul>
        </li>

        <!-- NOTICEBOARD -->
        <li class="<?php if ($page_name == 'noticeboard' || $page_name == 'noticeboard_edit') echo 'active'; ?> ">
            <a href="<?php echo site_url('administration/noticeboard'); ?>">
                <i class="flaticon-list"></i>
                <span><?php echo get_phrase('noticeboard'); ?></span>
            </a>
        </li>

        <!-- MESSAGE -->
        <li class="<?php if ($page_name == 'message' || $page_name == 'group_message') echo 'active'; ?> ">
            <a href="<?php echo site_url('administration/message'); ?>">
                <i class="flaticon-mail"></i>
                <span><?php echo get_phrase('message'); ?></span>
            </a>
        </li>

        <!-- Mail -->
        <li class="<?php if ( 
                              $page_name == 'mail_in' ||
                              $page_name == 'mail_out' ||
                              $page_name == 'mail_creat' ||
                              $page_name == 'mail_hystory')
                                echo 'opened active has-sub';?>">
            <a href="#">
                <i class="flaticon-doc"></i>
                <span><?php echo get_phrase('mailing'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'mail_in') echo 'active'; ?> ">
                    <a href="<?php echo site_url('administration/book'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('mail_in'); ?></span>
                    </a>
                </li>
                
                <li class="<?php if ($page_name == 'mail_out') echo 'active'; ?> ">
                    <a href="<?php echo site_url('administration/transport'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('mail_out'); ?></span>
                    </a>
                </li>

                <li class="<?php if ($page_name == 'mail_create') echo 'active'; ?> ">
                    <a href="<?php echo site_url('administration/dormitory'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('mail_creat'); ?></span>
                    </a>
                </li>
               
            </ul>
        </li>

        <!-- Session selector -->
        <li class="root-level" style="border-top: 1px solid #262a44; padding: 10px 0px;text-align: -webkit-center;">
            <?php echo form_open(site_url('administration/change_session') , array('id' => 'session_change'));?>
            <li>
                
                <div class="form-group">
                    <select name="running_year" class="form-control" onchange="submit()" 
                         style="width: 60%;background-color: #232640;border-color: #242742;color: #a1a2b6;">
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
