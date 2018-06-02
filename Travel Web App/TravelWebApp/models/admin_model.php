<?php

class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAll()
    {
        $query = $this->db->get('admin');
        return $query->result();
    }

    public function addItem($newItem, $name)
    {
        $this->db->select('*');
        $this->db->from('items');
        $this->db->where('name', $name);
        $query = $this->db->get();

        if($query->num_rows() > 0){
            echo "Item already inserted";
        }else{
            $this->db->insert('items', $newItem);
            echo "Insertion succesful";
        }
    }

    public function addActivities($newActivity, $name)
    {
        $this->db->select('*');
        $this->db->from('activities');
        $this->db->where('name', $name);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            echo "Activity already inserted";
        } else {
            $this->db->insert('activities', $newActivity);
            echo "Insertion succesful";
        }
    }
}

?>