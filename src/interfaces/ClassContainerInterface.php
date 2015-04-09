<?php

namespace ClassManager\interfaces;


interface ClassContainerInterface
{
    public function addClass($classKey, $classObject);
    public function removeClass($classKey);
    public function getClass($classKey);
    public function hasClass($classKey);
}