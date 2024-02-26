<!DOCTYPE html>
<html lang="bg">
<head>
    <title>Login </title>
    <meta charset=utf-8>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3>Влезте от тук</h3>

        <label for="username">Потребителско име</label>
        <input type="text" placeholder="Име" id="username">

        <label for="password">Парола</label>
        <input type="password" placeholder="Парола" id="password">

        <input id="submit" type="submit" value="Влезте" name="submit">
        <input type="button" value="Върни се" onclick="history.back()">
        </form>
</body>
</html>
