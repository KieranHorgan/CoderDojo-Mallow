<!--

Hello there.
I see you looking at my source code. That's good! It's one of the best ways to learn how to code.
All the code you see here (bar jQuery and Modernizr) was done by me.

The biggest thing I had trouble with was the nav (Oh God!!!!), trying to get it fully responsive
so it look sweet on those troublesome smartphones, as well on those pesky 1920x1080 monitors!
The article and aside also put up a good fight but I managed to put them back where they belong!

The site is fully responsive, lightweight, has a clean, modern look, and is commmented throughout,
to make the learning process much easier, and to give a bit of insight into why I did what.

Anyways, you better get on with exploring!
Happy coding!

  -Kieran H.

-->
<!DOCTYPe html>

<html lang="en">
  <head>
    <?php include("../head.php"); ?>
  </head>
  <body>
    <?php include("../nav.php"); ?>
    
    <!-- Content -->
    <div id="main">
      
      <!-- If the user is using an outdated browser (Ie under 9) then warn them that the website MAY not act as it's supposed to -->
      <!--[if lt Ie 9]>
        <p class="browsehappy">YOU ARE USING AN <strong>OUTDATED</strong> BROWSER. PLEASE <a href="http://browsehappy.com/">UPGRADE YOUR BROWSER</a> TO IMPROVE YOUR EXPERIENCE. </p>
      <![endif]-->
      
      <!-- Wrapper around <article> and <aside> because <aside> is floated, so if the <aside> is higher than the <article>, then the <div> is set to the height of the <aside> using Javascript/jQuery -->
      <div id="contentWrapper">
        
        <!-- Main content, Larger section on the left -->
        <article>
          
          <!-- Adds a split in the whitespace -->
          <section class="splitContent">
            
            <!-- each normal section has a dashed line on the top -->
            <section>
              
              <!-- Second Heading -->
              <h2>Contact us by:</h2>
              
            </section>
            <section>

              <h3 class="clearFix">Phone:</h3>

              <p class="clearFix">
                <b>Call or text John Martin</b>
                <span class="floatRight">085 7051365</span>
              </p>

            </section>
            <section>
              
              <h3 class="clearFix">email:</h3>

              <p class="clearFix">
                <b> John Martin</b>
                <a href="mailto:jamartin66@gmail.com" class="floatRight" target="_blank">jamartin66@gmail.com</a>
              </p>

              <p class="clearFix">
                <b>For general enquiries:</b>
                <a href="mailto:info@coderdojomallow.com" class="floatRight" target="_blank">info@coderdojomallow.com</a>
              </p>

              <p class="clearFix">
                <b>Information on the website:</b>
                <a href="mailto:kieranhorganmallow@gmail.com" class="floatRight" target="_blank">kieranhorganmallow@gmail.com</a>
              </p>
              
            </section>
            <section>
              
              <h3 class="clearFix">Location:</h3>

              <p class="clearFix alignCenter">
                All sessions take place on <b>Saturday</b> from <b>11.00am to 12.30pm</b> at
                <br>
                <br>
                CoderDojo,<br>
                The Big Blue Cube,<br>
                Gouldshill,<br>
                Mallow,<br>
                Co. Cork
              </p>

            </section>
            <section>
              
              <h3 class="clearFix">Twitter:</h3>

              <p class="clearFix">
                Check out our Twitter page at:
                <a href="https://twitter.com/mallowcoderdojo" class="floatRight" target="_blank">@mallowcoderdojo</a>
              </p>

            </section>
            
          </section>
          
        </article>
        
        <?php include("../aside.php"); ?>
      </div>

      <?php include("../footer.php"); ?>

      <script>

        $(document).ready(function () {
          $("#navDropdown li:nth-child(5) a").addClass("clicked");
          $("#fixedNav li:nth-child(5) a").addClass("clicked");
        })

      </script>
    
    </div>

  </body>
</html>