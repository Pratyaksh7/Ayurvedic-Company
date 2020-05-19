<?php

class Home extends CI_Controller {

    public function index()
    {
        $this->load->model('ayurvedicsmodel','ayurvedics');
        $ayurvedics =$this->ayurvedics->display_homepage_content();
        $this->load->view('homepage',['ayurvedics'=> $ayurvedics]);
        // echo"<pre>";
        // print_r($a); exit;
    }

    public function meethiya() {
        $this->load->view('header');
        $this->load->view('meethiya');

    }

    public function product() {
        $this->load->view('header');
        
        $this->load->library('pagination');
		$config= [
			'base_url'		=>	base_url('user/index'),
			'per_page'		=>	15,
			'total_rows'	=>	$this->products->count_all_products(),
			
		];

		$this->pagination->initialize($config);
        $products = $this->products->all_products_list($config['per_page'], $this->uri->segment(3));
        $this->load->view('product',['products'=>$products]);
    }

    public function media() {
        $this->load->view('header');
        $this->load->view('media');
    }

    public function contactus(){
        $this->load->view('header');
        $this->load->view('contactus');
    }
    public function contactus_validation(){

        $this->load->view('header');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        if($this->form_validation->run('contact_form_rules') )
        {
            $post = $this->input->post();
            unset($post['submit']);
            // echo"<pre>";
            // print_r($post);exit;
            return $this->_flashAndRedirect(
                $this->products->add_info($post),
                "Form Filled Successfully",
                "Form Submission failed, Please Try Again"
            );
        }else {
            $this->load->view('contactus');
        }
    }

    private function _flashAndRedirect($successful,$successMessage,$failureMessage)
	{
		if( $successful ) {
			$this->session->set_flashdata('feedback',$successMessage);
			$this->session->set_flashdata('feedback_class', 'alert-success');
		} else {
			$this->session->set_flashdata('feedback',$failureMessage);
			$this->session->set_flashdata('feedback_class', 'alert-danger');
		}
		return redirect('home/contactus');
	}

    public function __construct()
    {
        parent::__construct(); 
        $this->load->model('productsmodel','products');
        $this->load->helper('form');
    }


}