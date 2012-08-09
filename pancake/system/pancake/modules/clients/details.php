<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_Clients extends Module
{
	public $version = '1.0';

	public function info()
	{	
		return array(
			'name' => array(
				'english' => 'Clients',
				'french' => 'Clients',
			),
			'description' => array(
				'english' => 'Create clients, view invoices, see balances, set client access urls and more.',
				'french' => 'Créer des clients, consulter leurs factures, voir les soldes, configurer les URL d\'accès de l\'espace client et plus encore.',
			),
			'frontend' => TRUE,
			'backend'  => TRUE,
			'menu'	  => 'clients',
			
			'roles' => array(
				'view', 'create', 'edit', 'delete',
			),
			
		    'shortcuts' => array(
				array(
				    'name' => 'clients:add',
				    'uri' => 'admin/clients/create',
				    'class' => 'add yellow-btn',
				),
			),
		);
	}
}
/* End of file details.php */