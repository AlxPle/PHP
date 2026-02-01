<?php
# PHP tags
// Это стандартный способ открыть PHP-блок

echo "Hello, world!";
// Короткий тег (не рекомендуется, но встречается):
?>
<?php
# Comments
// Однострочный комментарий
/* Многострочный комментарий
    продолжается здесь */
/** Документирующий комментарий
 * используется для генерации документации
 */

?>
<?php
# Output data

print "This is a print statement.\n ";
var_dump(["apple", "banana", "cherry"]);
print_r(["name" => "John", "age" => 30]);
?>
<?php
# Строгая типизация
//declare(strict_types=1);

function add(int $a, int $b): int {
    return $a + $b;
}   
echo add(2, 3); // 5
?>