<?php
require 'database.php';

class dashcode{
    public $db;
	function __construct() {
			$this->db = new database();
			session_start();
			header("Access-Control-Allow-Origin: *");
			header("Access-Control-Allow-Headers: *");
			header("Access-Control-Allow-Method: *");
			header('Content-Type: application/json');
    }

    public function intern_header(){}
    
    public function intern_menu(){}
    
    public function intern_team_display(){}
    
    public function intern_mentors_display(){}
    
    public function intern_current_stage_number(){}

    public function intern_completed_tasks_summary(){}

    public function intern_notifications_summary(){}

    public function intern_reports_summary(){}

    public function intern_notifications_display(){}

    public function intern_progress_display(){}

}

?>