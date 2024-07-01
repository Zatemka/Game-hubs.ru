<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Игровой Hub</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php";?>
        <div class="container trending">
            <h3>Список трендовых игр</h3>

            <div class="games">
                <?php
                //DB
                require_once "lib/db.php";

                //SQL
                $sql = 'SELECT * FROM trending ORDER BY Followers DESC';
                $query = $pdo->prepare($sql);
                $query->execute();
                $games = $query->fetchall(PDO::FETCH_OBJ);
                foreach($games as $el)
                    echo '
                <div class="block">
                    <img src="/img/'.$el->image.'" alt="">
                    <span><img src="/img/fire.svg" alt=""> '.$el->followers.' Followers</span>
                </div>';
                ?>
                
            </div>
        </div>

 
    <?php require_once "blocks/footer.php";?>
    
</body>

</html>