<html>
    <head>
        <title>Dashboard</title>
    	<link rel="icon" href="../images/login.jpg"/>
        <link rel="stylesheet" href="../stylesheets/welcome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
       <div class="containerDiv">
       <?php
            $host="localhost";
            $port=3306;
            $socket="";
            $user="root";
            $dbpword="";
            $dbname="new_schema";
            $con = new mysqli($host, $user, $dbpword, $dbname, $port, $socket);
            if(!$con)
                echo "ERROR";
            else
            {
                $email = $_POST['email'];
                $userpassword = $_POST['password'];

                $results = $con->query("SELECT password FROM userdata where email='$email'");
                $row=$results->fetch_assoc();

                if(empty($row['password']))
                    echo "Not a Registered User,  <a href='../pages/signup.php'>Register First</a>";
                else
                if(!strcmp($userpassword,$row['password']))
                {
                    echo '<p style="text-align: center;font-size: 30px;margin-bottom: 5px;"><a style="display:block;text-align: left;" href="../index.php"><i style="font-size:15px;color:red;" class="fa fa-arrow-left">Logout</i></a>::Dashboard::</p>';
                    $results = $con->query("SELECT * FROM userdata where email='$email'");
                    $row=$results->fetch_assoc();
                    echo "$row[email]</br>";
                    echo "$row[fname] $row[mname] $row[lname]</br>";
                    echo "$row[dob]";
                }
                else
                    echo "Invalid Password <a href='../index.php'>Retry</a>";
            }
            $con->close();
        ?>

       </div>
    </body>
</html>