<?php
function saludo () {
echo "A la orden comandante <br>";
}
function disparar ($arma) {
echo "Hola Soy Victor y soy del rango cadete, listo para la batalla con mi $arma <br>";
}
function sumar ($a, $b) {
return $a + $b;
}
saludo ();
disparar ("AK-47");
echo "Tengo "  . sumar(4,1);
echo " cartuchos y " . sumar(15,5);
echo " balas en el cartucho";
?>