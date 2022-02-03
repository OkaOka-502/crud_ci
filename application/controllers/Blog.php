<?php
class Blog  extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

 
    function index(){
        $data['title'] = "This Is Title";
        $data['content'] = "This Is The Content";
        $this->load->view('blog_view', $data);
    }
}
