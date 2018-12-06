<head>
    <link rel="stylesheet" href="../css/signUp.css"/>
    <title>Create An Account</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
    <h1>New to TechAPIary? Create an account!</h1>
    <form action="signUpDB.php" method="post">
        <input required type="text" name="username" placeholder="Username"><br/>
        <input required type="password" name="password" placeholder="Password"><br/>
        <a href="login.php">Already Have an Account?</a><br/>
        <button type="submit">Sign Up</button>
    </form>
    <img id="bee" src="../images/bee.png" alt="logo" title="Logo"/>
    <p id="copyright"><small>&copy Copyright TechAPIary 2018</small></p>
</body>
