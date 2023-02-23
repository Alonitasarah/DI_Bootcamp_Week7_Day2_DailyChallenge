<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      class User {
        private $name;
        private $age;
      
        public function setName($name) 
        {
          $name = trim($name);
          // Valide la longueur du nom et lève une exception si elle est inférieure à 3 caractères.
          if (strlen($name) < 3)
          {
            throw new Exception("Le nom doit comporter au moins 3 caractères");
          }
          $this -> name = $name;
        }
        // Méthode pour définir l'âge d'un utilisateur
        public function setAge($age) 
        {
          // Transformez l'âge en un type d'entier avec int
          $age = (int)$age;
          //Valider l'âge et lever une exception s'il est égal ou inférieur à zéro
          if ($age <= 0) 
          {
            throw new Exception("L'âge ne peut être inférieur ou égal à zéro");
          }
          $this -> age = $age;
        }
        
        // Méthode pour obtenir le nom d'un utilisateur
        public function getName() 
        {
          return $this -> name;
        }

        // Méthode pour obtenir l'âge d'un utilisateur
        public function getAge() 
        {
          return $this -> age;
        }
      }
      // Fonction pour tester la classe User
      function test() 
      {
        // Un tableau de données pour différents utilisateurs
        $dataForUsers = array(
        array("sarah",4),
        array("Alonita",28),
        array("zozo",29),
        array("sawinde","pas encore né"),
        array("aicha",1.5));

        foreach ($dataForUsers as $data) 
        {
          $user = new User("Zozo", 25);
        try 
        {

          $user->setName($data[0]);
          $user->setAge($data[1]);
          echo $user->getName() . " est " . $user->getAge() . " ans. " . "\n";
      }catch (Exception $e) 
      {
        // S'il n'y a pas d'exception, affichez les informations sur l'utilisateur.
        echo " Erreur :  " . $e->getMessage() . " dans le fichier : " . $e->getFile() . "\n";
      }
     }
     }
     
     test();
    ?>
</body>
</html>