<?php
file_put_contents('data/'.$_POST['title'].date("Y-m-d-H-i-s"),$_POST['description']);
header('Location:/newEducation/게시판/국어/noticeB.php')
?>
