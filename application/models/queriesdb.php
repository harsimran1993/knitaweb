<?php
class Queriesdb extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	public function insertmsg($data){
		$this->db->insert('queries', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	public function updatemsg($data,$id){
		$this->db->set($data);
		$this->db->where("id", $condition);
		$this->db->update("queires", $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	public function readmsg(){
		$query = $this->db->get("queries");
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return "nothing here but us chickens";
		echo  $this->db->error();  //production only
		}
	}
	
	public function deletemsg($id)
	{
		$this->db->delete("queries", "id =".$id);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	public function __destruct(){
		$this->db->close(); 
	}
}

?>