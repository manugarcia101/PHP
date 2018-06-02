<?php

class Messages_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll()
	{
		$query = $this->db->get('messages');
		return $query->result();
	}
	public function addMessage($newItem,$receiver,$username)
	{
		$this->db->select('*');
		$this->db->from('usersusers');
		$this->db->join('users', 'usersusers.idUsers2=users.username', 'inner');
		$this->db->where('usersusers.idUsers1', $username);
		$this->db->where('users.username', $receiver);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$this->db->insert('messages', $newItem);
			echo "The message has been sent successfully.";
		}else{
			echo "The user selected is not your friend yet, you need to be friends in order to chat.";
		}
	}
}

?>