<?php

require '../config/config.php';

$pdostmt=$pdo->prepare("DELETE FROM users WHERE id=".$_GET['id']);
$pdostmt->execute();

header('Location: user_list.php');

?>
