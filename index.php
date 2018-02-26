<!doctype html>
<html>
  <form method="post" action="riepilogo.php">
    <head>
      <title>Modulo di registrazione</title>
    </head>


    <body>
      <h3>
        Modulo di registrazione
      </h3> <br>
      Nome <br>
      <input type="text" name="nome" value=""/> <br> <br>
      Cognome <br>
      <input type="text" name="cognome" value=""/> <br> <br>
      Sesso <br>
      <input type="radio" name="sesso" value="maschio"/> maschio <br>
      <input type="radio" name="sesso" value="femmina"/> femmina <br>
      <input type="radio" name="sesso" value="altro"/> altro <br> <br>
      Paese <br>
      <select name="paese">
        <option value="Italia"> Italia </option>
        <option value="Francia"> Francia </option>
        <option value="Regno Unito"> Regno Unito </option>
        <option value="Germania"> Germania </option>
      </select> <br> <br>
      Patente <br>
      <input type="checkbox" name="patente" value="cat.A"/> cat.A <br>
      <input type="checkbox" name="patente2" value="cat.B"/> cat.B <br> <br>
      e-Mail <br>
      <input type="text" name="e-mail" value=""/> <br> <br>
      Password <br>
      <input type="password" name="password" value=""/> <br> <br>
      <input type="submit" value="submit">
      <input type="reset" value="reset">
    </body>
  </form>
</html>