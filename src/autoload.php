<?php

spl_autoload_register(
    function($class)
    {
        static $classes = null;
        if ($classes === null) {

            $classes = array(
                'ClassManager\interfaces\ClassConfigurationInterface' => '/interfaces/ClassConfigurationInterface.php',
                'ClassManager\interfaces\ClassContainerInterface' => '/interfaces/ClassContainerInterface.php',
                'ClassManager\interfaces\ClassManagerInterface' => '/interfaces/ClassManagerInterface.php',
                'ClassManager\ArrayClassConfiguration' => '/ArrayClassConfiguration.php',
                'ClassManager\ClassContainer' => '/ClassContainer.php',
                'ClassManager\ClassManager' => '/ClassManager.php'
            );
        }
        if (isset($classes[$class])) {
            require __DIR__ . $classes[$class];
        }
    }
);