<?php

function sumTime(string $firstDate, string $secondDate): string
{
    $simbols = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ':'];

    for ($i = 0; $i < strlen($firstDate); $i++) {
        if (in_array($firstDate[$i], $simbols)) {
            continue;
        } else {
            print("Некорректный ввод");
            exit;
        }
    }

    for ($i = 0; $i < strlen($secondDate); $i++) {
        if (in_array($secondDate[$i], $simbols)) {
            continue;
        } else {
            print("Некорректный ввод");
            exit;
        }
    }

    $firsttime = explode(":", $firstDate);
    $twotime = explode(":", $secondDate);
    $resultSeconds = 0;
    $resultMinutes = 0;
    $resultHours = 0;
    $result = '';

    $resultSeconds = $firsttime[2] + $twotime[2];
    if ($resultSeconds >= 60) {
        $resultSeconds -= 60;
        $resultMinutes += 1;
        if ($resultMinutes >= 60) {
            $resultHours += 1;
            $resultMinutes -= 60;
            if ($resultHours > 24) {
                $resultHours -= 24;
            }
        }
    }

    $resultMinutes = $firsttime[1] + $twotime[1];
    if ($resultMinutes >= 60) {
        $resultHours += 1;
        $resultMinutes -= 60;
        if ($resultHours > 24) {
            $resultHours -= 24;
        }
    }

    $resultHours = $firsttime[0] + $twotime[0];
    if ($resultHours > 24) {
        $resultHours -= 24;
    }

    if ($resultSeconds < 10) {
        $resultSeconds = "0" . $resultSeconds;
    }
    if ($resultMinutes < 10) {
        $resultMinutes = "0" . $resultMinutes;
    }
    if ($resultHours < 10) {
        $resultHours = "0" . $resultHours;
    }

    $result .= $resultHours . ":" . $resultMinutes . ":" . $resultSeconds;
    return $result;
}
echo sumTime($argv[1], $argv[2]);
