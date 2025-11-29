<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Multas - Biblioteca</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            max-width: 450px; 
            margin: 50px auto; 
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }
        
        .form-container:hover {
            transform: translateY(-5px);
        }
        
        h2 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.5em;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        
        .input-group {
            margin-bottom: 20px;
        }
        
        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: 600;
        }
        
        input[type="number"] { 
            width: 100%; 
            padding: 12px 15px; 
            border: 2px solid #bdc3c7;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        input[type="number"]:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }
        
        .radio-group {
            margin: 20px 0;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #3498db;
        }
        
        .radio-group strong {
            display: block;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        
        .radio-option {
            margin: 10px 0;
            padding: 8px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .radio-option:hover {
            background-color: #e9ecef;
        }
        
        .radio-option label {
            display: flex;
            align-items: center;
            cursor: pointer;
            margin: 0;
        }
        
        .radio-option input[type="radio"] {
            margin-right: 10px;
            transform: scale(1.2);
        }
        
        button {
            width: 100%; 
            padding: 15px; 
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        button:hover {
            background: linear-gradient(135deg, #2980b9, #3498db);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .result { 
            margin-top: 25px; 
            padding: 20px; 
            background: linear-gradient(135deg, #2ecc71, #27ae60);
            color: white;
            border-radius: 10px;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .result h3 {
            margin-bottom: 15px;
            text-align: center;
            font-size: 1.3em;
        }
        
        .calculation-line {
            display: flex;
            justify-content: space-between;
            margin: 8px 0;
            padding: 5px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .discount {
            color: #f1c40f;
            font-weight: bold;
        }
        
        .total {
            font-weight: bold;
            font-size: 1.4em;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 2px solid rgba(255, 255, 255, 0.3);
            text-align: center;
            background: rgba(0, 0, 0, 0.1);
            padding: 15px;
            border-radius: 8px;
        }
        
        .info-text {
            text-align: center;
            color: #7f8c8d;
            font-size: 0.9em;
            margin-top: 15px;
            line-height: 1.4;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>📚 Sistema de Multas de Biblioteca</h2>
        
        <form method="POST">
            <div class="input-group">
                <label for="cantidad_libros">📖 Cantidad de libros atrasados:</label>
                <input type="number" id="cantidad_libros" name="cantidad_libros" 
                       placeholder="Ej: 3" min="1" required>
            </div>
            
            <div class="input-group">
                <label for="dias_retraso">📅 Días de retraso:</label>
                <input type="number" id="dias_retraso" name="dias_retraso" 
                       placeholder="Ej: 5" min="1" required>
            </div>
            
            <div class="radio-group">
                <strong>⏰ Condición de devolución:</strong>
                <div class="radio-option">
                    <label>
                        <input type="radio" name="mismo_dia" value="s" required> 
                        ✅ Sí, devuelvo todos los libros hoy
                    </label>
                </div>
                <div class="radio-option">
                    <label>
                        <input type="radio" name="mismo_dia" value="n"> 
                        ❌ No, los devolveré después
                    </label>
                </div>
            </div>
            
            <button type="submit">💰 Calcular Multa</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validar y limpiar datos
            $cantidad = max(1, (int)$_POST['cantidad_libros']);
            $dias = max(1, (int)$_POST['dias_retraso']);
            $mismo_dia = $_POST['mismo_dia'];
            
            // Cálculos
            $multa_base = $cantidad * 5; // $5 por libro
            $recargo = $cantidad * $dias * 2; // $2 por día por libro
            $subtotal = $multa_base + $recargo;
            
            // Aplicar descuento si devuelve todo el mismo día
            if ($mismo_dia === 's') {
                $descuento = $subtotal * 0.20; // 20% de descuento
                $total = $subtotal - $descuento;
            } else {
                $descuento = 0;
                $total = $subtotal;
            }
            
            // Mostrar resultados
            echo "<div class='result'>";
            echo "<h3>📊 Resultado del Cálculo</h3>";
            echo "<div class='calculation-line'>";
            echo "<span>Multa base ($cantidad libros × $5):</span>";
            echo "<span>$" . number_format($multa_base, 2) . "</span>";
            echo "</div>";
            
            echo "<div class='calculation-line'>";
            echo "<span>Recargo ($dias días × $2 × $cantidad libros):</span>";
            echo "<span>$" . number_format($recargo, 2) . "</span>";
            echo "</div>";
            
            echo "<div class='calculation-line'>";
            echo "<span>Subtotal:</span>";
            echo "<span>$" . number_format($subtotal, 2) . "</span>";
            echo "</div>";
            
            if ($descuento > 0) {
                echo "<div class='calculation-line discount'>";
                echo "<span>Descuento (20% por devolución inmediata):</span>";
                echo "<span>- $" . number_format($descuento, 2) . "</span>";
                echo "</div>";
            }
            
            echo "<div class='total'>";
            echo "Total a pagar: $" . number_format($total, 2);
            echo "</div>";
            echo "</div>";
            
            // Información adicional
            echo "<div class='info-text'>";
            if ($mismo_dia === 's') {
                echo "💡 ¡Gracias por devolver todos los libros hoy! Has ahorrado $" . number_format($descuento, 2);
            } else {
                echo "⚠️ Recuerda que devolver todos los libros hoy te da un 20% de descuento";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
