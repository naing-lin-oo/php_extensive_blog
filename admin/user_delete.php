<?php

require '../config/config.php';

$pdostmt=$pdo->prepare("DELETE FROM users WHERE id=".$_GET['id']);
$pdostmt->execute();

$pdostmt2=$pdo->prepare("DELETE FROM comments WHERE author_id=".$_GET['id']);
$pdostmt2->execute();

header('Location: user_list.php');

?>
