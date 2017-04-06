<?php include("include/iheader.php");
echo $_SESSION['message']
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lipun tilaus- ja laskutuspalvelu</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>Lipun tilaus</h1>
    <form method="post" action="toiminta.php">
        Nimi:<br>
        <input type="text" name="givenNimi"><br> Sähköposti:
        <br>
        <input type="text" name="givenEmail" required><br> Maksutapa:
        <br>
        <input type="radio" name="maksu1" value="kerralla"> Maksa kaikki kerralla<br>
        <input type="radio" name="maksu2" value="erissa"> Maksa kahdessa erässä<br>
        <input type="submit" value="Submit">
    </form>
    
    <a href="print.php">
        <button type="button">Click me!</button>
    </a> 
    <script src="js/scripts.js"></script>
    
</body>
</html>
