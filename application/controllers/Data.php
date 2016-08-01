<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include('Secure.php');

class Data extends Secure{

	public function index(){
		
		$this->check('data');
		
		if($this->session->userdata('user_roll') == 'admin'):
			$data['data'] = $this->Db->get_array_order_by('data');
		else:
			$user_id = $this->session->userdata('user_id');
			$data['data'] = $this->Db->get_array_order_by('data', array('user_id'=> $user_id));
		endif;
		
		$data['success'] = '';
		$data['error'] = '';
		if(isset($_GET['success'])){$data['success'] = $_GET['success'];}
		if(isset($_GET['error'])){$data['error'] = $_GET['error'];}
		
		$this->load->view('base/header');
		$this->parser->parse('data/view', $data);
		$this->load->view('base/footer');
	}
	
	public function add(){
		
		$this->check('data/add');
		
		$this->form_validation->set_rules('company', 'Company', 'required|regex_match[/^[^<>="|\n]*$/]|max_length[30]');
		$this->form_validation->set_rules('status', 'Status', 'required|in_list[natural,dark_green,light_green,dark_red,completed]|max_length[15]');
		$this->form_validation->set_rules('next', 'Next', 'required|alpha_dash|max_length[25]');
		$this->form_validation->set_rules('need', 'Need', 'required|regex_match[/^[^<>="|]*$/]|max_length[50]');
		$this->form_validation->set_rules('person', 'Person', 'required|regex_match[/^[^<>="|\n]*$/]|max_length[30]');
		$this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[^<>="|\n]*$/]|max_length[30]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[30]');
		$this->form_validation->set_rules('address', 'Address', 'required|regex_match[/^[^<>="|]*$/]|max_length[50]');
		$this->form_validation->set_rules('comment', 'Comment', 'required|regex_match[/^[^<>="|]*$/]|max_length[50]');
		
		if ($this->form_validation->run() == FALSE){
           
			$this->load->view('base/header');
			$this->load->view('data/add');
			$this->load->view('base/footer');
		
		}else{
            
			$data = array(
				'company' => $this->input->post('company'),
				'status' => $this->input->post('status'),
				'next' => human_to_unix($this->input->post('next')." 00:00 AM"),
				'need' => $this->input->post('need'),
				'person' => $this->input->post('person'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'comment' => $this->input->post('comment'),
				'user' => $this->session->userdata('user_id'),
				'user_name' => $this->session->userdata('user_name'),
				'time' => gmt_to_local(local_to_gmt(time()), 'UP6', FALSE)
			);
			
			$this->Db->insert('data', $data);
			
			redirect('data/?success=Congrats Data Added');
			exit;
			
        }
		
	}
	
	public function edit( $uid = null ){
		
		$this->check('data/edit');
		
		$check = $this->Db->get_where_limit('data', array('id' => $uid), 1);
		
		if($check != null){
			
			$data['id'] = $uid;
			$data['data'] = $this->Db->get_where_array_limit('data', array('id' => $uid), 1);
			
			$this->form_validation->set_rules('company', 'Company', 'required|regex_match[/^[^<>="|\n]*$/]|max_length[30]');
			$this->form_validation->set_rules('need', 'Need', 'required|regex_match[/^[^<>="|]*$/]|max_length[50]');
			$this->form_validation->set_rules('person', 'Person', 'required|regex_match[/^[^<>="|\n]*$/]|max_length[30]');
			$this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[^<>="|\n]*$/]|max_length[30]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[30]');
			$this->form_validation->set_rules('address', 'Address', 'required|regex_match[/^[^<>="|]*$/]|max_length[50]');
			
			if ($this->form_validation->run() == FALSE){
				
				$this->load->view('base/header');
				$this->parser->parse('data/edit', $data);
				$this->load->view('base/footer');
			
			}else{
				
				$data = array(
					'company' => $this->input->post('company'),
					'need' => $this->input->post('need'),
					'person' => $this->input->post('person'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email'),
					'address' => $this->input->post('address')
				);
				
				$this->Db->update('data', array('id'=>$uid), $data);
				
				redirect('data/?success=Congrats Data Edited');
				exit;
				
			}
			
			
		}else{
			redirect('data/?error=Did not Match any ID', 404);
			exit;
		}
		
	}
	
	public function change( $uid = null ){
		
		$this->check('data/change');
		
		$check = $this->Db->get_where_limit('data', array('id' => $uid), 1);
		
		if($check != null){
			
			$data['id'] = $uid;
			$data['data'] = $this->Db->get_where_array_limit('data', array('id' => $uid), 1);
			
			$this->form_validation->set_rules('status', 'Status', 'required|in_list[natural,dark_green,light_green,dark_red,completed]|max_length[15]');
			$this->form_validation->set_rules('next', 'Next', 'required|alpha_dash|max_length[25]');
			$this->form_validation->set_rules('comment', 'Comment', 'required|regex_match[/^[^<>="|]*$/]|max_length[50]');
		
			if ($this->form_validation->run() == FALSE){
				
				$this->load->view('base/header');
				$this->parser->parse('data/change', $data);
				$this->load->view('base/footer');
			
			}else{
				
				$data = array(
					'status' => $this->input->post('status'),
					'next' => human_to_unix($this->input->post('next')." 00:00 AM"),
					'comment' => $this->input->post('comment')
				);
				
				$this->Db->update('data', array('id'=>$uid), $data);
				
				redirect('data/?success=Congrats Data Edited');
				exit;
				
			}
			
			
		}else{
			redirect('data/?error=Did not Match any ID', 404);
			exit;
		}
		
	}
	
	public function remove($uid = null){
		
		$this->check('data/remove');
		
		$check = $this->Db->get_where_limit('data', array('id' => $uid), 1);
		
		if($check != null){
			$this->Db->remove('data', array('id'=>$uid));
			redirect('data/?error=Data ID Deleted From Database');
		}else{
			redirect('data/?error=Did not Match any ID', 404);
			exit;
		}
	}
	
}
