<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=E, initial-scale=1.0">
    <title>AlgoPHP1</title>
</head>

<body>

  <p>Ex1</p>

    <?php
    $str = "Notre formation DL commence aujourd'hui";
    $length = strlen($str);
    echo "La phrase « $str » contient $length caractères.";
    ?>

  <p>Ex2</p>

    <?php
    $str = "Notre formation DL commence aujourd'hui";
    $count = str_word_count($str);
    echo "La phrase « $str » contient $count mots.";
    ?>
  
  <p>Ex3</p>

    <?php
    $str = "Notre formation DL commence aujourd'hui";
    $str1 = str_replace("aujourd'hui", "demain", $str);
    echo "$str<br>$str1";
    ?>

  <p>Ex4</p>

    <?php
		$str = "Engage le jeu que je le gagne";
    $str1 = strtolower(str_replace(" ", "", $str));
    if (strcmp($str1,strrev($str1)) ==0)
      {
        echo"La phrase « $str » est un palindrome.";
      }
    else
      {
        echo"La phrase « $str » n'est pas un palindrome.";
      }
	?>

  <p>Ex5</p>
    
    <?php
    $somfran = 100;
    $fran = 6.55;
    $totaleuro = $somfran / $fran;
    $totaleuro = number_format($totaleuro, 2, ',', ' ');
    echo $totaleuro;
    ?>

  <p>Ex6</p>

    <?php
    $article = 9.99;
    $number = 5;
    $tva = 0.2;
    $totalhtva = $article * $number;
    $totaltva = (($article * $tva) + $article) * $number;
    echo "$totalhtva<br>$totaltva";
    ?>

  <p>Ex7</p>

  <?php
    $age = 15;
    if ($age > 12){

    }
    elseif ($age > 10){

    }
    if ($age < 6)
    {
      echo "L’enfant qui a $age ans n'appartient à aucune catégorie.";
    }
    elseif ($age >= 6 && $age <= 7)
    {
      echo "L’enfant qui a $age ans appartient à la catégorie « Poussin ».";
    }
    elseif ($age >= 8 && $age <= 9)
    {
      echo "L’enfant qui a $age ans appartient à la catégorie « Pupille ».";
    }
    elseif ($age >= 10 && $age <= 11)
    {
      echo "L’enfant qui a $age ans appartient à la catégorie « Minime ».";
    }
    else 
    {
      echo "L’enfant qui a $age ans appartient à la catégorie « Cadet ».";
    }
  ?>
    
<p>Ex8</p>

  <?php
  $i = 1;
  $t = 8;
  $result = '';
  echo "Table de $t :<br>";

  //on utilise le for quand on connait le nombre de fois

  while($i <= 10)
  {
    $result = $i * $t;
    echo "$i * $t = $result <br>";
    $i++;
  }

  for ($i=1; $i<=10;$i++)
  {
    $result = $i * $t;
    echo "$i * $t = $result <br>";
  }
  ?>

<p>Ex9</p>

  <?php
  $age = 36;
  $sexe = "H";
  echo "Age : $age<br>";
  echo "Sexe : $sexe<br>";
  if(($age >= 18 && $age <= 35 && $sexe === "F")||($age >= 20 && $sexe === "H"))
  {
    echo "La personne est imposable.";
  }
  else
  {
    echo "La personne est non imposable.";
  }
  ?>

<p>Ex10</p>

  <?php
  $price = 189;
  $paid = 242;
  $rest = $paid - $price;
  $dix = 0;
  $cinq = 0;
  $two = 0;
  $one = 0;
  echo "Montant à payer : $price €<br>";
  echo "Montant versé : $paid €<br>";
  echo "Reste à payer : $rest €<br>";
  echo "***************************************************<br>Rendue de monnaie :<br>";
  
  $rest1 = $rest % 10;
  $rest = $rest - $rest1;
  $dix = $rest / 10;

  $rest2 = $rest1 % 5;
  $rest1 = $rest1 - $rest2;
  $cinq = $rest1 / 5;

  $rest3 = $rest2 % 2;
  $rest2 = $rest2 - $rest3;
  $two = $rest2 / 2;

  $rest4 = $rest3 % 1;
  $rest3 = $rest3 - $rest4;
  $one = $rest3 / 1;
  
  echo "$dix billets de 10 € - $cinq billet de 5 € - $two pièce de 2 € - $one pièce de 1 €"
  ?>

  <p>Ex11</p>

  <?php
  $modelcar = ['Peugeot', 'Renault', 'BMV', 'Mercedes'];
  $nbrmodel = count($modelcar);
  
  echo "Il y a $nbrmodel marques de voitures dans le tableau :<br>";
  
  foreach ($modelcar as $model) {
  echo "<li>$model<br></li>";
  }
  ?>

  <p>Ex12</p>

  <?php
  $pers = [
      'Mickaël' => 'FRA',
      'Virgile' => 'ESP',
      'Marie-Claire' => 'ENG',
  ];
  ksort($pers);
  function Bonjour($pers) 
  {
      $hey = [
          'FRA' => 'Salut',
          'ENG' => 'Hello',
          'ESP' => 'Hola',
      ];
      foreach ($pers as $prenom => $langue) {
          $salutation = $hey[$langue];
          echo "$salutation $prenom<br>";
      }
  }
  Bonjour($pers);
  ?>

  <p>Ex13</p>

  <?php
  $note = ['10', '12', '8', '19', '3', '16', '11', '13', '9'];
  echo "Les notes obtenues par l'élève sont : ";

  foreach ($note as $key) {
      echo "$key ";
  }
  echo "<br>";
  $nbrnote = count($note);
  $moye = array_sum($note) / $nbrnote;
  $moye = number_format($moye, 2, ',', ' ');
  echo "Sa moyenne générale est donc de : $moye";
  ?>

  <p>Ex14</p>

  <?php
  $born = "1986-06-09"; 
  $today = date("y-m-d");
  $diff = date_diff(date_create($born), date_create($today));
  echo 'Âge de la personne : '.$diff->format('%Y ans %m mois %d jours');
  ?>

  <p>Ex15</p>

<?php

    // classe : ensemble d'états et de comportements 

    // objet : instance d'une classe

  class Personne{

    // propriétés 

    private string $nom;
    private string $prenom;
    private \DateTime $dateNaissance;


    // constructeur

    public function __construct(string $nom, string $prenom , string $dateNaissance){

      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->dateNaissance = new DateTime($dateNaissance);
      }
      
    // getters permettent d'accéder à la valeur d'une propriété

    

    public function getNom(){
      return $this->nom;
    }

    public function getPrenom(){
      return $this->prenom;
    }

    public function getDateNaissance(){
      return $this->dateNaissance;
    }

    // setters permettent d'attribuer  une valeur à la propriété
      
    
    public function setNom($nom){
      $this->nom = $nom;
      }

    public function setPrenom($prenom){
      $this->prenom = $prenom;
      }

    public function setDateNaissance($dateNaissance){
      $this->dateNaissance = $dateNaissance;
      }


      public function calculerAge(){
        $today = new DateTime();
      
        return $today->diff($this->dateNaissance)->y;

      }
  }

  $personne1 = new Personne("Werle", "Guillaume ", "09/06/1986");

  echo $personne1->calculerAge();

?>

</body>

</html>