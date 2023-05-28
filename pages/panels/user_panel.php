<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Main Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../../style/styles.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="body">
    <div class="navbar-logo-left">
      <div class="container">
        <div class="navbar-wrapper">
          <a href="#">
            <img src="/img/brand-name.svg" alt="" />
          </a>
          <nav role="navigation">
            <ul role="list" class="nav-menu-two w-list-unstyled">
              <li class="list-item">
                <a href="#" class="nav-link">Desktop</a>
              </li>
              <li><a href="#" class="nav-link">History</a></li>
              <li><a href="#" class="nav-link">Transfers</a></li>
            </ul>
          </nav>
          <div class="div-block-account-info">
            <img src="/img/user-icon.svg" width="40" class="user-icon" />
            <div class="div-block-account-info-text">
              <div class="user-name"><b>first name Last Name</b></div>
              <div class="user-type">account type</div>
            </div>
          </div>
          <a href="#" class="logout-button w-button">LOG OUT</a>
        </div>
      </div>
    </div>
    <section class="section">
      <h1 class="heading">Accounts</h1>
      <div class="div-block-accounts">
        <div>
          <h5 class="account-info-1">first name Last Name</h5>
          <h6 class="account-info-2">12 3456 7890 1234 5678 9012 3456</h6>
        </div>
        <div>
          <h5 class="account-info-1">72, 17 PLN</h5>
          <h6 class="account-info-2">available funds</h6>
        </div>
      </div>
    </section>
    <section class="section">
      <h1 class="heading">Your cards</h1>
      <div class="div-block-cards">
        <img src="/img/blue-card.svg" width="200" />
        <div class="div-block-card-info">
          <div class="card-name">card name</div>
          <div class="card-number">card number</div>
          <div class="card-owner">first name Last Name</div>
        </div>
      </div>
    </section>
    <script src="./scipts.js" type="text/javascript"></script>
  </body>
</html>