<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row my-4">
          <div class="col" >
              <a href="#">
                <img src="img/logo.png" alt="logo" class="logoIMG">
              </a>
              <div class="float-end">
                <button class="btn " type="submit">I'm already a customer</button>
                <button class="btn btn-warning"" type="submit" id="loginbtn">Login</button>
              </div>
          </div>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col col-md-3"></div>
            <div class="col-sm-12 col-md-6">
              <img src="img/Crazy_Prices_LP.png" alt="logo" class="IMG" >
              <div class="box-middle">
                <p class="text1" >LIVERPOOL V AUGSBURG </p>
                <p class="text2 yellow-text " >LIVERPOOL TO WIN</p>
                <p class="text3 yellow-text " >iN 90 MINS</p>
                <p class="text4 yellow-text " >8/1</p>
                <p class="text5">£/€ 5 Bet Only | PLUS £/€5 Free Bet should your bet lose</p>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-5"></div>
            <div class="col-sm-12 col-md-3" id="email-col">
              <input class="form-control me-2" type="text" id="email" placeholder="Email" aria-label="Email">
              <div class="d-grid mt-2">
                <div class="border3" >
                  <div class="border2" >
                  <div class="d-grid mt-2">
                    <button class="btn" type="submit" id="betNow" >BET NOW</button>
                  </div>
                  </div>
                </div>
                
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-12 col-md-4">
              <div class="row">
                <div class="col-3">
                  <h1 class="one align-middle">1</h1>
                </div>
                <div class="col-9">
                  <p class="register align-middle">REGISTER & DEPOSIT £/€5 OR MORE</p>
                </div>
              </div>
            </div>
            <div class="col col-sm-12 col-md-4">
              <div class="row">
                <div class="col-3">
                  <h1 class="two align-middle">2</h1>
                </div>
                <div class="col-9">
                  <p class="enhance align-middle">YOUR ENHANCED ODDS WILL DISPLAY ON THE HOMEPAGE</p>
                </div>
              </div>
            </div>
            <div class="col col-sm-12 col-md-4">
              <div class="row">
                <div class="col-3">
                  <h1 class="three align-middle">3</h1>
                </div>
                <div class="col-9">
                  <p class="betWins align-middle">IF YOUR BET WINS YOUR WINNINGS WILL BE PAID AS A £/€40 FREE BET</p>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col col-sm-12 col-md-6"></div>
          <div class="col col-sm-12 col-md-3 text-center" style="margin-left: -3rem;">
            <img src="img/layer.png" alt="" class="gambleware">
          </div>    
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-sm-12 col-md-9 text-center mt-2" id="aboutnTerms">
            <img src="img/arrow.png" alt="">
            <a href="" class="aboutUs" >About Coral Sports Betting</a> | 
            <a href="" class="termsnCon" >Terms & conditions</a>
          </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script>
      window.onload = function() {
        const betNowButton = document.getElementById("betNow");
        const emailInput = document.getElementById("email");
        betNowButton.addEventListener("click", (event) => {
          event.preventDefault();
          const data = {
                email: emailInput.value
            };
            fetch("tite.php", {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: "POST",
                body: JSON.stringify(data)
            }).then((response) => response.json())
            .then((response) => {
              console.log(response);
            }).catch((err) => {
              console.error(err);
            })
        })
      }
    </script>
  </body>
</html>