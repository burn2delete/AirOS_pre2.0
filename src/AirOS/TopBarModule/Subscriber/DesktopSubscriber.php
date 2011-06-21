<?php
namespace AirOS\TopBarModule\Subscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use AirOS\ControlCenterBundle\Event\InitAdminDesktopEvent;
use AirOS\ControlCenterBundle\Event\InitUserDesktopEvent;
use Symfony\Component\HttpFoundation\Session;

class DesktopSubscriber implements EventSubscriberInterface
{
    static public function getSubscribedEvents()
    {
        return array(
            'admin_desktop.init' => 'onAdminDesktopInit',
            'user_desktop.init'   => 'onUserDesktopInit',
        );
    }

    public function onAdminDesktopInit(InitAdminDesktopEvent  $event)
    {
    	$session = new Session();
    	$session->set('test1', 'im a test value!');
    }

    public function onUserDesktopInit(InitUserDesktopEvent $event)
    {
        echo 'initUserDesktopEvent functions';
    }
}
?>