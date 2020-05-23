<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Новый заказ</title>
</head>
<body class="body">
    <form class="add-form" action="phpfiles/add_order.php" method="POST">
        <h1>Добавление нового заказа</h1>
        <div class="form-group">
            <label for="exampleFormControlSelect1">ID заявки</label>
            <select required class="form-control" id="exampleFormControlSelect1" name="request">
				<?php
                    $host = 'std-mysql'; 
                    $database = 'std_234'; 
                    $user = 'std_234'; 
                    $password = 'popygai18'; 
                
                    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
                    
                    $query = "SELECT  * FROM PISrequests";

                    if ($result = $link->query($query)) {
                        while ($row = $result->fetch_assoc()) {
                           
                           echo '<option>';
                           echo $row['id'];
                           echo '</option>';                    
                        }
                        $result->free();
                    }
                ?>
			</select>
        </div>
        <div class="form-group">
            <label for="inputDate">Дата проведения работ</label>
            <input required type="date" value="2017-06-01" class="form-control" name="date">
        </div>
        <div class="form-group">
            <label for="status">Статус</label>
            <select required class="form-control" id="status" name="status">
              <option>Подтверждено</option>
              <option>Не подтверждено</option>
              <option>Активно</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Сумма к оплате (рубли)</label>
            <input required type="number" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="status2">Статус оплаты</label>
            <select required class="form-control" id="status2" name="statuspayment">
              <option>Не оплачено</option>
              <option>Оплачено</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Добавить</button>
        <a href="orders.php"><button type="button" class="btn btn-info">Назад</button></a>

    </form>
</body>
</html>