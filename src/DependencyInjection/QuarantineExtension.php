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
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class QuarantineExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        // TODO: Implement load() method.
    }

    public function getAlias(): string
    {
        return AntiSpamQuarantineBundle::ALIAS;
    }
}
