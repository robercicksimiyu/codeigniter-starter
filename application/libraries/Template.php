<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This CI library allows you to load a view 
 * together with its header and footer in one
 * call.
 * 
 * @author Nelson Ameyo <nelson@blackpay.co.ke>
 * @version 1.0
 * @license GNU General Public License v2.0
 * @link https://github.com/DeveintLabs/CI-Template-Loader
 * 
 * */

class Template
{
  protected 	$ci;

  	# Header and footer location
 	public $header_back = 'backend/layout/header';
 	public $footer_back = 'backend/layout/footer';

 	public $header_front = 'frontend/layout/header';
 	public $footer_front = 'frontend/layout/footer';

	public $header_auth='auth/layout/header';
	public $footer_auth='auth/layout/footer';

	public $menu='inc/menu';


	public function __construct()
	{
        $this->ci =& get_instance();
	}


	public function backend($views='', $data='')
	{
		// load header
		if($this->header_back)
		{
			$this->ci->load->view($this->header_back, $data);
			$data = '';
		}

		if($this->menu){
				$this->ci->load->view($this->menu, $data);
		}

		// Load content, can be more than one view
		if(is_array($views))
		{
			foreach ($views as $view) 
			{
				$this->ci->load->view($view, $data);
				$data = '';
			}
		} else {
			$this->ci->load->view($views, $data);
		}

		// load footer
		if($this->footer_back)
		{
			$this->ci->load->view($this->footer_back, $data);
			$data = '';
		}
	}

	public function frontend($views='', $data='')
	{
		// load header
		if($this->header_front)
		{
			$this->ci->load->view($this->header_front, $data);
			$data = '';
		}

		if($this->menu){
			$this->ci->load->view($this->menu, $data);
		}
		// Load content, can be more than one view
		if(is_array($views))
		{
			foreach ($views as $view) 
			{
				$this->ci->load->view($view, $data);
				$data = '';
			}
		} else {
			$this->ci->load->view($views, $data);
		}

		// load footer
		if($this->footer_front)
		{
			$this->ci->load->view($this->footer_front, $data);
			$data = '';
		}
	}

	public function auth($views='', $data='')
	{
		// load header
		if($this->header_front)
		{
			$this->ci->load->view($this->header_auth, $data);
			$data = '';
		}

		if($this->menu){
			$this->ci->load->view($this->menu, $data);
		}
		// Load content, can be more than one view
		if(is_array($views))
		{
			foreach ($views as $view)
			{
				$this->ci->load->view($view, $data);
				$data = '';
			}
		} else {
			$this->ci->load->view($views, $data);
		}

		// load footer
		if($this->footer_front)
		{
			$this->ci->load->view($this->footer_auth, $data);
			$data = '';
		}
	}

	

}

/* End of file MY_Template.php */
/* Location: ./application/libraries/MY_Template.php */
