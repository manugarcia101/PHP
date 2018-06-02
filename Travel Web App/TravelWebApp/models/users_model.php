<?php

class Users_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function getAll(){
		$query = $this->db->get('users');
		return $query->result();
	}

	public function getUsers($username){
		$query = $this->db->query("select * from users where not username in (select usersusers.idUsers2 from usersusers where usersusers.idUsers1 = '".$username."') and username != '".$username."';");
		return $query->result();
	}
	
	public function authenticate($username, $password){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->limit(1);
		$query = $this->db->get()->row();
		
		return $query;
	}
	
	public function username_validation($username){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username', $username);
		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return false;
		}else{
			return true;
		}
	}
	
	public function email_validation($email){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email', $email);
		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return false;
		}else{
			return true;
		}
	}
	
	public function register($user){
		$this->db->insert('users', $user);
	}

	public function addUser($username, $idUser)
	{
		$this->db->select('*');
		$this->db->from('usersusers');
		$this->db->where('idUsers2', $idUser);
		$this->db->where('idUsers1', $username);
		$query = $this->db->get();

		$newUser = array(
			'idUsers1' => $username,
			'idUsers2' => $idUser
		);
		$this->db->insert('usersusers', $newUser);
	}

	public function searchUser($name)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->like('username', $name);
		$query = $this->db->get();
		return $query->result();
	}
}

?>