  <!-- FOOTER -->
  <footer id="footer">
    <div class="emailSignUp">
      <div class="newsletter">
        <form>
          <p>Sign up for our newsletter</p>
          <label>
            <input type="text" name="inputBox" placeholder="Email Address">
          </label> 
          <input type="submit" value="Sign Up" class="newsletterButton">
        </form>
      </div> <!-- <-newsletter (container) -->
    </div><!--emailSignUp-->

    <div class="containText">
      <ul class="column socialButtons">
        <li><a href="#" class="facebook">facebook</a></li>
        <li><a href="#" class="twitter">twitter</a></li>
        <li><a href="#" class="linkedin">linkedIn</a></li>
        <li><a href="#" class="youtube">youtube</a></li>
      </ul>

      <ul class="column">
        <li><h4>CONTACT US<h4></li>
        <li><a href="#">contact info</a></li>
        <li><a href="#">416.532.2824</a></li>
        <li><a href="#">locations</a></li>
      </ul>

      <ul class="column">
        <li><h4>RESOURCES<h4></li>
        <li><a href="#">helpful links</a></li>
        <li><a href="#">learn more</a></li>
        <li><a href="#">FAQ's</a></li>
      </ul>

      <ul class="column">
        <li><h4>FINANCIALS<h4></li>
        <li><a href="#">donors</a></li>
        <li><a href="#">supporters</a></li>
        <li><a href="#">annual report</a></li>
      </ul>

      <ul class="column">
        <li><h4>GET INVOLVED<h4></li>
        <li><a href="#">fundraise</a></li>
        <li><a href="#">donate</a></li>
        <li><a href="#">volunteer</a></li>
      </ul>
    </div> <!--containText-->

    <div class="bottomFooter">
      <p><a href="#">&copy; 2013</a></p>
      <p><a href="#">Privacy Policy</a></p>
    </div><!--bottomFooter-->
  </footer>



   
  <script type="text/javascript">
    $("#iconNav").find("a").click(function(e) {
      e.preventDefault();
      var section = $(this).attr("href");
      $("html, body").animate({
          scrollTop: $(section).offset().top
      });
  });
  </script>

  <!--  < dropdown menu nav phone size-->
  <script>
  $(document).ready(function(){
    $(".menuButton").click(function(){
      $("#dropdownNav").slideToggle();
    });
  });
</script>

<!--   <- sticky -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>

    <script>
      $(document).ready(function(){
        $("#mainNav").sticky({ topSpacing: 0
        });
      });
    </script>



</body>
</html>