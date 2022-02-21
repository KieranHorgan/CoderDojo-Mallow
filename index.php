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

<!DOCTYPE html>
 
<html lang="en">
  <head>
    <?php include("head.php"); ?>
  </head>
  <body>
    <?php include("nav.php"); ?>
    
    <!-- Content -->
    <div id="main">
      
      <!-- If the user is using an outdated browser (Ie under 9) then warn them that the website MAY not act as it's supposed to -->
      <!--[if lt Ie 9]>
        <p class="browsehappy">YOU ARE USING AN <strong>OUTDATED</strong> BROWSER. PLEASE <a href="http://browsehappy.com/">UPGRADE YOUR BROWSER</a> TO IMPROVE YOUR EXPERIENCE.  </p>
      <![endif]-->
      
      <!-- Wrapper around <article> and <aside> because <aside> is floated, so if the <aside> is higher than the <article>, then the <div> is set to the height of the <aside> using Javascript/jQuery -->
      <div id="contentWrapper">

        <!-- Main content, Larger section on the left -->
        <article>
          
          <!-- Adds a split in the whitespace -->
          <section class="splitContent">
            
            <!-- each normal section has a dashed line on the top -->
            <section>

              <!-- CoderDojo Logo with text -->
              <div id="coderdojoLogo">
                <img src="/images/CoderDojo%20Logo.png" alt="CoderDojo.org">
                <h2>CoderDojo</h2>
              </div>
              
              <!-- Tagline next to logo -->
              <span id="coderdojoLogoText">Free programming clubs for young people, run by volunteers.</span>

            </section>
            
            <!-- Another section with a dotted line on top -->
            <section>
              
              <!-- Second Heading -->
              <h2>CoderDojo</h2>
              
              <!-- Text explaining CoderDojo -->
              <p>CoderDojo is a global network of clubs teaching young people about programming and computer technology. With over 600 locations in 55 countries, we instruct over 25,000 children each week how to code. Members receive a solid grounding in tools like HTML, CSS and Java, and learn how to create games with Scratch.</p>
            
              <!-- Image slider -->
              <div id="slider">

                <!-- List for images -->
                <!-- Remember to escape special characters -->
                <ul>
                  <li>
                    <img src="/images/Gouldshill%20SC%201.jpg" alt="The image got lost">
                  </li>
                  <li>
                    <img src="/images/Gouldshill%20SC%202.jpg" alt="The image got lost">
                  </li>
                  <li>
                    <a href="http://www.juniorspiders.ie/2015-photos/shortlist-2015/" class="noLinkStyle">
                      <img src="/images/junior_spiders/Awards.jpg" alt="The image got lost">
                      <h3>Awards from junior spiders awards</h3>
                    </a>
                  </li>
                  <li>
                    <img src="/images/Youth%20Center%201.jpg" alt="The image got lost">
                  </li>
                  <li>
                    <img src="/images/Youth%20Awards.jpg" alt="The image got lost">
                    <h3>Mentors nominated for Youth Awards</h3>
                  </li>
                  <li>
                    <img src="/images/Youth%20Center%202.jpg" alt="The image got lost">
                  </li>
                  <li>
                    <img src="/images/Gouldshill%201.jpg" alt="The image got lost">
                  </li>
                </ul>

                <!-- Controls -->
                <!-- Remember to escape special characters -->
                <span class="moveRight">&gt;&gt;</span>
                <span class="moveLeft">&lt;&lt;</span>

              </div>
              <!-- end Slider -->
            
            </section>
            
            <!-- Another section with a dotted line on top -->
            <section>

              <!-- Second Heading -->
              <h2>CoderDojo Mallow</h2>

              <!-- Text promoting CoderDojo Mallow -->
              <p>We here at CoderDojo Mallow are dedicated to making sure that you or your child have fun in a safe, cool environment while learning a valuable skill for the 21st century. Attenders to the dojo are encouraged to help each other and develop their leadership, management and social skills.</p>

            </section>

          </section>
          
          <!-- <section> to split whitespace -->
          <section class="splitContent">
            
            <!-- Another section with a dotted line on top -->
            <section>
              
              <!-- Second Heading -->
              <h2>Empowering Young People is Our Mission</h2>
              
              <!-- Text further explaining CoderDojo -->
              <p>
                At CoderDojo, we take novices and give them the skills to leverage the vast power of computing. Our members learn to develop websites, apps, programs, games, and digital media - the technology that runs the modern world.
                <br>
                <br>
                We’re totally free for members age 7-17, and 100% volunteer-led by enthusiastic and knowledgeable programmers and tech specialists.
              </p>

            </section>
            
            <!-- Another section with a dotted line on top -->
            <section>

              <!-- Second Heading -->
              <h2>Gouldshill, Mallow</h2>

              <!-- Image wrapper in order to centre it -->
              <div class="imgWrapper">
                <img class="imgLarge" src="images/Gouldshill.jpg" alt="Sorry, the image couldn't load :\">
              </div>
              
              <!-- Text -->
              <p class="imgLargeText">This is the Community centre where CoderDojo Mallow takes place, located in Gouldshill estate, Mallow.</p>

            </section>

          </section>

        </article>
        <!-- end of article -->

        <?php include("aside.php"); ?>

      </div>
      <!-- end content wrapper -->

      <?php include("footer.php"); ?>

      <!-- Set the nav link to the current page as clicked -->
      <script>

        $(document).ready(function () {
          $("#navDropdown li:nth-child(1) a").addClass("clicked");
          $("#fixedNav li:nth-child(1) a").addClass("clicked");
        })

      </script>
    
    </div>
    <!-- end main -->

  </body>
</html>
