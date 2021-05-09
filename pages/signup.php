<html>
    <head>
        <title>New User?</title>
        <link rel="stylesheet" href="../stylesheets/signup.css">
    	<link rel="icon" href="../images/newuser.png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>

    <body>
        <div class="containerDiv">
            <div class="formDiv">
                <p style="text-align: center;font-size: 30px;margin-bottom: 5px;"><a style="display:block;text-align: left;" href="../index.php"><i style="font-size:25px;color:white;" class="fa fa-arrow-left"></i></a>::Sign-up::</p>
                <form action="./registered.php" method="POST" autocomplete="off">
                    <label>First Name : </label>
                    <input type="text" placeholder="Enter First Name" required name="fname">

                    <label>Middle Name : </label>
                    <input type="text" placeholder="Enter Middle Name" name="mname">
                    
                    <label>Last Name : </label>
                    <input type="text" placeholder="Enter Last Name" required name="lname">
                    
                    <label>Email : </label>
                    <input type="email" placeholder="Enter email" required name="email">
                    
                    <label>Date of Birth : </label>
                    <input type="date" required name="dob">
                    
                    <label>Password : </label>
                    <input type="password" placeholder="Enter password" required name="password">
                    <input type="submit" value="Sign-up">
                </form>
            </div>
        </div>
    </body>

</html>