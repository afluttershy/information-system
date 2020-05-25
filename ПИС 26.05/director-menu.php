<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Меню управляющего</title>
</head>
<body class="body">
    <main class="menu-manager">
        <h1>Меню управляющего</h1>
        <div>
            <a href="requests.php?P=dir"><button type="button" class="btn btn-danger">Заявки</button></a> 
            <a href="orders.php?P=dir"><button type="button" class="btn btn-warning">Заказы</button></a>
            <a href="clients.php?P=dir"><button type="button" class="btn btn-info">Клиенты</button></a>
            <a href="workers.php?P=dir"><button type="button" class="btn btn-primary">Сотрудники</button></a>
            <a href="store.php?P=dir"><button type="button" class="btn btn-success">Склад</button></a>

            <a href="dir-report.php"><button type="button" class="btn btn-secondary">Отчет</button></a>

        </div>
        <a href="index.php"><button type="button" class="previous btn btn btn-outline-dark">Выйти</button></a>

    </main>
</body>
</html>