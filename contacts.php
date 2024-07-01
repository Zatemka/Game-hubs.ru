<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Игровой Hub</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
        <?php require_once "blocks/header.php";?>

    <div class="container hero-contacts">
        <h1>Можно зайти с любой точки мира</h1>
        <img src="/img/Map.png" alt="">
    </div>

    <div class="feedback">
        <div class="container">
            <h2>Оставь отзыв</h2>

            <form>
                <div class="inline">
                    <div>
                        <label>Имя</label>
                        <input type="text">
                    </div>
                    <div>
                        <label>Фамилия</label>
                        <input type="text">
                    </div>
                </div>
                <label>Адрес Электронной почты</label>
                <input type="email" class="one-line">

                <label>Сообщение</label>
                <textarea class="one-line"></textarea>

                <button type="button">Оставить отзыв</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php";?>
</body>

</html>