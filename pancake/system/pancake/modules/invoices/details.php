<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_Invoices extends Module {

	public $version = '1.0';

	public function info()
	{	
		return array(
			'name' => array(
				'english' => 'Invoices',
				'french' => 'Factures/Devis'
			),
			'description' => array(
				'english' => 'Create invoices and estimates to collect money.',
				'french' => 'Créer des factures et des devis pour collecter de l\'argent.'
			),
			'frontend' => TRUE,
			'backend'  => TRUE,
			'menu'	  => 'invoices',
			
			'roles' => array(
				'create', 'view', 'delete', 'edit', 'send',
			),
			
		    'shortcuts' => $this->method == 'estimates'
		
				// Estimate links
				? array(
					array(
					    'name' => 'estimates:createnew',
					    'uri' => 'admin/estimates/create_estimate',
					    'class' => 'add yellow-btn',
					),
			    )
			
				// Invoice links
				: array(
					array(
					    'name' => 'global:createinvoice',
					    'uri' => 'admin/invoices/create',
					    'class' => 'add yellow-btn',
					),
			    ),
		);
	}
}
/* End of file details.php */