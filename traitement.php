<?php 
    if (!empty($_POST['name']) && !empty($_POST['Subject']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $message =$_POST['message']. ' envoye par:' .$_POST['email'];
        mail('thuretgbg@gmail.com', $_POST['Subject'], $message);
    }
    else {
        header('Location: index.php');
        exit();
    }
?>