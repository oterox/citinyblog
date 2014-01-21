<?php

class Post extends CI_Model{
	
	function get_post_count(){
		$this->db->select('postID')->from('posts')->where('active', 1);
		$query = $this->db->get();
		return $query->num_rows();

	}

	function get_posts( $num=20, $start=0 )	{
		$this->db->select()->from('posts')->where('active',1)->order_by('date_added','desc')->limit($num, $start);
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_post($postID){
		$this->db->select()->from('posts')->where(array('postID'=>$postID))->order_by('date_added','desc');
		$query = $this->db->get();
		return $query->first_row('array');
	}

	function insert_post($data){
		$this->db->insert('posts',$data);
		return $this->db->insert_id();
	}

	function update_post($postID,$data){
		$this->db->where('postID',$postID);
		$this->db->update('posts',$data);
	}

	function delete_post($postID){
		$this->db->where('postID',$postID);
		$this->db->delete('posts');
	}

}