<?php
namespace Airam\Tema6\Controllers;

class CarController {
  
  public function index() {
    // echo "Esto es index de CarController";
    global $blade;
    //TRATAMIENTO DE LOS DATOS
    echo $blade->view()->make('car.index', ['name' => 'Airam'])->render();
  }

  public function show($params) {
    $matricula = $params['matricula'];
    // echo "Esto es show de CarController: mostrando el coche con: $matricula";
    global $blade;
    $name ='Airam';
    // echo $blade->view()->make('carshow', ['matricula' => $matricula, 'name' => $name])->render();
    echo $blade->view()->make('car.show', compact('matricula', 'name'))->render();

  }

  public function showCarClient($params) {
    $id = $params['id'];
    echo "Muestra todos los coches del cliente $id";
  }
}