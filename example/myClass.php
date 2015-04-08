<?php

class myClass
{
    private $parameters = array();

    public function __construct(dependencyClass $dependencyClass, array $parameters)
    {
        $this->parameters = $parameters;
    }

    public function doSomething()
    {
        echo 'Hello World!';
    }

    public function getParameters() {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     */
    public function setParameters(array $parameters)
    {
        $this->parameters = $parameters;
    }
}