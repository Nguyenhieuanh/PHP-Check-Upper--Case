<?php
$regexp = '/^[A-Z]/';

function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo("String's first character is uppercase");
    } else {
        echo("String's first character is not uppercase");
    }
}

isFirstLetterUpperCase('Codegym');
echo "<br>";
isFirstLetterUpperCase('cdegym');

$string1 = 'Nguyen van Nam';

$string2 = 'NGUYEN VAN NAM';

$string3 = 'nguyen van Nam';

function checkName($str)
{
    $arr = explode(' ', $str);
    foreach ($arr as $word) {
        echo " ($word)" . isFirstLetterUpperCase($word);
        echo "<br>";
    }
}

echo "<pre>";
checkName($string1);
echo "<br>";
checkName($string2);
echo "<br>";
checkName($string3);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Thực hành] Kiểm tra ký tự đầu tiên của chuỗi có phải là chữ hoa không</title>
</head>
<body>

</body>
</html>
