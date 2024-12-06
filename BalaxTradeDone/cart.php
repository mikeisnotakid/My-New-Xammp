<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="icon" type="img/png" href="Img/favicon.png">


  <link href="css/general.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/queries.css" rel="stylesheet" />

  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
  <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">


  <script defer src="JS/script.js"></script>
  <title>Balaz FX</title>

  <style type="text/css">
    
    .input{
      padding: 10px 15px;
      width: 100px;
    }

    .button{
      padding: 10px 20px;
      margin: auto;
      display: block;
      background-color: navajowhite;
      outline: none;
      color: white;
      border-radius: 5px;
      cursor: pointer;
    }

    .proceed{
      margin: auto;
      display: block;
      background-color: orange;
      padding:10px 15px;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>
</head>

  <?php include 'cart-logic.php'; ?>
<body>

  <!-- HEADER SECTION -->

  <header class="header container">
    <div>
      <a class="logo" href="#">
        <img class="logo-img" src="Img/logo .png" />
      </a>
    </div>
    <div class="user">

      <p class="user-name">Bala</p>
      <i class="fa fa-user-circle user-icon" aria-hidden="true"></i>
      <div class="btn-cover">
        <button onclick="logOutBtn()" class="user-btn"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
      </div>
    </div>

    <button onclick="openClose()" class="btn-mobile-nav">
      <i id="open-nav" class="fa fa-bars icon-mobile-nav" aria-hidden="true"></i>
      <i id="close-nav" class="fa fa-times icon-mobile-nav close" aria-hidden="true"></i>
    </button>

    <a id="logout-btn" href="sign_in.php">Log Out</a>
  </header>


  <!-- NAVIGATION SECTION -->

  <nav id="main-nav" class="main-nav">
    <ul class="main-nav-links">

      <div class="user-mobile">
        <div>
          <i class="fa fa-user-circle user-icon" aria-hidden="true"></i>
          <p class="user-name">Bala</p>
        </div>
      </div>

      <li><a class="main-nav-link" href="dashboard.php">
          <i class="fa fa-home" aria-hidden="true"></i>
          <span>Dashboard</span></a></li>
      <li><a class="main-nav-link" href="portfolio.html">
          <i class="fa fa-briefcase" aria-hidden="true"></i>
          <span>Portfolio</span></a></li>
      <li><a class="main-nav-link" href="deposit.php">
          <i class="fa fa-credit-card" aria-hidden="true"></i>
          <span>Fund Wallet</span></a></li>
      <li><a class="main-nav-link" href="withdraw.html">
          <i class="fa fa-money" aria-hidden="true"></i>
          <span>Withdraw</span></a></li>
      <li><a class="main-nav-link" href="history.html">
          <i class="fa fa-history" aria-hidden="true"></i>
          <span>History</span></a></li>
      <li><a class="main-nav-link" href="crypto.html">
          <i class="fa fa-btc" aria-hidden="true"></i>
          <span>Crypto</span></a></li>

      <div>
        <a class="logout-btn-mobile" href="sign_in.php">Log Out</a>
      </div>
    </ul>
  </nav>



  <main class="container">
    <!-- SECTION CRYPTO CURRENCY -->

    <section class="section-crypto-currency">
      <div class="crypto-content">
        <div>
          <button onclick="history.back()" class="back-btn">
            <i class="fa fa-arrow-left back-btn-icon" aria-hidden="true"></i>
          </button>
        </div>
        <p class="heading-primary">Crypto Currencies</p>

        <div class="history-header">
          <p class="heading-secondary">
            Crypto
          </p>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th>Logo</th>
                <th>coin</th>
                <th>amount</th>
              </tr>
            </thead>
          <?php 
            cart();
           ?>



        </table>
          
        <form method="POST">
          <button name="proceedBtn" class="proceed">Proceed</button>
          
        </form>



        <!-- <table class="table">
          <thead>
            <tr>
              <th>Logo</th>
              <th>coin</th>
              <th>amount</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td><img class="crypto-logo" src="Img/bitcoin.png" alt="btc"></td>
              <td><input type="" name="" class="input"></td>
              <td><input type="" name="" class="input"></td>
              <td><a class="invest-link" href="deposit.php">update</a></td>
            </tr>
          </tbody>

          
        </table>
          <button class="button">Proceed</button> -->
    </section>
    </div>
  </main>

  <footer>
    Copyright � 2023 - BalaxTrade. All rights reserved
  </footer>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6740a48f4304e3196ae7279f/1ida85n2b';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
<script src="OwlCarousel2-2.3.4/docs_src/assets/vendors/jquery.min.js"></script>
<script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

</html>	