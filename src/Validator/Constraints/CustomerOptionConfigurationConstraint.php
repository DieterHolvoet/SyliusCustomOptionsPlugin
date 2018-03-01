<?php

/**
 * This file is part of the Brille24 customer options plugin.
 *
 * (c) Brille24 GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Brille24\CustomerOptionsPlugin\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class CustomerOptionConfigurationConstraint extends Constraint
{
    public $message = '';

    public function getTargets(): string
    {
        return self::PROPERTY_CONSTRAINT;
    }

    public function validatedBy(): string
    {
        return CustomerOptionConfigurationConstraintValidator::class;
    }
}
