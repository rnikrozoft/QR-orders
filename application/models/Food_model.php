<?php
class Food_model extends CI_Model
{
    public $id;
    public $name;
    public $detail;
    public $price;
    public $qty;
    public $imgName;

    public function getAllData()
    {
        $query = $this->db->get('foods');
        return $query->result();
    }

    public function insert_entry($img)
    {
        $this->name    = $_POST['n'];
        $this->detail    = $_POST['d'];
        $this->price    = $_POST['p'];
        $this->qty    = $_POST['q'];
        $this->imgName    = $img;

        $this->db->insert('foods', $this);
    }

    // public function getEmpById($id)
    // {
    //     $this->db->select();
    //     $this->db->where('id', $id);

    //     $query = $this->db->get('employees');
    //     $num = $query->num_rows();
    //     if ($num > 0) {
    //         return "false";
    //     } else {
    //         return $query->result();
    //     }
    // }

    public function deleteAll()
    {
        return $this->db->empty_table('foods');
    }

    public function deleteByID($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('foods');
    }

    public function update_entry($img)
    {

        $data = array(
            'name' => $_POST['n'],
            'detail' => $_POST['d'],
            'price' => $_POST['p'],
            'qty' => $_POST['q'],
            'imgName' => $img
        );

        $this->db->where('id', $_POST['id']);
        $this->db->update('foods', $data);
    }
}
