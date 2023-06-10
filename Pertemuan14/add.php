<html>
    <head>
        <title> Add Users </title>
    </head>

    <body>


        <?php

        //check if form submitted, inseert form data into users table.
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];

            // include database connecttion file
            include_once("config.php");

            // insert user data info table
            $result = mysqli_query($mysqli, "insert into users(name, email, mobile) values('$name', '$email', '$mobile')");

            // show message when user added
            echo "user added successfully. <a href='index.php'> View Users </a>";
        }

        ?>
    </body>
</html>