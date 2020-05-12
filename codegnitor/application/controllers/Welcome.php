<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{   $this->load->helper('form');
		$this->load->view('login');
		
		
	}
	public function log()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('mobile','Mobile No','required|integer|exact_length[10]');

		if($this->form_validation->run())
		{
				
			$email  = $this->input->POST('email') ;
			$mobile = $this->input->POST('mobile') ;
			$this->load->model('logmodel');
			if($this->logmodel->valid($email, $mobile))
			{
					 echo "<h1>Welcome</h1>";
					 echo $email;
			}
			else
			{
                    echo "Invalid User";
			}
		}
		else
		{
			$this->load->view('login');
		//	echo "validation not succesfull";
		    

		}
     
	}


	public function Registercontroller()
 {
    $this->load->helper('form');
    $this->load->view('register');
    
 }
 public function xxx()
 {
	$this->load->library('form_validation');
	$this->form_validation->set_rules('nam','User Name','required|alpha|max_length[12]');
	$this->form_validation->set_rules('emai','Email','trim|required|valid_email');
	$this->form_validation->set_rules('mobil','Mobile No','required|integer|exact_length[10]');
    if($this->form_validation->run())
		{
			$do = array(
		    'name' => $this->input->POST('nam'),	
			'email'  => $this->input->POST('emai'),
			'mobile' => $this->input->POST('mobil'),
			
		  );
		  $wmail  = $this->input->POST('emai');
			$this->load->model('registermodel');

			if($this->registermodel->mode($do))
			{
					 echo "Registration Successfully";
					 $config = Array(
					 'protocol' => 'smtp',
					 'smtp_host' => 'ssl://smtp.gmail.com',
					 'smtp_port' =>465,
					 'smtp_user' => 'samritis14337@gmail.com',
					 'smtp_pass' => '', //your password
					 'mailtype' => 'html',
					 'charset' =>'iso-8859-1',
					 'wordwrap' => True
					  );
					 
					 $this->load->library('email',$config);
					 $this->email->initialize($config);
                     $this->email->from('samritis14337@gmail.com', 'Your Name');
					 $this->email->to('saurabhsinghggu@gmail.com');
					 $this->email->subject('Email Test');
					 $this->email->message('Testing the email class.');
					 $this->email->send();
					 
			}
			else
			{
                    echo "Registration Failed!!!";
			}


        }
    else
		{
			$this->load->view('register');
		
		    

		}

}


}

?>

	