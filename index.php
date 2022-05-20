

<?php
$string = "Prima regola del fight club: non parlare mai del fight club.";
$censored_str = str_replace ("fight club", "*** ***", $string);
// $exploded_str = explode ('.', $string)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words</title>
</head>
<body>
  
<h2>Frase Integrale:</h2>
<p> <?php echo $string; ?> </p>

 <h2>Lunghezza Integrale:</h2>
  <p> <?php echo strlen($string);?></p>

<h2>Frase Censurata:</h2>
  <p> <?php echo $censored_str; ?> </p>

<h2>Lunghezza Censurata:</h2>
  <p> <?php echo strlen($censored_str);?></p>
  
</body>
</html>