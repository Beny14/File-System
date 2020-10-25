<?php

  $file = 'test.txt';
    //Citeste fisierul in browser-ul nostru
  $handle_1 = fopen($file, 'r');
  echo fread($handle_1, filesize($file));
    //Citeste doar prima linie din fisier
  echo fgets($handle_1);
    //Citeste primul caracter/litera
  echo fgetc($handle_1);
    //Scrie intr-un fisier in prima linie si o inlocuieste
  $handle_2 = fopen($file, 'r+');
    //Scrie intr-un fisier pe ultima linie si nu inlocuieste
  $handle_3 = fopen($file, 'a+');
    //Scrie in fisier
  fwrite($handle_3, "\n It is a batter place.");
    //Inchide fisierul
  fclose($handle_1);
    //Sterge fisierul
  unlink($handle_2);

?>
