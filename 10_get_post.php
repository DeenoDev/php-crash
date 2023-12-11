<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

// }
echo $_GET['username'];
echo $_GET['age'];

?>

<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Deyano&age=27">Link</a>


<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label for="name">Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label for="age">Age: </label>
  <input type="password" name="age">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>