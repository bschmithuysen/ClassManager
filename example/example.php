<?php

require_once('../src/autoload.php');
require_once('myClass.php');
require_once('dependencyClass.php');

use ClassManager\ArrayClassConfiguration;
use ClassManager\ClassContainer;
use ClassManager\ClassManager;

$classConfiguration = array(
    'myClass' => array(
        'className'         => '\myClass',
        'classParameters'   => array('@dependencyClass', array('arrayParameter1', 'arrayParameter2')),
        'useSingleInstance' => false
    ),
    'dependencyClass' => array(
        'className'       => '\dependencyClass',
        'classParameters' => array('param2', 'param2')
    )
);
$acc = new ArrayClassConfiguration();
$acc->setConfigurationArray($classConfiguration);

$cc = new ClassContainer();

$cm = new ClassManager($acc, $cc);

/** @var myClass $myClass */
$myClass = $cm->getClass('myClass');
$myClass->doSomething();
$myClass->setParameters(array('newArrayParameter1', 'newArrayParameter2'));
$parameters = $myClass->getParameters();
var_dump($parameters);

/** @var myClass $myClass2 */
$myClass2 = $cm->getClass('myClass');
$myClass2->doSomething();
$parameters = $myClass2->getParameters();
var_dump($parameters);

echo 'test';