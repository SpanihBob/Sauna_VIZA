<? 
    $path = $_SERVER['DOCUMENT_ROOT'];
    // require_once "$path/system/db.php"; //подкл. к БД
    session_start();                    //вкл. сессию
    // session_destroy();


    
    if(@$_SERVER['REDIRECT_URL']=="" or $_SERVER['REDIRECT_URL']=="/main")://другой способ записи if else без скобок
        require_once "$path/public/main.php";
    elseif(@$_SERVER['REDIRECT_URL']=="/photoandvideo")://другой способ записи if else без скобок
        require_once "$path/public/photoandvideo.php";
    else:
        require_once "$path/public/404.php";
    endif;                
?>
