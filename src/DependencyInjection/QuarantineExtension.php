<?php

/*
 * Symfony Anti-Spam Quarantine Bundle
 * (c) Omines Internetbureau B.V. - https://omines.nl/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Omines\AntiSpamQuarantineBundle\DependencyInjection;

use Omines\AntiSpamQuarantineBundle\AntiSpamQuarantineBundle;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class QuarantineExtension extends Extension implements PrependExtensionInterface
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../../config'));
        $loader->load('services.yaml');
    }

    public function prepend(ContainerBuilder $container): void
    {
        if ($container->hasExtension('doctrine')) {
            $container->prependExtensionConfig('doctrine', [
                'orm' => [
                    'mappings' => [
                        'QuarantineBundle' => [
                            'type' => 'attribute',
                            'dir' => __DIR__ . '/../Entity',
                            'prefix' => 'Omines\AntiSpamQuarantineBundle\Entity',
                            'alias' => 'Quarantine',
                        ],
                    ],
                ],
            ]);
        } else {
            throw new \LogicException('DoctrineBundle is required for quarantine bundle to work, please run composer require doctrine/doctrine-bundle');
        }
    }

    public function getAlias(): string
    {
        return AntiSpamQuarantineBundle::ALIAS;
    }
}
