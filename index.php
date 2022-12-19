<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form registration</title>
</head>

<body>
    <div class="container">
        <?php
        if($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
                <h1>Form registration</h1>
                <form action="validation-form/check.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введіть імʼя">
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль">
                    <button type="submit" class="btn">Зареєструватись</button>
                </form>
            </div>
            <div class="col">
                <h1>Form authorization</h1>
                <form action="validation-form/auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін">
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль">
                    <button type="submit" class="btn">Авторизуватись</button>
                </form>
            </div>
        </div>
        <?php else: ?>
        <p>Привіт <?=$_COOKIE['user']?> . Щоб вийти натисни <a href="exit.php">тут</a>.</p>
        <?php endif; ?>
    </div>
    
</body>

</html>