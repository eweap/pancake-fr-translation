<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_Reports extends Module {

	public $version = '1.0';

	public function info()
	{	
		return array(
			'name' => array(
				'english' => 'Reports',
				'french' => 'Rapports',
			),
			'description' => array(
				'english' => 'Create reports and keep an eye on your stacks.',
				'french' => 'Créer des rapports et garder un oeil sur vos fonds.',
			),
			'frontend' => TRUE,
			'backend'  => TRUE,
			'menu'	  => 'reports',
			
		);
	}
}
/* End of file details.php */