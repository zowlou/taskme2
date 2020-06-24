    <?php require('assets/design/head.php'); ?>
<body>
    <?php require('assets/design/menu.php'); ?>


<?php 

    if(!isset($_GET['p'])){
        $_GET['p'] = false;
    }
    if(!isset($_GET['action'])){
        $_GET['action'] = false;
    }


    switch ($_GET['p']){
        
        case 'roles':
            switch($_GET['action']){
                case 'create':
                    require 'view/roles/create.php';
                    break;
                case 'update' :
                    require 'view/roles/update.php';
                    break;
                case 'insert':
                    require 'model/roles/create.php';
                    break;      
                case 'delete':
                    require 'model/roles/delete.php';
                    break;
                default:
                    require 'view/roles/index.php';
                    break;
            }
            break;
        default:
            require 'intro.php';
    }

?>

    <?php require('assets/design/footer.php'); ?>