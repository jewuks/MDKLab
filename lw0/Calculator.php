<?php
function calculator(string $text)
{
    $simbols = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '+', '-'];
    for($i = 0; $i < strlen($text); $i++)
    {
        if( in_array($text[$i], $simbols) )
        {
            continue;
        }
        else
        {
            return "Некорректный ввод";
        }
    }

    $reshenie = 0;
    $numbers = [];
    $vichislenie = [];
    $countNumbers = 0;
    $countOperation = 0;
    for ($i = 0; $i < strlen($text); $i++)
    {
        if($text[$i] !== '+' && $text[$i] !== '-')
        {
            $numbers[$countNumbers] .= $text[$i];
        }
        else
        {
            if($text[$i] === '+')
            {
                $vichislenie[$countOperation] = '+';
            }
            if($text[$i] === '-')
            {
                $vichislenie[$countOperation] = '-';
            }
            $countOperation++;
            $countNumbers++;
        }
    }
    if($countOperation >= 5)
    {
        return('Слишком много операций');
    }
    $reshenie = $numbers[0];
    for ($i = 1, $k = 0; $i < 5; $i++)
    {
        if($vichislenie[$k] == '+')
        {
            $reshenie += $numbers[$i];
        }
        elseif($vichislenie[$k] == '-')
        {
            $reshenie -= $numbers[$i];
        }
        $k++;
    }


    return($reshenie);

}
echo calculator($argv[1]);

?>