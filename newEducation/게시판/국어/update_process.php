<?php
$nt = date("Y-m-d-H-i-s").$_POST['title'];
  rename('data/'.$_POST['old_title'], 'data/'.$_POST['title']);
file_put_contents('data/'.$_POST['title'], $_POST['description']);
header('Location: /newEducation/게시판/국어/noticeB.php');

?>
