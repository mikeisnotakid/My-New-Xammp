<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title></title>


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
</head>

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

    <a id="logout-btn" href="log_out.php">Log Out</a>
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
        <a class="logout-btn-mobile" href="Sign_in.php">Log Out</a>
      </div>
    </ul>
  </nav>


  <main class="container">
    <!-- DASHBOARD SECTION -->

    <div class="content">
      <section class="dashboard">
        <div class="dash-top">
          <button onclick="history.back()" class="back-btn">
            <i class="fa fa-arrow-left back-btn-icon" aria-hidden="true"></i>
          </button>

          <div class="balance">
            <ion-icon class="wallet" name="wallet-outline"></ion-icon>
            <div class="wall-text">
              <span>Balance:</span>
              <span class="bal-num"> $200 </span>
            </div>
          </div>
        </div>

        <div class="dash-header">
          <div>
            <p class="heading-primary">DASHBOARD</p>
            <p class="text">You can trade in USDT, Ethereum or USDC, in three simple steps</p>
          </div>
        </div>



        <p class="heading-secondary text-align-center">Quick Actions</p>
        <div class="actions">
          <div>
            <a class="action dep" href="deposit.php">
              <span class="act-icon"><i class="fa fa-suitcase" aria-hidden="true"></i></span>
              <span class="act-text">Deposit</span>
            </a>
          </div>

          <div>
            <a class="action wit" href="withdraw.html">
              <span class="act-icon"><i class="fa fa-money" aria-hidden="true"></i></span>
              <span class="act-text">Withdraw</span>
            </a>
          </div>

          <div>
            <a class="action his" href="history.html">
              <span class="act-icon"><i class="fa fa-history" aria-hidden="true"></i></span>
              <span class="act-text">History</span>
            </a>
          </div>
        </div>

        <div class="stats">
          <div class="stats-items">
            <p class="heading-secondary">Monthly Inflow</p>
            <p class="stats-date">Mar 1, 2023 - June 1, 2023</p>
            <div class="stats-img-box">
              <img class="stats-img" src="Img/image 25.png" />
            </div>
          </div>



          <div class="stats-items">
            <div class="stats-2">
              <p class="heading-secondary">Statistics</p>
              <span>65%</span>
            </div>
            <p class="stats-date">Mar 1, 2023 - June 1, 2023</p>
            <div class="stats-img-box">
              <img class="stats-img" src="Img/image 21.png" />
            </div>
          </div>

          <div class="stats-items scouts">
            <div>
              <p class="heading-secondary">Scouts</p>
              <span class="scout">
                <div class="bit">
                  <img class="bit-img" src="Img/bitcoin.jpg" />
                </div>
                <p class="scout-text">There has been some upgrade
                  in the bitcoin investment, so you are advise to buy and sell...</p>
              </span>
            </div>
            <p class="stats-text">Check your transaction report...</p>
          </div>
        </div>


        <div class="hot-crypto">
          <p class="heading-secondary text-align-center">Hot Crypto Currencies</p>
          <a href="https://www.binance.com/en/price" target="_blank">
            <div class="owl-carousel">
              <div class="content"><img src="/Img/bit-price.png"></div>
              <div class="content"><img src="/Img/eth-price.png"></div>
              <div class="content"><img src="/Img/bnb-price.png"></div>
              <div class="content"><img src="/Img/lit-price.png"></div>
              <div class="content"><img src="/Img/tron-price.png"></div>
            </div>
            <a class="binance-link" href="https://www.binance.com/en/price" target="_blank">Track All Markets on
              Binance</a>
          </a>
        </div>

      </section>
    </div>
  </main>

  <footer>
    Copyright � 2023 - BalaxTrade. All rights reserved
  </footer>
</body>
<script src="OwlCarousel2-2.3.4/docs_src/assets/vendors/jquery.min.js"></script>
<script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

</html>