<?php
namespace AirOS\ControlCenterBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class InitUserDesktopEvent extends Event
{
	protected $session;

	public function __construct(Session $session)
	{
		$this->session = $session;

		if (!$session->has('userModules'))
		{
			$session->set('userModules', null);
		}
	}

	public function getSession()
	{
		return $this->session;
	}

	public function setModule($moduleName, $info = array())
	{
		//todo: need to check vars to make sure they are of correct type
		$this->session->set('userModules', array(
			'name' => "$moduleName",
			'info' => $info,
			)
		);
	}

	public function clearModules()
	{
		$this->session->set('userModules', null);
	}

	//todo: verify this works!!! I hacked it together in 3 minutes
	public function removeModule($moduleName)
	{
		foreach($this->session->getAttributes() as $userModulesArray => $modulesIndex)
		{
			foreach($modulesIndex as $index => $moduleArray)
				if($index['name'] == $moduleName)
				{
					unset($index);
				}
		}
	}
}
?>