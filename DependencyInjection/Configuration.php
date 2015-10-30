<?php

namespace Progrupa\EdifactBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('progrupa_edifact')
            ->children()
                ->scalarNode('mapping')->end()
            ->end();

        return $treeBuilder;
    }
}
