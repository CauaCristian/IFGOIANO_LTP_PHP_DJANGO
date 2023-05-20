<html>
    <body>
        <form action="testar.php" method="get">
            <input type="text" name="massa" value = "informe a massa"><br>
            <input type="text" name="altura" value = "informe a altura"><br>
            <input type="submit">
        </form>
        <?php
            $massa = $_GET["massa"];
            $altura = $_GET["altura"];
            $imcbaixo = $altura *$altura;
            $imc = $massa/$imcbaixo;
            if ($imc < "18,5") {
                echo "magreza";
            }
            if ("18,5" <= $imc and $imc <="24,9") {
                echo "Normal";
            }
            elseif ("25" <= $imc and $imc <= "29,9") {
                echo "Sobrepeso";
            }
            if ($imc > "30" ) {
                echo "Obesidade";
            }
        ?>
    </body>
</html>