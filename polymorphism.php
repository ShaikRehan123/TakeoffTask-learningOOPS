<?php

// ! This is an object orientted concept where same function can be used for diffrent purposes.
// ! See below snippet for example.



interface EmployeeDetails
{
  // * define method signature
  public function role();
}

class Jailadin implements EmployeeDetails
{
  public function role()
  {
    return "PHP Developer  and Head";
  }
}

class Kamlesh implements EmployeeDetails
{
  public function role()
  {
    return "Brand Manager";
  }
}

class Ram implements EmployeeDetails
{
  public function role()
  {
    return "Full Stack Developer";
  }
}


function getEmployeeDetails(EmployeeDetails $employee)
{
  return "My name is " . get_class($employee) . ", and My Role is " . $employee->role();
}

echo getEmployeeDetails(new Jailadin);
echo "<br>";
echo getEmployeeDetails(new Kamlesh);
echo "<br>";
echo getEmployeeDetails(new Ram);
echo "<br>";