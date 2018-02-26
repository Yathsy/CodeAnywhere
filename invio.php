<?php
include 'conn.inc.php';
?>
<!doctype html>
<html>
  <body>
    <?php
    try
    {
      $dbh = new PDO($conn, $user, $pass);
      $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $query = "INSERT INTO `Registrazione`.`Registrazione` (Nome, Cognome, Sesso, Paese, patente, patente2, e-mail, password) VALUES (:nome, :cognome, :sesso, :paese, :patente, :patente2, :email, :password);"
      $code = $dbh -> prepare($query);
      $code -> bindValue(":nome", $_POST["nome"]); 
      $code -> bindValue(":cognome", $_POST["cognome"]); 
      $code -> bindValue(":sesso", $_POST["sesso"]);
      $code -> bindValue(":paese", $_POST["paese"]);
      if(isset($_POST["patente"])!= false)
      {
        $_POST["patente"] = 1;
      }
      else
      {
        $_POST["patente"] = 0;
      }
      $code -> bindValue(":patente", $_POST["patente"]);
      if(isset($_POST["patente"])!= false)
      {
        $_POST["patente2"] = 1;
      }
      else
      {
        $_POST["patente2"] = 0;
      }
      $code -> bindValue(":patente2", $_POST["patente2"]); 
      $code -> bindValue(":email", $_POST["email"]); 
      $code -> bindValue(":password", $_POST["password"]);
      if($code -> execute())
        echo "Bella li, è riuscito";
    }
    catch(PDOException $e)
    {
      $e -> getMessage();
    }
    ?>
  </body>
</html>
