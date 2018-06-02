<?php

class Activities_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll($username)
	{

		$query = $this->db->get('activities');
		return $query->result();

	}

	public function getActivities($username)
	{

		$query = $this->db->query("select * from activities where not activities.id in (select usersactivities.idActivities from usersactivities where usersactivities.idUsers = '" . $username . "');");
		return $query->result();

	}

	public function addActivity($username, $idActivity)
	{
		$this->db->select('*');
		$this->db->from('usersactivities');
		$this->db->where('idActivities', $idActivity);
		$this->db->where('idUsers', $username);
		$query = $this->db->get();

		$newItem = array(
			'idUsers' => $username,
			'idActivities' => $idActivity
		);
		$this->db->insert('usersactivities', $newItem);
	}

	public function deleteActivity($id)
	{
		$this->db->query("delete from usersactivities where usersactivities.idActivities = '" . $id . "';");
		
		$this->db->where('id', $id);
		$this->db->delete('activities');
	}

	public function searchActivity($name)
	{
		$this->db->select('*');
		$this->db->from('activities');
		$this->db->like('name', $name);
		$query = $this->db->get();
		return $query->result();
	}
}

?>