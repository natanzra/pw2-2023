<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
  $fruits = [
    ["number" => 1,
    "name" => "Strawberry",
    "color" => "Merah",
    "stock" => 42,
    "price" => 35000,
    "description" => "Buah kecil berwarna merah yang segar"],
    ["number" => 2,
    "name" => "Alpukat",
    "color" => "Hijau",
    "stock" => 15,
    "price" => 28000,
    "description" => "Buah berwarna hijau yang segar"],
    ["number" => 3,
    "name" => "Durian",
    "color" => "Kuning",
    "stock" => 7,
    "price" => 30000,
    "description" => "Buah kecil dengan kulit yang tajam diluar"],
    ["number" => 4,
    "name" => "Anggur",
    "color" => "Ungu",
    "stock" => 32,
    "price" => 40000,
    "description" => "Buah kecil dengan rasa yang asam campur manis"],
    ["number" => 5,
    "name" => "Jeruk",
    "color" => "Oranye",
    "stock" => 27,
    "price" => 20000,
    "description" => "Buah kecil dengan rasa yang manis"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="text-center table table-striped table-hover table-dark font-light">
      <thead class="thead-dark">
        <tr>
          <th>NO</th>
          <th>Name</th>
          <th>Colour</th>
          <th>Stock</th>
          <th>Price</th>
          <th>Description</th>
        </tr>
      </thead>

      <tbody class = "text-center table-danger">
        <?php
        foreach ($fruits as $fruit) {
            echo '<td>'.$fruit["number"].'</td>';
            echo '<td>'.$fruit["name"].'</td>';
            echo '<td>'.$fruit["color"].'</td>';
            echo '<td>'.$fruit["stock"].'</td>';
            echo '<td>'.$fruit["price"].'</td>';
            echo '<td>'.$fruit["description"].'</td>';
            echo '<tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>