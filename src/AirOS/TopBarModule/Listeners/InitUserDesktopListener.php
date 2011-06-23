<?php

namespace AirOS\TopBarModule\Listeners;

use AirOS\ControlCenterBundle\Event\InitUserDesktopEvent;

class InitUserDesktopListener
{
	public function onInitAdminDesktop(InitUserDesktopEvent $event)
	{
		$session = $event->getSession();
		$session->set('test2', 'im a test value!');
	}

}

?>