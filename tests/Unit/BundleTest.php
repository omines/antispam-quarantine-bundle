<?php

/*
 * Symfony Anti-Spam Quarantine Bundle
 * (c) Omines Internetbureau B.V. - https://omines.nl/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Unit;

use Omines\AntiSpamQuarantineBundle\AntiSpamQuarantineBundle;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(AntiSpamQuarantineBundle::class)]
class BundleTest extends TestCase
{
    public function testBundleIsLoadedCorrectlyWithExtension(): void
    {
        $bundle = new AntiSpamQuarantineBundle();
        $extension = $bundle->getContainerExtension();

        $this->assertSame('AntiSpamQuarantineBundle', $bundle->getName());
        $this->assertSame('quarantine', $extension?->getAlias());
    }
}
