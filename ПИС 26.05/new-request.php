<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Новая заявка</title>
</head>
<body class="body">
    <form class="add-form" action="phpfiles/add_request.php" method="POST">
        <h1>Добавление новой заявки</h1>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Имя клиента</label>
            <select required class="form-control" name="client" id="exampleFormControlSelect1">
				<?php
                    $host = 'std-mysql'; 
                    $database = 'std_234'; 
                    $user = 'std_234'; 
                    $password = 'popygai18'; 
                
                    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
                    
                    $query = "SELECT  * FROM PISclients";

                    if ($result = $link->query($query)) {
                        while ($row = $result->fetch_assoc()) {
                           
                           echo '<option>';
                           echo $row['fio_client'];
                           echo '</option>';                    
                        }
                        $result->free();
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="type">Тип сигнализаци</label>
            <select required class="form-control" name="type" id="type">
              <option>Автономная</option>
              <option>Индивидуальная</option>
              <option>Пультовая</option>
            </select>
        </div>
        <div class="form-group">
            <label for="materials">Материалы</label>
            <input required type="text" name="material" class="form-control" id="materials">
        </div>
        <div class="form-group">
            <label for="worker">Исполнитель</label>
            <select required class="form-control" name="worker" id="worker">
              <?php
                    $host = 'std-mysql'; 
                    $database = 'std_234'; 
                    $user = 'std_234'; 
                    $password = 'popygai18'; 
                
                    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
                    
                    $query = "SELECT  * FROM PISworkers";

                    if ($result = $link->query($query)) {
                        while ($row = $result->fetch_assoc()) {
                           
                           echo '<option>';
                           echo $row['fio_worker'];
                           echo '</option>';                    
                        }
                        $result->free();
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Статус</label>
            <select required class="form-control" name="status" id="status">
              <option>В обработке</option>
              <option>Отклонено</option>
              <option>Принято</option>
            </select>
        </div>

        
        <button type="submit" class="btn btn-primary">Добавить</button>
        <a href="requests.php"><button type="button" class="btn btn-info">Назад</button></a>

      </form>
    
</body>
</html>