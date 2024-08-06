<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>
    <form action="" method="post">
        <label for="">UserName:</label><input type="text" name="txtName"><br>
        <label for="password">Password:</label><input type="password" name="txtPass"><br>
        <label for="">Select Your Role</label>
        <select name="optRole" id="">
            <option value="0">Select Role</option>
            <option value="1">Admin</option>
            <option value="2">Student</option>
            <option value="3">Teacher</option>
        </select><br>
        <input name="submit" type="submit" value="register">
        </form>


        <!-------------------------- php--------------------- -->
        =======================================
        <br>

        <?php
           if(isset($_POST['submit']))
           {
            $name=$_POST['txtName'];
            $pass=$_POST['txtPass'];
            $role=$_POST['optRole'];
            echo"Name is : ".$name."<br>";
            echo"Password is :".$pass. "<br>";
            echo"Role is: ".$role. "<br>";
           }else{
            echo"Please Fill The Form";
           }
        ?>

        <br>
        ========================================
        <!-- ------------------------php--------------------- -->
</body>

    <h2>Registered Student List</h2>
    <table border="1">
        <tr>
            <td>S.No.</td>
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
            <td>
                <a href="userupdate.php">Edit</a>
                <a href="userdelete.php">Delete</a>
            </td>

        </tr>
    </table>
</html>