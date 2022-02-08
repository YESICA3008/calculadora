<! DOCTYPE 
<html>
    <cabeza>
        <title>Costo de una llamada telefónica</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </cabeza>
    <cuerpo>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $costo_por_minuto = flotante ($_POST['costo_por_minuto']);
    $tiempo_en_minutos = flotante ($_POST['tiempo_en_minutos']);
    $costo=$tiempo_en_minutos*$costo_por_minuto;
    echo 'Valor de costo: ' . $costo . "<br/>\n";
}
 
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="costo_por_minuto">Ingresa el valor de costo por minuto:</label>
                        </td>
                        <td>
                            <nombre de entrada="costo_por_minuto" requerido="requerido" paso="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tiempo_en_minutos">Ingresa el valor de tiempo en minutos:</label>
                        </td>
                        <td>
                            <nombre de entrada="tiempo_en_minutos" requerido="requerido" paso="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr align="centro">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </mesa>
        </forma>
    </cuerpo>
</html>
