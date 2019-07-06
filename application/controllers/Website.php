<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {


	public function home()
	{
		$this->load->view('home');
	}
	public function home2()
	{
		$this->load->view('home2');
	}
  public function about(){
    	$this->load->view('about');
  }
  public function contact(){
    $this->load->view('contact');
  }
	public function list(){
    $this->load->view('list_tours');
  }

	public function terms(){
    $this->load->view('terms');
  }

  public function itinerary(){
    $this->load->view('Itinerary');
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