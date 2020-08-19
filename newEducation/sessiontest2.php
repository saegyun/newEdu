<?php
session_set_cookie_params(0,"/");
session_start();
$_SESSION['uid']=$_GET['name'];
echo($_GET['name']);
function dataR($uname, $ii){
    $f2 = @fopen("database.txt",'r') or exit("파일을 읽을 수 없습니다.");
    $result = '';
    while(!feof($f2)){
        $s2 = htmlspecialchars(fgets($f2));
        if ($s2 != ""){
            $result =$s2 . "<br>" . $result;
        }
    }
    $result2=explode('<br>' , $result);
    for($i=0;$i<count($result2);$i++){
        $result3[$i] =explode('//',$result2[$i])[0];
        $result4[$i] =explode('//',$result2[$i])[$ii];
        if($uname == $result3[$i]){
            return $result4[$i];
        }
    }

fclose($f2);
}

?>
            <meta charset="utf-8" />
            <script type="text/javascript">alert('로그인에 성공했습니다.');</script>
            <meta http-equiv="refresh" content="0 url=/newEducation/myclass.php">