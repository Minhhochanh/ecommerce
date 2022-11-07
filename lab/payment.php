<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cậu Béo Foods</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <script src="https://kit.fontawesome.com/f7ccff0c24.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./paymentform.css">
    <script src="http://kit.fontawesome.com/a076d05399.js"></script>
</head>
</head>
        <div class="container">
                <div class="it">
                    <div class="first">
                        <div class="wrapper">
                            <div class="component1"><b>Payment Method</b></div>
                            <div class="component2"><span id="result"></span></div>
                            <div class="component3">1 item (expand)</div>
                            <div class="component4">inc. VAT</div>
                        </div>
                    </div>

                    <div class="second">
                        <form >
                         <div class="icons">
                                <center>
                                <img src="https://i.imgur.com/2ISgYja.png" width="55">
                                <img src="https://i.imgur.com/W1vtnOV.png" width="55">
                                <img src="https://i.imgur.com/35tC99g.png" width="55">
                                <img src="https://i.imgur.com/2ISgYja.png" width="55">
                            </center>
                              </div>
                              <style>
                                  .icons{
                                    height: 70px;
                                    background-color: #FFCC99;

                                  }
                              </style>

                        </form>

                        <div class="grid1">
                            <nav class="header__navbar2">
                                <ul class="header__navbar-list2">
                                    <li class="header__navbar-item2">
                                        <i class="far fa-circle"style="height: 19px; color:#225486;"></i>
                                        <font color="#225486"><b> Credit card</b><small> - credit or debt</small></font>
                                    </li>
                                </ul>
                                <ul class="header__navbar-list2">
                                    <li class="header__navbar-item2"><img src="assets/visa.jpg" alt=" " style="height: 30px; width: 55px;"> </li>

                                </ul>

                            </nav>
                        </div>
                    </div>
                    <div class="third">
                        <div class="inside">
                            <form >
                                <label for="fname" id="cardname">Card Number</label><br>
                            <img src="assets/credit.jpg" alt=" anh" style="height:21px; width: 22px;">

                                <input class="nhapso" type="number" id="inputCard" placeholder="Input card number"><br>
                                <style>
                                    .nhapso{
                                        width: 70%;
                                    }
                                </style>

                            </form>
                        </div>
                        <div class="div_left">
                           MM/YY
                            <br>
                            <input type="month" class="goup2">
                        </div>
                        <div class="div_right">
                            CVV <br>
                            <input type="text" class="goup1">
                        </div>
                        <div class="inside_other">
                            <a href="#" id="button" class="button"><b>Pay the order</b></a>
                        </div>
                    </div>
                    <div class="fourth">
                        <form method="get" action="./cart.php">
                            <input type="submit" class="h" value="Back to cart">
                        </form>
                    </div>
                              
                        </div>
                    </div>
                    </div>
                        <!--Modal layout-->
    <div class="bg-modal">
        <div class="modal-content">
            <div class="close">+</div>
            <h2><b>RECEIPT</b></h2>
            <div class="line"></div>
            <h4><b>Customer info</b></h4>
            <div class="df">
                <div class="df__item">
                    <h5><b>First name</b></h5>
                </div>
                <div class="df__item">
                    <span id="fnm" class="little"></span>
                </div>
            </div>
            <div class="df2">
                <div class="df2__item">
                    <h5><b>Last name</b></h5>
                </div>
                <div class="df2__item">
                    <span id="lnm" class="little"></span>
                </div>
            </div>
            <div class="df3">
                <div class="df3__item">
                    <h5><b>Telephone number</b></h5>
                </div>
                <div class="df3__item">
                    <span id="tphone" class="little"></span>
                </div>
            </div>
            <div class="df4">
                <div class="df4__item">
                    <h5><b>Notes</b></h5>
                </div>
                <div class="df4__item">
                    <span id="notefor" class="little"></span>
                </div>
            </div>
            <div class="line"></div>
            <h4><b>Order info</b></h4>
            <div class="df5">
                <div class="df5__item">
                    <h5><b>Total price</b></h5>
                </div>
                <div class="df5__item">
                    <span id="totalprice2" class="little"></span>
                </div>
            </div>
            <div class="line"></div>
            <i class="fas fa-check"></i>

        </div>

    </div>
        
    <script>
        document.getElementById('button').addEventListener('click', function() {
            document.querySelector('.bg-modal').style.display = 'flex'
        });
        document.querySelector('.close').addEventListener('click', function() {
            document.querySelector('.bg-modal').style.display = 'none';
        });
        document.getElementById('result').innerHTML = localStorage.getItem('textvalue');
        document.getElementById('totalprice2').innerHTML = localStorage.getItem('textvalue');



        window.addEventListener('load', () => {
            const fnam = localStorage.getItem('sm');
            document.getElementById('fnm').innerHTML = fnam;
        })
        window.addEventListener('load', () => {
            const lnam = localStorage.getItem('me');
            document.getElementById('lnm').innerHTML = lnam;
        })
        window.addEventListener('load', () => {
            const tel = localStorage.getItem('tlp');
            document.getElementById('tphone').innerHTML = tel;
        })
        window.addEventListener('load', () => {
            const noting = localStorage.getItem('nt');
            document.getElementById('notefor').innerHTML = noting;
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
