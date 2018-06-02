<?php

class Profiles_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllInfo($username)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllItems($username)
    {
        //SELECT items . * FROM `usersitems`, `items` WHERE usersitems . idUsers = "cecile" and usersitems . idItems = items . id;
        //SELECT items . * FROM `usersitems` JOIN `items` WHERE usersitems . idUsers = "cecile" and usersitems . idItems = items . id;
        $this->db->select('*');
        $this->db->from('usersitems');
        $this->db->join('items', 'usersitems.idItems=items.id','inner');
        $this->db->where('usersitems.idUsers', $username);
        $query = $this->db->get();
        return $query->result();

    }

    public function getAllActivities($username)
    {
        /*
        $this->db->select('activities.*');
        $this->db->from('usersactivities','activities');
        $this->db->where('usersactivities.idUsers', $username);
        $this->db->where('usersactivities.idActivities','id');
        $query = $this->db->get();
        return $query->result();*/

        $this->db->select('*');
        $this->db->from('usersactivities');
        $this->db->join('activities', 'usersactivities.idActivities=activities.id', 'inner');
        $this->db->where('usersactivities.idUsers', $username);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllFriends($username)
    {
        $this->db->select('*');
        $this->db->from('usersusers');
        $this->db->join('users', 'usersusers.idUsers2=users.username', 'inner');
        $this->db->where('usersusers.idUsers1', $username);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllMessages($username)
    {
        $this->db->select('*');
        $this->db->from('messages');
        $this->db->where('receiver', $username);
        $query = $this->db->get();
        return $query->result();
    }

    public function changeSettings($username, $data)
    {
        $this->db->where('username',$username);
        $this->db->update('users',$data);
    }

    public function deleteActivity($username, $id)
    {
        $this->db->where('idUsers', $username);
        $this->db->where('idActivities', $id);
        $this->db->delete('usersactivities');
    }

    public function deleteItem($username, $id)
    {
        $this->db->where('idUsers', $username);
        $this->db->where('idItems', $id);
        $this->db->delete('usersitems');
    }

    public function deleteUser($username, $id)
    {
        $this->db->where('idUsers1', $username);
        $this->db->where('idUsers2', $id);
        $this->db->delete('usersusers');
    }

    public function deleteMessage($username, $id)
    {
        $this->db->where('receiver', $username);
        $this->db->where('id', $id);
        $this->db->delete('messages');
    }

    public function searchActivity($username, $name)
    {
        $this->db->select('*');
        $this->db->from('usersactivities');
        $this->db->join('activities', 'usersactivities.idActivities=activities.id', 'inner');
        $this->db->where('usersactivities.idUsers', $username);
        $this->db->like('activities.name', $name);
        $query = $this->db->get();
        return $query->result();
    }

    public function searchItem($username, $name)
    {
        $this->db->select('*');
        $this->db->from('usersitems');
        $this->db->join('items', 'usersitems.idItems=items.id', 'inner');
        $this->db->where('usersitems.idUsers', $username);
        $this->db->like('items.name', $name);
        $query = $this->db->get();
        return $query->result();
    }

    public function searchUser($username, $name)
    {
        $this->db->select('*');
        $this->db->from('usersusers');
        $this->db->join('users', 'usersusers.idUsers2=users.username', 'inner');
        $this->db->where('usersusers.idUsers1', $username);
        $this->db->like('users.name', $name);
        $query = $this->db->get();
        return $query->result();
    }

    public function searchMessage($username, $name)
    {
        $this->db->select('*');
        $this->db->from('messages');
        $this->db->where('receiver', $username);
        $this->db->like('sender', $name);
        $query = $this->db->get();
        return $query->result();
    }

    public function setPunctuaction ($username, $id)
    {
        $this->db->where('username', $username);
        $this->db->update('users', $id);
    }
}

?>