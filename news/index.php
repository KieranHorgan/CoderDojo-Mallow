<!--

Hello there.
I see you looking at my source code. That's good! It's one of the best ways to learn how to code.
All the code you see here (bar jQuery and Modernizr) was done by me.

The biggest thing I had trouble with was the nav (Oh God!!!!), trying to get it fully responsive
so it look sweet on those troublesome smartphones, as well on those pesky 1920x1080 monitors!
The article and aside also put up a good fight but I managed to put them back where they belong!

Backwards compatibility has been a bit of a problem (as always!) but the majority of users visiting
will get the desired experience.

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

            <!-- Another Section -->
            <section>
              
              <!-- Second Heading -->
              <h2>New website entered into Junior Spiders awards</h2>

              <p>CoderDojo Mallow's new website has been entered into the <a href="http://www.juniorspiders.ie">Junior Spiders Awards</a>. The website was designed by Kieran Horgan, a 14 year old mentor at CoderDojo Mallow.</p>

              <!-- Image wrapper in order to centre it -->
              <div class="imgWrapper">
                <a href="http://www.juniorspiders.ie" class="noLinkStyle">
                  <img class="imgLarge" src="/images/Junior%20Spiders.jpg" alt="Sorry, the image couldn't load :\">
                </a>
              </div>

              <p class="newsDateStamp">- Posted 10th March</p>

            </section>
            
            <!-- each normal section has a dashed line on the top -->
            <section>
              
              <!-- Second Heading -->
              <h2>Mentors win Mallow Sports and Leisure Award</h2>

              <p>It was announced this Saturday that CoderDojo Mallow's mentors won the Mallow Sports and Leisure youth award for their efforts in 2014! Thanks to everyone who supported us this past year!</p>
              
              <p class="newsDateStamp">- Posted 1st March</p>

            </section>
            
            <!-- each normal section has a dashed line on the top -->
            <section>
              
              <!-- Second Heading -->
              <h2>Mentors nominated for the Mallow Sports and Leisure Awards</h2>

              <p>Coderdojo Mallow's mentors are honoured to be nominated for the Mallow Sports and Leisure awards. The awards are sponsored by AIB and the winner shall be announced on Saturday, February 28th.</p>
              
              <!-- Image wrapper in order to centre it -->
              <div class="imgWrapper">
                <img class="imgLarge" src="/images/Youth%20Awards.jpg" alt="Sorry, the image couldn't load :\">
              </div>

              <p class="newsDateStamp">- Posted 11th February</p>

            </section>
            
          </section>
          
        </article>
        
        <?php include("../aside.php"); ?>

      </div>

      <?php include("../footer.php"); ?>

      <script>

        $(document).ready(function () {
          $("#navDropdown li:nth-child(2) a").addClass("clicked");
          $("#fixedNav li:nth-child(2) a").addClass("clicked");
        })

      </script>
    
    </div>

  </body>
</html>