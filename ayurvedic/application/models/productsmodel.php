<?php

class ProductsModel extends CI_Model {

    public function products_list( $limit, $offset )
	{
		$admin_id= $this->session->userdata('admin_id');
		$query= $this->db
							->select()
							->from('products')
							->where('admin_id', $admin_id)
							->limit( $limit, $offset )
							->get();
		return $query->result();                // here we are fetching all the records of products from dB to Dashboard
    }
    
    public function num_rows(){
		$admin_id= $this->session->userdata('admin_id');
		$query= $this->db
							->select()
							->from('products')
							->where('admin_id', $admin_id)
							->get();
		return $query->num_rows();   
	}

    public function add_product($post) {
        return $this->db->insert('products',$post);
    }

    public function find_product($product_id)
	{
		$q= $this->db->select()
					->from('products')
					->where('id', $product_id)
					->get();
		return $q->row();                       // here we are fetching only a single row/single record of particular product as a parameter		
    }
    
    public function update_product($product_id, Array $product)
	{
		return $this->db
				->where('id', $product_id)
				->update('products', $product);
    }
    
    public function delete_product($product_id)
	{
		 return 	$this->db->delete('products',['id'=>$product_id]);
    }
    
    public function all_products_list( $limit, $offset )
	{
		$query= $this->db
							->select()
							->from('products')
							->limit( $limit, $offset )
							->get();
		return $query->result();                // here we are fetching all the records of products from dB to Dashboard
    }
    
    public function count_all_products()
	{
		$query= $this->db
							->select()
							->from('products')
							->get();
		return $query->num_rows(); 
	} 

	public function shop_product_info($post){
		return $this->db->insert('enquiries',$post);
	}

	public function add_info($post) {
		return $this->db->insert('forms',$post);
	}

}