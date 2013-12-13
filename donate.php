<?php $pagename="Donate"; ?>

<?php include("php/head.php"); ?>

<?php include("php/topnav.php"); ?>



    <div class="wrapper">
    <form action="thankyou.php" method="post">

<!-- THANKS SECTION -->
      <section id="thanks">
        <h2>Thank you for helping out!</h2>
        <div class="bkgd-square donateContainer">
          <p>Choose a project you would like to donate your funds to</p>
          <div class="dropdown">
            <select name="selectname" class="selectName">
            <option selected class="funds">Where funds are needed most</option>
              <option value="Hippy program"  class="programOption">Hippy program</option>
              <option value="On Your Mark program" class="programOption">On Your Mark program </option>
              <option value="Hippy program" class="programOption">Community Garden</option>
            </select>
          </div>
        </div> <!--bkgd-square-->
      </section>


<!-- SELECT AMOUNT -->
      <section id="selectAmount">
        <h3 class="donateTitle donateContainer">Select an Amount</h3>
        <div class="line"></div>

        <div class="buttons donateContainer">
          <button class="donateButts">$200</button>
          <button class="donateButts">$100</button>
          <button class="donateButts">$50</button>
          <button class="donateButts">$25</button>
          <button class="donateButts">OTHER</button>
        </div><!--buttons-->

        <div class="donateContainer yourDonationAmount">
          <p id="yourDonationPara">Your Donation <span class="pinkColour">*</span></p>
          <h4>$</h4>
          <input type="text" name="donationAmount"></input>
          <p id="canadianDollars">Canadian dollars</p>

          <div class="radio">
            <input type="radio" id="one-time donation"checked="checked" align="baseline" name="group1" value="one-time donation" tabindex="">  
            <label>One-time</label>
            <input type="radio" id="montly donation" checked="checked" align="baseline" name="group1" value="monthly donation">  
            <label>Monthly</label>
          </div> <!--radio-->

        </div> <!--donateContainer yourDonationAmount-->
      </section> <!--selectAmount-->


<!-- YOUR INFORMATION -->
      <section id="yourInformation">
        <h3 class="donateTitle donateContainer">Your Information</h3>
        <div class="line"></div>

        <div class="donateContainer">
          <label>Name <span class="pinkColour">*</span></label>

          <input type="text" name="firstname" placeholder="First Name"></input>
          <input type="text" name="lastname" placeholder="Last Name"></input>

        <label>Email <span class="pinkColour">*</span></label>
        <input type="email" name="email"></input>

        <input type="radio" checked="checked" name="group2">  
        <label id="radioLabel">I would like to receive information from Working Women.</label>

        <label>Phone</label>
        <input type="tel" name="telephone" class="oneInputLine"></input>

        <label>Comments </label>
        <textarea name="comments" placeholder="Write Your Comments here"></textarea>

      </div> <!--donateContainer-->
      </section> <!--yourInformation-->

<!-- PAYMENT DETAILS -->
      <section id="paymentDetails">
        <h3 class="donateTitle donateContainer">Payment Details</h3>
        <div class="line"></div>

        <div class="donateContainer">
          <label>Name <span class="pinkColour">*</span></label>
          <input type="text" name="firstname" placeholder="First Name"></input>
          <input type="text" name="lastname" placeholder="Last Name"></input>

          <label>Card <span class="pinkColour">*</span></label>
          <input type="text" name="creditcard" placeholder="xxxx-xxxx-xxxx"></input>

          <img src="images/visa.png">
          <img src="images/mastercard.png">
          <img src="images/paypal.png">

          <label>Expiration <span class="pinkColour">*</span></label>
          <input type="text" name="expiration-date" placeholder="month/year"></input>

          <label class="longerLabel">Security Code <span class="pinkColour">*</span></label>
          <input type="text" name="security-code" class="smallInput" maxlength="4"></input>

          <a>What is this?<span class="whatIsThisBox">The card security code is located on the back of MasterCard or Visa credit or debit cards and is typically a separate group of 3 digits to the right of the signature strip.</span></a>

          <label>Country <span class="pinkColour">*</span></label>
          <input type="text" name="country" class="oneInputLine" placeholder="Canada"></input>

          <label>Address <span class="pinkColour">*</span></label>
          <input type="text" name="address" class="oneInputLine"></input>

          <label>City <span class="pinkColour">*</span></label>
          <input type="text" name="city" class="oneInputLine"></input>

          <label>Province <span class="pinkColour">*</span></label>
          <input type="text" name="province" placeholder="Province"></input>

          <label class="longerLabel">Postal Code <span class="pinkColour">*</span></label>
          <input type="text" name="postal-code" class="smallInput" maxlength="6"></input>
        </div> <!--donateContainer-->
      </section> <!--paymentDetails-->

<!-- DONATE NOW -->
      <section id="donateNow">
        <div class="line"></div>

        <div class="donateContainer">
          <button type="submit">DONATE NOW!</button>
          <input type="text" name="donationAmount" placeholder="Amount:"></input>

          <p>If you have questions regarding donating please contact <a href="mailto:paola@workingwomencc.org?subject=Donation Questions">paola@workingwomencc.org</a></p>
          <ul>
            <li><p>You can also donate online through <a href="https://www.canadahelps.org/CharityProfilePage.aspx?CharityID=s35970">Canada Helps</a></p></li>
            <li><p>Donations of $25 &amp; up receive a taxable receipt</p></li>
          </ul>
        </div> <!--donateContainer-->
      </section> <!--donateNow-->
  </form>
 </div><!--wrapper-->


<?php include("php/footer.php"); ?>



