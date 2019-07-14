<?php
/**
 *
 */
class Admin_Model extends CI_Model
{
  public function save_tour($tour_data){
    $this->db->insert('tours',$tour_data);
  }
  public function update_tour_db($tour_id,$update_tour_data){
    $this->db->where('tour_id',$tour_id);
    $this->db->update('tours',$update_tour_data);
  }
  public function update_tour_image($tour_id,$tour_up_image){
    $this->db->where('tour_id',$tour_id);
    $this->db->update('tours',$tour_up_image);
  }
  public function get_tour_details($tour_id){
    $this->db->select('*');
    $this->db->from('tours');
    $this->db->where('tour_id',$tour_id);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
  }
  public function get_tour_list(){
    $this->db->select('*');
    $this->db->from('tours');
    $this->db->order_by('id','ASC');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
  public function delete_tour($tour_id){
    $tables = array('tours', 'itinerary', 'inclusion', 'exclusion','tour_cost', '	tour_dates');
      $this->db->where('tour_id',$tour_id);
      $del=$this->db->delete($tables);
      return $del;
  }

  public function save_itinerary($itinerary_data){
    $this->db->insert('itinerary',$itinerary_data);
  }

  public function itinerary_list($tour_id){
    $this->db->select('*');
    $this->db->from('itinerary');
    $this->db->where('tour_id',$tour_id);
    $this->db->order_by('itinerary_day_num','ASC');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function get_itinerary_details($itinerary_id){
    $this->db->select('*');
    $this->db->from('itinerary');
    $this->db->where('id',$itinerary_id);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
  }
  public function update_itinerary($itinerary_id,$itinerary_update_data){
    $this->db->where('id',$itinerary_id);
    $this->db->update('itinerary',$itinerary_update_data);
  }
  public function delete_itinerary($itinerary_id){
    $this->db->where('id',$itinerary_id);
    $this->db->delete('itinerary');
  }

  /******************************* Inclusion *************************************/
  /*    */
  public function save_inclusion($inclusion_data){
    $this->db->insert('inclusion',$inclusion_data);
  }
  public function inclusion_list($tour_id){
    $this->db->select('*');
    $this->db->from('inclusion');
    $this->db->where('tour_id',$tour_id);
    $this->db->order_by('inclusion_num','ASC');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
  public function get_inclusion_details($inclusion_id){
    $query = $this->db->select('*')
      ->from('inclusion')
      ->where('id',$inclusion_id)
      ->order_by('inclusion_num','ASC')
      ->get();
    $result = $query->result_array();
    return $result;
  }
  public function update_inclusion($inclusion_id,$inclusion_update_data){
    $this->db->where('id',$inclusion_id);
    $this->db->update('inclusion',$inclusion_update_data);
  }
  public function delete_inclusion($inclusion_id){
    $this->db->where('id',$inclusion_id);
    $this->db->delete('inclusion');
  }

  /******************************* Exclusion *************************************/
  public function save_exclusion($exclusion_data){
    $this->db->insert('exclusion',$exclusion_data);
  }
  public function exclusion_list($tour_id){
    $this->db->select('*');
    $this->db->from('exclusion');
    $this->db->where('tour_id',$tour_id);
    $this->db->order_by('exclusion_num','ASC');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
  public function get_exclusion_details($exclusion_id){
    $query = $this->db->select('*')
      ->from('exclusion')
      ->where('id',$exclusion_id)
      ->order_by('exclusion_num','ASC')
      ->get();
    $result = $query->result_array();
    return $result;
  }
  public function update_exclusion($exclusion_id,$exclusion_update_data){
    $this->db->where('id',$exclusion_id);
    $this->db->update('exclusion',$exclusion_update_data);
  }
  public function delete_exclusion($exclusion_id){
    $this->db->where('id',$exclusion_id);
    $this->db->delete('exclusion');
  }

  /******************************* Tour Cost *************************************/
  public function save_cost($cost_data){
    $this->db->insert('tour_cost',$cost_data);
  }
  public function cost_list($tour_id){
    $this->db->select('*');
    $this->db->from('tour_cost');
    $this->db->where('tour_id',$tour_id);
    // $this->db->order_by('cost_num','ASC');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
  public function delete_cost($cost_id){
    $this->db->where('id',$cost_id);
    $this->db->delete('tour_cost');
  }

  /******************************* Tour Date *************************************/
  public function save_date($date_data){
    $this->db->insert('tour_dates',$date_data);
  }
  public function date_list($tour_id){
    $date = date('d M Y');
    $query = $this->db->query("select * from tour_dates where str_to_date(departure_date,'%d %M %Y') >= str_to_date('$date','%d %M %Y') and tour_id = '$tour_id' order by str_to_date(departure_date,'%d %M %Y') ASC");
    $result = $query->result();
     return $result;
  }
  public function delete_date($date_id){
    $this->db->where('id',$date_id);
    $this->db->delete('tour_dates');
  }

  public function get_tour_menu_title(){
    $this->db->select('tour_state, count(tour_state)');
    $this->db->from('tours');
     $this->db->order_by('count(tour_state)','DESC');
    $this->db->group_by('tour_state');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function get_tour_menu_list($state){
    $this->db->select('*');
    $this->db->from('tours');
    $this->db->where('tour_state',$state);
    $this->db->order_by('tour_state','ASC');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function check_login($username,$password){
    $query = $this->db->select('admin_id')
      ->from('admin')
      ->where('username',$username)
      ->where('password',$password)
      ->get();
    $result = $query->result_array();
    return $result;
  }

  public function admin_details($admin_id){
    $query = $this->db->select('*')
      ->from('admin')
      ->where('admin_id',$admin_id)
      ->get();
    $result = $query->result_array();
    return $result;
  }
}

 ?>
