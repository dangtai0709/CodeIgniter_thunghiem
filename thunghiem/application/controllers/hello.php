<?php 
/**
 * 
 */
class hello extends CI_Controller
{
		function sv(){
		$this->load->model('model_sinhvien');
		$sinhvien= $this->model_sinhvien->getlist();
		//echo '<pre>';
		//print_r($sinhvien);
		return $sinhvien;
	}
	function add(){
	$this->load->model('model_sinhvien');
	@$name=$_GET['name'];
	@$date=$_GET['date'];
	@$class=$_GET['class'];
	if(is_null($name))
	{
		$this->load->view('home/them.php');
	}else{
		$this->model_sinhvien->add($name,$date,$class);
		return  $this->index();
	}
}
function info($id){
$this->load->model('model_sinhvien');
$sv=$this->model_sinhvien->info($id);
//echo "<pre>";
//print_r($sv);
return $sv;
}
	function edit(){
	$this->load->model('model_sinhvien');
	@$ID=$_GET['ID'];
	@$name=$_GET['name'];
		$data= array();
		$data['sv']=$this->info($ID);
	if(is_null($name)){
		$this->load->view('home/sua.php',$data);
	}else{
	@$date=$_GET['date'];
	@$class=$_GET['class'];

	$this->model_sinhvien->edit($ID,$name,$date,$class);
	$this->index();
		}
	}
	function delete(){
			$this->load->model('model_sinhvien');
	
	@$ID=$_GET['ID'];
	$this->model_sinhvien->delete($ID);
$this->index();
	}
	function index(){
		$data= array();
		$data['sv']=$this->sv();
		$this->load->view('home/danhsachsinhvien.php',$data);
	}
	
}
 ?>