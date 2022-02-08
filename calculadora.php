<! DOCTYPE html>
<html lang="es">
<cabeza>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anónimo">

    <título>calculadora php</title>
</cabeza>
<cuerpo>
    <div class="contenedor">
    <h1>calculadora</h1> <br>
    <form method="post">
 número1:
        <input type="number" name="numero1" min="-100000" max="100000"required>
        numero2:
        <input type="number" name="numero2" min="-100000" max="100000"required>
        <br>
        <input type="radio"  name="opcion" value="sumar" class="from-check-input"required>sumar
        <input type="radio"  name="opcion" value="restar"class="from-check-input"required> restar
        <input type="radio"  name="opcion" value="multiplicar"class="from-check-input"required> multiplicar
        <input type="radio"  name="opcion" value="dividir"class="from-check-input"required> dividir
        <br><br>
        <input type="submit" value="calcular" class="btn btn-success">
        <input type="reset" value="limpiar" class="btn btn-danger">

    </forma>
    <hr>
</div>
<div class="contenedor"> 
    <?php
      if($_POST){
          función sumar (){
              echo $_POST["numero1"]+$_POST["numero2"];
          }
          función restar (){
            echo $_POST["numero1"]-$_POST["numero2"];
        }
         multiplicador de funciones (){
            echo $_POST["numero1"]*$_POST["numero2"];
        }
        función dividir (){
            echo $_POST["numero1"]/$_POST["numero2"];
        }
        switch ($_POST["opcion"]){
            caso "sumar":
                sumar ();
            quebrar;
            caso "restar":
                restar();
            quebrar;
            caso "multiplicador":
                multiplicador();
            quebrar;
            caso "dividir":
                dividir();
            quebrar;
            
        }
      }
    ?>
</div>  
</cuerpo>
</html>
