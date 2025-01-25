<?php

/*
 * Symfony Anti-Spam Quarantine Bundle
 * (c) Omines Internetbureau B.V. - https://omines.nl/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Omines\AntiSpamQuarantineBundle\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Omines\AntiSpamQuarantineBundle\Repository\QuarantineEntryRepository;

#[Entity(repositoryClass: QuarantineEntryRepository::class)]
class QuarantineEntry
{
    #[Column, Id, GeneratedValue]
    public int $id;

    #[Column]
    public string $hello;
}
