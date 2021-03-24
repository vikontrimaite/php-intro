<?php

    include('Person.php');
    include('Employee.php');

    $newRandomPerson = new Person('Joe', 'Doe');
    echo $newRandomPerson->getFirstName();

    echo '<br>';

    $newEmployee = new Employee('John', 'Coo', 5);
    echo $newEmployee->getFirstName() . PHP_EOL;
    echo $newEmployee->getLastName() . PHP_EOL;
    echo $newEmployee->getBadgeId() . PHP_EOL;

    echo $newEmployee->printHello();