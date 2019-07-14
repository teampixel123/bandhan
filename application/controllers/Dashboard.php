<?php
/**
 * Admin Dashboard
 */
class Dashboard extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->helper('string');
    $this->load->Model('Admin_Model');
    $admin_id = $this->session->userdata('admin_id');
  }

  public function index(){
    header('location:'.base_url().'Admin-Dashboard');
  }

  public function home(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $admin_details = $this->Admin_Model->admin_details($admin_id);
      $data['admin_details'] = $admin_details;
      $this->session->unset_userdata('tour_id');
      $this->load->view('dashboard/dashboard.php',$data);
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }

  /*************************** Tour ********************************/
  // Add Tour View...
  public function add_tour(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $admin_details = $this->Admin_Model->admin_details($admin_id);
      $data['admin_details'] = $admin_details;
      $this->session->unset_userdata('tour_id');
      $this->load->view('dashboard/add_tour.php',$data);
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Save Tour Information... datta...
  public function save_tour(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $tour_id = random_string('nozero',6);
      $data = array();
      $filesCount = count($_FILES['files']['name']);
      for($i = 0; $i < $filesCount; $i++){
        if($i == 0){ $image_name = 'tour_'.$tour_id; }
        if($i == 1){ $image_name = 'tour_mob_'.$tour_id; }
        $_FILES['file']['name']     = $_FILES['files']['name'][$i];
        $_FILES['file']['type']     = $_FILES['files']['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
        $_FILES['file']['error']     = $_FILES['files']['error'][$i];
        $_FILES['file']['size']     = $_FILES['files']['size'][$i];
        // File upload configuration
        $uploadPath = 'assets/images/tours/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'jpg';
        $config['file_name'] = $image_name;
        $filename = $_FILES['file']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        // Load and initialize upload library
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        // Upload file to server
        if($this->upload->do_upload('file')){
            // Uploaded file data
            $fileData = $this->upload->data();
            $uploadData[$i]['file_name'] = $image_name;
            $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
        }
        $image_name_save[] = $image_name.'.'.$ext;
      }
      if(!empty($uploadData[0]) && !empty($uploadData[1])){
        $tour_data = array(
          'tour_id' => $tour_id,
          'tour_state' => $this->input->post('tour_state'),
          'tour_name' => $this->input->post('tour_name'),
          'tour_banner_img' => $image_name_save[0],
          'tour_mobile_img' => $image_name_save[1],
          'tour_city_num' => $this->input->post('tour_city_num'),
          'tour_day_num' => $this->input->post('tour_day_num'),
          'tour_price' => $this->input->post('tour_price'),
          'tour_price_withgst' => $this->input->post('tour_price_withgst'),
          'tour_start_city' => $this->input->post('tour_start_city'),
          'tour_end_city' => $this->input->post('tour_end_city'),
          'tour_overview' => $this->input->post('tour_overview'),
        );
        $this->Admin_Model->save_tour($tour_data);
        $this->session->set_userdata('tour_id',$tour_id);
        $this->session->set_flashdata('status','tour_add_success');
        header('location:'.base_url().'Dashboard/tour_details');
      }
      else{
        $error = $this->upload->display_errors();
        $this->session->set_flashdata('status',$this->upload->display_errors());
        header('location:'.base_url().'Dashboard/add_tour');
      }
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Tour List... datta...
  public function tour_list(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $admin_details = $this->Admin_Model->admin_details($admin_id);
      $data['admin_details'] = $admin_details;
      $this->session->unset_userdata('tour_id');
      $tour_list = $this->Admin_Model->get_tour_list();
      $data['tour_list'] = $tour_list;
      $this->load->view('dashboard/tour_list.php',$data);
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Tour Details Load ... datta...
  public function tour_details_load(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $admin_details = $this->Admin_Model->admin_details($admin_id);
      $data['admin_details'] = $admin_details;
      $tour_id = $this->input->post('tour_id');
      $this->session->set_userdata('tour_id',$tour_id);
      header('location:'.base_url().'Dashboard/tour_details');
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Tour Details ... datta...
  public function tour_details(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $admin_details = $this->Admin_Model->admin_details($admin_id);
      $data['admin_details'] = $admin_details;
      $tour_id = $this->session->userdata('tour_id');
      $tour_details = $this->Admin_Model->get_tour_details($tour_id);
      $data['tour_details'] = $tour_details;
      $this->load->view('dashboard/tour_details.php',$data);
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Update Tour View Load... datta...
  public function update_tour(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $admin_details = $this->Admin_Model->admin_details($admin_id);
      $data['admin_details'] = $admin_details;
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
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Update Tour in database... datta...
  public function update_tour_db(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $tour_id = $this->session->userdata('tour_id');
      $update_tour_data = array(
        'tour_state' => $this->input->post('tour_state'),
        'tour_name' => $this->input->post('tour_name'),
        'tour_city_num' => $this->input->post('tour_city_num'),
        'tour_day_num' => $this->input->post('tour_day_num'),
        'tour_start_city' => $this->input->post('tour_start_city'),
        'tour_end_city' => $this->input->post('tour_end_city'),
        'tour_price' => $this->input->post('tour_price'),
        'tour_price_withgst' => $this->input->post('tour_price_withgst'),
        'tour_overview' => $this->input->post('tour_overview'),
      );
      $this->Admin_Model->update_tour_db($tour_id,$update_tour_data);
      $this->session->set_flashdata('status','tour_update_success');
      header('location:tour_details');
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Update Tour Banner Image ... datta...
  public function update_tour_image(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
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
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Update Tour Mobile Image... datta...
  public function update_mobile_image(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $tour_id = $this->session->userdata('tour_id');
      $tour_banner_img_old = $this->input->post('tour_mobile_img_old');

      $num = random_string('nozero',6);
      $image_name = 'tour_mob_'.$tour_id.'_'.$num;

      $config['upload_path'] = 'assets/images/tours/';
      $config['allowed_types'] = 'jpg';
      $config['file_name'] = $image_name;
      $filename = $_FILES['tour_mobile_img']['name'];
      $ext = pathinfo($filename, PATHINFO_EXTENSION);
      $this->load->library('upload', $config);
      if ($this->upload->do_upload('tour_mobile_img')){
        $tour_up_image = array(
          'tour_mobile_img' => $image_name.'.'.$ext,
        );
        $this->Admin_Model->update_tour_image($tour_id,$tour_up_image);
        unlink("assets/images/tours/".$tour_banner_img_old);
        $this->session->set_flashdata('status','mobile_image_update_success');
        header('location:tour_details');
      }
      else{
        $error = $this->upload->display_errors();
        $this->session->set_flashdata('status',$this->upload->display_errors());
        header('location:update_tour');
      }
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }

  public function delete_tour(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $tour_id = $this->input->post('tour_id');
      $tour_details = $this->Admin_Model->get_tour_details($tour_id);
      if($tour_details){
        echo $banner_image = $tour_details[0]['tour_banner_img'];
        echo $mobile_image = $tour_details[0]['tour_mobile_img'];
        unlink("assets/images/tours/".$banner_image);
        unlink("assets/images/tours/".$mobile_image);
      }
      $del =  $this->Admin_Model->delete_tour($tour_id);
      $this->session->set_flashdata('status_deleted','tour_deleted');
      header('location:'.base_url().'Dashboard/tour_list');
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }

  /******************************* Itinerary *************************************/
  // Add Itinerary View...
  public function add_itinerary(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $admin_details = $this->Admin_Model->admin_details($admin_id);
      $data['admin_details'] = $admin_details;
      $tour_id = $this->session->userdata('tour_id');
      if($tour_id){
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
        header('location:'.base_url().'Admin-Dashboard');
      }
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Save Itinerary... Datta...
  public function save_itinerary(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
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
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Update Itinerary... Datta...
  public function update_itinerary(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
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
     else{
       header('location:'.base_url().'Admin-Login');
     }
  }
// Delete Itinerary... Datta...
  public function delete_itinerary(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $itinerary_id = $this->input->post('itinerary_id');
      $this->Admin_Model->delete_itinerary($itinerary_id);
      $this->session->set_flashdata('delete_itinerary_success','success');
      header('location:add_itinerary');
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }

  /******************************* Inclusion *************************************/
  // Inclusion View load..
  public function add_inclusion(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $tour_id = $this->session->userdata('tour_id');
      if($tour_id){
        $admin_details = $this->Admin_Model->admin_details($admin_id);
        $data['admin_details'] = $admin_details;
        $tour_details = $this->Admin_Model->get_tour_details($tour_id);
        $inclusion_list = $this->Admin_Model->inclusion_list($tour_id);
        $data['tour_details'] = $tour_details;
        $data['inclusion_list'] = $inclusion_list;
        if($this->input->post('inclusion_id')){
          $inclusion_id = $this->input->post('inclusion_id');
          $inclusion_details = $this->Admin_Model->get_inclusion_details($inclusion_id);
          $data['inclusion_details'] = $inclusion_details;
        }
        else{
          $data['inclusion_details'] = '';
        }
        $this->load->view('dashboard/add_inclusion.php',$data);
      }
      else{
        header('location:'.base_url().'Admin-Dashboard');
      }
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Save Inclusion
  public function save_inclusion(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $tour_id = $this->session->userdata('tour_id');
      if($tour_id){
        $inclusion_data = array(
          'tour_id' => $tour_id,
          'inclusion_num' => $this->input->post('inclusion_num'),
          'inclusion_description' => $this->input->post('inclusion_description'),
        );
        $this->Admin_Model->save_inclusion($inclusion_data);
        $this->session->set_flashdata('save_inclusion_success','success');
        header('location:'.base_url().'Dashboard/add_inclusion');
      }
      else{
        header('location:'.base_url().'Admin-Dashboard');
      }
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Upadate Inclusion
  public function update_inclusion(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $inclusion_id = $this->input->post('inclusion_id');
      $inclusion_update_data = array(
        'inclusion_num' => $this->input->post('inclusion_num'),
        'inclusion_description' => $this->input->post('inclusion_description'),
      );
      $this->Admin_Model->update_inclusion($inclusion_id,$inclusion_update_data);
      $this->session->set_flashdata('update_inclusion_success','success');
      header('location:'.base_url().'Dashboard/add_inclusion');
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Delete Inclusion
  public function delete_inclusion(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $inclusion_id = $this->input->post('inclusion_id');
      $this->Admin_Model->delete_inclusion($inclusion_id);
      $this->session->set_flashdata('delete_inclusion_success','success');
      header('location:'.base_url().'Dashboard/add_inclusion');
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }

  /******************************* Exclusion *************************************/
  // Exclusion View Load...
  public function add_exclusion(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $tour_id = $this->session->userdata('tour_id');
      if($tour_id){
        $admin_details = $this->Admin_Model->admin_details($admin_id);
        $data['admin_details'] = $admin_details;
        $exclusion_list = $this->Admin_Model->exclusion_list($tour_id);
        $tour_details = $this->Admin_Model->get_tour_details($tour_id);
        $data['exclusion_list'] = $exclusion_list;
        $data['tour_details'] = $tour_details;
        if($this->input->post('exclusion_id')){
          $exclusion_id = $this->input->post('exclusion_id');
          $exclusion_details = $this->Admin_Model->get_exclusion_details($exclusion_id);
          $data['exclusion_details'] = $exclusion_details;
        }
        else{
          $data['exclusion_details'] = '';
        }
        $this->load->view('dashboard/add_exclusion.php',$data);
      }
      else{
        header('location:'.base_url().'Admin-Dashboard');
      }
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Save Exclusion...
  public function save_exclusion(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $tour_id = $this->session->userdata('tour_id');
      if($tour_id){
        $exclusion_data = array(
          'tour_id' => $tour_id,
          'exclusion_num' => $this->input->post('exclusion_num'),
          'exclusion_description' => $this->input->post('exclusion_description'),
        );
        $this->Admin_Model->save_exclusion($exclusion_data);
        $this->session->set_flashdata('save_exclusion_success','success');
        header('location:'.base_url().'Dashboard/add_exclusion');
      }
      else{
        header('location:'.base_url().'Admin-Dashboard');
      }
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Upadate Exclusion
  public function update_exclusion(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $exclusion_id = $this->input->post('exclusion_id');
      $exclusion_update_data = array(
        'exclusion_num' => $this->input->post('exclusion_num'),
        'exclusion_description' => $this->input->post('exclusion_description'),
      );
      $this->Admin_Model->update_exclusion($exclusion_id,$exclusion_update_data);
      $this->session->set_flashdata('update_exclusion_success','success');
      header('location:'.base_url().'Dashboard/add_exclusion');
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Delete Exclusion
  public function delete_exclusion(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $exclusion_id = $this->input->post('exclusion_id');
      $this->Admin_Model->delete_exclusion($exclusion_id);
      $this->session->set_flashdata('delete_exclusion_success','success');
      header('location:'.base_url().'Dashboard/add_exclusion');
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }

  /******************************* Tour Cost *************************************/
  // Cost View Load...
  public function add_cost(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $tour_id = $this->session->userdata('tour_id');
      if($tour_id){
        $admin_details = $this->Admin_Model->admin_details($admin_id);
        $data['admin_details'] = $admin_details;
        $cost_list = $this->Admin_Model->cost_list($tour_id);
        $tour_details = $this->Admin_Model->get_tour_details($tour_id);
        $data['cost_list'] = $cost_list;
        $data['tour_details'] = $tour_details;
        $this->load->view('dashboard/add_cost.php',$data);
      }
      else{
        header('location:'.base_url().'Admin-Dashboard');
      }
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Save Cost...
  public function save_cost(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $tour_id = $this->session->userdata('tour_id');
      if($tour_id){
        $cost_data = array(
          'tour_id' => $tour_id,
          'cost_person_type' => $this->input->post('cost_person_type'),
          'cost_rate' => $this->input->post('cost_rate'),
        );
        $this->Admin_Model->save_cost($cost_data);
        $this->session->set_flashdata('save_cost_success','success');
        header('location:'.base_url().'Dashboard/add_cost');
      }
      else{
        header('location:'.base_url().'Admin-Dashboard');
      }
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Delete Cost
  public function delete_cost(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $cost_id = $this->input->post('cost_id');
      $this->Admin_Model->delete_cost($cost_id);
      $this->session->set_flashdata('delete_cost_success','success');
      header('location:'.base_url().'Dashboard/add_cost');
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }

  /******************************* Tour Date *************************************/
  // Date View Load...
  public function add_date(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $tour_id = $this->session->userdata('tour_id');
      if($tour_id){
        $admin_details = $this->Admin_Model->admin_details($admin_id);
        $data['admin_details'] = $admin_details;
        $date_list = $this->Admin_Model->date_list($tour_id);
        $tour_details = $this->Admin_Model->get_tour_details($tour_id);
        $data['date_list'] = $date_list;
        $data['tour_details'] = $tour_details;
        $this->load->view('dashboard/add_dates.php',$data);
      }
      else{
        header('location:'.base_url().'Admin-Dashboard');
      }
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Save Date...
  public function save_date(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $tour_id = $this->session->userdata('tour_id');
      if($tour_id){
        $date_data = array(
          'tour_id' => $tour_id,
          'departure_date' => $this->input->post('departure_date'),
        );
        $this->Admin_Model->save_date($date_data);
        $this->session->set_flashdata('save_date_success','success');
        header('location:'.base_url().'Dashboard/add_date');
      }
      else{
        header('location:'.base_url().'Admin-Dashboard');
      }
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }
  // Delete Date
  public function delete_date(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $date_id = $this->input->post('date_id');
      $this->Admin_Model->delete_date($date_id);
      $this->session->set_flashdata('delete_date_success','success');
      header('location:'.base_url().'Dashboard/add_date');
    }
    else{
      header('location:'.base_url().'Admin-Login');
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    header('location:'.base_url().'Admin-Login');
  }
}

 ?>
