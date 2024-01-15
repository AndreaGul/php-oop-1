<?php

//definisco la classe movie
class movie{
  public $title;
  public $duration;
  private $genere;
  
  public $advised = 'No advice';

  //il metodo construct ne momento in cui viene creata un istanza si esegue automaticamente
  function __construct($_genere)
  {
    $this->genere = $_genere;
  }

  //in base a cosa viene passato alla funzione  verra cambiato il valore della proprieta advised
  public function LikedIt($liked){
    if(strtolower($liked) === 'yes'){
      $this->advised = 'Recommended';
    }
    elseif(strtolower($liked) === 'no'){
      $this->advised = 'Not recommended';
    }
  }
  
}

//creao un instanza della classe movie -> il signore degli anelli
$signAnelli1= new movie('Fantasy');
//definiamo le 
$signAnelli1->title = 'Il signore degli anelli';
$signAnelli1->duration = '2h 58m';
$signAnelli1->LikedIt('yes');

var_dump($signAnelli1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP 1 movies</title>
</head>
<body>
  
</body>
</html>