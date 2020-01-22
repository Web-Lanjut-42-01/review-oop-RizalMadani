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
		$this->load->view('form');
	}

	public function hitung()
	{	

		$bb		= $this->input->post("bb");
		$tb		= $this->input->post("tb");
		$jk		= $this->input->post("jk");

		$bmi	= $bb/($tb*$tb);

		if ($jk=="p") {
			if ($bmi < 18) {
				$hasil	= "Under Weight/Kurus";
			}
			elseif ($bmi >=18 && $bmi<=25) {
				$hasil	= "Normel Weight/Normal";
			}
			elseif ($bmi >25 && $bmi<=27) {
				$hasil	= "Over Weight/Kegemukan";
			}
			elseif ($bmi >27) {
				$hasil	=	"Obesitas";
			}
		}
		elseif ($jk=="l") {
			if ($bmi < 17) {
				$hasil	= "Under Weight/Kurus";
			}
			elseif ($bmi >=17 && $bmi<=23) {
				$hasil	= "Normel Weight/Normal";
			}
			elseif ($bmi >23 && $bmi<=27) {
				$hasil	= "Over Weight/Kegemukan";
			}
			elseif ($bmi >27) {
				$hasil	=	"Obesitas";
			}
		}

		$data	= array(
			'hasil' => $hasil
		);

		$this->load->view("hasil", $data);
	}
}
