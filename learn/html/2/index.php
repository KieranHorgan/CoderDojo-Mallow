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
    <?php include("../../../head.php"); ?>
    <?php include("../../learnHead.php"); ?>
    <script type="text/javascript" src="/resources/shBrushXml.js"></script>
  </head>
  <body>
    <?php include("../../../nav.php"); ?>
    
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

                <div>
                  <a href="/learn/html/1" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/3" class="floatRight">Next Lesson</a>
                </div>
                
                <h2 class="clearFix">Using Notepad++</h2>
              
                <h3>Step 1. Open Notepad++</h3>
                
                <p>To open Notepad++ in Windows 7 or earlier:</p>
                <p>Click <strong>Start</strong> (bottom left on your screen). Click <strong>All Programs</strong>. Click <strong>Accessories</strong>. Click <strong>Notepad++</strong>. </p>
                <p>To open Notepad++ in Windows 8 or later:</p>
                <p>Open the <strong>Start Screen</strong> (the window symbol at the bottom left on your screen). Type <strong>Notepad++</strong>.</p>
                
              </section>
              <section>
                
                <h3>Step 2: Write some HTML</h3>
                
                <p>Write or copy some HTML into Notepad++.</p>

                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;!DOCTYPE html>

&lt;html>
  &lt;head>
  &lt;/head>
  
  &lt;body>

    &lt;h1>My First Heading&lt;/h1>
    
    &lt;p>My first paragraph.&lt;/p>

  &lt;/body>
&lt;/html>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=2' target="_blank" class ="tryIt">Try it Yourself</a>
                
                <br/>

                <div class="imgWrapper">
                  <img src="notepad.png" alt="Code in Notepad++" class="imgLarge"/>
                </div>
                
              </section>
              <section>

                <h3>Step 3: Save the HTML page</h3>

                <p>Save the file on your computer.</p>
                <p>Select <strong>File &gt; Save as</strong> in the Notepad++ menu.</p>
                <p>Name the file "index.html" or any other name ending with html.</p>
                
                <div class="imgWrapper">
                  <img src="notepadSave.png" alt="Code in Notepad++" class="imgLarge"/>
                </div>
                
              </section>
              <section>

                <h3>Step 4: View your webpage</h3>

                <p>Open the saved HTML file in your favorite browser. The result will look much like this:</p>
                
                <div class="imgWrapper">
                  <img src="browser.png" alt="Code in Notepad++" class="imgLarge"/>
                </div>
                
                <div>
                  <a href="/learn/html/1" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/3" class="floatRight">Next Lesson</a>
                </div>
          
              </section>

            </section><!--

            This comment is here simply to get rid of the whitespace between two "inline-block" elements i.e. .learnNav and .learnMain
          
         --><?php include("../../learnNav.php")?>
          
          </section>
          
        </article>

      </div>

      <?php include("../../../footer.php"); ?>

      <script>

        $(document).ready(function () {
          $("#navDropdown li:nth-child(2) a").addClass("clicked");
          $("#fixedNav li:nth-child(2) a").addClass("clicked");
          $("#learnNav li li:nth-child(2)").addClass("clicked");
        })

      </script>
    
    </div>
    <script src="/learn/js/learnScript.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>