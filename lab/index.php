
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cậu Béos Foods</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5" >
                <a class="navbar-brand" href="#!">
                <i><img src="assets/favicon.png" width="30px" height="30px"/> Cậu Béos Foods</i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4" id="main-menu">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://localhost/lab/#!">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="About us">About</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">
                                  <i class="bi bi-telephone"></i>
                                 Hotline: 082 5230898 </a> </li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="https://www.facebook.com/C%E1%BA%ADu-B%C3%A9os-Food-104369208778114" target="_blank">
                                 <i class="bi bi-facebook"></i>
                                 Cậu Béos page
                                </a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="  https://www.google.com/maps/place/155+B%E1%BA%BFn+V%C3%A2n+%C4%90%E1%BB%93n,+Ph%C6%B0%E1%BB%9Dng+6,+Qu%E1%BA%ADn+4,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7622452,106.6968588,17z/data=!3m1!4b1!4m5!3m4!1s0x31752f14a6e45b39:0x3c2a73b846bd6da4!8m2!3d10.7622399!4d106.6990475?hl=vi-VN" target="_blank" title="Map">
                                  <i class="bi bi-map"></i>
                                 Location</a> </li>
                            </ul>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="About products">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="http://localhost/lab/#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="http://localhost/lab/bestseller.php">Best seller</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="http://localhost/lab/sale.php">Sale</a></li>
                                 <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="http://localhost/lab/new.php">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                   
                    <form class="d-flex" id="main-menu">
                        <button class="btn btn-outline-dark" type="submit">
                            <a  class="bi-cart-fill me-1 text-dark" href="http://localhost/lab/cart.php" style="text-decoration: none" >
                       		Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> </a>
                        </button>
                            &nbsp; 
                         <input type="text" name="name" placeholder="Search" /><br/> 
                         &nbsp; 
                         <button name="button" type="button" ><i class="bi-search"></i> Search</button>
                         
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4" id="main-menu">
                        <li class="nav-item"><a class="btn btn-secondary btn-lg w-100 rounded-pill" aria-current="page" href="http://localhost/login/lg.php">Login <i class="bi-box-arrow-in-right"></i></a></li></ul>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Cố định thanh menu-->
        <style>
            ul#main-menu{
                display: flex;
            }
            ul#main-menu a {
                display: block;
            }
            form#main-menu{
                display: flex;
            }
            form#main-menu a {
                display: block;
            }
        </style>
        <!-- Header-->
        <header class="bg-dark py-5" >
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Cậu Béos Food</h1>
                    <p class="lead fw-normal text-white-50 mb-0"> We always bring the best service </p>
                </div>
            </div>
        </header>
        <style>
            header{
                background-image: url("https://png.pngtree.com/background/20210710/original/pngtree-food-overlooking-the-background-banner-picture-image_1055258.jpg");
            }
            </style>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"> Best seller</div>

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/cckg.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Da cá trứng muối</h5>
                                    &nbsp
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    85.000 VNĐ
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="http://localhost/lab/cart.php"> Buy</a>
                                     &nbsp
                                    <a class="btn btn-outline-dark mt-auto" href="#"> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"> Best seller</div>

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/3.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Da heo muối ớt</h5>
                                    &nbsp
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    85.000 VNĐ
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="http://localhost/lab/cart.php"> Buy</a>
                                     &nbsp
                                    <a class="btn btn-outline-dark mt-auto" href="#"> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 3rem">Best Seller</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/RBCT.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Rong biển cháy tỏi</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">55.000</span>
                                    50.000 VNĐ
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="http://localhost/lab/cart.php"> Buy</a>
                                     &nbsp
                                    <a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/6.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Cơm cháy mix khô gà</h5>
                                    <!--review-->
                                     <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="haft-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                   60.000 VNĐ
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="http://localhost/lab/cart.php"> Buy</a>
                                     &nbsp
                                    <a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"> Sale</div>

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/4.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Khô gà lá chanh</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">75.000</span>
                                    70.000 VNĐ
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="http://localhost/lab/cart.php"> Buy</a>
                                     &nbsp
                                    <a class="btn btn-outline-dark mt-auto" href="#"> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                             <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"> Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/5.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nui bò lá chanh</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">65.000</span>
                                    60.000 VNĐ
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                     <a class="btn btn-outline-dark mt-auto" href="http://localhost/lab/cart.php"> Buy</a>
                                     &nbsp
                                    <a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                     <div class="col mb-5">
                        <div class="card h-100">
                             <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"> Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/cc.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Cơm cháy bịch</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">9.000</span>
                                    6.000 VNĐ
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                     <a class="btn btn-outline-dark mt-auto" href="http://localhost/lab/cart.php"> Buy</a>
                                     &nbsp
                                    <a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-top text-white"><a class="bi-house "></a> Address: 155 Ben Van Don, ward 6, district 4, HCM city</p> </div> 
            <div class="container"><p class="m-0 text-top text-white"><a class="bi-telephone "></a> Contact us: 0825230898 - 0818765425</p></div>
            <div class="container"><p class="m-0 text-top text-white"><a class="bi-facebook "></a> Fanpage: <a href="https://www.facebook.com/C%E1%BA%ADu-B%C3%A9os-Food-104369208778114">Cậu Béos Food</a></p></div>
            <div class="container"><p class="m-0 text-center text-white">Cậu Béos Food &copy; 2022 · All rights 
            reserved</p></div>
</script>

           
        </footer>
     
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <div id="myBtn">
            <i class="bi-arrow-up-circle-fill" style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; border-radius: 50%; position: fixed; bottom: 40px; right: 20px; cursor: pointer;"></i>
        </div>
        <style>
	#myBtn {
		width: 40px;
		height: 40px;
		background-color: tomato;
        color: #fff;
		display: flex;
		justify-content: center;
		align-items: center;
		border-radius: 50%;
		position: fixed;
		bottom: 40px;
		right: 20px;
		cursor: pointer;
}
</style>   
    <script>
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
 
if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
document.getElementById("myBtn").style.display = "block";
} else {
document.getElementById("myBtn").style.display = "none";
}
}
 
document.getElementById('myBtn').addEventListener("click", function(){
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
});</script>
</html>
