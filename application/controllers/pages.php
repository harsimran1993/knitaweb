<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller{
	
	public function __construct(){
		
		parent::__construct();
		//$this->load->model('News_model');
		$this->load->helper('url_helper');
	}
	//landing page
	public function index()
	{
        //$this->output->cache(100); 
        $data['title'] = "Harsimran Singh"; // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->loading("0%");
        $this->load->view('templates/navbar');
        $this->about();
		$this->loading("20%");
		$this->load->view('pages/gallery');
		$this->loading("40%");
		//$this->load->view('templates/video', $data);
		$this->loading("60%");
        $this->load->view('templates/parralax');
        $this->loading("100%");
        $this->load->view('templates/footer');
	}
	
	//about page
	public function view($page ='index')
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->loading("0%");
        $this->load->view('templates/navbar');
        $this->load->view('pages/'.$page);
        $this->loading("100%");
        $this->load->view('templates/footer');
	}
	
	//data loading about
	public function about()
	{
        $data['about_title']= "Hi, I'm Harsimran Singh.I Build";
        $data['about_head1'] = "Landing-Pages.";
        $data['about_head2'] = "Applications.";
        $data['about_head3'] = "Dynamic Websites.";
        $this->load->view('pages/intro', $data);
	}
	//loadbar progresser
	public function loading($str = "0%")
	{
		$data['load']=$str;
		$this->load->view('templates/progressload', $data);
	}
	//cache renew
	public function clearcache()
	{
		$CI =& get_instance();
		$path = $CI->config->item('cache_path');
	
		$cache_path = ($path == '') ? APPPATH.'cache/' : $path;
	
		$handle = opendir($cache_path);
		while (($file = readdir($handle))!== FALSE)
		{
			//Leave the directory protection alone
			if ($file != '.htaccess' && $file != 'index.html')
			{
				@unlink($cache_path.'/'.$file);
			}
		}
		closedir($handle);
	}
	//cache renew on path
	public function clearpathcache($uri)
	{
		$CI =& get_instance();
		$path = $CI->config->item('cache_path');
	
		$cache_path = ($path == '') ? APPPATH.'cache/' : $path;
	
		$uri =  $CI->config->item('base_url').
		$CI->config->item('index_page').
		$uri;
		$cache_path .= md5($uri);
	
		return @unlink($cache_path);
	}
} 
?>
