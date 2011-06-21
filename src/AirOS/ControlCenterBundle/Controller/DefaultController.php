<?php

namespace AirOS\ControlCenterBundle\Controller;

use AirOS\ControlCenterBundle\Event\ControlCenterEvents;
use AirOS\ControlCenterBundle\Event\InitAdminDesktopEvent;
use AirOS\TopBarModule\AirOSTopBarModule;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session;

class DefaultController extends Controller
{
	protected $session;
	protected $event;
	protected $dispatcher;

    public function indexAction()
    {
    	$TopBarModule = new AirOSTopBarModule();
    	$this->session = $this->getRequest()->getSession();
    	$this->event = new InitAdminDesktopEvent($this->session);
    	$this->dispatcher = $TopBarModule->getDispatcher();
    	$this->dispatcher->dispatch(ControlCenterEvents::InitAdminDesktop, $this->event);
        return new Response('<html><body>Hello World!'. $this->session->get('test1') .'</body></html>');
    }
}
?>