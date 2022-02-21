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
                  <a href="/learn/html/8" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/10" class="floatRight">Next Lesson</a>
                </div>
                
                <h2 class="clearFix">HTML Images</h2>

                <h3>HTML Images Syntax</h3>

                <p>In HTML, images are defined with the <strong>&lt;img&gt;</strong> tag.</p>
                <p>The &lt;img&gt; tag&nbsp;is empty, it contains attributes only, and does not have a closing tag.</p>
                <p>The src attribute specifies the URL (web address) of the image:</p>                
                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;img src="url" alt="some text">
                  </pre>
                </div>

              </section>
              <section>
                
                <h3>The alt Attribute</h3>

                <p>The alt attribute specifies an alternate text for an image, if the image cannot be displayed.</p>
                <p>The alt attribute provides alternative information for an image if a user for some reason cannot view it (because of slow connection, an error in the src attribute, or if the user uses a screen reader).</p>
                <p>If a browser cannot find an image, it will display the alt text:</p>                
                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;img src="CoderDojoMallow.jpg" alt="CoderDojo Mallow">
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=9p1' target="_blank" class ="tryIt">Try it Yourself</a>

              </section>
              <section>

                <h3>HTML Screen Readers</h3>

                <p>A screen reader is a software programs that can read what is displayed on a screen.</p>
                <p>Screen readers are useful to people who are blind, visually impaired, or learning disabled.</p>

              </section>
              <section>
                
                <h3>Image Floating</h3>

                <p>Use the CSS float property to let the image float.</p>
                <p>The image can float to the right or to the left of a text:</p>
                
                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;p>
  &lt;img src="smiley.gif" alt="Smiley face" style="float:right;">
  The image will float to the right of the text.
&lt;/p>

&lt;p>
  &lt;img src="smiley.gif" alt="Smiley face" style="float:left;">
  The image will float to the left of the text.
&lt;/p>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=9p2' target="_blank" class ="tryIt">Try it Yourself</a>

                <br/>

                <div>
                  <a href="/learn/html/8" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/10" class="floatRight">Next Lesson</a>
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
          $("#learnNav li li:nth-child(9)").addClass("clicked");
        })

      </script>
    
    </div>
    <script src="/learn/js/learnScript.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>