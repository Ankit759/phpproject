<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration form</h1>
    <form action="" method="post">
        <label for="username">username</label>
<input type="text" placeholder="username">
<br>
<label for="password">Password</label>
<input type="password" placeholder="password">
<br>

<select name="" id="">Role
<option value="0"></option>
    <option value="1">Admin</option>
    <option value="2">Teacher</option>
    <option value="2">MIS Excutive</option>
    <br>

    <input type="submit" value="Submit" name="doit">
</select>
    </form>
    =======================================
    <br>
    <?php
    if(isset($_POST['doit']))
  {
  print_r($_POST);
  }
  ?>
  <br>
  

    =======================================
    <h2>Registered student list</h2>
    <table border=1>
        <tr>
            <td>S.no</td>
            <td>Name</td>
            <td>Password</td>
            <td>Role</td>
            <td>Action</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>
                <a href="userupdate.php">Edit</a>
                <a href="userdelete.php">delete</a>
        </td>
        </tr>
    </table>
</body>
</html>