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

    <title>Coral</title>
  </head>
  <body>
    <div class="container">
      <div class="row my-4">
          <div class="col" >
              <a href="to http://www.coral.co.uk">
                <img src="img/logo.png" alt="logo" class="logoIMG">
              </a>
              <div class="float-end"><a href="to http://www.coral.co.uk">
                <button class="btn" type="submit" id="border2"><h6>  I'm already a customer</h6></button>
                <button class="btn btn-warning" type="submit" id="loginbtn">Login</button></a>
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
               
                  <div class="d-grid mt-2">
                    <button class="btn" type="submit" id="betNow" >BET NOW</button>
                  </div>
                  </div>
                
                
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-12 col-md-4">
              <div class="row">
                <div class="col-3" >
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
            <a href="#collapseabout" class="aboutUs" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseabout" >About Coral Sports Betting</a> | 
            <a href="" class="termsnCon" >Terms & conditions</a>
            
            <div class="collapse" id="collapseabout">
            <div class="card card-body">
              <p>1 Only how players aged 18 or over, who created a Coral Poker nickname are eligible to receive the Welcome Bonus. 2. Players must download the poker client, create a poker nickname, then make a first deposit via the download poker client. Only deposito made via the poker

                    `download client will trigger the bonus

                    3. Players who deposited £5-wit qualify for the first welcome offer of £20 worth of cash and tokens. Player who deposited £10- will qualify for both welcome offers. including £20 worth of cash and tokens and a 100% pending bonus up to £200.

                    4. If the bonus does not automatically credit on first deposit please contact us at help@coral.co.uk and we will be happy to add it.

                    5. Players who have an account with a currency other than GBP will receive the currency equivalent in bonus dollars. 8. Tokans will be credited to players accounts instantly following deposit, the £5 will be released after 1 poker point has been earned at the

                    tables.

                    7. The Pending bonus is released in stages according to the number of VIP Points you earn at real cash tables and tournaments. For more information on how to earn points please click here

                    8. The pending bonus will be released in £5 increment for every 300 points earned 9. Once released, the funds can be played on any Coral product or cashed out.

                    10. You must accumulate the necessary number of VIP Points within 90 days of your nickname creation complete the pending bonus. Any remaining pending bonus funds will be removed from your account if the required numbers of points are not accrued in this timeframe.

                    11. ES tournament tokens will expire after 14 days if not used

                    12. The status of pending bonus dollars may be found in the "My Account" section of the Poker client.

                    13. Please note that our Poker games may be played in USD (0), GBP (C) and Euro (E). The Casnier will automatically convert your funds into your desired currency of play (and back) at the prevailing daily exchange rate

                    14. For additional promotional terma, click here

                    15. Promoter: Coral interactive (Gibraltar) Limited, Gibraltar</p><p></p>
            </div>
            </div>
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
            fetch("backend.php", {
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