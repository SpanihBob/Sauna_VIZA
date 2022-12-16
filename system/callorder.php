<?    
    $path = $_SERVER['DOCUMENT_ROOT'];
    require_once "$path/system/db.php"; //подкл. к БД
    session_start();
    
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    
    $time = time();

    $_POST['table'] = trim($_POST['table']);                                //Удаляет пробелы (или другие символы) из начала и конца строки
    $_POST['table'] = htmlspecialchars($_POST['table']);                    //Преобразует специальные символы в HTML-сущности

    $_POST['user_name'] = trim($_POST['user_name']);                                //Удаляет пробелы (или другие символы) из начала и конца строки
    $_POST['user_name'] = htmlspecialchars($_POST['user_name']);                    //Преобразует специальные символы в HTML-сущности
    
    $_POST['user_phone'] = trim($_POST['user_phone']);                                //Удаляет пробелы (или другие символы) из начала и конца строки
    $_POST['user_phone'] = htmlspecialchars($_POST['user_phone']);                    //Преобразует специальные символы в HTML-сущности

    $dbPDO->query("INSERT INTO $_POST[table](user_name, user_phone, time_to_add) VALUES ('$_POST[user_name]','$_POST[user_phone]','$time')");
?>


