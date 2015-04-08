<?php

/**
 * @file
 * Contains \Symfony\Component\Validator\Tests\Fixtures\NestedClassMetadata.
 */

namespace Symfony\Component\Validator\Tests\Fixtures;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\GroupSequence;
use Symfony\Component\Validator\Mapping\ClassMetadataInterface;
use Symfony\Component\Validator\Mapping\GenericMetadata;
use Symfony\Component\Validator\Mapping\TraversalStrategy;

class NestedClassMetadata extends GenericMetadata implements ClassMetadataInterface {

    public $constrains = array();

    public $cascadingStragy;

    public $metadata = array();

    public $className;

    public $properties = array();

    public function getClassName()
    {
        return $this->className;
    }

    public function getConstrainedProperties()
    {
        return $this->properties;
    }

    public function hasGroupSequence()
    {
        return FALSE;
    }

    public function getGroupSequence()
    {
        return NULL;
    }

    public function isGroupSequenceProvider()
    {
        return FALSE;
    }

    public function findConstraints($group)
    {
        return $this->constrains;
    }

    public function getCascadingStrategy()
    {
        return $this->cascadingStragy;
    }

    public function getTraversalStrategy()
    {
        return TraversalStrategy::NONE;
    }

    public function getConstraints()
    {
        return $this->constrains;
    }

    public function hasPropertyMetadata($property)
    {
        return isset($this->metadata[$property]);
    }

    public function getPropertyMetadata($property)
    {
        return $this->metadata[$property];
    }

}
