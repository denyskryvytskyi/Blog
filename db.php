<?php
    define('MYSQL_SERVER', 'localhost');
    define('MYSQL_USER','root');
    define('MYSQL_Password','');
    define('MYSQL_DB','blog');

    function db_connection(){
        $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_Password, MYSQL_DB) or die("Error: ".mysqli_error($link));
        if(!mysqli_set_charset($link, "utf8")){
            printf("ErrorL ".mysqli_error($link));
        }

        return $link;
    }
?>