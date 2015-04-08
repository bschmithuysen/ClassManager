<?php

spl_autoload_register(
    function($class)
    {
        static $classes = null;
        if ($classes === null) {

            $classes = array(
                'bschmithuysen\ClassManager\interfaces\ClassConfigurationInterface' => '/interfaces/ClassConfigurationInterface.php',
                'bschmithuysen\ClassManager\interfaces\ClassContainerInterface' => '/interfaces/ClassContainerInterface.php',
                'bschmithuysen\ClassManager\interfaces\ClassManagerInterface' => '/interfaces/ClassManagerInterface.php',
                'bschmithuysen\ClassManager\ArrayClassConfiguration' => '/ArrayClassConfiguration.php',
                'bschmithuysen\ClassManager\ClassContainer' => '/ClassContainer.php',
                'bschmithuysen\ClassManager\ClassManager' => '/ClassManager.php'
            );
        }
        if (isset($classes[$class])) {
            require __DIR__ . $classes[$class];
        }
    }
);