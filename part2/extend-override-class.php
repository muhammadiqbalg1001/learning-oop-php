<?php

    class User 
    {
        var $firstName;
        var $lastName;
        var $userName;

        function fullName()
        {
            return $this->firstName . ' ' . $this->lastName;
        }
    }

    class Customer extends User
    {
        var $city;
        var $country;

        function location()
        {
            return $this->city . ', ' . $this->country;
        }

        function fullName()
        {
            return $this->firstName . ' ' . $this->lastName . '(Customer)';
        }
    }

    $u = new User;
    $u->firstName = 'Muhammad';
    $u->lastName = 'Iqbal';
    // $u->city = 'Jakarta';
    // $u->country = 'Indonesia';

    echo $u->fullName() . "<br/>";
    // echo $u->location() . "<br/>";
    
    $c = new Customer;
    $c->firstName = 'Customer';
    $c->lastName = 'Doe';
    $c->city = 'Jakarta';
    $c->country = 'Indonesia';

    echo $c->fullName() . "<br/>";
    echo $c->location() . "<br/>";

    if(is_subclass_of($c, 'User')) {
        echo "Instance Customer merupakan subclass Class User. <br/>";
    } else {
        echo "Instance Customer bukan subclass Class User. <br/>"; 
    }

    $parents = class_parents($c);
    echo implode(', ', $parents);