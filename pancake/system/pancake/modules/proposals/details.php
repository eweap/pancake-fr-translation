<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_Proposals extends Module {

	public $version = '1.0';

	public function info()
	{	
		
		$shortcuts = array();
		
		if (group_has_role('proposals', 'create')){
			
			$shortcuts[] = array(
			    'name' => 'proposals:newproposal',
			    'uri' => 'admin/proposals/create',
			    'class' => 'add yellow-btn',
			);
			
			
		}
		
		
		
		
		
		return array(
			'name' => array(
				'english' => 'Proposals',
				'french' => 'Propositions',
			),
			'description' => array(
				'english' => 'Create and share proposals containing estimates and cover letters.',
				'french' => 'Créer et partager des propositions contenant des devis et des lettres d\'accompagnement.',
			),
			'frontend' => TRUE,
			'backend'  => TRUE,
			'menu'	  => 'proposals',
			
			'roles' => array(
				'create', 'view', 'edit', 'delete', 'send',
			),
			
			'shortcuts'	=>	$shortcuts,

			
		);
	}
}
/* End of file details.php */
