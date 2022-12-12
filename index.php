<?php
require_once __DIR__ . "/models/Products.php";
require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/prod.php";



   
    $guinzaglio = new Prod("Guinzaglio","5.99$","Rosso","Tessuto","https://images.unsplash.com/photo-1509924295413-6722539acbb3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80","giochi");
   

    $cucciaGrande = new prod("Cuccia grande","49.99","Gialla","Legno","https://images.unsplash.com/photo-1546975490-e8b92a360b24?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80","giochi");
    

    $greengunzaglio = new Prod("guinzaglio","5.99$","Rosso","Tessuto","https://images.unsplash.com/photo-1509924295413-6722539acbb3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80","giochi");
    

    $cucciapiuccoola = new prod("Cuccia grande","49.99","Gialla","Legno","https://images.unsplash.com/photo-1546975490-e8b92a360b24?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80","giochi");
   
    $arrayprods =[
        $guinzaglio,
        $cucciaGrande,
        $greengunzaglio,
        $cucciapiuccoola
    ];



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eccomerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
        <section class="container">
                    <h2 class="text-center">Products</h2>
                    <div class="row row-cols-4">
                        <?php foreach ($arrayprods as $prodarray) { ?>
                            <div class="col">
                                <div class="card">
                                    <img src="<?php echo $prodarray->img;?>" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><?php echo $prodarray->printname(); ?></h5>
                                        <p><?php echo $prodarray->PrintProd(); ?></p>
                                        <a href="#" class="btn btn-primary">Buy</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
        </section>
  </body>
</html>