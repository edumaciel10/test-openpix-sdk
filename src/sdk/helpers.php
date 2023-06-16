<?php

function generateUUID() {
    if (function_exists('com_create_guid') === true) {
        return trim(com_create_guid(), '{}');
    }

    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );
}

function generateCPF() {
    $cpf = '';

    // Generate the first nine digits (random numbers)
    for ($i = 0; $i < 9; $i++) {
        $cpf .= mt_rand(0, 9);
    }

    // Calculate the first verification digit
    $sum = 0;
    for ($i = 0; $i < 9; $i++) {
        $sum += intval($cpf[$i]) * (10 - $i);
    }
    $digit1 = ($sum % 11 < 2) ? 0 : 11 - ($sum % 11);

    // Calculate the second verification digit
    $cpf .= $digit1;
    $sum = 0;
    for ($i = 0; $i < 10; $i++) {
        $sum += intval($cpf[$i]) * (11 - $i);
    }
    $digit2 = ($sum % 11 < 2) ? 0 : 11 - ($sum % 11);

    return $cpf . $digit2;
}

function varExport($data, $indentation = 0)
{
    $output = '';
    $indentationSpaces = str_repeat(' ', $indentation);

    if (is_array($data)) {
        $output .= "[\n";

        foreach ($data as $key => $value) {
            $output .= $indentationSpaces . "    ";

            if (!is_numeric($key)) {
                $output .= var_export($key, true) . " => ";
            }

            if (is_array($value)) {
                $output .= varExport($value, $indentation + 4);
            } else {
                $output .= var_export($value, true);
            }

            $output .= ",\n";
        }

        $output .= $indentationSpaces . "]";
    } else {
        $output .= var_export($data, true);
    }

    $output = preg_replace("/'([^']+)'/", '"$1"', $output);

    return $output;
}

function addComments($data)
{
    return "/**\n * " . str_replace("\n", "\n * ", trim(strval($data))) . "\n */";
}

function dumpData($data)
{
    echo varExport($data) . "\n";
}

function dumpCommentedData($data)
{
    echo addComments(varExport($data)) . "\n";
}

function dumpCommentedVar($data, $variable)
{
    echo addComments("\$" . $variable . " = " . varExport($data) . ";") . "\n";
}