<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Multas - Biblioteca</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            max-width: 400px; 
            margin: 50px auto; 
            padding: 20px;
            background-color: #e6f2ff;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #2c6aa0;
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="number"], button { 
            width: 100%; 
            padding: 10px; 
            margin: 8px 0; 
            border: 1px solid #a8d0e6;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="number"]:focus {
            border-color: #2c6aa0;
            outline: none;
        }
        button {
            background-color: #2c6aa0;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            margin-top: 15px;
        }
        button:hover {
            background-color: #1a4d73;
        }
        .radio-group {
            margin: 15px 0;
        }
        .radio-group label {
            display: block;
            margin: 8px 0;
            color: #333;
        }
        .result { 
            margin-top: 20px; 
            padding: 15px; 
            background-color: #d4e6f1; 
            border-radius: 4px;
            border-left: 4px solid #2c6aa0;
        }
        .total {
            font-weight: bold;
            color: #2c6aa0;
            font-size: 1.1em;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #a8d0e6;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Sistema de Multas de Biblioteca</h2>
        
        <form method="POST">
            <input type="number" name="cantidad_libros" placeholder="Cantidad de libros atrasados" min="1" required>
            <input type="number" name="dias_retraso" placeholder="Días de retraso" min="1" required>
            
            <div class="radio-group">
                <label>¿Devuelve todos los libros el mismo día?</label>
                <label>
                    <input type="radio" name="mismo_dia" value="s" required> Sí, los devuelvo hoy
                </label>
                <label>
                    <input type="radio" name="mismo_dia" value="n"> No, los devuelvo después
                </label>
            </div>
            
            <button type="submit">Calcular Multa</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cantidad = (int)$_POST['cantidad_libros'];
            $dias = (int)$_POST['dias_retraso'];
            $mismo_dia = $_POST['mismo_dia'];
            
            $multa_base = $cantidad * 5;
            $recargo = $cantidad * $dias * 2;
            $subtotal = $multa_base + $recargo;
            
            if ($mismo_dia === 's') {
                $descuento = $subtotal * 0.20;
                $total = $subtotal - $descuento;
            } else {
                $descuento = 0;
                $total = $subtotal;
            }
            
            echo "<div class='result'>";
            echo "<h3>Resultado del cálculo:</h3>";
            echo "Multa base: $" . number_format($multa_base, 2) . "<br>";
            echo "Recargo: $" . number_format($recargo, 2) . "<br>";
            echo "Subtotal: $" . number_format($subtotal, 2) . "<br>";
            
            if ($descuento > 0) {
                echo "Descuento (20%): -$" . number_format($descuento, 2) . "<br>";
            }
            
            echo "<div class='total'>Total a pagar: $" . number_format($total, 2) . "</div>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>