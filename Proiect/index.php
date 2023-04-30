<!DOCTYPE html>
<html>

<head>

    <title>Orange Bikes | Log In</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="scripts.js"></script>
</head>



<body>

    <header class="header">
        <a href="index.php"><img aria-placeholder="Logo" id="logo" src="img/logo.JPG"></a>
        <div id="companyName"></div>
    </header>
    <div id="loginBody">
        <div id="loginBox">

            <input class="loginInput" name="e-mail" placeholder="E-mail" onchange="validateEmail()"></input>
            <div class="popup">
                <span class="popuptext" id="myPopup">Non valid e-mail address</span>
            </div>

            <input class="loginInput" id="password" placeholder="Password"></input>

            <div class="loginButtons">
                <a href="html/main.php"><button id="loginButton" onclick="login()"><b>Log in</b></button></a>
                <a href="html/register.php"><button id="registerButton"><b>Register</b></button></a>
            </div>
        </div>
    </div>
</body>

<footer><b>Orange Bikes Inc <span>&copy</span></b></footer>

</html>