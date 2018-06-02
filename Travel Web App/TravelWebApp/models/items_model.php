<?php

class Items_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll()
	{
		$query = $this->db->get('items');
		return $query->result();
	}

	public function getItems($username)
	{

		$query = $this->db->query("select * from items where not items.id in (select usersitems.idItems from usersitems where usersitems.idUsers = '" . $username . "');");
		return $query->result();

	}
	
	public function addItem($username, $idItem)
	{
		$this->db->select('*');
		$this->db->from('usersitems');
		$this->db->where('idItems', $idItem);
		$this->db->where('idUsers', $username);
		$query = $this->db->get();

		$newItem = array(
			'idUsers' => $username,
			'idItems' => $idItem
		);
		$this->db->insert('usersitems', $newItem);
	}

	public function deleteItem($id)
	{
		$this->db->query("delete from usersitems where usersitems.idItems = '" . $id . "';");
		
		$this->db->where('id', $id);
		$this->db->delete('items');
	}

	public function searchItem($name)
	{
		$this->db->select('*');
		$this->db->from('items');
		$this->db->like('name', $name);
		$query = $this->db->get();
		return $query->result();
	}

}

?>