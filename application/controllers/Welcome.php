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
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }
	public function __construct(){
		
		parent::__construct();

		$this->load->helper('security');
	}

	
	public function index()
	{
		
		$data = curl_init();
		curl_setopt($data, CURLOPT_URL, "https://covid19.th-stat.com/api/open/today");
		curl_setopt($data, CURLOPT_POST, true);
		curl_setopt($data, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($data, CURLOPT_RETURNTRANSFER, true);
		$response = $this->security->xss_clean(curl_exec($data));
		$status_code = curl_getinfo($data); //getting http Status Code
		$status = $status_code["http_code"];

		if ($status == 200) {

			$result['res']= $this->security->xss_clean(json_decode($response, true));
			$this->load->view('welcome_message',$result);
			
		}else{
			echo "page not found";
		}

	}
}
