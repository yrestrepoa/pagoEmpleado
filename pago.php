<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Pago empleado</title>
</head>
<body>
    <header>
        <h1 class="centrado">PAGO DE EMPLEADO</h1>
    </header>
    <section>
        <table>
            <form action="./pago.php" method="post">

                <tr>
                    <td>Empleado</td>
                    <td><input type="text" name="txtEmpleado" id=""></td>
                </tr>

                <tr>
                    <td>Horas trabajadas</td>
                    <td><input type="text" name="txtHoras" id=""></td>
                </tr>

                <tr>
                    <td>Tarifa por hora</td>
                    <td><input type="text" name="txtTarifa" id=""></td>
                </tr>

                
                <tr>
                    <td></td>
                    <td><input type="submit" name="Procesar" id=""></td>
                    <td><input type="reset" name="Limpiar" id=""></td>
                </tr>


                <!-- CODIGO PHP -->

                <?php 
                error_reporting(0);
                $empleado=$_POST['txtEmpleado'];
                $horas=$_POST['txtHoras'];
                $tarifa=$_POST['txtTarifa'];

                // Realizar calculos
                $salarioBruto= $horas * $tarifa;
                $descuentoSeguroSalud= $salarioBruto * 0.12;
                $descuentoAFP= $salarioBruto * 0.10;
                $salarioNeto= $salarioBruto  - $descuentoSeguroSalud - $descuentoAFP;
                ?>

                <tr>
                    <td>Empleado</td>
                    <td><?php 
                        echo $empleado;
                        ?></td>
                </tr>

                <tr>
                    <td>Horas trabajadas</td>
                    <td><?php 
                        echo $horas;
                        ?></td>
                </tr>


                <tr>
                    <td>Salario Neto</td>
                    <td><?php 
                        echo $salarioNeto;
                        ?></td>
                </tr>


            </form>
        </table>
    </section>
</body>
</html>