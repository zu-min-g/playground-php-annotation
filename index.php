<?php

use Annotations\MyAnnotation;
use Classes\Foo;
use Doctrine\Common\Annotations\AnnotationReader;

require_once('./bootstrap.php');

$reader = new AnnotationReader();

$reflectionClass = new ReflectionClass(Foo::class);
$property = $reflectionClass->getProperty('bar');

$myAnnotation = $reader->getPropertyAnnotation($property, MyAnnotation::class);

var_dump($myAnnotation);
