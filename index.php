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
            <a href="trending.php" class="see-all">SEE ALL</a>
            <h3>Самые трендовые игры</h3>

            <div class="games">
                <?php
                //DB
                require_once "lib/db.php";

                //SQL
                $sql = 'SELECT * FROM trending ORDER BY id DESC LIMIT 4';
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

        <div class="container big-text">   
        </div>
        <div class="container banner">
            
            
        </div>
    </div>

    <div class="features">
        <div class="container">
            
            <div class="info">
                <div class="block">
                    <img src="/img/feature1.png" alt="">
                    <p>Mobile Game Development</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature2.png" alt="">
                    <p>PC Game Development</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature3.png" alt="">
                    <p>PS4 Game Development</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature4.png" alt="">
                    <p>AR/VR Solutions</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature5.png" alt="">
                    <p>AR/ VR design</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature6.png" alt="">
                    <p>3D Modelings</p>
                    <img src="/img/arrow.png" alt="">
                </div>
            </div>
        </div>
    </div>

    
    <?php require_once "blocks/footer.php";?>
    

    <script>
        function checkEmail() {
            let email = document.querySelector('#emailField').value;
            if (!email.includes('@')) alert('Нет символа @');
            else if (!email.includes('.')) alert('Нет символа .');
            else alert('Все отлично!');
        }
    </script>
</body>

</html>