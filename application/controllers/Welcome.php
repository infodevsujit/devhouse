<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header/header_head');
		$this->load->view('meta/home');
		$this->load->view('header/header_start');
		
		$this->load->view('header/header_end');
		$this->load->view('header/main_navbar');
		$this->load->view('index');
		$this->load->view('footer/footer_start');
		$this->load->view('footer/footer_end');
		$this->load->view('footer/common_footer');
		$this->load->view('js/header');
	}
	public function about()
	{
		$this->load->view('header/header_head');
		$this->load->view('meta/about');
		$this->load->view('header/header_start');
		
		$this->load->view('header/header_end');
		$this->load->view('header/main_navbar');
		$this->load->view('about');
		$this->load->view('footer/footer_start');
		$this->load->view('footer/footer_end');
		$this->load->view('footer/common_footer');
		$this->load->view('js/owl_js');
	}
	public function contact()
	{
		$this->load->view('header/header_head');
		$this->load->view('meta/contact');
		$this->load->view('header/header_start');
		$this->load->view('header/iner-css');
		$this->load->view('header/header_end');
		$this->load->view('header/main_navbar');
		$this->load->view('contact');
		$this->load->view('footer/footer_start');
		$this->load->view('footer/footer_end');
		$this->load->view('footer/common_footer');
		$this->load->view('js/owl_js');
	}
	public function services()
	{
		$this->load->view('header/header_head');
		$this->load->view('meta/services');
		$this->load->view('header/header_start');
		$this->load->view('header/iner-css');
		
		$this->load->view('header/header_end');
		$this->load->view('header/main_navbar');
		$this->load->view('services');
		$this->load->view('footer/footer_start');
		$this->load->view('footer/footer_end');
		$this->load->view('footer/common_footer');
		
	}
	
	public function mobile_app_development()
	{
		$this->load->view('header/header_head');
		$this->load->view('meta/mobile_app_development');
		$this->load->view('header/header_start');
		$this->load->view('header/owl');
		$this->load->view('header/iner-css');
		
		$this->load->view('header/header_end');
		$this->load->view('header/main_navbar');
		$this->load->view('mobile_app_development');
		$this->load->view('more_services');
		$this->load->view('footer/footer_start');
		$this->load->view('footer/footer_end');
		$this->load->view('footer/common_footer');
		$this->load->view('footer/owl-script');	
		
		
	}
	public function website_development()
	{
		$this->load->view('header/header_head');
		$this->load->view('meta/website_development');
		$this->load->view('header/header_start');
		$this->load->view('header/owl');
		$this->load->view('header/iner-css');
		
		$this->load->view('header/header_end');
		$this->load->view('header/main_navbar');
		$this->load->view('website_development');
		$this->load->view('more_services');
		$this->load->view('footer/footer_start');
		$this->load->view('footer/footer_end');
		$this->load->view('footer/common_footer');
		$this->load->view('footer/owl-script');	
		
	}
	public function ui_ux_design()
	{
		$this->load->view('header/header_head');
		$this->load->view('meta/ui_ux_design');
		$this->load->view('header/header_start');
		$this->load->view('header/owl');
		$this->load->view('header/iner-css');
		
		$this->load->view('header/header_end');
		$this->load->view('header/main_navbar');
		$this->load->view('ui_ux_design');
		$this->load->view('more_services');
		$this->load->view('footer/footer_start');
		$this->load->view('footer/footer_end');
		$this->load->view('footer/common_footer');
		$this->load->view('footer/owl-script');	
		
	}
	public function digital_marketing()
	{
		$this->load->view('header/header_head');
		$this->load->view('meta/digital_marketing');
		$this->load->view('header/header_start');
		$this->load->view('header/owl');
		
		$this->load->view('header/header_end');
		$this->load->view('header/main_navbar');
		$this->load->view('digital_marketing');
		$this->load->view('more_services');
		$this->load->view('footer/footer_start');
		$this->load->view('footer/footer_end');
		$this->load->view('footer/common_footer');
		$this->load->view('footer/owl-script');		
	}
	public function ios()
	{
		$this->load->view('header/header_head');
		$this->load->view('meta/ios');
		$this->load->view('header/header_start');
		$this->load->view('header/owl');
		$this->load->view('header/iner-css');
			
		$this->load->view('header/header_end');
		$this->load->view('header/main_navbar');
		$this->load->view('ios');
		$this->load->view('more_services');
		$this->load->view('footer/footer_start');
		$this->load->view('footer/footer_end');
		$this->load->view('footer/common_footer');
		$this->load->view('footer/owl-script');
		
	}
	public function android()
	{
		$this->load->view('header/header_head');
		$this->load->view('meta/android');
		$this->load->view('header/header_start');
		$this->load->view('header/iner-css');
		$this->load->view('header/owl');
		
		$this->load->view('header/header_end');
		$this->load->view('header/main_navbar');
		$this->load->view('android');
		$this->load->view('more_services');
		$this->load->view('footer/footer_start');
		$this->load->view('footer/footer_end');
		$this->load->view('footer/common_footer');
		$this->load->view('footer/owl-script');
		
	}

}
