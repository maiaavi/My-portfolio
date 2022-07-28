<?php

    require_once 'dbsettings.php'; //* HERE THE FILE dbsettings.php brings dbhost, dbname, dbusrname and dbusrpass variables to use on PDO Connection

    try{
        $pdo = new PDO('mysql:host='.$db_host.'; dbname='.$db_name.';',$db_usrname,$db_usrpass);

    }catch(PDOException $e){
        echo $e->getMessage();
        exit;
    }