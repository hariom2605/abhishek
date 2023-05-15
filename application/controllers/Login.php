<?php 
class Login extends CI_Controller
{
// view data//

function __construct()
{
parent::__construct();
$this->load->model('Login_model');
 $this->load->library('session');
 $this->load->helper('form', 'url'); 
}
//index//
public function index()
{
if(!empty($_POST))
{
$user=$this->input->post('user');
$password=$this->input->post('pwd');
$result=$this->Login_model->login($user,$password);
if($result->num_rows()>0)
{
foreach($result->result() as $row)
$this->session->id = $row->id;
$this->session->user = $row->username;
redirect('Login/Dashboard');
}
else
{
$data['user']= $user;
$data['password'] = $password;	
$this->session->set_flashdata('SUCCESSMSG','Email and Password is Wrong');
$this->load->view('Login',$data);

}
}
else
{
$this->load->view('Login');
}
}
//end index//

// dashboard//
public function dashboard()
{
	
$userall=$this->Login_model->totalemp();
$data['total_emp'] = $userall;

$total_project=$this->Login_model->totalproject();
$data['total_project'] = $total_project;

$it=$this->Login_model->it();
$data['it'] = $it;		

$sales=$this->Login_model->sales();
$data['sales'] = $sales;		

$writer=$this->Login_model->writer();
$data['writer'] = $writer;		

$digital=$this->Login_model->digital();
$data['digital'] = $digital;		

$this->load->view('Dashboard',$data);

}

//end dashboard//

//manage employee//
function employee()
{
//add employee//	
$this->form_validation->set_rules('user','Full Name','required');
$this->form_validation->set_rules('username','User Name','required');
$this->form_validation->set_rules('email','Email ID','required|valid_email');
$this->form_validation->set_rules('password','Password','required');
$this->form_validation->set_rules('number','Mobile Number','required');
//$this->form_validation->set_rules('file','Profile Image Upload','required');
if($this->form_validation->run() == FALSE)
{
$this->load->view('Add-emp');
}
else
{
// save record to datbase//
if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'assets/upload/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }
            else{
                $picture = '';
            }
$emp = array();
$emp['name'] = $this->input->post('user');
$emp['email'] = $this->input->post('email');
$emp['username'] = $this->input->post('username');
$emp['password'] = $this->input->post('password');
$emp['mobile_number'] = $this->input->post('number');
$emp['img'] = $picture;
$this->Login_model->create($emp);
$this->session->set_flashdata('create','Record added successfully!');
$this->load->view('Add-emp',$emp);
// end //
}
// end add employee//
}

function getemp()
{
$userall=$this->Login_model->all();
$data=array();
$data['strusers'] = $userall;	
$this->load->view('view-user',$data);


}

//delete//
function delete($empID)
{

$this->Login_model->userdelete($empID);
redirect(base_url().'Login/getemp');

}

//end delete//


//end employee//





























//logout//
public function logouts()
	{
		$this->session->sess_destroy();
        redirect('Login');
		//header('location:login');
		
	}

//end logout//






	
}





?>