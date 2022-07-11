<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning OOPS</title>
</head>

<body>
    <?php
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


  ?>

</body>

</html>