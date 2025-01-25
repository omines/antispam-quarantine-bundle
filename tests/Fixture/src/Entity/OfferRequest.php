<?php

/*
 * Symfony Anti-Spam Quarantine Bundle
 * (c) Omines Internetbureau B.V. - https://omines.nl/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Fixture\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Symfony\Component\Validator\Constraints as Assert;

#[Entity]
class OfferRequest
{
    #[Column, Id, GeneratedValue(strategy: 'AUTO')]
    public int $id;

    #[Column, Assert\NotBlank, Assert\Length(min: 3, max: 50)]
    public string $subject;

    #[Column(type: Types::TEXT)]
    public string $description;
}
