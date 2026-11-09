# App03 - Calculadora Programacion Orientada a Objetos y Excepciones

Este repositorio es una evolución del ejercicio básico de la calculadora. En esta versión se han aplicado conceptos avanzados de **Programación Orientada a Objetos (POO)** y **Control de Excepciones Sencillas** en PHP.

## Características

- **Clase Base (`Calculadora`)**: Encapsula las propiedades y los métodos para la suma, resta, multiplicación y división.
- **Herencia (`CalculadoraCientifica`)**: Extiende la clase base añadiendo las operaciones de potencia y raíz cuadrada.
- **Control de Excepciones (`try...catch`)**:
  - Evita la división por cero.
  - Evita calcular la raíz cuadrada de números negativos.
  - Valida que la edad introducida sea un número, no sea negativa y no supere los 130 años.

## Estructura del Proyecto

app03/
├── assets/                  # Bootstrap local (CSS y JS)
├── index.html               # Menú principal con las tarjetas de los ejercicios
├── pags/                    # Frontend (Formularios visuales)
│   ├── calculadora_basica.php
│   ├── calculadora_cientifica.php
│   ├── mayoria_edad.php
│   └── numeros.php
└── PHP/                     # Backend y Lógica
    ├── includes/
    │   └── calculadora.php  # Clases POO
    ├── ej1_calc.php         # Backend Calculadora Básica
    ├── ej2_cientifica.php   # Backend Calculadora Científica
    ├── ej3_edad.php         # Backend Mayoría de Edad
    └── ej4_numeros.php      # Backend Números Asc/Desc