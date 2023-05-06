<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Standardswritting extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        // $this->load->model('Admin/Admin_model');
        // $this->load->model('Quiz/quiz_model');
        // $this->load->model('Users/Users_model');
        // $this->load->model('Admin/Wall_of_wisdom_model', 'wow');
        // $this->load->model('Winnerwall/Winnerwall_model');
        date_default_timezone_set("Asia/Calcutta");
    }
    public function miscellaneous_dashboard()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/miscellaneous_dashboard');
        $this->load->view('admin/footers/admin_footer');
    }
    public function create_competition_list()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/create_competition_list');
        $this->load->view('admin/footers/admin_footer');
    }
    public function create_competition_archive()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/create_competition_archive');
        $this->load->view('admin/footers/admin_footer');
    }
    public function create_competition_form()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/create_competition_form');
        $this->load->view('admin/footers/admin_footer');
    }
    public function create_competition_edit()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/create_competition_edit');
        $this->load->view('admin/footers/admin_footer');
    }
    public function manage_competition_list()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/manage_competition_list');
        $this->load->view('admin/footers/admin_footer');
    }
    public function ongoing_competition_list()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/ongoing_competition_list');
        $this->load->view('admin/footers/admin_footer');
    }
    public function closed_competition_list()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/closed_competition_list');
        $this->load->view('admin/footers/admin_footer');
    }
    public function revised_competition_list()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/revised_competition_list');
        $this->load->view('admin/footers/admin_footer');
    }
    public function standard_writting_dashboard()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/standard_writting_dashboard');
        $this->load->view('admin/footers/admin_footer');
    }
    public function create_standard_list()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/create_standard_list');
        $this->load->view('admin/footers/admin_footer');
    }
    public function create_standard_archive()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/create_standard_archive');
        $this->load->view('admin/footers/admin_footer');
    }
    public function create_standard_form()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/create_standard_form');
        $this->load->view('admin/footers/admin_footer');
    }
    public function create_standard_edit()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/create_standard_edit');
        $this->load->view('admin/footers/admin_footer');
    }
    public function manage_standard_list()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/manage_standard_list');
        $this->load->view('admin/footers/admin_footer');
    }
    public function ongoing_standard_list()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/ongoing_standard_list');
        $this->load->view('admin/footers/admin_footer');
    }
    public function closed_standard_list()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/closed_standard_list');
        $this->load->view('admin/footers/admin_footer');
    }
    public function revised_standard_list()
    {
        $this->load->view('admin/headers/admin_header');
        $this->load->view('standardwritting/revised_standard_list');
        $this->load->view('admin/footers/admin_footer');
    }
 

}
