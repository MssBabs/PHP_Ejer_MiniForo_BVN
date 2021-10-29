<form name='mensaje' method="POST">
  Tema<br> <input type="text" name="tema" size=30 
            value="<?=(isset($_REQUEST['tema']))?$_REQUEST['tema']:''?>" ><br>

  <!--
    HAY QUE COMPROBAR QUE NO SE META COMENTARIOS CON INSTRUCCIONES HTML
    - tema:
    - comentario: htmlspecialchars($_REQUEST['comentario'])

    MAX TEXTO ADMITIDO: 300-> MAXLENGTH
  -->

  Comentario: <br>
  <textarea name="comentario" rows="4" cols="50"  maxlength="300"><?=(isset($_REQUEST['comentario']))?$_REQUEST['comentario']:''?></textarea>
  
  <br><br>
  <input type="submit" name="orden" value="Detalles">
  <input type="submit" name="orden" value="Nueva opinión">
  <input type="submit" name="orden" value="Terminar">
</form>

