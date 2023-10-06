<?php
/* ----- EXPLICACION---------
Este código en PHP define una estructura de árbol binario y una función para recorrer 
ese árbol e imprimir sus valores en un orden específico. El propósito de este código 
es mostrar cómo funciona el recorrido inorden de un árbol binario.
Aquí hay una descripción de las partes principales del código:
class Nodo: Define una clase llamada Nodo que representa un nodo en el árbol binario. 
Cada nodo tiene tres propiedades: $valor (almacena el valor del nodo), $izquierda 
(apunta al hijo izquierdo del nodo) y $derecha (apunta al hijo derecho del nodo).
function recorrerArbol($nodo): Esta es una función recursiva que recorre el árbol 
binario en un orden específico llamado "inorden". El recorrido inorden significa que 
primero se recorre el subárbol izquierdo, luego se visita el nodo actual y finalmente 
se recorre el subárbol derecho. La función toma un nodo como argumento y realiza el recorrido 
inorden llamándose a sí misma de manera recursiva.
*/ 
class Nodo1 {
    public $valor;
    public $izquierda;
    public $derecha;
    function __construct($valor) {
        $this->valor = $valor;
        $this->izquierda = null;
        $this->derecha = null;
    }
}
function recorrerArbol($nodo) {
    if ($nodo != null) {
        recorrerArbol($nodo->izquierda);
        echo $nodo->valor . ' ';
        recorrerArbol($nodo->derecha);
    }
}
$raiz = new Nodo1(1);
$raiz->izquierda = new Nodo1(2);
$raiz->derecha = new Nodo1(3);
$raiz->izquierda->izquierda = new Nodo1(4);
$raiz->izquierda->derecha = new Nodo1(5);
recorrerArbol($raiz); // segun debe de mostrar "4 2 5 1 3"
?>