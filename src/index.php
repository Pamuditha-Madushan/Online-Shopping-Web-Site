<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fashion Store Home</title>
     <link rel="stylesheet" href="new.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="Style1.css">
</head>

<body>

  
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="index.php">Fashion Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="products.php">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="checkout.php">Checkout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <section class="sec1">
            <div class="gradient">
            <video autoplay muted loop id="myvideo"><source src="T-Shirt%20Cinematic%20Video%20__%20Shanographer%20__%20Gwalior%20__%202020_1.mp4" type="video/mp4"></video>
            
            </div>
            
            <div class="s1">
                <div class="col">
                    <h1>FASHION</h1>
                    <p>Oreder Your Company For T shirts. You want T shirt For Your Team You can Order Now.</p>
                    <a href="products.php" class="btn btn-info homebtn"><i></i>Shop Now</a>


                </div>


            </div>

        </section>
      <section class="sec2">
          <div class="con">
          
          <img src="sec2.jpg" height="600px" width="100%" class="myimge">
          <div class="text1">The Sri Lankan Advantage<br>Our strategic Sri Lankan location offers many advantages such as shorter lead times, cost effective shipping and a workforce with specialized expertise across a broad range of apparel categories. GSP Plus puts us at an advantage, enabling us to export products duty free to the European Union.
The Sri Lankan apparel industry prides itself on its ethical business standards and fair labor initiatives and we uphold these values by manufacturing garments with responsibility, conscience and care.</div>
              
          </div>
         
           

        </section>
   
        
         
        
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // Send product details in the server
                $(".addItemBtn").click(function(e) {
                    e.preventDefault();
                    var $form = $(this).closest(".form-submit");
                    var pid = $form.find(".pid").val();
                    var pname = $form.find(".pname").val();
                    var pprice = $form.find(".pprice").val();
                    var pimage = $form.find(".pimage").val();
                    var pcode = $form.find(".pcode").val();

                    var pqty = $form.find(".pqty").val();

                    $.ajax({
                        url: 'action.php',
                        method: 'post',
                        data: {
                            pid: pid,
                            pname: pname,
                            pprice: pprice,
                            pqty: pqty,
                            pimage: pimage,
                            pcode: pcode
                        },
                        success: function(response) {
                            $("#message").html(response);
                            window.scrollTo(0, 0);
                            load_cart_item_number();
                        }
                    });
                });

                // Load total no.of items added in the cart and display in the navbar
                load_cart_item_number();

                function load_cart_item_number() {
                    $.ajax({
                        url: 'action.php',
                        method: 'get',
                        data: {
                            cartItem: "cart_item"
                        },
                        success: function(response) {
                            $("#cart-item").html(response);
                        }
                    });
                }
            });

        </script>
    
     <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company Name © 2018</p>
        </footer>
    </div>

    </body>

</html>
