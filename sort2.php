<?php
  $temperaturas = array(23, 25,27, 23, 27,26, 26, 28,27, 22, 26, 21,
                       23,24,21,48,18,19,26,28,27,27,26,18,23,26,24,27,29,30);
  sort($temperaturas);
  $contar = count($temperaturas);
  $media = 0;
  $x=1;
  for($i = 0; $i < $contar; $i++){
    
    $media += $temperaturas[$i];
    echo ($i+1)." día = ".$temperaturas[$i]."&deg;&nbsp;&nbsp;&nbsp;&nbsp; ";

    if(5==$x)
    {
        echo"<br>";
        $x = 0;
    }
   
    $x++;
 }

  $media = $media/$contar;
  echo "<br>Las cinco temperaturas mínimas = $temperaturas[0]&deg;, $temperaturas[1]&deg, $temperaturas[2]&deg, $temperaturas[3]&deg, $temperaturas[4]&deg<br />";
  echo "Temperatura media  = ".number_format($media,2)."&deg;<br />";  
  rsort($temperaturas);
  echo "Las cinco temperaturas máxima = $temperaturas[0]&deg;, $temperaturas[1]&deg, $temperaturas[2]&deg, $temperaturas[3]&deg, $temperaturas[4]&deg<br />";
?>