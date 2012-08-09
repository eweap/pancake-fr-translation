<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_Settings extends Module {

	public $version = '1.0.0';

	public function info()
	{	
		return array(
			'name' => array(
				'english' => 'Settings',
				'french' => 'Paramêtres',
			),
			'description' => array(
				'english' => 'Control various aspects of your sites branding, integration, taxes, etc.',
				'french' => 'Contrôler les différents aspects de votre image de marque, l\'intégration, les taxes, etc.',
			),
			'frontend' => TRUE,
			'backend'  => TRUE,
			'menu'	  => NULL,
		);
	}
}
/* End of file details.php */