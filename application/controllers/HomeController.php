<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

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

	public function __construct() {
		parent::__construct();

		$this->checkSession();
	}

	function checkSession() {

		// if($this->uri->segment(1)!='login'){
		// 		if ($this->session->userdata('user_id')=='') {
		// 			header('Location: '.base_url("login"));
		// 		}
		// } else {
		// 	if($this->session->userdata('user_id')!=''){
		// 		header('Location: '.base_url("home"));
		// 	}
		// }
	}

	public function index()
	{
		$this->load->view('pages/index');

	}

	public function registration() {

		$this->load->view('pages/registration');
	}

	public function register()
    {
        $table = 'users';
        $data = array(
            'first_name' => $this->input->post('firstName'),
            'last_name' => $this->input->post('lastName'),
            'email' => $this->input->post('email'),
            'password' => sha1($this->input->post('password')),
            'role_id' => $this->input->post('role')
            
        );
        $response = $this->Global_model->insert_data($table, $data);
        
        if( $response ) {
        	$this->load->view('pages/index');
        }
    }

	public function login()
	{
		$this->load->view('pages/index');

	}

	public function home()
	{
		$data['view'] =  "home";
		$data['head'] = array(
			"title"         =>  "Home | Chemical Waste Management System",
			);
		$this->load->view('layouts/template', $data);
	}

	public function sign_in() {
		$email = (isset($_POST['email'])) ? $_POST['email'] : '';
        $password = (isset($_POST['password'])) ? $_POST['password'] : '';
        $login = $this->Global_model->get_data_with_query('users', '*', 'email ="' .$email. '" AND password="'.sha1($password).'"');

        // print("<pre>".print_r($login,true)."</pre>");

        if (count($login) > 0) {
            $user_info = $this->Global_model->get_data_with_query('users', '*', 'user_id ="' . $login[0]->user_id . '"');
            $this->session->set_userdata((array) ($login[0]));
            
            redirect(base_url().'home');
        } else {
            $this->load->view('pages/login_error');
        }
	}

	
	public function logout() {
		$this->session->sess_destroy();
		header('Location: '.base_url());
	}

	

}
