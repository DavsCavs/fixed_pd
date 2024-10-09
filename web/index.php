<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="blog.php">Blogs</a>
    <h1>Piesakies webināram!</h1>

    <form action="/confirmation.php" method="post">
        <label for="vards">Vārds:</label>
        <input type="text" name="vards" id="vards">
        <br>
        
        <label for="epasts">Epasts:</label>
        <input type="email" name="epasts" id="epasts">
        <br>

        <select name="level">
            <option value="">--Please choose an level--</option>
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select>
        <br>
        <legend>Vai vēlies saņemt informāciju par....</legend>
        <input type="radio" id="info_yes" name="info_choice" value="yes" />
        <label for="info_yes">Yes</label>

        <input type="radio" id="info_no" name="info_choice" value="no" />
        <label for="info_no">No</label>
        <br>
        <input type="submit" value="Sūtīt">
    </form>

    <?php
        $names=[
            ["name" => "Janis", "email" => "email@email.com", "level" => "beginner"],
            ["name" => "Aivars", "email" => "email@email.com", "level" => "beginner"],
            ["name" => "Kristaps", "email" => "email@email.com", "level" => "beginner"],
        ];

        foreach($names as $name){
            echo "Vārds:" . $name["name"] . " , Email:" . $name["email"] . " Level: " . $name["level"] . "<br>";
        }
    ?>

    <script src="js/app.js"></script>
</body>
</html>