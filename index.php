<?php 

$min= 10;
$max= 30;

if(empty($_GET['length'])){
  $output= "inserire un numero di caratteri compreso tra $min e $max";

}else{
  if($_GET['length'] < $min || $_GET['length'] > $max ){
    $output= "la lunghezza non è comprasa tra $min e $max";
  }else{
    $output="corretto";
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

<h1 class="d-flex justify-content-center">PASSWORD GENERATOR</h1>


<form class="container d-flex justify-center my-5 col-8" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">

  <p class="fs-4">Inserisci il numero di caratteri per la password</p>

  <div class="lenght-counter col-2 ">

    <div class="input-group mx-3">
      <input type="number" name="length" class="form-control" aria-describedby="basic-addon1">
    </div>

  </div>

  <div class="btn mx-4">
    <button class="btn-primary" type="submit" name="submit" value="submit">Invia</button>
    <button class="btn-secondary" type="reset">Reset</button>
  </div>
</form>

<div class="messaggio d-flex justify-content-center">
    <p><?php echo $output ?></p>
</div>
  
</body>
</html>