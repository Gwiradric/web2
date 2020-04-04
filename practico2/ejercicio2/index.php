<?php

require_once("Figura.php");
require_once("Cuadrado.php");
require_once("Triangulo.php");
require_once("Circulo.php");
require_once("Figuras.php");
require_once("AreaFilter.php");

class Index
{
    private $figuras;

    function __construct()
    {
        $this->figuras = new Figuras();

        $this->figuras->clear();

        $this->figuras->insert(new Cuadrado(3.0));
        $this->figuras->insert(new Cuadrado(6.3));
        $this->figuras->insert(new Cuadrado(8.0));
        $this->figuras->insert(new Cuadrado(9.0));
        $this->figuras->insert(new Triangulo(1.1, 3.5));
        $this->figuras->insert(new Triangulo(9.0, 0.1));
        $this->figuras->insert(new Triangulo(4.0, 5.0));
        $this->figuras->insert(new Triangulo(5.0, 5.0));
        $this->figuras->insert(new Circulo(1.5));
        $this->figuras->insert(new Circulo(2.1));
        $this->figuras->insert(new Circulo(3.0));
        $this->figuras->insert(new Circulo(4.4));
    }

    function home()
    {
        echo
            '<h1>Crear Circulo</h1>
            <form action="circulo" method="post">
                <input type="number" name="radio" id="radio" placeholder="Radio" step="0.01">
                <input type="submit" value="Enviar">
            </form>
            <br>
            <h1>Buscar elemento por posicion</h1>
            <form action="buscar/posicion" method="post">
                <input type="number" name="posicion" id="posicion" placeholder="Posición">
                <input type="submit" value="Enviar">
            </form>
            <br>
            <h1>Buscar elemento por area menor a:</h1>
            <form action="buscar/area" method="post">
                <input type="number" name="area" id="area" placeholder="Area" step="0.01">
                <input type="submit" value="Enviar">
            </form>
            ';
    }


    function crearCirculo()
    {
        $radio = $_POST['radio'];

        $circulo = new Circulo($radio);

        $this->figuras->insert($circulo);

        echo "<ul>";


        for ($i=0; $i < count($_SESSION['figuras']); $i++) { 
            # code...
            echo '<li>' . $this->figuras->get($i)->ToString() . '</li>';
        }

        echo "</ul>";
    }

    function mostrarFigura()
    {
        $posicion = $_POST['posicion'];

        echo "La figura $posicion es: " . $this->figuras->get($posicion)->ToString() . "<br><br>";
    }

    function buscarAreaMenor()
    {
        $area = $_POST['area'];

        echo "Las figuras con area menor a $area son:<ul>";

        foreach ($this->figuras->getBy(new AreaFilter($area)) as $figura)
            echo "<li>" . $figura->ToString() . "</li>";

        echo "</ul>";
    }
}
