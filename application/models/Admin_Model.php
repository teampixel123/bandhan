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
  public function save_exclusion($exclusion_data){
    $this->db->insert('exclusion',$exclusion_data);
  }
  public function exclusion_list($tour_id){
    $this->db->select('*');
    $this->db->from('exclusion');
    $this->db->where('tour_id',$tour_id);
    $this->db->order_by('exlusion_num','ASC');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
}

 ?>
