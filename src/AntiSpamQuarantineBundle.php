<?php

/*
 * Symfony Anti-Spam Quarantine Bundle
 * (c) Omines Internetbureau B.V. - https://omines.nl/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Omines\AntiSpamQuarantineBundle;

use Omines\AntiSpamQuarantineBundle\DependencyInjection\QuarantineExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class AntiSpamQuarantineBundle extends AbstractBundle
{
    public const ALIAS = 'quarantine';
    public const TRANSLATION_DOMAIN = 'antispam';

    public function getContainerExtension(): ?ExtensionInterface
    {
        return new QuarantineExtension();
    }
}
