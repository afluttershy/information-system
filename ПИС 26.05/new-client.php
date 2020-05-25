<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Новый клиент</title>
</head>
<body class="body">
    <form class="add-form" action="phpfiles/add_client.php" method="POST">
        <h1>Добавление нового клиента</h1>
        <div class="form-group">
            <label for="fio">ФИО</label>
            <input required type="text" name="fio" class="form-control" id="fio">
        </div>
        <div class="form-group">
            <label for="inputDate">Дата рождения</label>
            <input required type="date" name="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="number">Телефон</label>
            <input required type="number" name="tel" class="form-control" id="number">
        </div>
        <div class="form-group">
            <label for="email">Электронная почта</label>
            <input required type="email" name="email" class="form-control" id="email">
        </div>
        
        <button type="submit" class="btn btn-primary">Добавить</button>
        <a href="clients.php"><button type="button" class="btn btn-info">Назад</button></a>

    </form>
</body>
</html>