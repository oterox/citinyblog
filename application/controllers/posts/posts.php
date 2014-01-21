<?php

class Posts extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('/posts/post');
	}

	function index($start=0){
		$data['posts'] = $this->post->get_posts(3,$start);
		$this->load->library('pagination');

		$config['base_url'] = base_url().'posts/index';
		$config['per_page'] = 3;
		$config['total_rows'] = $this->post->get_post_count();
		//$config['uri_segment'] = 3;
		//$config['num_links'] = 9;
		//$config['page_query_string'] = TRUE;
		$config['use_page_numbers'] = TRUE;
		//$config['query_string_segment'] = 'page';

		$config['full_tag_open'] = '<div class="pagination"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div><!--pagination-->';
		 
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		 
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		 
		$config['next_link'] = 'Next &raquo;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		 
		$config['prev_link'] = '&laquo; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		 
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		 
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		 
		// $config['display_pages'] = FALSE;
		// 
		//$config['anchor_class'] = 'follow_link ';

		$this->pagination->initialize($config);
		//add pagination to the data array so config array can be accessible
		$data['pages'] = $this->pagination->create_links();
		$data['sidebar'] = 'mainsidebar';

		$this->load->view('posts/post_index', $data);
	}

	function post($postID){
		$data['post'] = $this->post->get_post($postID);
		$data['sidebar'] = 'mainsidebar';

		$this->load->view('posts/post',$data);
	}

	function new_post(){
		$user_type = $this->session->userdata('user_type');
		if($user_type != 'admin' && $user_type != 'author'){
			redirect(base_url().'admin/users/login');
		}
		if($_POST){
			$data=array(
				'title'=>$_POST['title'],
				'post'=>$_POST['post'],
				'active'=>1
				);
			$this->post->insert_post($data);
			redirect(base_url(),'post/');
		} else {
			$this->load->view('posts/new_post');
		}
	}

	function edit_post($postID){
		$user_type = $this->session->userdata('user_type');
		if($user_type != 'admin' && $user_type != 'author'){
			redirect(base_url().'admin/users/login');
		}
		$data['success']=0;
		if($_POST){
			$data=array(
				'title'=>$_POST['title'],
				'post'=>$_POST['post'],
				'active'=>1
				);		
			$this->post->update_post($postID,$data);
			$data['success']=1;
		}
		$data['post'] = $this->post->get_post($postID);
		$this->load->view('posts/edit_post',$data);
	}

	function delete_post($postID){
		$user_type = $this->session->userdata('user_type');
		if($user_type != 'admin' && $user_type != 'author'){
			redirect(base_url().'admin/users/login');
		}
		$this->post->delete_post($postID);
		redirect(base_url());
	}
}
