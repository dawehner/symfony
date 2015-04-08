<?php

/**
 * @file
 * Contains \Symfony\Component\Validator\Tests\Fixtures\NestedProperyMetadata.
 */

namespace Symfony\Component\Validator\Tests\Fixtures;

use Symfony\Component\Validator\Mapping\PropertyMetadataInterface;

class NestedClassPropertyMetadata extends NestedClassMetadata implements PropertyMetadataInterface {

    protected $propertyName;

    public function __construct($propertyName)
    {
        $this->propertyName = $propertyName;
    }

    public function getPropertyName()
    {
        return $this->propertyName;
    }

    /**
     * {@inheritdoc}
     */
    public function getPropertyValue($containingValue)
    {
        return $containingValue;
    }

}
