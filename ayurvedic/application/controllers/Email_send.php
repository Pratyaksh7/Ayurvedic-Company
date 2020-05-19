<?php 

class Email_send extends CI_Controller {

    public function __construct() {
        parent:: __construct();

    }

    public function index() {
        $this->load->view('product');
    }

    public function send() {
        unset($post['submit']);
        $to =   'pratyakshgupta7@gmail.com';
        $from   =   $this->input->post('email');
        $subject    =   'Testing the Email Sending';

        $emailContent   = $this->input->post('name');
        $emailContent   = $this->input->post('contact');
        $emailContent   = $this->input->post('email');
        $emailContent   = $this->input->post('city');
        $emailContent   = $this->input->post('disease');
        $emailContent   = $this->input->post('message');

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '60';

        $config['smtp_user'] = 'hiyaayucare@gmail.com';
        $config['smtp_pass'] = 'Hiya@Ayucare@363';

        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'html';
        $config['validation'] = TRUE;

        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($emailContent);
        $this->email->send();

        $this->session->set_flashdata('msg',"Mail has been sent successfully and Thanks for Shopping.");
        $this->session->set_flashdata('msg_class','alert-success');

        return redirect('home');
    }

}