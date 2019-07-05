<?php
/**
 * Admin Dashboard
 */
class Dashboard extends CI_Controller{

  // function __construct()
  // {
  //   // code...
  // }

  function __construct(){
    parent::__construct();
    $this->load->helper('string');
    $this->load->Model('Admin_Model');
  }

  public function index(){
    $this->load->view('dashboard/dashboard.php');
  }

  public function home(){
    $this->session->unset_userdata('tour_id');
    $this->load->view('dashboard/dashboard.php');
  }

  public function add_tour(){
    $this->session->unset_userdata('tour_id');
    $this->load->view('dashboard/add_tour.php');
  }

  public function add_itinerary(){
    if($this->session->userdata('tour_id')){

      $tour_id = $this->session->userdata('tour_id');
      $tour_details = $this->Admin_Model->get_tour_details($tour_id);
      $itinerary_list = $this->Admin_Model->itinerary_list($tour_id);
      $data['tour_details'] = $tour_details;
      $data['itinerary_list'] = $itinerary_list;
      if($this->input->post('itinerary_id')){
        $itinerary_id = $this->input->post('itinerary_id');
        $itinerary_details = $this->Admin_Model->get_itinerary_details($itinerary_id);
        $data['itinerary_details'] = $itinerary_details;
      }
      else{
        $data['itinerary_details'] = '';
      }
      $this->load->view('dashboard/add_itinerary.php',$data);
    }
    else{
      header('location:home');
    }
    // $this->load->view('dashboard/add_itinerary.php');
  }
  public function add_inclusion(){
    $tour_id = $this->session->userdata('tour_id');
    $inclusion_list = $this->Admin_Model->inclusion_list($tour_id);
    $data['inclusion_list'] = $inclusion_list;
    $this->load->view('dashboard/add_inclusion.php',$data);
  }
  public function save_inclusion(){
    $tour_id = $this->session->userdata('tour_id');
    $inclusion_data = array(
      'tour_id' => $tour_id,
      'inclusion_num' => $this->input->post('inclusion_num'),
      'inclusion_description' => $this->input->post('inclusion_description'),
    );
    $this->Admin_Model->save_inclusion($inclusion_data);
    $this->load->view('dashboard/add_inclusion.php');
  }
  public function add_exclusion(){
    $tour_id = $this->session->userdata('tour_id');
    $exclusion_list = $this->Admin_Model->exclusion_list($tour_id);
    $data['$exclusion_list'] = $exclusion_list;
    $this->load->view('dashboard/add_exclusion.php');
  }
  public function save_exclusion(){
    $tour_id = $this->session->userdata('tour_id');
    $exclusion_data = array(
      'tour_id' => $tour_id,
      'exlusion_num' => $this->input->post('exlusion_num'),
      'exclusion_description' => $this->input->post('exclusion_description'),
    );
    $this->Admin_Model->save_exclusion($exclusion_data);
    $this->load->view('dashboard/add_exclusion.php');
  }
  public function tour_list(){
    $this->session->unset_userdata('tour_id');
    $tour_list = $this->Admin_Model->get_tour_list();
    $data['tour_list'] = $tour_list;
    $this->load->view('dashboard/tour_list.php',$data);
  }
  public function tour_details_load(){
      $tour_id = $this->input->post('tour_id');
      $this->session->set_userdata('tour_id',$tour_id);
      header('location:tour_details');
  }
  public function tour_details(){
    $tour_id = $this->session->userdata('tour_id');
    $tour_details = $this->Admin_Model->get_tour_details($tour_id);
    $data['tour_details'] = $tour_details;
    $this->load->view('dashboard/tour_details.php',$data);
  }
  // Save Tour Information... datta...
  public function save_tour(){
    $tour_id = random_string('nozero',6);
    $image_name = 'tour_'.$tour_id;

    $config['upload_path'] = 'assets/images/tours/';
    $config['allowed_types'] = 'jpg';
    $config['file_name'] = $image_name;
    $filename = $_FILES['tour_banner_img']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('tour_banner_img')){
      $tour_data = array(
        'tour_id' => $tour_id,
        'tour_state' => $this->input->post('tour_state'),
        'tour_name' => $this->input->post('tour_name'),
        'tour_banner_img' => $image_name.'.'.$ext,
        'tour_city_num' => $this->input->post('tour_city_num'),
        'tour_day_num' => $this->input->post('tour_day_num'),
        'tour_price' => $this->input->post('tour_price'),
        'tour_start_city' => $this->input->post('tour_start_city'),
        'tour_end_city' => $this->input->post('tour_end_city'),
        'tour_overview' => $this->input->post('tour_overview'),
      );
      $this->Admin_Model->save_tour($tour_data);
      $this->session->set_userdata('tour_id',$tour_id);
      $this->session->set_flashdata('status','tour_add_success');
      header('location:tour_details');
    }
    else{
      $error = $this->upload->display_errors();
      $this->session->set_flashdata('status',$this->upload->display_errors());
      header('location:add_tour');
    }
  }

  public function update_tour(){
    if($this->input->post('tour_id')){
      $tour_id = $this->input->post('tour_id');
    }
    if($this->session->userdata('tour_id')){
      $tour_id = $this->session->userdata('tour_id');
    }

    $this->session->set_userdata('tour_id',$tour_id);
    $tour_details = $this->Admin_Model->get_tour_details($tour_id);
    $data['tour_details'] = $tour_details;
    $this->load->view('dashboard/update_tour.php',$data);
  }

  public function update_tour_db(){
    $tour_id = $this->session->userdata('tour_id');
    $update_tour_data = array(
      'tour_state' => $this->input->post('tour_state'),
      'tour_name' => $this->input->post('tour_name'),
      'tour_city_num' => $this->input->post('tour_city_num'),
      'tour_day_num' => $this->input->post('tour_day_num'),
      'tour_start_city' => $this->input->post('tour_start_city'),
      'tour_end_city' => $this->input->post('tour_end_city'),
      'tour_price' => $this->input->post('tour_price'),
      'tour_overview' => $this->input->post('tour_overview'),
    );
    $this->Admin_Model->update_tour_db($tour_id,$update_tour_data);
    $this->session->set_flashdata('status','tour_update_success');
    header('location:tour_details');
  }

  public function update_tour_image(){
    $tour_id = $this->session->userdata('tour_id');
    $tour_banner_img_old = $this->input->post('tour_banner_img_old');

    $num = random_string('nozero',6);
    $image_name = 'tour_'.$tour_id.'_'.$num;

    $config['upload_path'] = 'assets/images/tours/';
    $config['allowed_types'] = 'jpg';
    $config['file_name'] = $image_name;
    $filename = $_FILES['tour_banner_img']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('tour_banner_img')){
      $tour_up_image = array(
        'tour_banner_img' => $image_name.'.'.$ext,
      );
      $this->Admin_Model->update_tour_image($tour_id,$tour_up_image);
      unlink("assets/images/tours/".$tour_banner_img_old);
      $this->session->set_flashdata('status','tour_image_update_success');
      header('location:tour_details');
    }
    else{
      $error = $this->upload->display_errors();
      $this->session->set_flashdata('status',$this->upload->display_errors());
      header('location:update_tour');
    }
  }

  public function save_itinerary(){
    $itinerary_data = array(
      'tour_id' => $this->input->post('tour_id'),
      'itinerary_day_num' => $this->input->post('itinerary_day_num'),
      'itinerary_day_title' => $this->input->post('itinerary_day_title'),
      'itinerary_day_description' => $this->input->post('itinerary_day_description'),
    );
    $this->Admin_Model->save_itinerary($itinerary_data);
    $this->session->set_flashdata('save_itinerary_success','success');
    header('location:add_itinerary');
  }
  public function update_itinerary(){
    $itinerary_id = $this->input->post('itinerary_id');
    $itinerary_update_data = array(
      'itinerary_day_num' => $this->input->post('itinerary_day_num'),
      'itinerary_day_title' => $this->input->post('itinerary_day_title'),
      'itinerary_day_description' => $this->input->post('itinerary_day_description'),
    );
     $this->Admin_Model->update_itinerary($itinerary_id,$itinerary_update_data);
     $this->session->set_flashdata('update_itinerary_success','success');
     header('location:add_itinerary');
  }

  public function delete_itinerary(){
    $itinerary_id = $this->input->post('itinerary_id');
    $this->Admin_Model->delete_itinerary($itinerary_id);
    $this->session->set_flashdata('delete_itinerary_success','success');
    header('location:add_itinerary');
  }
  // public function get_tour_details(){
  //
  // }



}

 ?>
