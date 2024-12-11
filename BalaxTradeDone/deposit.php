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
</head>
  
  <?php include 'deposit-logic.php'; ?>
<body>

  <!-- HEADER SECTION -->

  <header class="header container">
    <div>
      <a class="logo" href="#">
        <img class="logo-img" src="Img/logo .png" />
      </a>
    </div>
    <div class="user">

      <a href="cart.php" style="color: gold;">

        <div class="cart">
          
          <span class="fa fa-shopping-cart" style="font-size:40px"></span>
          <i style="font-size: 25px; color: red; font-weight:bolder ; margin-left: -15px;"> 
            <?php 
              if (isset($_COOKIE['item1'])) {
                echo count(unserialize($_COOKIE['item1'])); 
              }
            ?>
          </i>
        </div>
        
      </a>

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

    <!-- FUND WALLET SECTION -->

    <section class="section-fund-wallet">
      <div class="fund-wallet-content">
        
        <form action="" method="POST">

          <button onclick="history.back()" class="back-btn">
            <i class="fa fa-arrow-left back-btn-icon" aria-hidden="true"></i>
          </button>

          <p class="heading-primary">Fund wallet</p>
          <div class="fund-with-form">
            <div>
              <label for="crypto">Prefered Crypto Currency</label>
              <select id="crypto" name="coin" required>
                <option value="Bitcoin">Bitcoin</option>
                <option value="Ethereum">Ethereum</option>
                <option value="USDT">USDT</option>
                <option value="BNB">BNB</option>
                <option value="Dogecoin">Dogecoin</option>
                <option value="Chain Link">Chain Link</option>
                <option value="Bitcoin cash">Bitcoin cash</option>
                <option value="ADA">ADA</option>
                <option value="Matic">Matic</option>
                <option value="Tron">Tron</option>
                <option value="Cake">Cake</option>
                <option value="Solana">Solana</option>
              </select>
              <svg class="crypto-icon" height="32" viewBox="0 0 32 32" width="32" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zm5.002-22.145l.81-3.241-2.596-.646-.643 2.575a8.277 8.277 0 00-1.298-.323l.644-2.575L15.323 5l-.81 3.241c-2.983.542-5.509 2.737-6.28 5.823s.426 6.206 2.804 8.08l-.81 3.242 2.596.646.643-2.575a8.277 8.277 0 001.298.323l-.644 2.575 2.596.645.81-3.241a7.974 7.974 0 005.2-3.385l-2.847-.708a5.373 5.373 0 01-5.134 1.43c-2.866-.712-4.62-3.572-3.917-6.387s3.599-4.519 6.466-3.806a5.357 5.357 0 013.86 3.667l2.846.708a7.947 7.947 0 00-2.998-5.423z" />
              </svg>
            </div>

            <div>
              <label for="address">Wallet address</label>
              <input name="addr" id="address" type="" value="2837y9bwuoweoweo782ouew823287we78" required onfocus="copyFunction('address')" readonly />
            </div>


            <div>
              <label for="amount">Amount to deposit</label>
              <input name="amount" id="amount" type="number" placeholder="Amount (USD)" required />
              <svg class="crypto-icon" height="32" width="32" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zm6.5-12.846c0-2.523-1.576-3.948-5.263-4.836v-4.44c1.14.234 2.231.725 3.298 1.496l1.359-2.196a9.49 9.49 0 00-4.56-1.776V6h-2.11v1.355c-3.032.234-5.093 1.963-5.093 4.486 0 2.64 1.649 3.925 5.19 4.813v4.58c-1.577-.234-2.886-.935-4.269-2.01L9.5 21.35a11.495 11.495 0 005.724 2.314V26h2.11v-2.313c3.08-.257 5.166-1.963 5.166-4.533zm-7.18-5.327c-1.867-.537-2.327-1.168-2.327-2.15 0-1.027.8-1.845 2.328-1.962zm4.318 5.49c0 1.122-.873 1.893-2.401 2.01v-4.229c1.892.538 2.401 1.168 2.401 2.22z"
                  fill-rule="evenodd" />
              </svg>
            </div>
          </div>


          <?php 

            if (isset($_REQUEST['type']) && $_REQUEST['type'] == 'success') { 

              ?>

                <!-- Modal -->
                <div id="success-modal" class="text-align-center">
                  <div class="modal-content">
                    <p class="heading-secondary"><?php echo $_REQUEST['mssg'] ?></p>
                    <span class="modal-icon"><i class="fa fa-check" aria-hidden="true"></i>
                    </span>
                    <button onclick="modalClose()" class="modal-close"><i class="fa fa-times modal-close-icon"
                        aria-hidden="true"></i></button>
                  </div>
                </div>


              <?php
            }

          ?>

          <button onclick="myModal()" name="addToCartBtn" class="fund-with-link"> Add to cart</button>
        </form>
    </section>
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

<script type="text/javascript">

  function copyFunction(id){
    
    addrArea = document.getElementById(id); 

    addrArea.select();
    addrArea.setSelectionRange(0, 99999); // For mobile devices

    document.execCommand('copy');

  }
</script>


<script src="OwlCarousel2-2.3.4/docs_src/assets/vendors/jquery.min.js"></script>
<script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>




</html>