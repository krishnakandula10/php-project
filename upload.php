<!DOCTYPE html>
<html>
    <head>
        <title>upload</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            body{
                background:url("upload.jpg");
                repeat:no-repeat;
                background-size:cover;
            }
        </style>

    </head>
    <body>
        <?php
            $add=$price=$city=$contact=$owner=$detail=" ";
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $add=process($_POST["address"]);
                $price=process($_POST["price"]);
                $city=process($_POST["city"]);
                $owner=process($_POST["owner"]);
                $contact=process($_POST["contact"]);
            }
            function process($data){
                $data=htmlspecialchars($data);
                $data=trim($data);
                $data=stripslashes($data);
                return $data;
            }
        ?>
        <header>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="login.php">LogIn</a></li>
                    <li><a href="signup.php">SignUp</a></li>
                </ul>
            </nav>
        </header>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="uploadForm" method="post">
            <label for="address" class="area">Address : </label><br>
            <textarea name="address" id="address" cols="30" rows="10"></textarea>
            <br>
            <label for="price">Price : </label>
            <input type="number" name="price" placeholder="price" id="price" >
            <br>
            <label for="city">City : </label>
            <input type="text" name="city" placeholder="city" id="city" >
            <br>
            <label for="owner">Owner : </label>
            <input type="text" name="owner" placeholder="owner" id="owner" >
            <br>
            <label for="contact">Contact : </label>
            <input type="tel" name="contact" placeholder="contact" id="contact" >
            <br>
            <label for="details" class="area">Details : </label><br>
            <textarea name="details" id="details" cols="30" rows="10"></textarea>
            <input type="submit" value="Submit" class="submit">
            <input type="reset" value="Reset" class="reset">
        </form>
    </body>
</html>