<?php
echo "enter first number: ";
$a = readline();
echo "enter second number: ";
$b = readline();

echo "choose an action\n";
echo "1. display two numbers\n";
echo "2. perform addition\n";
$action = readline();

if($action == 1) display();
else if($action == 2) add();
else if($action == 3) substract();
else if($action == 4) divide();
else if($action == 5) exponentiate();

function display($a, $b) {
    //эм и это тоже ок
}
function add($a, $b) {
    
}
function substract($a, $b) {
    
}
function divide($a, $b) {
    //переделывай
}
function exponentiate($a, $b) {
    
}