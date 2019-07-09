<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	function __construct(){
    parent::__construct();
    $this->load->helper('string');
    $this->load->Model('Admin_Model');
  }
	public function index()
	{
		$this->session->unset_userdata('itinerary');
		$this->load->view('home');
	}
	public function home()
	{
		$this->session->unset_userdata('itinerary');
		$this->load->view('home');
	}
	public function home2()
	{
		$this->load->view('home2');
	}
  public function about(){
		$this->session->unset_userdata('itinerary');
    	$this->load->view('about');
  }
  public function contact(){
		$this->session->unset_userdata('itinerary');
    $this->load->view('contact');
  }
	public function list(){
		$segment = $this->uri->segment(2);
		$state = str_replace('-', ' ', $segment);
		  // echo $state;
		$data['tour_list'] = $this->Admin_Model->get_tour_menu_list($state);
		$data['state2'] = $state;
    $this->load->view('list_tours',$data);
  }

	public function terms(){
    $this->load->view('terms');
  }

	// dhananjay website itinerary page
	public function itinerary_details(){

		$tour_id = $this->uri->segment(3);
		$state = $this->uri->segment(4);
		$tour_name = $this->uri->segment(5);
		$tour_name2 = str_replace(' ','-',$tour_name);
		// echo $tour_name2;
		$tour_details = $this->Admin_Model->get_tour_details($tour_id);
		$data['tour_details'] = $tour_details;
		$data['itinarary_days']=$this->Admin_Model->itinerary_list($tour_id);
		$data['inclusion_list']=$this->Admin_Model->inclusion_list($tour_id);
		$data['exclusion_list']=$this->Admin_Model->exclusion_list($tour_id);
		$data['date_list']=$this->Admin_Model->date_list($tour_id);
		$data['cost_list']=$this->Admin_Model->cost_list($tour_id);
		if($tour_details){
			$this->session->set_userdata('itinerary',$data);
			header('location:'.base_url().'Tour/'.$tour_name2);
		}
		else{
			header('location:'.base_url().'');
		}
	}

	public function itinerary_details2(){
		$details = $this->session->userdata('itinerary');
		if($details){
			$data['tour_details'] = $details['tour_details'];
			$data['itinarary_days'] = $details['itinarary_days'];
			$data['inclusion_list'] = $details['inclusion_list'];
			$data['exclusion_list'] = $details['exclusion_list'];
			$data['date_list'] = $details['date_list'];
			$data['cost_list'] = $details['cost_list'];
			$this->load->view('itinerary.php',$data);
		}
		else{
			header('location:'.base_url().'');
		}


		// echo print_r($data['tour_details']);
		// echo 'ok';
	}

  public function send_feedback(){
$name = $this->input->post('name');
$email = $this->input->post('email');
$mobile = $this->input->post('mobile');
$message1 = $this->input->post('message');
$this->load->library('email');
$config['mailtype'] = 'html';
$config['crlf'] = "\r\n";
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";
$config['validate'] = FALSE;
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'mail.pixelbazar.com';
$config['smtp_port'] = '587';
$config['smtp_user'] = 'datta@pixelbazar.com';
$config['smtp_pass'] = 'datta_777';
$config['starttls'] = true;

$this->email->initialize($config);
$message = '
<p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
Massege: <br>'.$message1.'
</p>
<hr>
<p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
Sender Information:
</p>
<p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
Name: '.$name.'
</p>
<p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
Mobile No: '.$mobile.'
</p>
<p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
Email: <a href="mailto:'.$email.'">'.$email.'</a>
</p>
';

$this->email->set_newline("\r\n");
$this->email->from($email); // change it to yours
$this->email->to('dhananjay@pixelbazar.com');// change it to yours
$this->email->subject('Mail From Piexel Bazar Web');
$this->email->message($message);
if($this->email->send())
{
   echo 'Success';
$this->session->set_flashdata("email_msg","email_success");
 	// header('location:contact');
}
else
{
$this->session->set_flashdata("email_msg","email_error");
	// header('location:contact');
  echo 'error';
}
}
}
