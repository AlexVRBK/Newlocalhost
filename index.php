<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'test';



$link = mysqli_connect($host, $user, $password, $db_name);


mysqli_query($link, "SET NAMES 'utf8'");
?>

<table border="1" cellspacing="1" cellpadding="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
        <th>delete</th>
    </tr>
    <?php
    // Сохранение нового (до получения!):
    if (!empty($_POST)) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];

        $query = "INSERT INTO workers SET name='$name', age='$age', salary='$salary'";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }

    // Удаление по id (до получения!):
    if (isset($_GET['del'])) {
        $del = $_GET['del'];
        $query = "DELETE FROM workers WHERE id=$del";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }

    // Получение всех работников:
    $query = "SELECT * FROM workers";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    // Вывод на экран:
    $result = '';
    foreach ($data as $elem) {
        $result .= '<tr>';

        $result .= '<td>' . $elem['id'] . '</td>';
        $result .= '<td>' . $elem['name'] . '</td>';
        $result .= '<td>' . $elem['age'] . '</td>';
        $result .= '<td>' . $elem['salary'] . '</td>';
        $result .= '<td>' . $elem['salary'] . '</td>';
        $result .= '<td><a href="?del=' . $elem['id'] . '">удалить</a></td>';

        $result .= '</tr>';
    }

    echo $result;
    ?>
</table>
<form action="" method="POST">
    <input name="name">
    <input name="age">
    <input name="salary">
    <input type="submit" value="добавить работника">
</form>