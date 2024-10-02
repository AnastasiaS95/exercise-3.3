<?php
//1
$numbers = [5, 6, 7, 5, 8];
foreach ($numbers as $number) {
    if ($number %2== 0) {
        echo "$number - Чётное"
    }else {
        echo "$number - Нечётное"
    };
};
// 2
$numbers = [5, 1, 7, 6, 8, 0 ,6];
foreach ($numbers as $number) {
    if ($number > 0) {
        echo "$number - Положительное"
    }else {
        echo "$number - Отрицательное"
    };
};
// 3
$number = 5;
for ($i = 1; $i <= 10; $i++) {
    echo "5 * $i = " . (5 * $i) . "<br>";
    };
// 4
$students = ["Мария" => 75, "Алексей" => 90, "Игорь" => 86];
foreach ($studens as $name => $score) {
if ($score => 50) {
    echo "$name сдал экзамен!"
} else {
    echo "$name не сдал экзамен"
}
}

    