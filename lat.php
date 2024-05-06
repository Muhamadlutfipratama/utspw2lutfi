php
<?php

// Definisikan sebuah kelas Shape (bentuk) dengan metode getArea
abstract class Shape {
    abstract public function getArea();
}

// Definisikan dua kelas turunan dari Shape: Rectangle (persegi panjang) dan Circle (lingkaran)
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Buat objek dari kelas Rectangle dan Circle
$rectangle = new Rectangle(5, 10);
$circle = new Circle(5);

// Polimorfisme: panggil metode getArea pada objek tanpa perlu tahu jenis objeknya
echo "Luas Rectangle: " . $rectangle->getArea() . "\n";
echo "Luas Circle: " . $circle->getArea();

