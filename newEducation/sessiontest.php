<?php
session_set_cookie_params(0,"/");
session_start();
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

function fileput($path, $content){
    file_put_contents($path,file_get_contents($path).$content);
}

function at($n){
    $file="log/database".(string)date("Y-m-d")."_".dataR($n,5).".txt";
    fileput($file,"");
    $f3 = @fopen($file,'r') or exit("파일을 읽을 수 없습니다.");
  $result = '';
  $tf=0;
  while(!feof($f3)){
    $s2 = htmlspecialchars(fgets($f3));
    if ($s2 != ""){
      $result =$s2 . "<br>" . $result;
    }
  }
  $result2=explode('<br>' , $result);
  for($i=0;$i<count($result2);$i++){
    $result3[$i] =explode('//',$result2[$i])[0];
    $result4[$i] =explode('//',$result2[$i])[1];
    if($result3[$i]!=dataR($n,2) && $result4[$i]!=dataR($n,3)){
    }
    else {
      $i=count($result2);
      $tf=1;
    }
  }

  fclose($f3);
    if(dataR($n,4)==0){
        if($tf==0){
            fileput($file,dataR($n,2) . "//");
            fileput($file,dataR($n,3) . "//");
            fileput($file,date("Y-m-d") . "//");
            fileput($file,date("H:i:s") . "//");
            fileput($file,"0" . "\n");
            echo("성공적으로 출석 되었습니다.");
    
        } else {
            echo("이미 출석 되있습니다.");

        }
    }

}

 ?>