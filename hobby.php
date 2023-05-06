<html>
<head>
    <title>Whats your Hobby?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hobbies Information</h1>
    <?php
        require_once 'hobby.php';

        $hobby1 = new Hobby("Farming" , "I love corn");
        $hobby2 = new Hobby("PHP", "I friggen love PHP ");
        $hobby3 = new Hobby("Minecraft", "How old is Minecraft Steve");
        

        $hobbies = array($hobby1, $hobby2, $hobby3); 

        
        foreach ($hobbies as $hobby) {
        echo "<h2>{$hobby->getTitle()}</h2>";
        echo "<img src='{$hobby->getImage()}' alt='{$hobby->getTitle()}'>";
        echo "<p>{$hobby->getDescription()}</p>";
        echo "<hr>";
        }
    ?>
</body>
</html>