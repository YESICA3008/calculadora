<! DOCTYPE 
<html>
<cabeza>
   <title>Tablas de multiplicar DADM. </título> 
</cabeza>
<cuerpo>
<h1>Tablas de multiplicar</h1>
<h3>Escribe un número del 1 al 10 y mostrare la tabla de multiplicar. </h3>
<form action="#" método="post">
   <p>Escribe aquí el número: <input type="text" name="num" maxlength="2" size="2" /></p>
   <p><input type="submit" value="Ver tabla de multiplicar." /></p>
</forma>
<?php  
$n=$_POST['num'];
si ($n<1 o $n>10) {
    echo "no has escrito un nůmero entre el 1 y el 10.";
    }
más {
     echo "<h4>Tabla del $n:</h4>";
     $i=1;
     mientras que ($i<=10) {
           eco "$n x $i = ". $n*$i. "<br/>";
           $i++;
           } 
     }
     
      
?>
</cuerpo>
</html>
