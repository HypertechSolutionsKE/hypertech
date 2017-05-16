<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['main_content'] = 'fe/home';
		$data['page_title'] ='';
		$data['cur'] = 'Home';
		$this->load->view('fe/includes/template',$data);
	}
	public function company_profile(){
		$data['main_content'] = 'fe/company_profile';
		$data['page_title'] ='Company Profile - ';
		$data['cur'] = 'About';
		$this->load->view('fe/includes/template',$data);
	}
	public function our_team(){
		$data['main_content'] = 'fe/our_team';
		$data['page_title'] ='Our Team - ';
		$data['cur'] = 'About';
		$this->load->view('fe/includes/template',$data);
	}
	
	//SERVICES
	public function custom_development(){
		$data['main_content'] = 'fe/custom_development';
		$data['page_title'] ='Custom Development - ';
		$data['cur'] = 'Services';
		$this->load->view('fe/includes/template',$data);
	}
	public function mobile_development(){
		$data['main_content'] = 'fe/mobile_development';
		$data['page_title'] ='Mobile Development - ';
		$data['cur'] = 'Services';
		$this->load->view('fe/includes/template',$data);
	}
	
	public function corporate_branding(){
		$data['main_content'] = 'fe/corporate_branding';
		$data['page_title'] ='Corporate Branding - ';
		$data['cur'] = 'Services';
		$this->load->view('fe/includes/template',$data);
	}
	public function gift_items(){
		$data['main_content'] = 'fe/gift_items';
		$data['page_title'] ='Gift Items - ';
		$data['cur'] = 'Services';
		$this->load->view('fe/includes/template',$data);
	}
	
	public function business_process_automation(){
		$data['main_content'] = 'fe/business_process_automation';
		$data['page_title'] ='Business Process Automation - ';
		$data['cur'] = 'Services';
		$this->load->view('fe/includes/template',$data);
	}
	
	//PRODUCTS
	public function hypertech_ischoolpro(){
		$data['main_content'] = 'fe/hypertech_ischoolpro';
		$data['page_title'] ='Hypertech iSchoolPro - ';
		$data['cur'] = 'Products';
		$this->load->view('fe/includes/template',$data);
	}
	public function hypertech_frontdesk(){
		$data['main_content'] = 'fe/hypertech_frontdesk';
		$data['page_title'] ='Hypertech FrontDesk - ';
		$data['cur'] = 'Products';
		$this->load->view('fe/includes/template',$data);
	}
	public function hypertech_smartpos(){
		$data['main_content'] = 'fe/hypertech_smartpos';
		$data['page_title'] ='Hypertech SmartPOS - ';
		$data['cur'] = 'Products';
		$this->load->view('fe/includes/template',$data);
	}
	
	//PORTFOLIO
	public function portfolio(){
		$data['main_content'] = 'fe/portfolio';
		$data['page_title'] ='Portfolio - ';
		$data['cur'] = 'Portfolio';
		$this->load->view('fe/includes/template',$data);
	}
	
	//CAREERS
	public function careers(){
		$data['main_content'] = 'fe/careers';
		$data['page_title'] ='Careers - ';
		$data['cur'] = 'Careers';
		$this->load->view('fe/includes/template',$data);
	}
	public function social_media_intern(){
		$data['main_content'] = 'fe/social_media_intern';
		$data['page_title'] ='Social Media Intern - ';
		$data['cur'] = 'Careers';
		$this->load->view('fe/includes/template',$data);
	}
	public function sales_and_marketing_agent(){
		$data['main_content'] = 'fe/sales_and_marketing_agent';
		$data['page_title'] ='Sales and Marketing Agent - ';
		$data['cur'] = 'Careers';
		$this->load->view('fe/includes/template',$data);
	}
	
	
	//CONTACT US
	public function contact(){
		$data['main_content'] = 'fe/contact';
		$data['page_title'] ='Contact - ';
		$data['cur'] = 'Contact';
		$this->load->view('fe/includes/template',$data);
	}
	
}
