<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller{
	
	public function __construct(){
		
		parent::__construct();
		//$this->load->model('News_model');
		$this->load->helper('url_helper');
	}
	
	public function index()
	{
        $data['title'] = "Harsimran Singh"; // Capitalize the first letter
        $data['vidurl'] ="https://youtu.be/6mShYQ4H4Pw";
        $this->load->view('templates/header', $data);
        $this->loading("0%");
        $this->load->view('templates/video', $data);
		$this->loading("40%");
        $this->load->view('templates/navbar', $data);
        $this->about();
        $this->load->view('templates/parralax');
		$this->loading("70%");
        //$this->contenta();
        $this->loading("100%");
        $this->load->view('templates/footer', $data);
	}
	public function about()
	{
        $data['about_title']= "KNIT-a-WEB";
        $data['about_head'] = "Realize your Dream Websites and Applications";
        $this->load->view('pages/intro', $data);
	}
	
	public function contenta()
	{
        $data['content_heading']="my content a";
        $data['content_a'] = "This is made by";
        $data['content_a_link_ref']="#about";
        $data['content_a_link_name']="knit-u-web";
        $data['content_b']="exclusively for you.";
        $data['src']="assets/image/ipad.png";
        $this->load->view('pages/content', $data);
		
	}
	public function loading($str = "0%")
	{
		$data['load']=$str;
		$this->load->view('templates/progressload', $data);
	}
} 
?>
