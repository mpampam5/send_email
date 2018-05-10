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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('form');
	}


	function send_email()
	{
		$email =  $this->input->post("email");
		$subject = $this->input->post("subject");
		$desc = $this->input->post("desc");

		          $this->load->library('email');
		      	  $config = array();
		      	  $config['charset'] = 'utf-8';
		      	  $config['useragent'] = 'Codeigniter';
		      	  $config['protocol']= "smtp";
		      	  $config['mailtype']= "html";
		      	  $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
		      	  $config['smtp_port']= "465";
		      	  $config['smtp_timeout']= "400";
		      	  $config['smtp_user']= "email@mail.com"; // isi dengan email kamu
		      	  $config['smtp_pass']= "password"; // isi dengan password kamu
		      	  $config['crlf']="\r\n";
		      	  $config['newline']="\r\n";
		      	  $config['wordwrap'] = TRUE;
		      	  //memanggil library email dan set konfigurasi untuk pengiriman email

		      	      $this->email->initialize($config);
		      	      //konfigurasi pengiriman
		      	      $this->email->from($config['smtp_user']);
		      	      $this->email->to($email);
		      	      $this->email->subject($subject);
		      	      $this->email->message($desc);
		      	  		if ($this->email->send()) {
		      	  				echo "email berhasil dikirim";
		      	  		}else {
		      	  			echo "gagal mengirim email</br> <a href=".base_url().">Kembali</a>";
		      	  		}

	}



}
