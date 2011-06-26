<?php

namespace AirOS\I18nRoutingBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class AirOSI18nRoutingExtension extends Extension
{
    /**
     * Loads the I18nRouting configuration.
     *
     * @param array            $configs   An array of array of configuration settings
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('routing.xml');

        $this->addClassesToCompile(array(
            'AirOS\\I18nRoutingBundle\\Routing\\Generator\\UrlGenerator',
            'AirOS\\I18nRoutingBundle\\Routing\\Router',
        ));
    }
}