<?php

namespace AirOS\I18nRoutingBundle;

use AirOS\I18nRoutingBundle\DependencyInjection\Compiler\OverrideRoutingCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AirOSI18nRoutingBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new OverrideRoutingCompilerPass());

        parent::build($container);
    }
}
