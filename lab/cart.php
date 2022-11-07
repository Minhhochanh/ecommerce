<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cậu Béo Foods</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/cart.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body>
  <main class="page">
     <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">
                <i><img src="assets/favicon.png" width="30px" height="30px"/> Cậu Béos Foods</i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
            <form class="d-flex">
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="btn btn-primary btn-lg w-100 rounded-pill" aria-current="page" href="http://localhost/lab/#!"><i class="bi bi-arrow-return-left"> Continute shopping</i></a></li>
                      </ul>
                </div>
            </form>
        </nav>

    <section class="shopping-cart dark">
      <div class="container">
            <div class="block-heading">
              <h2><i class="bi-cart">Shopping Cart</i></h2>
            </div>
            <div class="content">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="items">
                 <div class="product">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="img-fluid mx-auto d-block image" src="assets/img/image.jpg">
                    </div>
                    <div class="col-md-8">
                      <div class="info">
                        <div class="row">
                          <div class="col-md-5 product-name">
                            <div class="product-name">
                              <a href="#">Lorem Ipsum dolor</a>
                              <div class="product-info">
                                <div>Describe: <span class="value">info</span></div>
                                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 quantity">
                            <label for="quantity">Quantity:</label>
                            <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                          </div>
                          <div class="col-md-3 price">
                            <span>$120</span>
                              <button type="button" class="btn btn-link btn-xs">
                  <span class="glyphicon glyphicon-trash"> </span>
                </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="product">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="img-fluid mx-auto d-block image" src="assets/img/image.jpg">
                    </div>
                    <div class="col-md-8">
                      <div class="info">
                        <div class="row">
                          <div class="col-md-5 product-name">
                            <div class="product-name">
                              <a href="#">Lorem Ipsum dolor</a>
                              <div class="product-info">
                                <div>Describe: <span class="value">info</span></div>
                                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 quantity">
                            <label for="quantity">Quantity:</label>
                            <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                          </div>
                          <div class="col-md-3 price">
                            <span>$120</span>
                              <button type="button" class="btn btn-link btn-xs">
                  <span class="glyphicon glyphicon-trash"> </span>
                </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="img-fluid mx-auto d-block image" src="assets/img/image.jpg">
                    </div>
                    <div class="col-md-8">
                      <div class="info">
                        <div class="row">
                          <div class="col-md-5 product-name">
                            <div class="product-name">
                              <a href="#">Lorem Ipsum dolor</a>
                              <div class="product-info">
                                <div>Describe: <span class="value">info</span></div>
                                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 quantity">
                            <label for="quantity">Quantity:</label>
                            <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                          </div>
                          <div class="col-md-3 price">
                            <span>$120</span>
                              <button type="button" class="btn btn-link btn-xs">
                  <span class="glyphicon glyphicon-trash"> </span>
                </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-md-12 col-lg-4">
              <div class="summary">
                <h3>Summary</h3>
                <div class="summary-item"><span class="text">Subtotal</span><span class="price">$360</span></div>
                <div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
                <div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
                <div class="summary-item"><span class="text">Total</span><span class="price">$360</span></div>
                
                <li>
                  <form action="./info.php" method="post">
                   <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill" onclick="#!" >Payment</button>
                  </form>
                </li>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
 <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-top text-white"><a class="bi-house "></a> Address: 155 Ben Van Don, ward 6, district 4, HCM city</p> </div> 
            <div class="container"><p class="m-0 text-top text-white"><a class="bi-telephone "></a> Contact us: 0825230898 - 0818765425</p></div>
            <div class="container"><p class="m-0 text-top text-white"><a class="bi-facebook "></a> Fanpage: <a href="https://www.facebook.com/C%E1%BA%ADu-B%C3%A9os-Food-104369208778114">Cậu Béos Food</a></p></div>
            <div class="container"><p class="m-0 text-center text-white">Cậu Béos Food &copy; 2022 · All rights 
            reserved</p></div>
</script>

           
        </footer>
</html>
