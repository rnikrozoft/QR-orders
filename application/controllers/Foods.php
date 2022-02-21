<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foods extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Food_model');
    }

    public function index()
    {
        $data['styles'][] = 'https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css';
        $data['styles'][] = base_url('/assets/css/custom/food.css');
        $data['scripts'][] = 'https://code.jquery.com/jquery-3.5.1.js';
        $data['scripts'][] = 'https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js';
        $data['scripts'][] = 'https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js';
        $data['scripts'][] = base_url('/assets/js/custom/datatable.js');
        $data['scripts'][] = base_url('/assets/js/custom/food.js');

        $data['data'] = $this->Food_model->getAllData();
        $this->load->view('admins_area/foods', $data);
    }

    public function insert()
    {
        $config['upload_path']          = './assets/uploads/foods/';
        $config['allowed_types']        = 'jpg|png';
        $config['encrypt_name']        = true;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('i')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('message', 'มีข้อผิดพลาดเกิดขึ้น');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->Food_model->insert_entry($data['upload_data']['file_name']);
        }
        redirect(base_url('/foods'));
    }

    public function deleteAll()
    {
        $this->Food_model->deleteAll();

        $path = './assets/uploads/foods/*';
        foreach ($path as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
        delete_files('./assets/uploads/foods/', TRUE);
        redirect(base_url('/foods'));
    }

    public function deleteByID($id, $img)
    {
        unlink('./assets/uploads/foods/' . $img);
        $this->Food_model->deleteByID($id);
        redirect(base_url('/foods'));
    }

    public function edit()
    {
        $config['upload_path']          = './assets/uploads/foods/';
        $config['allowed_types']        = 'jpg|png';
        $config['encrypt_name']        = true;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('iup')) {
            $img = $_POST['img'];
        } else {
            $data = array('upload_data' => $this->upload->data());
            $img = $data['upload_data']['file_name'];
            unlink($config['upload_path'].$_POST['img']);
        }

        $this->Food_model->update_entry($img);
        redirect(base_url('/foods'));
    }
}
