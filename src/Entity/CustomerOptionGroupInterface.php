<?php
declare(strict_types=1);

namespace Brille24\CustomerOptionsBundle\Entity;

use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

interface CustomerOptionGroupInterface extends CodeAwareInterface, ResourceInterface
{
    /**
     * @return null|string
     */
    public function getName(): ?string;

    /**
     * @param null|string $name
     */
    public function setName(?string $name): void;

    /**
     * @return string
     */
    public function __toString(): string;
}