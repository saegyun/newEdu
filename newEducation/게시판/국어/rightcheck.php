<?php
  $f2 = @fopen("C:/Bitnami/wampstack-7.4.8-07/apache2/htdocs/newEducation/database.txt",'r') or exit("파일을 읽을 수 없습니다.");
  $result = '';
  $tf=0;
  $tff=0;

  while(!feof($f2)){
    $s2 = htmlspecialchars(fgets($f2));
    if ($s2 != ""){
      $result =$s2 . "<br>" . $result;
    }
  }
  $result2=explode('<br>' , $result);
  for($i=0;$i<count($result2);$i++){
    $result3[$i] =explode('//',$result2[$i])[3];
    $result4[$i] =explode('//',$result2[$i])[4];
    if($classnumber == $result3[$i]){
        echo("id confirmed" . "\n");
        if($result4[$i]=="1"){
            echo("psw confirmed");
            $tf=1;
            $i=count($result2);
?>
            <meta charset="utf-8" />
            <script type="text/javascript">alert('권한이 확인되었습니다.');</script>
            <meta http-equiv="refresh" content="0 url=/newEducation/게시판/국어/board.html">
      <?php
        }
    }
    else {
        echo("권한이 없습니다.");
    }
  }

  fclose($f2);
?>
