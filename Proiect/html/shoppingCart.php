<!DOCTYPE html>
<html>

<head>
    
    <title>Shoping Cart | Orange Bikes</title>
    <link rel="stylesheet" href="../index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="../scripts.js"></script>
</head>
      


<body>

    <header class="header">
        <a href = "../index.php"><img aria-placeholder="Logo" id="logo" src="../img/logo.JPG"></a>
    </header>

    <nav class="navbar">
        <a href="main.php"><button class="button" >Home</button></a>
       
        <a href="models.php"><button class="button" >Bikes</button></a>

        <a href="accesories.php"><button class="button">Accesories</button></a>

        <a href="apparel.php"><button class="button">Apparel</button></a>

        <a href="rentABike.php"><button class="button">Renting</button></a>

        <select class="searchSelect" name="states[]" multiple="multiple">
            <option value="Helmets">Helmets</option>
            <option value="Knee protection">Knee protection</option>
            <option value="City clothing">City clothing</option>
            <option value="Sportware">Sportware</option>
            <option value="Eye Protection">Eye Protection</option>
            <option value="Gloves">Gloves</option>
            <option value="Shoes">Shoes</option>
            <option value="Socks">Socks</option>
        </select>

        <a><button class="button">Search</button></a>

        <button class="buttonOnCurentPage">Shopping Cart</button>

        <a href="../index.php"><button class="button">Back to Log In</button></a>

        <a href="aboutPage.php" class="aboutPage">About Page</a>

        <a href="contact.php" class="contact">Contact</a>
    </nav>

    <h1>Shopping Cart</h1>

</body>

<footer><b>Orange Bikes Inc <span>&copy</span></b></footer>

</html>