<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employees extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Employee_model');
    }

    public function index()
    {
        $data['styles'][] = 'https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css';
        $data['scripts'][] = 'https://code.jquery.com/jquery-3.5.1.js';
        $data['scripts'][] = 'https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js';
        $data['scripts'][] = 'https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js';
        $data['scripts'][] = base_url('/assets/js/custom/datatable.js');
        $data['scripts'][] = base_url('/assets/js/custom/employee.js');


        $data['data'] = $this->Employee_model->getAllData();
        $this->load->view('admins_area/employees', $data);
    }

    public function insert()
    {
        if (!$this->Employee_model->insert_entry()) {
            $this->session->set_flashdata('message', 'มีข้อผิดพลาดเกิดขึ้น');
        }
        redirect(base_url('/employees'));
    }

    public function deleteAll()
    {
        $this->Employee_model->deleteAll();
        redirect(base_url('/employees'));
    }

    public function deleteByID($id)
    {
        $this->Employee_model->deleteByID($id);
        redirect(base_url('/employees'));
    }

    public function edit()
    {
        $this->Employee_model->update_entry($_POST);
        redirect(base_url('/employees'));
    }
}
