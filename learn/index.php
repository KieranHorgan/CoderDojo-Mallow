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
    <?php include("../head.php"); ?>
    <?php include("learnHead.php"); ?>
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

            <section id="learnMain">
          
              <section>

              <div><a href="/learn/html/2" class="floatRight">Next Lesson</a></div>
            
                <h2 class="clearFix">Setup</h2>
              
                <p>
                  First things first, there's a few things you'll need to help you start your career in coding. We're going to start off with making a simple website. This can be done with a simple text editor like "Notepad" (PC) or "TextEdit" (Mac) and any browser, such as "Internet Explorer", however, we can make our lives easier for oursevelves with a few simple steps.
                </p>
                
                <h3>Step 1: Install a HTML editor</h3>
                
                <p>
                  Rather than using a very basic text editor, there are many editors out there that can make you experience easier. We would recommend <strong><a href="https://notepad-plus-plus.org/">Notepad++</a></strong>. It is very beginner-friendly and lightweight, a perfect fit for any aspiring coder!
                </p>
                
                <h3>Step 2: Get a modern browser</h3>
                
                <p>
                  When it comes to developing websites, there are only 2 browsers that can compete for your top pick: <strong><a href="Google Chrome www.google.com/chrome/">Google Chrome</a></strong> and <strong><a href="https://www.mozilla.org/en-US/firefox/new/">Mozilla Firefox</a></strong>. Both of these browsers are the forerunners in speed, usability and features, especially for web developers. They are widly considered the best for making websites.
                </p>

                <p>Now you're good to go! Let's start coding!</p>

              <div><a href="/learn/html/2" class="floatRight">Next Lesson</a></div>
          
              </section>

            </section><!--

            This comment is here simply to get rid of the whitespace between two "inline-block" elements i.e. .learnNav and .learnMain
          
         --><?php include("learnNav.php")?>
          
          </section>
          
        </article>

      </div>

      <?php include("../footer.php"); ?>

      <script>

        $(document).ready(function () {
          $("#navDropdown li:nth-child(2) a").addClass("clicked");
          $("#fixedNav li:nth-child(2) a").addClass("clicked");
          $("#learnNav li li:nth-child(1)").addClass("clicked");
        })

      </script>
    
    </div>
    <script src="/learn/js/learnScript.js"></script>

  </body>
</html>