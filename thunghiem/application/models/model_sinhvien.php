<?php 
/**
 * 
 */
class model_sinhvien extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function getlist(){
		$this->db->select();
		$query=$this->db->get('sinhvien');
		return $query->result_array();
	}
	function info($id){
	$this->db->select();
		$where = array('ID' => $id );
		$this->db->where($where);
		$query=$this->db->get('sinhvien');
		return $query->result_array();	
	}
	function add($name,$date,$class){
		$data= array();
		$data['Name']=$name;
		$data['Date']=$date;
		$data['Class']=$class;
		$this->db->insert('sinhvien',$data);
	}
	function edit($id,$name,$date,$class){
	$data= array();
		$data['Name']=$name;
		$data['Date']=$date;
		$data['Class']=$class;
		$where = array('ID' => $id );
		$this->db->where($where);
		$this->db->update('sinhvien',$data);	
	}
	function delete($id){
	$where = array('ID' => $id );
		$this->db->where($where);
		$this->db->delete('sinhvien');	
	}
}

 ?>