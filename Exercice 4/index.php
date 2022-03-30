<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 >ADD NOTE</h1>
    <div style="display: flex; justify-content: center; align-items: center;">
    <form action="add.php" method="post">
        <label for="title">Tittle</label>
        <br>
        <input type="text" name="title">
        <br>
        <br>
        <textarea name="textarea" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="submit">
    </form>
    <h3>you can check your notes <a href="add.php">here</a></h3>
</div>
    <?php
    session_start();


    ?>
</body>
</html>