<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Activity_model extends CI_Model
{

    function __construct() {
        parent::__construct();
    }

	function save_log($param)
    {
        $sql        = $this->db->insert('activity_log',$param);
    }

}