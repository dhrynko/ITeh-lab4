<?php
$value1 = $_POST['value1'] ?? '';
$value2 = $_POST['value2'] ?? '';
$calc = $_POST['calc'] ?? '';

if ($calc == "+") {
    $result = $value1 + $value2;
}
else if ($calc == "-") {
    $result = $value1 - $value2;
}
else if ($calc == "/") {
    $result = $value1 / $value2;
}
else if ($calc == "*") {
    $result = $value1 * $value2;
}
?>

<form method="POST" action="index.php">
    <input type="text" name="value1"></p>
    <input type="text" name="value2"></p>
    <input type="radio" name="calc" value="+">+<br>
    <input type="radio" name="calc" value="-">-<br>
    <input type="radio" name="calc" value="/">/<br>
    <input type="radio" name="calc" value="*">*<br>
    </p>
    <input type="submit" value="Вычислить">
</form>
<p>Результат: <?php
    $result1 = $result ?? '';
    echo "$result1"; ?>
</p>