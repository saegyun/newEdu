<?php
  $uname = $_POST['uname'];
  $psw = $_POST['psw']; 
  $id = $_POST['id'];
  $grade = $_POST['학년'];
  $class = $_POST['반']; 
  $number = $_POST['번호']; 
  $classnumber = $grade.$class.$number;
  $f2 = @fopen("database.txt",'r') or exit("파일을 읽을 수 없습니다.");
  $result = '';
  $tf=0;
  while(!feof($f2)){
    $s2 = htmlspecialchars(fgets($f2));
    if ($s2 != ""){
      $result =$s2 . "<br>" . $result;
    }
  }
  $result2=explode('<br>' , $result);
  for($i=0;$i<count($result2);$i++){
    $result3[$i] =explode('//',$result2[$i])[0];
    $result4[$i] =explode('//',$result2[$i])[3];
    if($result3[$i]!=$id && $result4[$i]!=$classnumber){
      echo("true" . "<br>");
    }
    else {
      echo("false" . "<br>");
?>
      <meta charset="utf-8" />
      <script type="text/javascript">alert('이미 존재하는 아이디 혹은 학번입니다.');</script>
      <meta http-equiv="refresh" content="0 url=/newEducation/register.html">
<?php
      $i=count($result2);
      $tf=1;
    }
  }

  fclose($f2);
  $f = @fopen("database.txt",'a') or exit("파일을 읽을 수 없습니다.");
  if ($f != null){        
    if($tf == 0){
      fputs($f,$id . "//");
      fputs($f,$psw . "//");
      fputs($f,$uname . "//");
      fputs($f,$classnumber . "//");
      fputs($f,"0" . "//");
      fputs($f,$grade.$class . "//");
      fputs($f,"0" . "\n");
      echo("성공적으로 회원가입이 되었습니다.");
?>
      <meta charset="utf-8" />
      <script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
      <meta http-equiv="refresh" content="0 url=/newEducation/login.html">
<?php
    }
  }
  fclose($f);
?>
