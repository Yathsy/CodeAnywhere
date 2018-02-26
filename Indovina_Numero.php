<!doctype html>
<body>
  <h1>
    <strong> 
    INDOVINA NUMERO GIOCO
    </strong>
  </h1>
  <br><br>
  <form action = "" method = "POST">
    
    La regola: <br>Indovina un numero da 1 a 100 <br> <br>
    <input type = "text" name = "numero_inserito" value = ''/> <br> <br>
    Risultato: 
    
    <?php
      $numero_inserito = $_POST['numero_inserito'];
      $submission = $_POST['submit'];
      if(isset($_POST['submit']))
      {
        $numero_casuale = $_POST["numero_casuale"];
        $tentativi = $_POST["tentativi"]; 
      }
      else
      {
        $numero_casuale = mt_rand(1, 100);
        $tentativi = 0;
      }
    ?>
    
    <?php
      if(($numero_inserito > 0) && ($numero_inserito < 101))
      {
        if($numero_inserito != $numero_casuale)
        {
          if($numero_inserito < $numero_casuale)
          {
            echo "Prova un numero più alto";
          }
          else
          {
            echo "Prova un numero più basso";
          }
          $tentativi = $tentativi + 1;
          if($tentativi > 9)
          {
            echo "Hai finito i tentativi";
            $tentativi = 0;
            $numero_casuale = mt_rand(1, 100);
          }
        }
        else
        {
          echo "Numero giusto $numero_casuale";
        }
      }
      else
      {
        echo "Inserisci un numero da 1 a 100";
      }
    
    ?>  
    <br><br>
    
    <input type = "hidden" name = "numero_casuale" value = "<?php echo $numero_casuale?>"/>
    <input type = "hidden" name = "tentativi" value = "<?php echo $tentativi?>"/>
    <input type = "submit" name = "submit" value = "Try"/> <br> <br>
      
  </form>
</body>


