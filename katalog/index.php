<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<?php
include './config/config.php';
session_start();
ini_get("allow_url_include");
//bikin router

include "./view/navbar.php";


if(isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'add':
            include "./view/add.php";
            break;
        case 'list':
            include "./view/list.php";
            break;
        case 'login':
            include "./view/login.php";
            break;
        case 'edit':
            include "./view/edit.php";
            break;
        case 'delete':
            include "./action/delete.php";
            break;
        case 'logout':
            include "./action/logout.php";
            break;
        default:
            include "./view/login.php";
            break;
    }
} else {
    include "./view/login.php";
}
?>
</body>
</html>


