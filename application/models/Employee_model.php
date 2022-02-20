<?php
class Employee_model extends CI_Model
{
    public $id;
    public $fname;
    public $lname;
    public $nname;
    public $age;
    public $tel;

    public function getAllData()
    {
        $query = $this->db->get('employees');
        return $query->result();
    }

    public function insert_entry()
    {
        if ($this->getEmpById($_POST['id']) != "false") {
            $this->id    = $_POST['id'];
            $this->fname    = $_POST['fn'];
            $this->lname    = $_POST['ln'];
            $this->nname    = $_POST['nn'];
            $this->age    = $_POST['a'];
            $this->tel    = $_POST['t'];

            $this->db->insert('employees', $this);
            return true;
        } else {
            return false;
        }
    }

    public function getEmpById($id)
    {
        $this->db->select();
        $this->db->where('id', $id);

        $query = $this->db->get('employees');
        $num = $query->num_rows();
        if ($num > 0) {
            return "false";
        } else {
            return $query->result();
        }
    }

    public function deleteAll()
    {
        return $this->db->empty_table('employees');
    }

    public function deleteByID($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('employees');
    }

    public function update_entry()
    {
        $this->fname    = $_POST['fn'];
        $this->lname    = $_POST['ln'];
        $this->nname    = $_POST['nn'];
        $this->age    = $_POST['a'];
        $this->tel    = $_POST['t'];

        $data = array(
            'fname' => $_POST['fn'],
            'lname' => $_POST['ln'],
            'nname' => $_POST['nn'],
            'age' => $_POST['a'],
            'tel' => $_POST['t']
        );

        $this->db->where('id', $_POST['id']);
        $this->db->update('employees', $data);
    }
}
