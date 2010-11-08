<?php

namespace Bundle\ExerciseCom\CountryBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class countryExtension extends Extension
{

    public function configLoad($config, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, __DIR__.'/../Resources/config');
        $loader->load('config.xml');
        $loader->load('model.xml');
    }

    /**
     * Returns the base path for the XSD files.
     *
     * @return string The XSD base path
     */
    public function getXsdValidationBasePath()
    {
        return null;
    }

    public function getNamespace()
    {
        return 'http://www.symfony-project.org/schema/dic/symfony';
    }

    public function getAlias()
    {
        return 'country';
    }

    /**
     * Get a DocumentRepository
     *
     * @param DocumentManager $documentManager
     * @param string $objectClass the class of the document
     * @return DocumentRepository
     */
    public static function getRepository($documentManager, $objectClass)
    {
        return $documentManager->getRepository($objectClass);
    }
}
