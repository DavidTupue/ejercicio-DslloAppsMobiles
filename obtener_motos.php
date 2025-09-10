<?php
header('Content-Type: application/json');

$motos = [
  [
    "nombre" => "Yamaha MT-03",
    "precio" => "5.000 USD",
    "imagen" => "mt.jpeg"
  ],
  [
    "nombre" => "KTM Duke 390",
    "precio" => "6.200 USD",
    "imagen" => "duke.jpeg"
  ],
  [
    "nombre" => "Honda CB500F",
    "precio" => "6.800 USD",
    "imagen" => "honda.jpeg"
  ]
];

echo json_encode($motos);
?>
