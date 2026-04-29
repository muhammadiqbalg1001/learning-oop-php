<?php

    class Student
    {
        var $name;
        var $country = 'None';
    }

    $Student1 = new Student();
    $Student2 = new Student();

    $Student1->name = 'Iqbal';
    $Student2->name = 'Bale';

    echo $Student1->name . "<br/>";
    echo $Student2->name . "<br/>";

    $class_vars = get_class_vars('Student');
    echo "Properti milik Student : ";
    echo "<pre>";
    print_r($class_vars);
    echo "</pre>";

    if(property_exists('Student', 'name')) {
        echo "Properti name tersedia. <br/>";
    } else {
        echo "Properti name tidak tersedia. <br/>"; 
    }

