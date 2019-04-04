<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class HomeController extends CI_Controller {
     
    public function index() 
    {
        $data = [
            'title'     =>   'Hello World!',
            'content'   =>   'This is the content',
            'posts'     =>   array('Post 1', 'Post 2', 'Post 3')
        ];


        $this->load->view('homeView', $data);
    }
}