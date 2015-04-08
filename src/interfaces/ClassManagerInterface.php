<?php

namespace bschmithuysen\ClassManager\interfaces;


interface ClassManagerInterface
{
    public function __construct(
        ClassConfigurationInterface $classConfiguration,
        ClassContainerInterface $classContainer
    );
    public function getClass($classKey);
    public function prepareClassParameters(array $classParameters);
}