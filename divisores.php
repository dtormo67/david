<?php

  $numero=$_POST["numero"];

  echo "<h3>Los divisores del numero $numero son:</h3>";
  for ($d=1;$d<=$numero;$d++) {
    if ($numero%$d==0) {
      echo $d."<br>";
    }
  }

?>