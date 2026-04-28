<?php

    class Student
    {
        var $firstName;
        var $lastName;

        function fullName()
        {
            return $this->firstName . ' ' . $this->lastName;
        }
    }

    $student = new Student();

    $student->firstName = 'Muhammad';
    $student->lastName = 'Iqbal';

    echo $student->fullName() . "<br/>";

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

