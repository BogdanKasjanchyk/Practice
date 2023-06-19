<!DOCTYPE html>
<html>
<head>
    <title>Суперглобальні змінні PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Суперглобальні змінні PHP</h1>
    <table>
        <tr>
            <th>Позначення змінної</th>
            <th>Характеристика</th>
            <th>Отримане значення</th>
        </tr>
        <tr>
            <td>$GLOBALS</td>
            <td>Масив, що містить посилання на всі глобальні змінні в скрипті PHP.</td>
            <td></td>
        </tr>
        <tr>
            <td>$_SERVER</td>
            <td>Масив, що містить інформацію, таку як заголовки, шляхи та місця розташування скриптів.</td>
            <td><?php 
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?></td>
        </tr>
        <tr>
            <td>$_GET</td>
            <td>Асоціативний масив змінних, переданих скрипту через параметри URL.</td>
            <td><?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?></td>
        </tr>
        <tr>
            <td>$_POST</td>
            <td>Асоціативний масив даних, переданих скрипту через HTTP POST.</td>
            <td><?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "username" field was submitted
    if (isset($_POST["username"])) {
        // Get the value of the "username" field
        $username = $_POST["username"];
        // Do something with the value
        echo "Hello, " . htmlspecialchars($username) . "!";
    }
}
?>
</td>
        </tr>
        <tr>
            <td>$_FILES</td>
            <td>Асоціативний масив елементів, завантажених у поточний скрипт через метод HTTP POST.</td>
            <td><?php var_dump($_FILES); ?></td>
        </tr>
                <tr>
            <td>$_COOKIE</td>
            <td>Асоціативний масив змінних, переданих поточному скрипту через HTTP Cookies.</td>
            <td><?php var_dump($_COOKIE); ?></td>
        </tr>
        <tr>
            <td>$_SESSION</td>
            <td>Асоціативний масив, що містить змінні сесії, доступні для поточного скрипту.</td>
            <td><?php
$_SESSION['username'] = 'Bohdan'; // зберігаємо дані у сесії
echo $_SESSION['username']; // виводимо дані з сесії
?>
</td>
        </tr>
        <tr>
            <td>$_REQUEST</td>
            <td>Асоціативний масив, що містить дані з $_GET, $_POST та $_COOKIE.</td>
            <td><?php var_dump($_REQUEST); ?></td>
        </tr>
        <tr>
            <td>$_ENV</td>
            <td>Асоціативний масив змінних оточення, переданих поточному скрипту через метод виконання.</td>
            <td><?php var_dump($_ENV); ?></td>
        </tr>
    </table>
</body>
</html>
