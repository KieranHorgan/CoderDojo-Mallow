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
    <?php include("../../../../head.php"); ?>
    <?php include("../../../sessionsHead.php"); ?>
    <script type="text/javascript" src="/sessions/resources/shBrushCss.js"></script>
  </head>
  <body>
    <?php include("../../../../nav.php"); ?>
    
    <!-- Content -->
    <div id="main">
      
      <!-- If the user is using an outdated browser (IE under 9) then warn them that the website MAY not act as it's supposed to -->
      <!--[if lt IE 9]>
        <p class="browsehappy">YOU ARE USING AN <strong>OUTDATED</strong> BROWSER. PLEASE <a href="http://browsehappy.com/">UPGRADE YOUR BROWSER</a> TO IMPROVE YOUR EXPERIENCE. </p>
      <![endif]-->
      
      <div id="contentWrapper">
      
        <!-- Main content, Larger section on the left -->
        <article class="articleFull">
        
          <!-- Adds a split in the whitespace -->
          <section class="splitContent">
          
            <section id="sessionsMain">
            
              <h2>The Code</h2>

              <p class="alignCenter">The HTML code for the fourth and final day of CoderDojo Mallow's Summer Camp is as follows:</p>
            
              <div class="code">
                <pre class="brush: css">
html, body {
    /* The universe takes up all available space */
    width: 100%;
    height: 100%;
    margin: 0;
    
    /* The universe is black */
    background-color: black;
}

#sun {
    position: absolute;
    /* Positions the top-left corner of the image to be *
    /* in the middle of the box */
    top: 50%;
    left: 50%;
    
    /* Play with these numbers to see what it does */
    height: 200px;
    width: 200px;
    margin-top: -100px; 
    margin-left: -100px;
    
    Border:20px solid orange;
    Border-radius:50%;
    box-shadow: 0 0 64px yellow;
}

#earth {
    /* Style your earth */
    position:absolute;
    top:0;
    left:50%;
    
    height:50px;
    width:50px;
    margin-left:-25px;
    margin-top:-25px;
    
    Border:15px solid green;
    Border-radius:50%;
    Box-shadow: 0 0 70px blue;
    
}

#earth-orbit {
    /* For Section #2 */
    position:absolute;
    top:50%;
    left:50%;
    
    width:500px;
    height:500px;
    margin-top:-250px;
    margin-left:-250px;
    
    border:2px dotted white;
    border-radius:50%;
    
      /* ... your other orbit styles ... */

  -webkit-animation: spin-right 10s linear infinite;
     -moz-animation: spin-right 10s linear infinite;
      -ms-animation: spin-right 10s linear infinite;
       -o-animation: spin-right 10s linear infinite;
          animation: spin-right 10s linear infinite;
}

@-webkit-keyframes spin-right {
    100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    }
}

@keyframes spin-right{
    100%{
        
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    }
}
                </pre>
              </div>
            
            </section><!--

            This comment is here simply to get rid of the whitespace between two "inline-block" elements i.e. .sessionsNav and .sessionsMain
          
         --><?php include("../../../sessionsNav.php")?>
          
          </section>
          
        </article>

      </div>

    <?php include("../../../../footer.php"); ?>
    
    </div>
    <script src="/sessions/sessionsTest.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>