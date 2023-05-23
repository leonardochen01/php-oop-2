<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Pet Store</title>
</head>
<body>
<div class="container">
  <h1>Prodotti per cani e gatti</h1>
  <div class="row">
    <?php
      //include classi dei prodotti
      require_once 'classes/Product.php';
      require_once 'classes/DogProduct.php';
      require_once 'classes/CatProduct.php';

      //oggetti cani
      $dogFood = new DogProduct('Cibo per cani', 'data:image/jpeg;base64,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', 14.99);
      $dogToy = new DogProduct('Giocattolo per cani', 'https://staticfanpage.akamaized.net/wp-content/uploads/sites/5/2020/04/1.jpg', 8.99);
      $dogBed = new DogProduct('Cuccia per cani', 'https://m.media-amazon.com/images/I/71-tsDiw8iL._AC_SY355_.jpg', 39.99);
      $products[] = $dogFood;
      $products[] = $dogToy;
      $products[] = $dogBed;
      
      //oggetti gatti
      $catFood = new CatProduct('Cibo per gatti', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOcBDGmWuiHPWCfUzDjyeR3vUDZvrs8zg12YGwOr0cJ87AfzeZvq75q2yEnbNJfN4GDR8&usqp=CAU', 9.99);
      $catToy = new CatProduct('Giocattolo per gatti', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg7x5mO8FQIXGaZRiz8Lbl6d04RrqkgDlljQ&usqp=CAU', 3.99);
      $catBed = new CatProduct('Cuccia per gatti', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDPMT_WOt413CLVg1H0nr7xu3Wydm11NRqXg&usqp=CAU', 19.99);
      $products[] = $catFood;
      $products[] = $catToy;
      $products[] = $catBed;

      //ciclo foreach delle carte contenente le informazioni dei prodotti
      foreach ($products as $product) {
        echo '<div class="col-4 my-3">'; 
        echo '  <div class="card">'; 
        echo '    <div class="image-container"><img class="image-fluid" src="' . $product->getImage() . '" alt="' . $product->getTitle() . '"></div>';
        echo '    <div class="card-body">';
        echo '      <p class="card-text">Prezzo: €' . $product->getPrice() . '</p>';
        echo '      <h5 class="card-title">' . $product->getTitle() . '</h5>';
        echo '      <a href="#" class="btn btn-primary">Aggiungi al carrello</a>';
        echo '    </div>'; //div card body
        echo '  </div>';  //div card
        echo '</div>'; //div colonna
      }        
      ?>
    </div>
  </div>
</body>
</html>