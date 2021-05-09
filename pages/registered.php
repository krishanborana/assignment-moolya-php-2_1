<title>Registration Success</title>
<link rel="icon" href="../images/newuser.png"/>
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
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $userpassword = $_POST['password'];

        $sql = $con->prepare("INSERT INTO userdata(email,fname,mname,lname,dob,password) VALUES (?,?,?,?,?,?)");
        $sql->bind_param("ssssss",$email,$fname,$mname,$lname,$dob,$userpassword);
        if($sql->execute()==true)
            echo "New-user registered successfully,Please login <a href='../index.php'>here</a>";  
        else
            echo "User already Registered,Please login <a href='../index.php'>here</a>";
        $con->close();
    }
?>