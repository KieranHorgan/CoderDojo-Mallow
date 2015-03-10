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

              <!-- Second heading -->
              <h2>About CoderDojo</h2>

              <p>
                CoderDojo is a movement orientated around running free not-for-profit coding clubs and regular sessions for young people.
                <br>
                <br>
                At a CoderDojo, young people learn how to code, develop websites, apps, programs, games and more. Dojos are set up, run by and taught at by volunteers. Dojos organise tours of technology companies, bring in guest speakers to talk about their career and what they do, and organise events. In addition to learning to code, members meet like-minded people, show off what they’ve been working on and so on. CoderDojo makes development and learning to code a fun &amp; sociable experience. CoderDojo also puts a strong emphasis on open source and free software, and has a strong network of members and volunteers globally.
                <br>
                <br>
                <b>CoderDojo has just one rule:</b> “Above All: Be Cool”
              </p>
              
            </section>

            <section>

              <!-- Second heading -->
              <h2>CoderDojo Mallow</h2>

              <p>
                At CoderDojo Mallow we teach a wide range of skills: <b><i>HTML and CSS</i></b> for students age 6 to 12, <b><i>Javascript and jQuery</i></b> for students age 10 to 14, <b><i>Java</i></b> for students age 12 to 16. We are always open to suggestions for topics to cover in the curriculum.
                <br>
                <br>
                Our Dojo was set up in 2012 by CDYS Mallow in the local Youth Center. Since then, it has moved to the "Big Blue Cube" in Gouldshill.
                <br>
                <br>
              </p>

              <!-- Image wrapper in order to centre it -->
              <div class="imgWrapper">
                <img class="imgLarge" src="/images/Gouldshill.jpg" alt="Sorry, the image couldn't load :\">
              </div>
              
              <!-- Text -->
              <p class="imgLargeText">This is the Community centre where CoderDojo Mallow takes place, located in Gouldshill estate, Mallow.</p>

            </section>

            <section>

              <!-- Second heading -->
              <h2>A bit of history</h2>

              <p>
                CoderDojo is a not-for-profit organization founded by James Whelton &amp; Bill Liao. It was first started in James Whelton’s school in early 2011 when James received some publicity after hacking the iPod Nano and some younger students expressed an interest in learning how to code. He setup a computer club in his school (PBC Cork) where he started teaching basic HTML and CSS.
                <br>
                <br>
                Later that year he met Bill Liao, an entrepreneur and philanthropist, who was interested in growing the project into something bigger than just an after-school computer club. In June 2011 the first CoderDojo was launched in the National Software Centre in Cork where CoderDojo saw extreme success. The Cork Dojo saw people travelling from Dublin frequently to attend sessions. Owing to this popularity a Dublin Dojo was launched soon after in Google’s Montevetro building. The increasing success lead to the setup of more Dojos around Ireland and subsequently around the world.
              </p>

            </section>
            
          </section>
          
        </article>
        
        <?php include("../aside.php"); ?>
      </div>

      <?php include("../footer.php"); ?>

      <script>

        $(document).ready(function () {
          $("#navDropdown li:nth-child(3) a").addClass("clicked");
          $("#fixedNav li:nth-child(3) a").addClass("clicked");
        })

      </script>
    
    </div>

  </body>
</html>