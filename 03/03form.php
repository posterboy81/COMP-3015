<!DOCTYPE html>
<html>

<head>
  <title>Week 3 Lab - Data Processing</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1>Week 3 Lab - Form Processing</h1>

  <?php
  if(isset($_GET["errormsg"])){
    echo '<p>' . $_GET["errormsg"] . '</p>';
  }
  ?>

  <form action="./03form_processor.php" method="post">
    <fieldset>
      <h2>Name & Student #</h2>
      <input type="text" name="username" id="username" />
      <label for="username">Username</label><br />

      <input type="text" name="studentnum" id="studentnum" />
      <label for="studentnum">Student Number</label><br />

      <input type="text" name="password" id="password" />
      <label for="password">Password</label><br />
    </fieldset>
    <fieldset>
      <h2>Gender</h2>
      <input type="radio" name="gender" id="male" value="male" />
      <label for="male">Male</label><br />
      <input type="radio" name="gender" id="female" value="female" />
      <label for="female">Female</label><br />
      <input type="radio" name="gender" id="nonbinary" value="nonbinary" />
      <label for="nonbinary">Non-Binary</label><br />
    </fieldset>
    <fieldset>
      <h2>Programming Languages</h2>
      <input type="checkbox" name="languages[]" id="C++" value="C++" />
      <label for="C++">C++</label><br />
      <input type="checkbox" name="languages[]" id="C#" value="C#" />
      <label for="C#">C#</label><br />
      <input type="checkbox" name="languages[]" id="JavaScript" value="JavaScript" />
      <label for="JavaScript">JavaScript</label><br />
      <input type="checkbox" name="languages[]" id="Java" value="Java" />
      <label for="Java">Java</label><br />
      <input type="checkbox" name="languages[]" id="Perl" value="Perl" />
      <label for="Perl">Perl</label><br />
      <input type="checkbox" name="languages[]" id="PHP" value="PHP" />
      <label for="PHP">PHP</label><br />
      <input type="checkbox" name="languages[]" id="Python" value="Python" />
      <label for="Python">Python</label><br />
    </fieldset>
    <fieldset>
      <input type="submit" value="SUBMIT" />
    </fieldset>
  </form>
</body>

</html>