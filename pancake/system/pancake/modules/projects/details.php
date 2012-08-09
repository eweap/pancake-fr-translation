<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_Projects extends Module
{
	public $version = '1.0';

	public function info()
	{	
		return array(
			'name' => array(
				'english' => 'Projects',
				'french' => 'Projets',
			),
			'description' => array(
				'english' => 'Track milestones, tasks and time for various projects.',
				'french' => 'Suiver les étapes, tâches et temps de tous vos projets.',
			),
			'frontend' => TRUE,
			'backend'  => TRUE,
			'menu'	  => 'projects',
			
			'roles' => array(
				'create', 'view', 'edit', 'delete', 
				'add_milestone', 'edit_milestone', 'delete_milestone', 'add_task', 'edit_task', 'delete_task', 'track_time',
			),
			
		    'shortcuts' => array(
				array(
				    'name' => 'projects:add',
				    'uri' => 'admin/projects/create',
				    'class' => 'add yellow-btn fire-ajax',
					'id' => 'create_project',
				),
			),
		);
	}
}
/* End of file details.php */