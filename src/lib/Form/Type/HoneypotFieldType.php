<?php

namespace Inforca\IbexaHoneypot\Form\Type;

use EzSystems\EzPlatformFormBuilder\Form\Type\Field\AbstractFieldType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class HoneypotFieldType extends AbstractFieldType
{
    public function getParent(): string
    {
        return TextType::class;
    }
}