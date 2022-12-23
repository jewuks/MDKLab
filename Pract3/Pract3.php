// Практическая выполнена совместно с Ефремовым Алексеем


<form action="" method="POST" class="form-example">
    <div class="form-group">
        <label for="name">Строка с примером : </label>
        <input type="text" name="a" id="name" class="form-control">
    </div>
    <div>
        <input type="submit" value="Выполнить" class="btn btn-primary">
    </div>
    <div>
        Результат:
        <?php

        $str = $_POST["a"];
        $str = explode(" ", $str);
        $strEndSolution = calculator($str);
        echo $strEndSolution;

        function calculator($str): string
        {
            $solution = 0;
            $arrayNumbers = [];
            $arrayOperations = [];
            $numbersCount = 0;
            $operationsCount = 0;


            for ($i = 0; $i < count($str); $i++) {
                if ($str[$i] !== '+' && $str[$i] !== '-' && $str[$i] !== '*' && $str[$i] !== '/' && $str[$i] !== '=') {
                    $arrayNumbers[$numbersCount] = $str[$i];
                } else {
                    if ($str[$i] === '+')
                        $arrayOperations[$operationsCount] = '+';
                    if ($str[$i] === '-')
                        $arrayOperations[$operationsCount] = '-';
                    if ($str[$i] === '*')
                        $arrayOperations[$operationsCount] = '*';
                    if ($str[$i] === '/')
                        $arrayOperations[$operationsCount] = '/';
                    if ($str[$i] === '=')
                        $arrayOperations[$operationsCount] = '=';

                    $operationsCount++;
                    $numbersCount++;
                }
            }

            $solution = $arrayNumbers[0];

            for ($i = 1, $k = 0; $i < $operationsCount + 1; $i++) {
                if ($arrayOperations[$k] === '+')
                    $solution += $arrayNumbers[$i];

                elseif ($arrayOperations[$k] === '-')
                    $solution -= $arrayNumbers[$i];

                elseif ($arrayOperations[$k] === '*')
                    $solution = $solution * $arrayNumbers[$i];

                elseif ($arrayOperations[$k] === '/')
                    $solution = $solution / $arrayNumbers[$i];

                elseif ($arrayOperations[$k] === '=')
                    if ($solution == $arrayNumbers[$i]) {
                        $text = "Утверждение верно!";
                    } else $text = "Утверждение неверно!";

                $k++;
            }

            $str = '';
            $str = $str .= $solution . "\n" . $text;

            return $str;
        }

        ?>
    </div>

</form>