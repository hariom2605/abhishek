<?php
class Login_model extends CI_Model
{
function __construct()
 {
parent::__construct();
$this->load->database();
$this->load->library('session');
}
//login//
function login($user,$password)
{
$this->db->where('username',$user);
$this->db->where('password',$password);
$data=$this->db->get('login');
return $data;
}
//end login//

//dashboard//
function totalemp()
{

$userdata= $this->db->get('emp')->num_rows();

//$userdata= $this->db->get('emp');

return $userdata;

}

function totalproject()
{
$userdata= $this->db->get('project')->num_rows();
return $userdata;
}
function it()
{
$type='it';
$this->db->where('type',$type);
$GETIT=$this->db->get('department')->num_rows();;
return $GETIT;
}
function sales()
{
$type='sales';
$this->db->where('type',$type);
$GETSALES=$this->db->get('department')->num_rows();;
return $GETSALES;
}
function writer()
{
$type='writer';
$this->db->where('type',$type);
$writer=$this->db->get('department')->num_rows();;
return $writer;
}
function digital()
{
$type='digital';
$this->db->where('type',$type);
$digital=$this->db->get('department')->num_rows();;
return $digital;
}
//end dashboard//

//add employee//
function create($emp)
{
 $this->db->insert("emp",$emp);
}
//end employee//

//get emp//
function all()
{

$userdata= $this->db->get('emp')->result_array();

return $userdata;

}

function userdelete($empID)
{
$mydata1=base64_decode($empID);
$this->db->where('emp_id',$mydata1);
$this->db->delete('emp');

}

//end get emp//



}


?>