<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Новый сотрудник</title>
</head>
<body class="body">
    <form class="add-form" method="POST" action="phpfiles/add_worker.php">
        <h1>Добавление нового сотрудника</h1>
        <div class="form-group">
            <label for="fio">ФИО</label>
            <input required type="text" class="form-control" id="fio" name="fio">
        </div>
        <div class="form-group">
            <label for="inputDate">Дата рождения</label>
            <input required type="date" class="form-control" name="date">
        </div>
        <div class="row" style="margin-bottom: 20px;">
            <div class="col">
                <label>Серия паспорта</label>
                <input required type="number" class="form-control" placeholder="Введите серию паспорта" name="series">
            </div>
            <div class="col">
                <label>Номер паспорта</label>
                <input required type="number" class="form-control" placeholder="Введите номер паспорта" name="number">
            </div>
        </div>
        <div class="form-group">
            <label for="number">Телефон</label>
            <input required type="number" class="form-control" id="number" name="tel">
        </div>
        <div class="form-group">
            <label for="email">Электронная почта</label>
            <input required type="email" class="form-control" id="email" name="email">
        </div>
        <div class="row" style="margin-bottom: 20px;">
            <div class="col">
                <label>Номер договора</label>
                <input required type="number" class="form-control" placeholder="Введите номер договора" name="contract">
            </div>
            <div class="col">
                <label>Заработная плата (в рублях)</label>
                <input required type="number" class="form-control" placeholder="Введите зарплату" name="salary">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
        <a href="workers.php"><button type="button" class="btn btn-info">Назад</button></a>

    </form>
</body>
</html>