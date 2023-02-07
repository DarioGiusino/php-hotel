<?php
//Hotels list
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
  ],

];
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Hotels</title>
</head>

<body>
  <!-- titolo pagina -->
  <h1 class="text-center my-4">Lista di Hotel</h1>

  <!-- form seleziona parcheggio -->
  <form class="d-flex align-items-center container gap-2" action="" method="GET">
    <label for="parking">Parcheggio</label>
    <select id="parking" class="form-select me-3" name="parking">
      <option value="" selected>---</option>
      <option value="yes">Sì</option>
      <option value="no">No</option>
    </select>

    <label for="rating">Voto</label>
    <select id="rating" class="form-select" name="rating">
      <option value="" selected>---</option>
      <option value="plus2">da 2 in sù</option>
      <option value="plus3">da 3 in sù</option>
      <option value="plus4">da 4 in sù</option>
      <option value="plus5">solo 5/5</option>
    </select>

    <button class="btn btn-primary">Invia</button>
  </form>

  <!-- tabella di hotel -->
  <div class="container mt-4">
    <table class="table table-dark table-striped">
      <!-- prima riga tabella, descrizione colonne -->
      <thead>
        <tr>
          <th scope="col">Nome Hotel</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Parcheggio</th>
          <th scope="col">Voto</th>
          <th scope="col">Distanza dal centro</th>
        </tr>
      </thead>
      <!-- body tabella, generati in base all'array dato tutte le righe degli hotel con tutte le descrizioni -->
      <tbody>
        <?php foreach ($hotels as $hotel) : ?>
          <tr>
            <td scope="row"><?= $hotel['name'] ?></td>
            <td><?= $hotel['description'] ?></td>
            <?php if ($hotel['parking']) : ?>
              <td>Sì</td>
            <?php else : ?>
              <td>No</td>
            <?php endif; ?>
            <td><?= $hotel['vote'] ?>/5</td>
            <td><?= $hotel['distance_to_center'] ?> Kms</td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>