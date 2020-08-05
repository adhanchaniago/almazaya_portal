<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->database();
        $this->load->library('session');
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }

    public function index() {

        if ($this->session->userdata('admin_login') == 1)
            redirect(site_url('admin/dashboard'), 'refresh');

        if ($this->session->userdata('super_login') == 1)
            redirect(site_url('super/dashboard'), 'refresh');

        if ($this->session->userdata('teacher_login') == 1)
            redirect(site_url('teacher/dashboard'), 'refresh');

        if ($this->session->userdata('student_login') == 1)
            redirect(site_url('student/dashboard'), 'refresh');

        if ($this->session->userdata('parent_login') == 1)
            redirect(site_url('parents/dashboard'), 'refresh');

        if ($this->session->userdata('librarian_login') == 1)
            redirect(site_url('librarian/dashboard'), 'refresh');

        if ($this->session->userdata('accountant_login') == 1)
            redirect(site_url('accountant/dashboard'), 'refresh');

        if ($this->session->userdata('headmaster_login') == 1)
            redirect(site_url('headmaster/dashboard'), 'refresh');

        if ($this->session->userdata('administration_login') == 1)
            redirect(site_url('administration/dashboard'), 'refresh');

        if ($this->session->userdata('marketing_login') == 1)
            redirect(site_url('marketing/dashboard'), 'refresh');

        $this->load->view('backend/login');
    }

    function validate_login() {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $credential = array('username' => $username, 'password' => sha1($password));
      $teacher = array('nip' => $username, 'password' => sha1($password));
      $student = array('nisn' => $username, 'password' => sha1($password));
      $credential2 = array('email' => $username, 'password' => sha1($password));
      $headmaster = array('nip' => $username, 'password' => sha1($password), 'position' => 'headmaster');
      
      $query = $this->db->get_where('admin', $credential);
      if ($query->num_rows() > 0) {
          $row = $query->row();
          $this->session->set_userdata('admin_login', '1');
          $this->session->set_userdata('admin_id', $row->admin_id);
          $this->session->set_userdata('login_user_id', $row->admin_id);
          $this->session->set_userdata('name', $row->name);
          $this->session->set_userdata('login_type', 'admin');

          $cek_ol = $this->db->get_where('online', array('user_id' => $row->admin_id, 'at' => 'portal', 'session' => 'admin'));
          if ($cek_ol->num_rows() > 0) {
            // code...
          }else {
            // code...
            $data['session'] = 'admin';
            $data['user_id'] = $row->admin_id;
            $data['at'] = 'portal';
            $data['status'] = 'Online';
            activity_log("login", "Login Portal");
            $this->db->insert('online',$data);
          }
          redirect(site_url('admin/dashboard'), 'refresh');
      }

      $query = $this->db->get_where('superadmin', $credential);
      if ($query->num_rows() > 0) {
          $row = $query->row();
          $this->session->set_userdata('super_login', '1');
          $this->session->set_userdata('super_id', $row->super_id);
          $this->session->set_userdata('name', $row->name);
          $this->session->set_userdata('login_type', 'superadmin');

          $cek_ol = $this->db->get_where('online', array('user_id' => $row->super_id, 'at' => 'portal', 'session' => 'superadmin'));
          if ($cek_ol->num_rows() > 0) {
            // code...
          }else {
            // code...
            $data['session'] = 'superadmin';
            $data['user_id'] = $row->super_id;
            $data['at'] = 'portal';
            $data['status'] = 'Online';
            activity_log("login", "Login Portal");
            $this->db->insert('online',$data);
          }
          redirect(site_url('superadmin/dashboard'), 'refresh');
      }

      $query = $this->db->get_where('administration', $credential);
      if ($query->num_rows() > 0) {
          $row = $query->row();
          $this->session->set_userdata('administration_login', '1');
          $this->session->set_userdata('administration_id', $row->administration_id);
          $this->session->set_userdata('login_user_id', $row->administration_id);
          $this->session->set_userdata('name', $row->name);
          $this->session->set_userdata('login_type', 'administration');

          $cek_ol = $this->db->get_where('online', array('user_id' => $row->administration_id, 'at' => 'portal', 'session' => 'administration'));
          if ($cek_ol->num_rows() > 0) {
            // code...
          }else {
            // code...
            $data['session'] = 'administration';
            $data['user_id'] = $row->administration_id;
            $data['at'] = 'portal';
            $data['status'] = 'Online';
            activity_log("login", "Login Portal");
            $this->db->insert('online',$data);
          }
          redirect(site_url('administration/dashboard'), 'refresh');
      }

      $query = $this->db->get_where('marketing', $credential);
      if ($query->num_rows() > 0) {
          $row = $query->row();
          $this->session->set_userdata('marketing_login', '1');
          $this->session->set_userdata('marketing_id', $row->marketing_id);
          $this->session->set_userdata('login_user_id', $row->marketing_id);
          $this->session->set_userdata('name', $row->name);
          $this->session->set_userdata('login_type', 'marketing');

          $cek_ol = $this->db->get_where('online', array('user_id' => $row->marketing_id, 'at' => 'portal', 'session' => 'marketing'));
          if ($cek_ol->num_rows() > 0) {
            // code...
          }else {
            // code...
            $data['session'] = 'marketing';
            $data['user_id'] = $row->marketing_id;
            $data['at'] = 'portal';
            $data['status'] = 'Online';
            activity_log("login", "Login Portal");
            $this->db->insert('online',$data);
          }
          redirect(site_url('marketing/dashboard'), 'refresh');
      }

      // Checking login credential for teacher
      $query = $this->db->get_where('teacher', $teacher);
      if ($query->num_rows() > 0) {
          $row = $query->row();
          if ($row->position == "Teacher") {
            $this->session->set_userdata('teacher_login', '1');
            $this->session->set_userdata('teacher_id', $row->teacher_id);
            $this->session->set_userdata('login_user_id', $row->teacher_id);
            $this->session->set_userdata('name', $row->name);
            $this->session->set_userdata('login_type', 'teacher');

            $cek_ol = $this->db->get_where('online', array('user_id' => $row->teacher_id, 'at' => 'portal', 'session' => 'teacher'));
            if ($cek_ol->num_rows() > 0) {
              // code...
            }else {
              // code...
              $data['session'] = 'teacher';
              $data['user_id'] = $row->teacher_id;
              $data['at'] = 'portal';
              $data['status'] = 'Online';
              activity_log("login", "Login Portal");
              $this->db->insert('online',$data);
            }
            redirect(site_url('teacher/dashboard'), 'refresh');

          }elseif ($row->position == "Headmaster") {
            $this->session->set_userdata('headmaster_login', '1');
            $this->session->set_userdata('headmaster_id', $row->teacher_id);
            $this->session->set_userdata('login_user_id', $row->teacher_id);
            $this->session->set_userdata('name', $row->name);
            $this->session->set_userdata('login_type', 'headmaster');

            $cek_ol = $this->db->get_where('online', array('user_id' => $row->teacher_id, 'at' => 'portal', 'session' => 'headmaster'));
            if ($cek_ol->num_rows() > 0) {
              // code...
            }else {
              // code...
              $data['session'] = 'headmaster';
              $data['user_id'] = $row->teacher_id;
              $data['at'] = 'portal';
              $data['status'] = 'Online';
              activity_log("login", "Login Portal");
              $this->db->insert('online',$data);
            }
            redirect(site_url('headmaster/dashboard'), 'refresh');
          }

      }

      // Checking login credential for student
      $query = $this->db->get_where('student', $student);
      if ($query->num_rows() > 0) {
          $row = $query->row();
          $this->session->set_userdata('student_login', '1');
          $this->session->set_userdata('student_id', $row->student_id);
          $this->session->set_userdata('login_user_id', $row->student_id);
          $this->session->set_userdata('name', $row->name);
          $this->session->set_userdata('login_type', 'student');

          $cek_ol = $this->db->get_where('online', array('user_id' => $row->student_id, 'at' => 'portal', 'session' => 'student'));
          if ($cek_ol->num_rows() > 0) {
            // code...
          }else {
            // code...
            $data['session'] = 'student';
            $data['user_id'] = $row->student_id;
            $data['at'] = 'portal';
            $data['status'] = 'Online';
            activity_log("login", "Login Portal");
            $this->db->insert('online',$data);
          }
          redirect(site_url('student/dashboard'), 'refresh');
      }

      // Checking login credential for parent
      $query = $this->db->get_where('parent', $credential);
      if ($query->num_rows() > 0) {
          $row = $query->row();
          $this->session->set_userdata('parent_login', '1');
          $this->session->set_userdata('parent_id', $row->parent_id);
          $this->session->set_userdata('login_user_id', $row->parent_id);
          $this->session->set_userdata('name', $row->name);
          $this->session->set_userdata('login_type', 'parent');

          $data['session'] = 'parent';
          $data['user_id'] = $row->parent_id;
          $data['at'] = 'portal';
          $data['status'] = 'Online';
          activity_log("login", "Login Portal");
          $this->db->insert('online',$data);
          redirect(site_url('parents/dashboard'), 'refresh');
      }

      // Checking login credential for librarian
      $query = $this->db->get_where('librarian', $credential2);
      if ($query->num_rows() > 0) {
          $row = $query->row();
          $this->session->set_userdata('librarian_login', '1');
          $this->session->set_userdata('librarian_id', $row->librarian_id);
          $this->session->set_userdata('login_user_id', $row->librarian_id);
          $this->session->set_userdata('name', $row->name);
          $this->session->set_userdata('login_type', 'librarian');

          $cek_ol = $this->db->get_where('online', array('user_id' => $row->librarian_id, 'at' => 'portal', 'session' => 'librarian'));
          if ($cek_ol->num_rows() > 0) {
            // code...
          }else {
            // code...
            $data['session'] = 'librarian';
            $data['user_id'] = $row->librarian_id;
            $data['at'] = 'portal';
            $data['status'] = 'Online';
            activity_log("login", "Login Portal");
            $this->db->insert('online',$data);
          }
          redirect(site_url('librarian/dashboard'), 'refresh');
      }

      // Checking login credential for accountant
      $query = $this->db->get_where('accountant', $credential2);
      if ($query->num_rows() > 0) {
          $row = $query->row();
          $this->session->set_userdata('accountant_login', '1');
          $this->session->set_userdata('accountant_id', $row->accountant_id);
          $this->session->set_userdata('login_user_id', $row->accountant_id);
          $this->session->set_userdata('name', $row->name);
          $this->session->set_userdata('login_type', 'accountant');

          $cek_ol = $this->db->get_where('online', array('user_id' => $row->accountant_id, 'at' => 'portal', 'session' => 'accountant'));
          if ($cek_ol->num_rows() > 0) {
            // code...
          }else {
            // code...
            $data['session'] = 'accountant';
            $data['user_id'] = $row->accountant_id;
            $data['at'] = 'portal';
            $data['status'] = 'Online';
            activity_log("login", "Login Portal");
            $this->db->insert('online',$data);
          }
          redirect(site_url('accountant/dashboard'), 'refresh');
      }

      $this->session->set_flashdata('login_error', get_phrase('invalid_login'));
      redirect(site_url('login'), 'refresh');
    }

    function four_zero_four() {
        $this->load->view('four_zero_four');
    }

    function forgot_password()
    {
        redirect(site_url('login'), 'refresh');
        //$this->load->view('backend/forgot_password');
    }

    function reset_password()
    {
        $email = $this->input->post('email');
        $reset_account_type     = '';
        //resetting user password here
        $new_password           =   substr( md5( rand(100000000,20000000000) ) , 0,7);

        // Checking credential for admin
        $query = $this->db->get_where('admin' , array('email' => $email));
        if ($query->num_rows() > 0)
        {
            $reset_account_type     =   'admin';
            $this->db->where('email' , $email);
            $this->db->update('admin' , array('password' => sha1($new_password)));
            // send new password to user email
            $this->email_model->password_reset_email($new_password , $reset_account_type , $email);
            $this->session->set_flashdata('reset_success', get_phrase('please_check_your_email_for_new_password'));
            redirect(site_url('login/forgot_password'), 'refresh');
        }
        // Checking credential for student
        $query = $this->db->get_where('student' , array('email' => $email));
        if ($query->num_rows() > 0)
        {
            $reset_account_type     =   'student';
            $this->db->where('email' , $email);
            $this->db->update('student' , array('password' => sha1($new_password)));
            // send new password to user email
            $this->email_model->password_reset_email($new_password , $reset_account_type , $email);
            $this->session->set_flashdata('reset_success', get_phrase('please_check_your_email_for_new_password'));
            redirect(site_url('login/forgot_password'), 'refresh');
        }
        // Checking credential for teacher
        $query = $this->db->get_where('teacher' , array('email' => $email));
        if ($query->num_rows() > 0)
        {
            $reset_account_type     =   'teacher';
            $this->db->where('email' , $email);
            $this->db->update('teacher' , array('password' => sha1($new_password)));
            // send new password to user email
            $this->email_model->password_reset_email($new_password , $reset_account_type , $email);
            $this->session->set_flashdata('reset_success', get_phrase('please_check_your_email_for_new_password'));
            redirect(site_url('login/forgot_password'), 'refresh');
        }
        // Checking credential for parent
        $query = $this->db->get_where('parent' , array('email' => $email));
        if ($query->num_rows() > 0)
        {
            $reset_account_type     =   'parent';
            $this->db->where('email' , $email);
            $this->db->update('parent' , array('password' => sha1($new_password)));
            // send new password to user email
            $this->email_model->password_reset_email($new_password , $reset_account_type , $email);
            $this->session->set_flashdata('reset_success', get_phrase('please_check_your_email_for_new_password'));
            redirect(site_url('login/forgot_password'), 'refresh');
        }
        $this->session->set_flashdata('reset_error', get_phrase('password_reset_was_failed'));
        redirect(site_url('login/forgot_password'), 'refresh');
        // Checking credential for librarian
        $query = $this->db->get_where('librarian' , array('email' => $email));
        if ($query->num_rows() > 0)
        {
            $reset_account_type     =   'librarian';
            $this->db->where('email' , $email);
            $this->db->update('librarian' , array('password' => sha1($new_password)));
            // send new password to user email
            $this->email_model->password_reset_email($new_password , $reset_account_type , $email);
            $this->session->set_flashdata('reset_success', get_phrase('please_check_your_email_for_new_password'));
            redirect(site_url('login/forgot_password'), 'refresh');
        }
        // Checking credential for accountant
        $query = $this->db->get_where('accountant' , array('email' => $email));
        if ($query->num_rows() > 0)
        {
            $reset_account_type     =   'accountant';
            $this->db->where('email' , $email);
            $this->db->update('accountant' , array('password' => sha1($new_password)));
            // send new password to user email
            $this->email_model->password_reset_email($new_password , $reset_account_type , $email);
            $this->session->set_flashdata('reset_success', get_phrase('please_check_your_email_for_new_password'));
            redirect(site_url('login/forgot_password'), 'refresh');
        }
        $this->session->set_flashdata('reset_error', get_phrase('password_reset_was_failed'));
        redirect(site_url('login/forgot_password'), 'refresh');
    }
    
    function logout() {
      activity_log("logout", "Logout Portal");      
      $this->db->where(array('user_id' => $this->session->userdata('login_user_id'), 'at' => 'portal'));
      $this->db->delete('online');

      $this->session->sess_destroy();
      $this->session->set_flashdata('logout_notification', 'logged_out');
      redirect(site_url('login'), 'refresh');
    }

}
