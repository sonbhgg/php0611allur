<?php
echo "enter first number: ";
$a = readline();
echo "enter second number: ";
$b = readline();

echo "choose an action\n";
echo "1. display two numbers\n";
echo "2. perform addition\n";
echo "3. perform substraction\n";
echo "4. perform division\n";
echo "5. perform exponentiation\n";
$action = readline();

if($action == 1) display();
else if($action == 2) add();
else if($action == 3) substract();
else if($action == 4) divide();
else if($action == 5) exponentiate();

function display($a, $b) {

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