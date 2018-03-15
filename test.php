<!DOCTYPE html>
<html>
    <head>
        <title>The Login Page</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            body{
                background:url("static/login.jpg");
                background-size:cover;
                background-repeat:no-repeat;
            }
        </style>
    </head>
    <body>
        <?php
            $username=$password="";
            # error msgs
            $userErr=$passErr="";
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $username=$_POST["username"];
                 $password=$_POST["password"];
            }
            
            $host="localhost";
            $user="root";
            $pass="";
            $db="tenantmangement";
            $conn =new mysqli($host,$user,$pass);
            if($conn->connect_error){
                die("connection failed". $conn->connect_error);
            }
            
        ?>
        <header>

        </header>
        <form action="test.php" id="loginForm" method="post">
            <label for="username">Username : </label>
            <input type="text" name="username" placeholder="username" id="username">
            <span class="errorMsg"> * <?php print $userErr ?></span>
            <br>
            <label for="password">Password : </label>
            <input type="password" name="password" placeholder="password" id="password" >
            <span class="errorMsg"> * <?php print $passErr ?></span>
            <br>
            <input type="submit" value="Submit" class="submit">
            <input type="reset" value="Reset" class="reset">
        </form>
    </body>
</html>