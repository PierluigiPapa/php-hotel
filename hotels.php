<?php

$hotels = [
  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ]
];

$filteredHotels = [];

foreach ($hotels as $hotel) {
  
  $parkingRequired = isset($_GET['parking']) && $_GET['parking'] === 'true';
  
  
  $rating = isset($_GET['rating']) ? $_GET['rating'] : 1;
  
  if ((!$parkingRequired || $hotel['parking']) && $hotel['vote'] >= $rating) {
    $filteredHotels[] = $hotel;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Hotel</title>
  
  <!-- LINK BOOTSTRAP  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-warning">
  <div class="container">
    <h1 class="text-center text-dark mb-4">LISTA DEGLI HOTEL</h1>
    
    <div class="d-flex justify-content-center">
    <!-- // SECTION TABLE // -->
    <table class="table mt-3">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Descrizione</th>
          <th>Parcheggio</th>
          <th>Voto</th>
          <th>Distanza dal centro</th>
        </tr>
      </thead>
      
      <tbody>
        <?php
        
        foreach ($filteredHotels as $hotel) {
          echo "<tr>";
          echo "<td>{$hotel['name']}</td>";
          echo "<td>{$hotel['description']}</td>";
          echo "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
          echo "<td>{$hotel['vote']}</td>";
          echo "<td>{$hotel['distance_to_center']} km</td>";
          echo "</tr>";
        }
        ?>
        </tbody>
      </table>
      <!-- // SECTION TABLE // -->
    </div>
  </div>

<!-- LINK JAVASCRIPT BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>