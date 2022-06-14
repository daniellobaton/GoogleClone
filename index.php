<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Clone</title>

    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
    
    <div class="wrapper indexPage">

        <div class="mainSection">

            <div class="logoContainer">
                <a href="index.php">
                    <img src="https://www.google.com.mx/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google Logo">
                </a>
            </div>

            <div class="searchContainer">

                <form action="search.php" method="GET">
                    <input type="text" name="term" class="searchBox">
                    <input type="submit" value="Search" class="searchButton">
                </form>

            </div>

        </div>

    </div>

</body>
</html>