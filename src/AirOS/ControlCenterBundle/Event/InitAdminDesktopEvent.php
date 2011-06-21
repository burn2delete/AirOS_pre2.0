<?php
namespace AirOS\ControlCenterBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Session;

class InitAdminDesktopEvent extends Event
{
	protected $session;

	public function __construct(Session $session)
	{
		$this->session = $session;

		if (!$session->has('adminModules'))
		{
			$session->set('adminModules', null);
		}
	}

	public function getSession()
	{
		return $this->session;
	}

	public function setModule($moduleName, $info = array())
	{
		//todo: need to check vars to make sure they are of correct type
		$this->session->set('adminModules', array(
			'name' => "$moduleName",
			'info' => $info,
			)
		);
	}

	public function clearModules()
	{
		$this->session->set('adminModules', null);
	}

	//todo: verify this works!!! I hacked it together in 3 minutes, then copied it a bunch
	public function removeModule($moduleName)
	{
		foreach($this->session->getAttributes() as $adminModulesArray => $modulesIndex)
		{
			foreach($modulesIndex as $index => $moduleArray)
			{
				if($index['name'] == $moduleName)
				{
					unset($index);
				}
			}
		}
	}
}
?>
