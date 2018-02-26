<!doctype html>
<html>
  <body>
    <form method="post" action="invio.php">
      <h1>
        Riepilogo
      </h1>
      <?php
       echo ("Nome: ").$_POST["nome"]."<input type = 'hidden' name = 'nome' value = '".$_POST["nome"]."'><br>";
       echo ("Cognome: ").$_POST["cognome"]."<input type = 'hidden' name = 'cognome' value = '".$_POST["cognome"]."'><br>";
       echo ("Sesso: ").$_POST["sesso"]."<input type = 'hidden' name = 'sesso' value = '".$_POST["sesso"]."'><br>";
       echo ("Paese: ").$_POST["paese"]."<input type = 'hidden' name = 'paese' value = '".$_POST["paese"]."'><br>";
       if(isset($_POST["patente"])!=false && isset($_POST["patente2"])!=false)
       {
         echo ("Patenti: ").$_POST["patente"]."<input type = 'hidden' name = 'patente' value = '".$_POST["patente"]."'>".", ".$_POST["patente2"]."<input type = 'hidden' name = 'patente2' value = '".$_POST["patente2"]."'><br>";
       }
       else if(isset($_POST["patente"])!=false && isset($_POST["patente2"])==false)
       {
         echo ("Patenti: ").$_POST["patente"]."<input type = 'hidden' name = 'patente' value = '".$_POST["patente"]."'><br>";
       }
       else if(isset($_POST["patente"])==false && isset($_POST["patente2"])!=false)
       {
         echo ("Patenti: ").$_POST["patente2"]."<input type = 'hidden' name = 'patente2' value = '".$_POST["patente2"]."'><br>";
       }
       else
       {
         echo ("Patenti: ")."Nessuna"."<input type = 'hidden' name = 'nome' value = 'nessuna'><br>";
       }

       echo ("E-mail: ").$_POST["e-mail"]."<input type = 'hidden' name = 'e-mail' value = '".$_POST["e-mail"]."'><br>";
       echo ("Password: ").$_POST["password"]."<input type = 'hidden' name = 'password' value = '".$_POST["password"]."'><br>";
      ?>
      
      <input type="submit" value="submit">
      <input type="button" value="Indietro" onClick="javascript:history.back()" name="button">
    </form>
  </body>
</html>