<?php
// ! Classes are contstructers that are used to create objects.
// ! Classes are used to create objects.


class Employee
{
    public $name;
    public $salary;
    public $position;
    public $department;
    public $email;
    public $office;

    public function __construct($name, $position, $department, $email, $office)
    {
        $this->name = $name;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->office = $office;
    }

    public function __toString()
    {
        return "Name: " . $this->name . "<br>" .
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
    "Brand Manager",
    "IT",
    "kamaleshkar@ymtsindia.org",
    "YoundMinds"
);
$Jailadin = new Employee(
    "Jailadin Shaik",
    "Programmer and Head",
    "IT",
    "jailadin@ymtsindia.org",
    "YoundMinds"
);
$Ram = new Employee(
    "Ram Enjuman",
    "Full Stack Developer",
    "IT",
    "ramenjuman@ymtsindia.org",
    "YoundMinds"
);
