<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" type="png/jpg" href="logo.jpg">
  <link rel="stylesheet" type="text/css" href="other.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shopping Cart System</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
  <!-- Navbar start -->
  <div style="position: fixed;z-index: 10;width: 71px;height: 40px;background:#20AE8B;bottom: 200px;border-radius: 0% 20% 20% 0%">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart" style="color: white;"></i> <span id="cart-item" class="badge badge-danger"></span></a>
       </div>
  <!-- Navbar end -->

  <header class="second">
<div class="col-sm-3-6 col-md-9-12">
  <div class="text-center" style="background:linear-gradient(75deg,blue,lightgreen,lightgreen,lightgreen,lightgreen,blue);">
<span id="as">&#65021;<br>In the Name of Allah the Most Beneficent and the Most Merciful</span>
</div>
</div>
</header>


<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <img src="loa.png" width="270px" height="85px">
    <button class="navbar-toggler collapsed fa-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ml-auto mb-2 mb-lg-0" style="margin-top: 2px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php.html" style="font-family: serif;font-size: 18px;"><b>HOME</b></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            <b style="color: black;" >PRODUCTS</b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:#ECEDEE; ">
            <li><a class="dropdown-item" href="hoo.php.html">Honey</a></li>
            <li><a class="dropdown-item" href="saffron.php.html">Saffrons</a></li>
            <li><a class="dropdown-item" href="shil.php.html">Shilajit</a></li>
            <li><a class="dropdown-item" href="extr.php.html">Extracts</a></li>
            <li><a class="dropdown-item" href="fla.php.html">Flavours</a></li>
            <li><a class="dropdown-item" href="herbs.php.html">Herbs</a></li>
            <li><a class="dropdown-item" href="dry.php.html">Dry fruits</a></li>
            <li><a class="dropdown-item" href="oil.php.html">Oils</a></li>
            <li><a class="dropdown-item" href="other.php.html">Others</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#foot" tabindex="-1" aria-disabled="true"style="font-family: serif;font-size: 18px;"><b>CONTACT</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="body15">
  <div class="col-sm-3-6 col-md-6-12">
<div class="oth"><b>OTHER</b></div>
</div>
</div>
<div class="body16"></div>

  <!-- Displaying Products Start -->
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
        include 'config.php';
        $stmt = $conn->prepare('SELECT * FROM product');
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()):
      ?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="180">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger">Rs <?= number_format($row['product_price']) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="1" min="1">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-primary btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- Displaying Products End -->
<footer id="foot" class="page-footer bg-dark">
    <div class="bg-primary">
        <div class="container text-white">
            <div class=" py-1 d-flex align-items-center">
                <div class="col-md-12 text-center ">
                    <a href="https://twitter.com/fidarauf87" target="blank"><i class="fab fa-twitter text-white mr-4 fa-lg"></i>  <!-- <img src="twitter (1).png" width="30px" height="30px"> --></a>
                    <a href="https://www.instagram.com/fida.urrehman.73/?hl=en" target="blank"><i class="fab fa-instagram text-white mr-4 fa-lg"></i> <!-- <img src="instagram (2).png" width="30px" height="30px"> --></a>
                    <a href="https://www.facebook.com/ARQ-Sons-Enterprises-1363418577132969/" target="blank"><i class="fab fa-facebook text-white mr-4 fa-lg"></i><!-- <img src="facebook (1).png" width="30px" height="30px"> --></a>
                    <a href="https://www.linkedin.com/in/fida-ur-rehman-41690471" target="blank"><i class="fab fa-linkedin text-white mr-4 fa-lg"></i><!-- <img src="linkedin.png" width="30px" height="30px"> --></a>
                    <a href="https://mail.google.com/mail/u/0/?pc=topnav-about-n-en#inbox?compose=GTvVlcSPFdNDlKmcVTpMlzWQZTxRZDLGJQCkLZbPLtNRlNbpHSJGvKtVVmNWHdxsptXmjMBBNQvCT" target="blank"><i class="far fa-envelope text-white mr-4 fa-lg"></i><!-- <img src="facebook (1).png" width="30px" height="30px"> --></a>
                </div>
            </div>
        </div>
    </div>



<div class="back">
    <div class="container text-center text-md-center mt-4">
        <div class="row">
        <div class=" py-1 col-md-3 mx-auto mb-2">
            <h6 class="text-success font-weight-bold">ADDRESS</h6>
            <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width: 125px;height: 2px;">
            <p class="mt-2 text-$teal-800 text-justify"><b style="text-decoration: underline;">Head Office</b> : 70,71 3rd Floor Habib Chamber near Civic Center Block-14 University Road Gulshan-e-Iqbal Karachi<br>
                <b style="text-decoration: underline;">Regional Office</b> : L-839 Sector-5/C-2 North Karachi,Khi</p>
        </div>
        <div class="col-md-3 mx-auto mb-4">
            <h6 class="text-success font-weight-bold">CONTACT NO</h6>
            <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width: 125px;height: 2px;">
            <p class="mt-2 text-$teal-800"><b>Ph</b> : <a href="tel:021-34942227" id="hover1">021-34942227</a><br><b>Cell</b> :<a href="tel:0312-2022513" id="hover1">0312-2022513</a><br><b>Whatsapp</b> : <a href="tel:0345-6137908" id="hover1">0345-6137908</a><br><a href="tel:0336-2291314" id="hover1">0336-2291314</a><p><button style="width: 120px;border-radius: 120px;" class="bg-primary"><a href="mal.html" class="font-weight-bold text-white" style="text-decoration: none;">Any Query</a></button><h6>Incase you receive wrong parsal</h6></p>
        </div>
        <div class="col-md-3 mx-auto mb-4">
            <h6 class="text-success font-weight-bold">GMAIL</h6>
            <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width: 125px;height: 2px;">
            <p class="mt-2 text-$teal-800 ">arqsonsenterprises@gmail.com</p>
            <p class="mt-2 text-$teal-800 ">info@arqsonsenterprises.com</p>
        </div>
        <div class="col-md-3 mx-auto mb-1">
            <h6 class="text-success font-weight-bold">QR CODE</h6>
            <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width: 125px;height: 2px;">
            <br><img src="qr.png" height="170px" width="170px"><br>Price list
        </div>

        
    </div>
</div>
</div>  
</footer>



<footer class="page-footer">
<div class="bg-primary">
<div class="container">
<div class="row align-items-center ">
<div class="col-md-12 text-center">
    <p class="text-white font-weight-bold" style="margin-top: 20px;">&#169;Copywrite 2021 ARQ & Sons Enterprises</p>
</div>
</div>
</div>
</div>

</footer>



<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<div class="scroll">
<a href="#"><i class="fas fa-arrow-up"></i></a>
</div>
<div id="wa">
<div class="what">
<a href="https://wa.me/+923456137908" target="blank"><i class="fab fa-whatsapp fa-2x"></i></a>
</div>


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
</body>

</html>