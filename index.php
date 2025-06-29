<?php
echo "Введите имя: ";
$name = trim(fgets(STDIN));

echo "Введите фамилию: ";
$surname = trim(fgets(STDIN));

echo "Введите отчество: ";
$patronymic = trim(fgets(STDIN));

$fullName = mb_convert_case($surname . " " . $name . " " . $patronymic, MB_CASE_TITLE, "UTF-8");
$fio = mb_strtoupper(mb_substr($surname, 0, 1, 'UTF-8')) . mb_strtoupper(mb_substr($name, 0, 1, 'UTF-8')) . mb_strtoupper(mb_substr($patronymic, 0, 1, 'UTF-8'));
$surnameAndInitials = mb_convert_case($surname, MB_CASE_TITLE, 'UTF-8') . " " . mb_strtoupper(mb_substr($name, 0, 1, 'UTF-8')) . "." . mb_strtoupper(mb_substr($patronymic, 0, 1, 'UTF-8')) . ".";

fwrite(STDOUT, "Полное имя: " . $fullName . PHP_EOL);
fwrite(STDOUT, "Фамилия и инициалы: " . $surnameAndInitials . PHP_EOL);
fwrite(STDOUT, "Аббревиатура: " . $fio . "\\" . PHP_EOL);
?>