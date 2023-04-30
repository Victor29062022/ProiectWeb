<!DOCTYPE html>
<html>

<head>

    <title>Register Page | Orange Bikes</title>
    <link rel="stylesheet" href="../index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="../scripts.js"></script>
</head>


<body>

    <header class="header">
        <a href="../index.php"><img aria-placeholder="Logo" id="logo" src="../img/logo.JPG"></a>
    </header>

    <h1>Register new account</h1>

    
    <div id="registerBox">
        <form action='../connect.php' method='POST'>
            <label class="label" for='firstName'>First name :</label>
            <input class="registerInput" type='text' id='firstNameInput' name='firstname' required></input><br>

            <label class="label" for='lastName'>Last name :</label>
            <input class="registerInput" type='text' id='lastNameInput' name='lastname' required></input><br>

            <label class="label" for='email'>E-mail :</label>
            <input class="registerInput" id='email' name='email' onchange="validateEmail()"></input>

            <div class="popup" id="regiterPopup">
                <span class="popuptext" id="myPopup">Non valid e-mail address</span>
            </div><br>
            
            <label class="label" for='username' id="registerLabelUser">Username :</label>
            <input class="registerInput" type='text' id='username' name='username' required></input><br>

            <label class="label" for='password'>Password :</label>
            <input class="registerInput" type='text' id='password' name='password' required></input><br>

            <div class="registerButtons">

                <a href="main.php"><button id="registerButton" type="submit" name='submit'><b>Register</b></button></a>
            </div>
            
        </form>
        <a href="../index.php"><button id="loginButtonReg"><b>Back to Log in</b></button></a>


    </div>
    

</body>

<footer><b>Orange Bikes Inc <span>&copy</span></b></footer>

</html>