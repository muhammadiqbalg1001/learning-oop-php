<?php

    class Student
    {
        var $name;
        var $country = 'None';

        function sayHello()
        {
            return 'Hello, World!';
        }
    }

    $Student1 = new Student();
    $Student2 = new Student();

    $Student1->name = 'Iqbal';
    $Student2->name = 'Bale';

    echo $Student1->name . "<br/>";
    echo $Student2->name . "<br/>";
    
    echo $Student1->sayHello() . "<br/>";
    echo $Student2->sayHello() . "<br/>";

    $class_methods = get_class_methods('Student');
    echo "Properti milik Student : ";
    echo "<pre>";
    print_r($class_methods);
    echo "</pre>";

    if(method_exists('Student', 'name')) {
        echo "Method sayHello tersedia. <br/>";
    } else {
        echo "Method sayHello tidak tersedia. <br/>"; 
    }

