<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="container">
            <!--HEADER-->
            <header>
                <div id="hleft">
                    <div id="logo">
                        <img src="http://www3.nd.edu/~rharris8/newsletter/logo.png" alt="SoLife"/>
                    </div>
                    <div id="tagline">
                        <h1>Your Passport to Life.</h1>
                    </div>
                </div>
                <div id="hright">
                    <div id="account">
                        <ul>
                            <li><a href="#">Edit my profile</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>
                    <div id="links">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="profile.html">Statuses</a></li>
                            <li><a href="users.html">Users</a></li>
                            <li><a href="octopus-fitness.html">About</a></li>
                        </ul>
                    </div>
                </div>
            </header>
        
    <form action="/index.php" method="POST">
        
        Login: <input type="text" name="login"><br>
        Password: <input type="password" name="password"><br>
        
        <input type="submit" value="Submit">
    
    </form>
    </div>
</body>
</html>