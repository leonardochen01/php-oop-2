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
      $dogFood = new DogProduct('Cibo per cani', 'https://i.ebayimg.com/images/g/hsoAAOSw~IBiTBdR/s-l500.jpg', 14.99);
      $dogToy = new DogProduct('Giocattolo per cani', 'https://staticfanpage.akamaized.net/wp-content/uploads/sites/5/2020/04/1.jpg', 8.99);
      $dogBed = new DogProduct('Cuccia per cani', 'https://m.media-amazon.com/images/I/71-tsDiw8iL._AC_SY355_.jpg', 39.99);
      $products[] = $dogFood;
      $products[] = $dogToy;
      $products[] = $dogBed;
      
      //oggetti gatti
      $catFood = new CatProduct('Cibo per gatti', 'https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1675352077/products/pim/8009470059817_B1_ITA/lechat-excellence-cibo-secco-per-gatti-sterilizzati-al-gusto-pollo', 9.99);
      $catToy = new CatProduct('Giocattolo per gatti', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg7x5mO8FQIXGaZRiz8Lbl6d04RrqkgDlljQ&usqp=CAU', 3.99);
      $catBed = new CatProduct('Cuccia per gatti', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDPMT_WOt413CLVg1H0nr7xu3Wydm11NRqXg&usqp=CAU', 19.99);
      $products[] = $catFood;
      $products[] = $catToy;
      $products[] = $catBed;

      //ciclo foreach delle carte contenente le informazioni dei prodotti
      foreach ($products as $product) {
        echo '<div class="col-4">'; 
        echo '  <div class="card">'; 
        echo '    <img src="' . $product->getImage() . '" alt="' . $product->getTitle() . '">';
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