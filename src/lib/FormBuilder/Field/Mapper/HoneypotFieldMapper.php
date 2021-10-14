<?php

namespace Inforca\IbexaHoneypot\FormBuilder\Field\Mapper;

use EzSystems\EzPlatformFormBuilder\FieldType\Field\Mapper\GenericFieldMapper;
use EzSystems\EzPlatformFormBuilder\FieldType\Model\Field;
use Inforca\IbexaHoneypotBundle\Validator\Constraints as Validator;

class HoneypotFieldMapper extends GenericFieldMapper
{
    protected function mapFormOptions(Field $field, array $constraints): array
    {
        $options = parent::mapFormOptions($field, $constraints);
        $options['field'] = $field;
        $options['label'] = $field->getName() == 'Honeypot' ? 'Email' : $field->getName();

        $options['constraints'] = [
            new Validator\IsEmpty(),
        ];

        return $options;
    }
}