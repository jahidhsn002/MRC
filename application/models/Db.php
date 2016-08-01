<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Db extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
	
	public function get_where_limit($table, $query, $limit){
        $query = $this->db
						->where($query)
						->limit($limit)
						->get($table);
        return $query->result();
    }
	
	public function get_value_where_select($table, $query, $field){
        $query = $this->db
						->where($query)
						->limit(1)
						->get($table);
        return $query->result()[0]->$field;
    }
	
	public function get_where_array_limit($table, $query, $limit){
        $query = $this->db
						->where($query)
						->limit($limit)
						->get($table);
        return $query->result_array();
    }
	
	public function get_array($table){
        $query = $this->db
						->get($table);
        return $query->result_array();
    }
	
	public function get_array_order_by($table){
        $query = $this->db
						->order_by('next DESC')
						->get($table);
        return $query->result_array();
    }
	
	public function get_where_array($table, $query){
        $query = $this->db
						->where($query)
						->get($table);
        return $query->result_array();
    }
	
	public function insert($table, $data){
        $this->db->insert($table, $data);
        return true;
    }
	
	public function update($table, $where, $data){
        $this->db
				->where($where)
				->update($table, $data);
        return true;
    }
	
	public function remove($table, $where){
        $this->db
				->where($where)
				->delete($table);
        return true;
    }
	
}

?>