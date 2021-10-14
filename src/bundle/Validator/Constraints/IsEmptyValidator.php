<?php

namespace Inforca\IbexaHoneypotBundle\Validator\Constraints;

use EzSystems\EzPlatformFormBuilder\Form\Validator\Constraints\Required;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class IsEmptyValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof IsEmpty) {
            throw new UnexpectedTypeException($constraint, IsEmpty::class);
        }

        if ( !empty($value)) {
            $this->context->buildViolation($constraint->message)
                ->setCode(Required::IS_REQUIRED_ERROR)
                ->addViolation();
        }
    }
}
