<html>
    <head>
        <title>Sign-in</title>
        <link rel="stylesheet" href="./stylesheets/signin.css">
    	<link rel="icon" href="./images/login.jpg"/>
    </head>
    <body>
        <div class="containerDiv">
            <div class="formDiv">
                <p style="text-align: center;font-size: 30px;margin-bottom: 5px;">::Sign-in::</p>
                <form action="./pages/welcome.php" method="POST" autocomplete="off">
                    <label>Email : </label>
                    <input type="email" placeholder="Enter email" required name="email">
                    
                    <label>Password : </label>
                    <input type="password" placeholder="Enter password" required name="password">

                    <input type="submit" value="Log-in">
                </form>
                <a href="./pages/signup.php" class="regHref">Not a Registered User?</a>
            </div>
        </div>
    </body>
</html>