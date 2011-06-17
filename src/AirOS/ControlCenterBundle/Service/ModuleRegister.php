<?php

namespace AirOS\ControlCenterBundle\Service;

use Symfony\Component\HttpFoundation\Session;

class ModuleRegister
{
	protected $session = null;

	public function __construct(Session  $session)
	{
		$this->session = $session;

		if ($session->has('adminModules') || $session->has('userModules'))
		{
			$session->set('userModules', null);
			$session->set('adminModules', null);
		}
	}

	public function setModule($moduleName, $type = 'user', $info = array())
	{
		//todo: need to check vars to make sure they are of correct type
		$this->session->set($type + 'Modules', array(
			'name' => "$moduleName",
			'info' => $info,
			)
		);
	}

	public function clearModules($type = 'all')
	{
		if ($type != 'all')
			{
				$this->session->set($type + 'Modules', null);
			}
		elseif ($type == 'all')
			{
				$this->session->set('userModules', null);
				$this->session->set('adminModules', null);
			}
	}

}

?>