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

    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->

        <div style="text-align: -webkit-center;" id="branding_element">
            <img src="<?php echo base_url('uploads/logo.png');?>"  style="max-height:21px;"/>
            <h4 style="color: #a2a3b7;text-align: -webkit-center;margin-bottom: 25px;font-weight: 300;margin-top: 10px;">
                <?php echo $system_name;?>
            </h4>
        </div>

        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> " style="border-top:1px solid #232540;">
            <a href="<?php echo site_url($account_type.'/dashboard'); ?>">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>

              <!-- My Profile -->
        <li class="<?php if ($page_name == 'my_profile') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/my_profile'); ?>">
                <i class="entypo-doc"></i>
                <span><?php echo get_phrase('my_profile'); ?></span>
            </a>
        </li>

        <li class="<?php if ($page_name == 'ibadah') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/ibadah'); ?>">
                <i class="entypo-doc"></i>
                <span><?php echo get_phrase('ibadah_harian'); ?></span>
            </a>
        </li>

        <li class="<?php if ($page_name == 'tugas') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/tugas'); ?>">
                <i class="entypo-doc"></i>
                <span><?php echo get_phrase('tugas_harian'); ?></span>
            </a>
        </li>

       <!-- <li class="<?php if ($page_name == 'activity_report' || $page_name == 'book_request') echo 'opened active';?> ">
            <a href="#">
                <i class="entypo-book"></i>
                <span><?php echo get_phrase('report_kegiatan'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'activity_report') echo 'active'; ?> ">
                    <a href="<?php echo site_url($account_type.'/activity_report'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('report'); ?></span>
                    </a>
                </li>
            </ul>
        </li> -->



        <!-- TEACHER -->
        <!-- sementara
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/teacher_list'); ?>">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('teacher'); ?></span>
            </a>
        </li>
        -->



        <!-- SUBJECT -->
        <!-- <li class="<?php if ($page_name == 'subject') echo ' active'; ?> ">
            <a href="<?php echo site_url($account_type.'/subject'); ?>">
                <i class="entypo-docs"></i>
                <span><?php echo get_phrase('subject'); ?></span>
            </a>
        </li> -->

        <!-- CLASS ROUTINE -->
        <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/class_routine'); ?>">
                <i class="entypo-target"></i>
                <span><?php echo get_phrase('schedule'); ?></span>
            </a>
        </li>

        <!-- Attendance -->
        <!-- <li class="<?php if ($page_name == 'manage_attendace') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/manage_attendace'); ?>">
                <i class="fa fa-line-chart"></i>
                <span><?php echo get_phrase('attendance'); ?></span>
            </a>
        </li> -->

		<!-- STUDY MATERIAL -->
        <!-- <li class="<?php if ($page_name == 'study_material') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/study_material'); ?>">
                <i class="entypo-book-open"></i>
                <span><?php echo get_phrase('study_material'); ?></span>
            </a>
        </li> -->


        <!-- Exam marks -->
        <!-- <li class="<?php if ($page_name == 'student_marksheet') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/student_marksheet/'.$this->session->userdata('login_user_id')); ?>">
                <i class="entypo-graduation-cap"></i>
                <span><?php echo get_phrase('exam_marks'); ?></span>
            </a>
        </li>

        <li class="<?php if ($page_name == 'online_exam' || $page_name == 'online_exam_take') echo 'active'; ?> ">
            <a href="<?php echo site_url('student/online_exam');?>">
                <i class="fa fa-feed"></i>
                <span><?php echo get_phrase('online_exam'); ?></span>
            </a>
        </li> -->

        <!-- PAYMENT -->
        <!-- sementara
        <li class="<?php if ($page_name == 'invoice' || $page_name == 'pay_with_payumoney') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/invoice'); ?>">
                <i class="entypo-credit-card"></i>
                <span><?php echo get_phrase('payment'); ?></span>
            </a>
        </li>
        -->

        <!-- LIBRARY -->
        <!-- <li class="<?php if ($page_name == 'book' || $page_name == 'book_request') echo 'opened active';?> ">
            <a href="#">
                <i class="entypo-book"></i>
                <span><?php echo get_phrase('library'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'book') echo 'active'; ?> ">
                    <a href="<?php echo site_url($account_type.'/book'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('book_list'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'book_request') echo 'active'; ?> ">
                    <a href="<?php echo site_url($account_type.'/book_request'); ?>">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('my_book_requests'); ?></span>
                    </a>
                </li>
            </ul>
        </li> -->

        <!-- TRANSPORT -->
        <!-- sementara
        <li class="<?php if ($page_name == 'transport') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/transport'); ?>">
                <i class="entypo-location"></i>
                <span><?php echo get_phrase('transport'); ?></span>
            </a>
        </li>
        -->

        <!-- NOTICEBOARD -->
        <li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/noticeboard'); ?>">
                <i class="entypo-doc-text-inv"></i>
                <span><?php echo get_phrase('noticeboard'); ?></span>
            </a>
        </li>

        <!-- MESSAGE -->
        <!-- <li class="<?php if ($page_name == 'message' || $page_name == 'group_message') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/message'); ?>">
                <i class="entypo-mail"></i>
                <span><?php echo get_phrase('message'); ?></span>
            </a>
        </li> -->

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/manage_profile'); ?>">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>

    </ul>

</div>
