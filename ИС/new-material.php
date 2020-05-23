<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Новый материал</title>
</head>
<body class="body">
    <form class="add-form" action="phpfiles/add_material.php" method="POST">
        <h1>Добавление нового материала</h1>
        <div class="form-group">
            <label for="name">Наименование</label>
            <input required type="text" name="name" class="form-control" id="name">
        </div>
        <div class="row" style="margin-bottom: 20px;">
            <div class="col">
                <label>Количество на складе</label>
                <input required type="number" name="quantity_yes" class="form-control" placeholder="Введите количество материала">
            </div>
            <div class="col">
                <label>Недостающее количество на складе</label>
                <input required type="number" name="quantity_need" class="form-control" placeholder="Введите недостающее количество">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
        <a href="store.php"><button type="button" class="btn btn-info">Назад</button></a>

    </form>
</body>
</html>