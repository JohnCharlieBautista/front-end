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
                <button class="btn btn-outline-success" type="submit" style="margin-left: -.5rem;">Login</button>
              </div>
          </div>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col col-md-3"></div>
            <div class="col-sm-12 col-md-6">
              <img src="img/Crazy_Prices_LP.png" alt="logo" class="IMG" style="margin-left: -18rem">
              <div style="margin-top: -38rem; margin-left: 11rem;">
                <p class="text1" style="margin: 0 !important;">LIVERPOOL V AUGSBURG </p>
                <p class="text2 yellow-text " style="margin: 0 !important;">LIVERPOOL TO WIN</p>
                <p class="text3 yellow-text " style="margin: 0 !important;">iN 90 MINS</p>
                <p class="text4 yellow-text " style="margin: 0 !important;">8/1</p>
                <p class="text5">£/€ 5 Bet Only | PLUS £/€5 Free Bet should your bet lose</p>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-5"></div>
            <div class="col-sm-12 col-md-3" style="margin-left: 3rem">
              <input class="form-control me-2" type="text" id="email" placeholder="Email" aria-label="Email">
              <div class="d-grid mt-2">
                <div class="border3" style="min-width: inherit; min-height: inherit;">
                  <div class="border2" style="min-width: inherit; min-height: inherit;">
                  <div class="d-grid mt-2">
                    <button class="btn" type="submit" id="betNow" style="min-width: inherit; min-height: inherit;">BET NOW</button>
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
                  <p class="register align-middle" style=" margin-top: 1.5rem;">REGISTER & DEPOSIT £/€5 OR MORE</p>
                </div>
              </div>
            </div>
            <div class="col col-sm-12 col-md-4">
              <div class="row">
                <div class="col-3">
                  <h1 class="two align-middle">2</h1>
                </div>
                <div class="col-9">
                  <p class="enhance align-middle" style=" margin-top: 1.5rem;">YOUR ENHANCED ODDS WILL DISPLAY ON THE HOMEPAGE</p>
                </div>
              </div>
            </div>
            <div class="col col-sm-12 col-md-4">
              <div class="row">
                <div class="col-3">
                  <h1 class="three align-middle">3</h1>
                </div>
                <div class="col-9">
                  <p class="betWins align-middle" style=" margin-top: 1.5rem;">IF YOUR BET WINS YOUR WINNINGS WILL BE PAID AS A £/€40 FREE BET</p>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col col-sm-12 col-md-6"></div>
          <div class="col col-sm-12 col-md-3 text-center" style="margin-left: -3rem;">
            <img src="img/layer.png" alt="" class="" style="max-width: inherit;">
          </div>    
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-sm-12 col-md-9 text-center mt-2" style="color: white; margin-left: -3rem;">
            <img src="img/arrow.png" alt="">
            <a href="" style="color: white !important;">About Coral Sports Betting</a> | 
            <a href="" style="color: white !important;">Terms & conditions</a>
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