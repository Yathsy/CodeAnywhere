<!DOCTYPE html>
<html>
  <body>
    <?php
    if(isset($_GET["bottone"]))
      $numero=$_GET["numero"]+1;
    else
      $numero=0;
    ?>
    
    <form action="" method="get">
      <input type="text" name="numero" value="<?php echo $numero;?>" />
      <input type="submit" name="bottone" value="incremento"/>
    </form>
    <?php
      echo $numero;
    ?>
  </body>
</html>