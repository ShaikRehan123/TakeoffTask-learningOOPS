<?php

// ! Overriding is when a child class method overrides a parent class method.

class ParentClass
{
    public function sayHello()
    {
        echo "Hello from ParentClass";
    }
}

class ChildClass extends ParentClass
{
    public function sayHello()
    {
        echo "Hello from ChildClass";
    }
}


$parent = new ParentClass();
$parent->sayHello(); // * will print "Hello from ParentClass"

$child = new ChildClass();
$child->sayHello(); // * will print "Hello from ChildClass" because ChildClass overrides ParentClass's method