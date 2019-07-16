
<!DOCTYPE html>
<html>
<head>
  <title> Registration form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h1>Registration using php and sql</h1>     
  </div>
  <form method="post" action="register.php">  
    <table>
      <tr>
        <td> username: </td>
        <td> <input type="text" name="username" class="textinput"></td>
      </tr>
      <tr>
        <td> email </td>
        <td> <input type="email" name="email" class="textinput"></td>
      </tr>
      <tr>
        <td> password </td>
        <td> <input type="password" name="password" class="textinput"></td>
      </tr>
      <tr>
        <td> password </td>
        <td> <input type="password" name="password2" class="textinput"></td>
      </tr>
      <tr>
        <td></td>
        <td> <input type="submit" name="register_btn" value="Register"></td>
      </tr>
    </table>
  <form>  

</body>
</html>