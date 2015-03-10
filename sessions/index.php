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
    <?php include("sessionsHead.php"); ?>
  </head>
  <body>
    <?php include("../nav.php"); ?>
    
    <!-- Content -->
    <div id="main">
      
      <!-- If the user is using an outdated browser (Ie under 9) then warn them that the website MAY not act as it's supposed to -->
      <!--[if lt Ie 9]>
        <p class="browsehappy">YOU ARE USING AN <strong>OUTDATED</strong> BROWSER. PLEASE <a href="http://browsehappy.com/">UPGRADE YOUR BROWSER</a> TO IMPROVE YOUR EXPERIENCE. </p>
      <![endif]-->
      
      <div id="contentWrapper">

        <!-- Main content, Larger section on the left -->
        <article class="articleFull">
        
          <!-- Adds a split in the whitespace -->
          <section class="splitContent">

            <section id="sessionsMain">
          
              <section>
            
                <h2>Sessions</h2>
              
                <p>
                  Welcome to CoderDojo Mallow's Sessions page! Here you can view the code which has been developed during our sessions. All the code found in the sessions pages is open-source and free for anyone to use. You can find the list of sessions, with links to each page, on the left hand side.
                </p>
          
              </section>
            
              <section>

                <h3>Java</h3>

                <p>All the Java Code here was taught by Eugene. These sessions are for students aged 12 to 16, and is the most advanced group. The first session listed here took place on the 17th of January, 2015.</p>

              </section>
            
              <section>

                <h3>Summer Camp</h3>

                <p>All the Summer Camp Code here was taught by Connie. This camp was for students aged 10 to 16, and The aim of the camp was to create a model of the Solar System. This camp took place over three days in July, 2014.</p>

              </section>

            </section><!--

            This comment is here simply to get rid of the whitespace between two "inline-block" elements i.e. .sessionsNav and .sessionsMain
          
         --><?php include("sessionsNav.php")?>
          
          </section>
          
        </article>

      </div>

      <?php include("../footer.php"); ?>

      <script>

        $(document).ready(function () {
          $("#navDropdown li:nth-child(4) a").addClass("clicked");
          $("#fixedNav li:nth-child(4) a").addClass("clicked");
        })

      </script>
    
    </div>
    <script src="/sessions/sessionsTest.js"></script>

  </body>
</html>