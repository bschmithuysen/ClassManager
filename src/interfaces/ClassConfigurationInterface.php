<?php

namespace bschmithuysen\ClassManager\interfaces;


interface ClassConfigurationInterface
{
    public function getClassName($classKey);
    public function getClassParameters($classKey);
    public function hasClassConfiguration($classKey);
    public function getUseSingleInstance($classKey);
}