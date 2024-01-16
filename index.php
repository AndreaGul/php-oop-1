<?php

//definisco la classe movie
class movie{
  public $title;
  public $duration;
  public $genere;
  
  public $advised = 'No advice';

  //il metodo construct ne momento in cui viene creata un istanza si esegue automaticamente  
  /**
   * __construct
   *
   * @param  string $_genere riceve una stringa con il genere del film
   * @return void
   */
  function __construct($_title,$_duration,$_genere)
  { 
    $this->title= $_title;
    $this->duration = $_duration;
    $this->genere = $_genere;
  }

  //in base a cosa viene passato alla funzione  verra cambiato il valore della proprieta advised  
  /**
   * LikedIt
   *
   * @param  string $liked in base a se gli viene passo yes o no la funzione fa qualcosa
   * @return void
   */
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
$signAnelli1= new movie('Il signore degli anelli - La Compagnia dell\'Anello','2h 58m','Fantasy');
//chiamiamo la funzione Likedit
$signAnelli1->LikedIt('yes');

$signAnelli2= new movie('Il Signore degli Anelli - Le due torri','2h 59m','Fantasy');
//chiamiamo la funzione Likedit
$signAnelli2->LikedIt('yes');

$movies =[
  $signAnelli1,$signAnelli2
];

var_dump($movies);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP 1 movies</title>
</head>
<body>
  <?php foreach($movies as $movie): ?>
      <h3>Titolo</h3>
        <p><?php echo $movie->title; ?></p>
      <h3>Durata</h3>
        <p><?php echo $movie->duration; ?></p>
      <h3>Genere</h3>
        <p><?php echo $movie->genere; ?></p>

        <h4><?php echo $movie->advised; ?></h4>
  <?php endforeach; ?>


</body>
</html>