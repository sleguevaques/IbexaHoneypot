<?php

namespace Inforca\IbexaHoneypotBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * @Target("PROPERTY")
 */
class IsEmpty extends Constraint
{
    public $message = 'Leave this field empty.';

    /**
     * {@inheritdoc}
     */
    public function getTargets()
    {
        return Constraint::PROPERTY_CONSTRAINT;
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return 'honeypot.empty';
    }
}
