<?php

class Employee
{
    public $name;
    public $salary;
    public $position;
    public $department;
    public $email;
    public $office;

    public function __construct($name, $salary, $position, $department, $email, $office)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->office = $office;
    }

    public function __toString()
    {
        return "Name: " . $this->name . "<br>" .
            "Salary: " . $this->salary . "<br>" .
            "Position: " . $this->position . "<br>" .
            "Department: " . $this->department . "<br>" .
            "Email: " . $this->email . "<br>" .
            "Office: " . $this->office . "<br>";
    }

    public function __destruct()
    {
        echo "Destructor called";
    }
}


$Kamalesh = new Employee(
    "kamalesh Kar",
    "100000",
    "Brand Manager",
    "IT",
    "kamaleshkar@ymtsindia.org",
    "YoundMinds"
);
$Jailadin = new Employee(
    "Jailadin Shaik",
    "75000",
    "Programmer and Head",
    "IT",
    "jailadin@ymtsindia.org",
    "YoundMinds"
);
$Ram = new Employee(
    "Ram Enjuman",
    "30000",
    "Full Stack Developer",
    "IT",
    "ramenjuman@ymtsindia.org",
    "YoundMinds"
);