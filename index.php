<?php

//definisco la classe movie
class movie{
  public $title;
  public $duration;
  private $genere;

  function __construct($genere)
  {
    $this->genere = $genere;
  }
  
}

//creao un instanza della classe movie -> il signore degli anelli
$signAnelli1= new movie('Fantasy');
$signAnelli1->title = 'Il signore degli anelli';
$signAnelli1->duration = '2h 58m';

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